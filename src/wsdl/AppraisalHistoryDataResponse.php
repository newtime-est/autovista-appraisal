<?php

namespace AutovistaAppraisal\WSDL;

class AppraisalHistoryDataResponse
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
     * @var AppraisalHistoryData $appraisal
     */
    protected $appraisal = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param AppraisalHistoryData $appraisal
     */
    public function __construct($appraisalId, $statusMessage, $appraisal)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->appraisal = $appraisal;
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
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataResponse
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
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return AppraisalHistoryData
     */
    public function getAppraisal()
    {
      return $this->appraisal;
    }

    /**
     * @param AppraisalHistoryData $appraisal
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataResponse
     */
    public function setAppraisal($appraisal)
    {
      $this->appraisal = $appraisal;
      return $this;
    }

}
