<?php

namespace AutovistaAppraisal\WSDL;

class RegistrationDataResponse
{

    /**
     * @var int $appraisalId
     */
    protected $appraisalId = null;

    /**
     * @var string $statusMessage
     */
    protected $statusMessage = null;

    /**
     * @var RegistrationData $registrationData
     */
    protected $registrationData = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param RegistrationData $registrationData
     */
    public function __construct($appraisalId, $statusMessage, $registrationData)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->registrationData = $registrationData;
    }

    /**
     * @return int
     */
    public function getAppraisalId()
    {
      return $this->appraisalId;
    }

    /**
     * @param int $appraisalId
     * @return \AutovistaAppraisal\WSDL\RegistrationDataResponse
     */
    public function setAppraisalId($appraisalId)
    {
      $this->appraisalId = $appraisalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return \AutovistaAppraisal\WSDL\RegistrationDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return RegistrationData
     */
    public function getRegistrationData()
    {
      return $this->registrationData;
    }

    /**
     * @param RegistrationData $registrationData
     * @return \AutovistaAppraisal\WSDL\RegistrationDataResponse
     */
    public function setRegistrationData($registrationData)
    {
      $this->registrationData = $registrationData;
      return $this;
    }

}
