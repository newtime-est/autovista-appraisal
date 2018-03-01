<?php

namespace AutovistaAppraisal\WSDL;

class AppraisalHistoryDataRequest extends AbsAppraisalRequest
{

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var string $vin
     */
    protected $vin = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param string $regNo
     * @param string $vin
     * @param string $startDate
     * @param string $endDate
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $regNo, $vin, $startDate, $endDate)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->regNo = $regNo;
        $this->vin = $vin;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
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
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataRequest
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
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataRequest
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataRequest
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \AutovistaAppraisal\WSDL\AppraisalHistoryDataRequest
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

}
