<?php

namespace AutovistaAppraisal\WSDL;

class RegistrationInfo
{

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var RegistrationNodeType[] $registrationNode
     */
    protected $registrationNode = null;

    /**
     * @param string $regNo
     */
    public function __construct($regNo)
    {
      $this->regNo = $regNo;
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
     * @return \AutovistaAppraisal\WSDL\RegistrationInfo
     */
    public function setRegNo($regNo)
    {
      $this->regNo = $regNo;
      return $this;
    }

    /**
     * @return RegistrationNodeType[]
     */
    public function getRegistrationNode()
    {
      return $this->registrationNode;
    }

    /**
     * @param RegistrationNodeType[] $registrationNode
     * @return \AutovistaAppraisal\WSDL\RegistrationInfo
     */
    public function setRegistrationNode(array $registrationNode = null)
    {
      $this->registrationNode = $registrationNode;
      return $this;
    }

}
