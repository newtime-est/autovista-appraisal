<?php

namespace AutovistaAppraisal\WSDL;

class DownloadCustomerAppraisalCardResponse
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
     * @var base64Binary $pdfFile
     */
    protected $pdfFile = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param base64Binary $pdfFile
     */
    public function __construct($appraisalId, $statusMessage, $pdfFile)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
      $this->pdfFile = $pdfFile;
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
     * @return \AutovistaAppraisal\WSDL\DownloadCustomerAppraisalCardResponse
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
     * @return \AutovistaAppraisal\WSDL\DownloadCustomerAppraisalCardResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getPdfFile()
    {
      return $this->pdfFile;
    }

    /**
     * @param base64Binary $pdfFile
     * @return \AutovistaAppraisal\WSDL\DownloadCustomerAppraisalCardResponse
     */
    public function setPdfFile($pdfFile)
    {
      $this->pdfFile = $pdfFile;
      return $this;
    }

}
