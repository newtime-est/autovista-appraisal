<?php

namespace AutovistaAppraisal\WSDL;

class OptionConfirmationRequest extends AbsAppraisalRequest
{

    /**
     * @var OptionData $option
     */
    protected $option = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param OptionData $option
     * @param string $remarks
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $option, $remarks)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->option = $option;
        $this->remarks = $remarks;
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
     * @return \AutovistaAppraisal\WSDL\OptionConfirmationRequest
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
     * @return \AutovistaAppraisal\WSDL\OptionConfirmationRequest
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

}
