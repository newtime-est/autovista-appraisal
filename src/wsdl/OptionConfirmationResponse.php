<?php

namespace AutovistaAppraisal\WSDL;

class OptionConfirmationResponse
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
     * @param int $appraisalId
     * @param string $statusMessage
     */
    public function __construct($appraisalId, $statusMessage)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
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
     * @return \AutovistaAppraisal\WSDL\OptionConfirmationResponse
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
     * @return \AutovistaAppraisal\WSDL\OptionConfirmationResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

}
