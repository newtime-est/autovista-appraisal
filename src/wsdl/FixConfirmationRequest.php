<?php

namespace AutovistaAppraisal\WSDL;

class FixConfirmationRequest extends AbsAppraisalRequest
{

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
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param FixData $fix
     * @param string $remarks
     * @param string $internalRemarks
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $fix, $remarks, $internalRemarks)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->fix = $fix;
        $this->remarks = $remarks;
        $this->internalRemarks = $internalRemarks;
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
     * @return \AutovistaAppraisal\WSDL\FixConfirmationRequest
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
     * @return \AutovistaAppraisal\WSDL\FixConfirmationRequest
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
     * @return \AutovistaAppraisal\WSDL\FixConfirmationRequest
     */
    public function setInternalRemarks($internalRemarks)
    {
        $this->internalRemarks = $internalRemarks;
        return $this;
    }

}
