<?php

namespace AutovistaAppraisal\WSDL;

class LeafRegistrationNodeType extends RegistrationNodeType
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @param string $description
     * @param string $value
     * @param string $code
     */
    public function __construct($description, $value, $code)
    {
      parent::__construct($description);
      $this->value = $value;
      $this->code = $code;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \AutovistaAppraisal\WSDL\LeafRegistrationNodeType
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \AutovistaAppraisal\WSDL\LeafRegistrationNodeType
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

}
