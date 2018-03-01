<?php

namespace AutovistaAppraisal\WSDL;

class OptionData
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
     * @var int $category
     */
    protected $category = null;

    /**
     * @var OptionData[] $subOption
     */
    protected $subOption = null;

    /**
     * @param int $id
     * @param string $description
     * @param int $price
     * @param boolean $selected
     * @param int $category
     */
    public function __construct($id, $description, $price, $selected, $category)
    {
      $this->id = $id;
      $this->description = $description;
      $this->price = $price;
      $this->selected = $selected;
      $this->category = $category;
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
     * @return \AutovistaAppraisal\WSDL\OptionData
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
     * @return \AutovistaAppraisal\WSDL\OptionData
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
     * @return \AutovistaAppraisal\WSDL\OptionData
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
     * @return \AutovistaAppraisal\WSDL\OptionData
     */
    public function setSelected($selected)
    {
      $this->selected = $selected;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param int $category
     * @return \AutovistaAppraisal\WSDL\OptionData
     */
    public function setCategory($category)
    {
      $this->category = $category;
      return $this;
    }

    /**
     * @return OptionData[]
     */
    public function getSubOption()
    {
      return $this->subOption;
    }

    /**
     * @param OptionData[] $subOption
     * @return \AutovistaAppraisal\WSDL\OptionData
     */
    public function setSubOption(array $subOption = null)
    {
      $this->subOption = $subOption;
      return $this;
    }

}
