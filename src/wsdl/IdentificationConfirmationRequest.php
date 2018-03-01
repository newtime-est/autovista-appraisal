<?php

namespace AutovistaAppraisal\WSDL;

class IdentificationConfirmationRequest extends AbsAppraisalRequest
{

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var int $typeCode
     */
    protected $typeCode = null;

    /**
     * @var int $inTrafficYear
     */
    protected $inTrafficYear = null;

    /**
     * @var int $inTrafficMonth
     */
    protected $inTrafficMonth = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param string $regNo
     * @param int $typeCode
     * @param int $inTrafficYear
     * @param int $inTrafficMonth
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $regNo, $typeCode, $inTrafficYear, $inTrafficMonth)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->regNo = $regNo;
        $this->typeCode = $typeCode;
        $this->inTrafficYear = $inTrafficYear;
        $this->inTrafficMonth = $inTrafficMonth;
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
     * @return \AutovistaAppraisal\WSDL\IdentificationConfirmationRequest
     */
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;
        return $this;
    }

    /**
     * @return int
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }

    /**
     * @param int $typeCode
     * @return \AutovistaAppraisal\WSDL\IdentificationConfirmationRequest
     */
    public function setTypeCode($typeCode)
    {
        $this->typeCode = $typeCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getInTrafficYear()
    {
        return $this->inTrafficYear;
    }

    /**
     * @param int $inTrafficYear
     * @return \AutovistaAppraisal\WSDL\IdentificationConfirmationRequest
     */
    public function setInTrafficYear($inTrafficYear)
    {
        $this->inTrafficYear = $inTrafficYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getInTrafficMonth()
    {
        return $this->inTrafficMonth;
    }

    /**
     * @param int $inTrafficMonth
     * @return \AutovistaAppraisal\WSDL\IdentificationConfirmationRequest
     */
    public function setInTrafficMonth($inTrafficMonth)
    {
        $this->inTrafficMonth = $inTrafficMonth;
        return $this;
    }

}
