<?php

namespace AutovistaAppraisal\WSDL;

class OptionDataResponse
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
     * @var OptionData $option
     */
    protected $option = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @var int $priceTotal
     */
    protected $priceTotal = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param OptionData $option
     * @param string $remarks
     * @param int $priceTotal
     */
    public function __construct($appraisalId, $statusMessage, $option, $remarks, $priceTotal)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->option = $option;
      $this->remarks = $remarks;
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
     * @return \AutovistaAppraisal\WSDL\OptionDataResponse
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
     * @return \AutovistaAppraisal\WSDL\OptionDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return OptionData
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param OptionData $option
     * @return \AutovistaAppraisal\WSDL\OptionDataResponse
     */
    public function setOption($option)
    {
      $this->option = $option;
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
     * @return \AutovistaAppraisal\WSDL\OptionDataResponse
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
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
     * @return \AutovistaAppraisal\WSDL\OptionDataResponse
     */
    public function setPriceTotal($priceTotal)
    {
      $this->priceTotal = $priceTotal;
      return $this;
    }

}
