<?php

namespace AutovistaAppraisal\WSDL;

class AbsAppraisalRequest
{

    /**
     * @var string $groupId
     */
    protected $groupId = null;

    /**
     * @var string $companyId
     */
    protected $companyId = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @var int $appraisalId
     */
    protected $appraisalId = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId)
    {
      $this->groupId = $groupId;
      $this->companyId = $companyId;
      $this->userId = $userId;
      $this->appraisalId = $appraisalId;
    }

    /**
     * @return string
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param string $groupId
     * @return \AutovistaAppraisal\WSDL\AbsAppraisalRequest
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyId()
    {
      return $this->companyId;
    }

    /**
     * @param string $companyId
     * @return \AutovistaAppraisal\WSDL\AbsAppraisalRequest
     */
    public function setCompanyId($companyId)
    {
      $this->companyId = $companyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \AutovistaAppraisal\WSDL\AbsAppraisalRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
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
     * @return \AutovistaAppraisal\WSDL\AbsAppraisalRequest
     */
    public function setAppraisalId($appraisalId)
    {
      $this->appraisalId = $appraisalId;
      return $this;
    }

}
