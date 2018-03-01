<?php

namespace AutovistaAppraisal\WSDL;

class AppraisalActivationRequest extends AbsAppraisalRequest
{

    /**
     * @var int $appraisalActivationId
     */
    protected $appraisalActivationId = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param int $appraisalActivationId
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $appraisalActivationId)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->appraisalActivationId = $appraisalActivationId;
    }

    /**
     * @return int
     */
    public function getAppraisalActivationId()
    {
        return $this->appraisalActivationId;
    }

    /**
     * @param int $appraisalActivationId
     * @return \AutovistaAppraisal\WSDL\AppraisalActivationRequest
     */
    public function setAppraisalActivationId($appraisalActivationId)
    {
        $this->appraisalActivationId = $appraisalActivationId;
        return $this;
    }

}
