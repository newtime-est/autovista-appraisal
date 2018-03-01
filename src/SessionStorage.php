<?php

namespace AutovistaAppraisal;

use AutovistaAppraisal\IStorage;

class SessionStorage implements IStorage
{
    /**
     * @var string $sessionKey
     */
    protected $sessionKey = 'autoVistaAppraisalId';

    public function __construct()
    {
        if (session_id() === '') {
            session_start();
        }
    }

    /**
     * @return string
     */
    public function getAppraisalId()
    {
        if (!isset($_SESSION[$this->sessionKey])) {
            $_SESSION[$this->sessionKey] = '';
        }
        return $_SESSION[$this->sessionKey];
    }

    /**
     * @param string $appraisalId
     * @return \AutovistaAppraisal\ApiCredentials
     */
    public function setAppraisalId($appraisalId)
    {
        $_SESSION[$this->sessionKey] = $appraisalId;
        return $this;
    }
}
