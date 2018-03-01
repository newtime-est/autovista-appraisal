<?php

namespace AutovistaAppraisal\WSDL;

class FixData
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $price
     */
    protected $price = null;

    /**
     * @var boolean $selected
     */
    protected $selected = null;

    /**
     * @param int $id
     * @param string $description
     * @param int $price
     * @param boolean $selected
     */
    public function __construct($id, $description, $price, $selected)
    {
      $this->id = $id;
      $this->description = $description;
      $this->price = $price;
      $this->selected = $selected;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \AutovistaAppraisal\WSDL\FixData
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
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
     * @return \AutovistaAppraisal\WSDL\FixData
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param int $price
     * @return \AutovistaAppraisal\WSDL\FixData
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSelected()
    {
      return $this->selected;
    }

    /**
     * @param boolean $selected
     * @return \AutovistaAppraisal\WSDL\FixData
     */
    public function setSelected($selected)
    {
      $this->selected = $selected;
      return $this;
    }

}
