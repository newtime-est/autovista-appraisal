<?php

namespace AutovistaAppraisal\WSDL;

class RegistrationNodeType
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var RegistrationNodeType[] $registrationNode
     */
    protected $registrationNode = null;

    /**
     * @param string $description
     */
    public function __construct($description)
    {
      $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \AutovistaAppraisal\WSDL\RegistrationNodeType
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \AutovistaAppraisal\WSDL\RegistrationNodeType
     */
    public function setRegistrationNode(array $registrationNode = null)
    {
      $this->registrationNode = $registrationNode;
      return $this;
    }

}
