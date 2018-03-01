<?php

namespace AutovistaAppraisal\WSDL;

class AlternativeTypes
{

    /**
     * @var Type[] $type
     */
    protected $type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Type[]
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param Type[] $type
     * @return \AutovistaAppraisal\WSDL\AlternativeTypes
     */
    public function setType(array $type = null)
    {
      $this->type = $type;
      return $this;
    }

}
