<?php

namespace AutovistaAppraisal\WSDL;

class FixDataResponse
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
     * @var FixData $fix
     */
    protected $fix = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @var string $internalRemarks
     */
    protected $internalRemarks = null;

    /**
     * @var int $priceTotal
     */
    protected $priceTotal = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param FixData $fix
     * @param string $remarks
     * @param string $internalRemarks
     * @param int $priceTotal
     */
    public function __construct($appraisalId, $statusMessage, $fix, $remarks, $internalRemarks, $priceTotal)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->fix = $fix;
      $this->remarks = $remarks;
      $this->internalRemarks = $internalRemarks;
      $this->priceTotal = $priceTotal;
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
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
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
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return FixData
     */
    public function getFix()
    {
      return $this->fix;
    }

    /**
     * @param FixData $fix
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
     */
    public function setFix($fix)
    {
      $this->fix = $fix;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalRemarks()
    {
      return $this->internalRemarks;
    }

    /**
     * @param string $internalRemarks
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
     */
    public function setInternalRemarks($internalRemarks)
    {
      $this->internalRemarks = $internalRemarks;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriceTotal()
    {
      return $this->priceTotal;
    }

    /**
     * @param int $priceTotal
     * @return \AutovistaAppraisal\WSDL\FixDataResponse
     */
    public function setPriceTotal($priceTotal)
    {
      $this->priceTotal = $priceTotal;
      return $this;
    }

}
