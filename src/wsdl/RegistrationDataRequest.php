<?php

namespace AutovistaAppraisal\WSDL;

class RegistrationDataRequest extends AbsAppraisalRequest
{

    /**
     * @var string $queryTypeCode
     */
    protected $queryTypeCode = null;

    /**
     * @var string $vehicleTypeCode
     */
    protected $vehicleTypeCode = null;

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var string $vin
     */
    protected $vin = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param string $queryTypeCode
     * @param string $vehicleTypeCode
     * @param string $regNo
     * @param string $vin
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $queryTypeCode, $vehicleTypeCode, $regNo, $vin)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->queryTypeCode = $queryTypeCode;
        $this->vehicleTypeCode = $vehicleTypeCode;
        $this->regNo = $regNo;
        $this->vin = $vin;
    }

    /**
     * @return string
     */
    public function getQueryTypeCode()
    {
        return $this->queryTypeCode;
    }

    /**
     * @param string $queryTypeCode
     * @return \AutovistaAppraisal\WSDL\RegistrationDataRequest
     */
    public function setQueryTypeCode($queryTypeCode)
    {
        $this->queryTypeCode = $queryTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getVehicleTypeCode()
    {
        return $this->vehicleTypeCode;
    }

    /**
     * @param string $vehicleTypeCode
     * @return \AutovistaAppraisal\WSDL\RegistrationDataRequest
     */
    public function setVehicleTypeCode($vehicleTypeCode)
    {
        $this->vehicleTypeCode = $vehicleTypeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegNo()
    {
        return $this->regNo;
    }

    /**
     * @param string $regNo
     * @return \AutovistaAppraisal\WSDL\RegistrationDataRequest
     */
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param string $vin
     * @return \AutovistaAppraisal\WSDL\RegistrationDataRequest
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
        return $this;
    }

}
