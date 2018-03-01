<?php

namespace AutovistaAppraisal\WSDL;

class AppraisalHistoryData
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var string $makeDescription
     */
    protected $makeDescription = null;

    /**
     * @var string $modelDescription
     */
    protected $modelDescription = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @param int $id
     * @param string $regNo
     * @param string $makeDescription
     * @param string $modelDescription
     * @param string $date
     * @param string $userName
     * @param string $companyName
     */
    public function __construct($id, $regNo, $makeDescription, $modelDescription, $date, $userName, $companyName)
    {
      $this->id = $id;
      $this->regNo = $regNo;
      $this->makeDescription = $makeDescription;
      $this->modelDescription = $modelDescription;
      $this->date = $date;
      $this->userName = $userName;
      $this->companyName = $companyName;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setId($id)
    {
      $this->id = $id;
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
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setRegNo($regNo)
    {
      $this->regNo = $regNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getMakeDescription()
    {
      return $this->makeDescription;
    }

    /**
     * @param string $makeDescription
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setMakeDescription($makeDescription)
    {
      $this->makeDescription = $makeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelDescription()
    {
      return $this->modelDescription;
    }

    /**
     * @param string $modelDescription
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setModelDescription($modelDescription)
    {
      $this->modelDescription = $modelDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryData
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
      return $this;
    }

}
