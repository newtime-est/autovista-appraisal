<?php

namespace AutovistaAppraisal\WSDL;

class IdentificationDataResponse
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
     * @var Type $type
     */
    protected $type = null;

    /**
     * @var AlternativeTypes $alternativeTypes
     */
    protected $alternativeTypes = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param Type $type
     * @param AlternativeTypes $alternativeTypes
     */
    public function __construct($appraisalId, $statusMessage, $type, $alternativeTypes)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->type = $type;
      $this->alternativeTypes = $alternativeTypes;
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
     * @return \AutovistaAppraisal\WSDL\IdentificationDataResponse
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
     * @return \AutovistaAppraisal\WSDL\IdentificationDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return Type
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param Type $type
     * @return \AutovistaAppraisal\WSDL\IdentificationDataResponse
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return AlternativeTypes
     */
    public function getAlternativeTypes()
    {
      return $this->alternativeTypes;
    }

    /**
     * @param AlternativeTypes $alternativeTypes
     * @return \AutovistaAppraisal\WSDL\IdentificationDataResponse
     */
    public function setAlternativeTypes($alternativeTypes)
    {
      $this->alternativeTypes = $alternativeTypes;
      return $this;
    }

}
