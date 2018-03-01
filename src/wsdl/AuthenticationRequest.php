<?php

namespace AutovistaAppraisal\WSDL;

class AuthenticationRequest
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
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param string $key
     */
    public function __construct($groupId, $companyId, $userId, $key)
    {
      $this->groupId = $groupId;
      $this->companyId = $companyId;
      $this->userId = $userId;
      $this->key = $key;
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
     * @return \AutovistaAppraisal\WSDL\AuthenticationRequest
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
     * @return \AutovistaAppraisal\WSDL\AuthenticationRequest
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
     * @return \AutovistaAppraisal\WSDL\AuthenticationRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \AutovistaAppraisal\WSDL\AuthenticationRequest
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
