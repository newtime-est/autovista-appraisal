<?php

namespace AutovistaAppraisal;

class ApiCredentials implements IApiCredentials
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
     * @var string $password
     */
    protected $password = null;

    /**
     * @var string $secret
     */
    protected $secret = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param string $password
     * @param string $secret
     */
    public function __construct($groupId, $companyId, $userId, $password, $secret)
    {
        $this->groupId = $groupId;
        $this->companyId = $companyId;
        $this->userId = $userId;
        $this->password = $password;
        $this->secret = $secret;
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
     * @return \AutovistaAppraisal\ApiCredentials
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
     * @return \AutovistaAppraisal\ApiCredentials
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
     * @return \AutovistaAppraisal\ApiCredentials
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return \AutovistaAppraisal\ApiCredentials
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @param string $secret
     * @return \AutovistaAppraisal\ApiCredentials
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
        return $this;
    }
}
