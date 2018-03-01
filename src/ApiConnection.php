<?php

namespace AutovistaAppraisal;

use AutovistaAppraisal\ApiException;
use AutovistaAppraisal\IApiCredentials;
use AutovistaAppraisal\IStorage;
use AutovistaAppraisal\WSDL\AuthenticationRequest;
use AutovistaAppraisal\WSDL\IdentificationDataRequest;
use AutovistaAppraisal\WSDL\RegistrationDataRequest;

class ApiConnection
{
    const STATUS_SUCCESS = 'SUCCESS';

    public static $registrationTypeCodes = [
        'basic' => 40,
        'history' => 350,
        'compact' => 20,
    ];

    /**
     * @var string $storage
     */
    protected $soapUrl = 'https://visws.autovista.eu/AbsAppraisal-1.2/service?wsdl';

    /**
     * @var \AutovistaAppraisal\IStorage $storage
     */
    protected $storage = null;

    /**
     * @var string $companyId
     */
    protected $companyId = null;

    /**
     * @var string $groupId
     */
    protected $groupId = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var SoapClient $soapClient
     */
    protected $soapClient = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param string $key
     */
    public function __construct(IApiCredentials $credentials, IStorage $storage)
    {
        $this->storage = $storage;
        $this->groupId = $credentials->getGroupId();
        $this->companyId = $credentials->getCompanyId();
        $this->userId = $credentials->getUserId();
        $hash = hash('sha256', $this->companyId . $this->userId . $credentials->getPassword() . $credentials->getSecret(), true);
        $this->key = base64_encode($hash);
    }

    /**
     * @throws \AutovistaAppraisal\ApiException if the authentication isn't successful
     * @return int
     */
    protected function authenticate()
    {
        $request = new AuthenticationRequest($this->groupId, $this->companyId, $this->userId, $this->key);
        $response = $this->getSoapClient()->authentication($request);
        if ($response->statusMessage === self::STATUS_SUCCESS) {
            $this->storage->setAppraisalId($response->appraisalId);
            return $response->appraisalId;
        }
        throw new ApiException($response->statusMessage);
    }

    /**
     * @return int
     */
    protected function getAppraisalId() {
        $appraisalId = $this->storage->getAppraisalId();
        if (!$appraisalId) {
            $appraisalId = $this->authenticate();
        }
        return $appraisalId;
    }

    /**
     * @return \SoapClient
     */
    protected function getSoapClient() {
        if (!$this->soapClient) {
            $this->soapClient = new \SoapClient($this->soapUrl);
        }
        return $this->soapClient;
    }

    /**
     * @param string $request
     * @param object $requestParams
     * @return object
     */
    protected function makeRequest($request, $requestParams)
    {
        $client = $this->getSoapClient();
        $response = call_user_func([$client, $request], $requestParams);
        if ($response->statusMessage === self::STATUS_SUCCESS) {
            return $response;
        }
        if ($response->statusMessage === ApiException::SESSION_EXPIRED) {
            $requestParams->setAppraisalId($this->authenticate());
            return call_user_func([$client, $request], $requestParams);
        }
        throw new ApiException($response->statusMessage);
    }

    /**
     * @param string $regNo
     * @param string $vin
     * @return object
     */
    public function getIdentificationData($regNo, $vin = '') {
        $request = new IdentificationDataRequest($this->groupId, $this->companyId, $this->userId, $this->getAppraisalId(), $regNo, $vin, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
        return $this->makeRequest('identificationData', $request);
    }

    /**
     * @param string $regNo
     * @param string $vin
     * @param string $queryType
     * @param int $vehicleType
     * @return object
     */
    public function getRegistrationData($regNo, $vin = '', $queryType = null, $vehicleType = 1) {
        if (!$queryType) {
            $queryType = self::$registrationTypeCodes['compact'];
        }
        $request = new RegistrationDataRequest($this->groupId, $this->companyId, $this->userId, $this->getAppraisalId(), $queryType, $vehicleType, $regNo, $vin);
        return $this->makeRequest('registrationData', $request);
    }
}
