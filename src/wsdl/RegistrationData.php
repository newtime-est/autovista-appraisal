<?php

namespace AutovistaAppraisal\WSDL;

class RegistrationData
{

    /**
     * @var string $queryTypeCode
     */
    protected $queryTypeCode = null;

    /**
     * @var RegistrationInfo $registrationInfo
     */
    protected $registrationInfo = null;

    /**
     * @var RegistrationNodeType $makeInfo
     */
    protected $makeInfo = null;

    /**
     * @var RegistrationNodeType $modelInfo
     */
    protected $modelInfo = null;

    /**
     * @var InsuranceInfo $insuranceInfo
     */
    protected $insuranceInfo = null;

    /**
     * @var VehicleInfo $vehicleInfo
     */
    protected $vehicleInfo = null;

    /**
     * @var OwnersHolder[] $ownersHolders
     */
    protected $ownersHolders = null;

    /**
     * @param string $queryTypeCode
     * @param RegistrationInfo $registrationInfo
     * @param RegistrationNodeType $makeInfo
     * @param RegistrationNodeType $modelInfo
     * @param InsuranceInfo $insuranceInfo
     * @param VehicleInfo $vehicleInfo
     */
    public function __construct($queryTypeCode, $registrationInfo, $makeInfo, $modelInfo, $insuranceInfo, $vehicleInfo)
    {
      $this->queryTypeCode = $queryTypeCode;
      $this->registrationInfo = $registrationInfo;
      $this->makeInfo = $makeInfo;
      $this->modelInfo = $modelInfo;
      $this->insuranceInfo = $insuranceInfo;
      $this->vehicleInfo = $vehicleInfo;
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
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setQueryTypeCode($queryTypeCode)
    {
      $this->queryTypeCode = $queryTypeCode;
      return $this;
    }

    /**
     * @return RegistrationInfo
     */
    public function getRegistrationInfo()
    {
      return $this->registrationInfo;
    }

    /**
     * @param RegistrationInfo $registrationInfo
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setRegistrationInfo($registrationInfo)
    {
      $this->registrationInfo = $registrationInfo;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getMakeInfo()
    {
      return $this->makeInfo;
    }

    /**
     * @param RegistrationNodeType $makeInfo
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setMakeInfo($makeInfo)
    {
      $this->makeInfo = $makeInfo;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getModelInfo()
    {
      return $this->modelInfo;
    }

    /**
     * @param RegistrationNodeType $modelInfo
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setModelInfo($modelInfo)
    {
      $this->modelInfo = $modelInfo;
      return $this;
    }

    /**
     * @return InsuranceInfo
     */
    public function getInsuranceInfo()
    {
      return $this->insuranceInfo;
    }

    /**
     * @param InsuranceInfo $insuranceInfo
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setInsuranceInfo($insuranceInfo)
    {
      $this->insuranceInfo = $insuranceInfo;
      return $this;
    }

    /**
     * @return VehicleInfo
     */
    public function getVehicleInfo()
    {
      return $this->vehicleInfo;
    }

    /**
     * @param VehicleInfo $vehicleInfo
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setVehicleInfo($vehicleInfo)
    {
      $this->vehicleInfo = $vehicleInfo;
      return $this;
    }

    /**
     * @return OwnersHolder[]
     */
    public function getOwnersHolders()
    {
      return $this->ownersHolders;
    }

    /**
     * @param OwnersHolder[] $ownersHolders
     * @return \AutovistaAppraisal\WSDL\RegistrationData
     */
    public function setOwnersHolders(array $ownersHolders = null)
    {
      $this->ownersHolders = $ownersHolders;
      return $this;
    }

}
