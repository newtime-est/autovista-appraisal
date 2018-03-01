<?php

namespace AutovistaAppraisal;

interface IApiCredentials
{
    /**
     * @return string
     */
    public function getGroupId();

    /**
     * @param string $groupId
     * @return \AutovistaAppraisal\IApiCredentials
     */
    public function setGroupId($groupId);

    /**
     * @return string
     */
    public function getCompanyId();

    /**
     * @param string $companyId
     * @return \AutovistaAppraisal\IApiCredentials
     */
    public function setCompanyId($companyId);

    /**
     * @return string
     */
    public function getUserId();

    /**
     * @param string $userId
     * @return \AutovistaAppraisal\IApiCredentials
     */
    public function setUserId($userId);

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @param string $password
     * @return \AutovistaAppraisal\IApiCredentials
     */
    public function setPassword($password);

    /**
     * @return string
     */
    public function getSecret();

    /**
     * @param string $secret
     * @return \AutovistaAppraisal\IApiCredentials
     */
    public function setSecret($secret);
}