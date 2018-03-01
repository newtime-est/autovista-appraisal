<?php

namespace AutovistaAppraisal\WSDL;

class InsuranceInfo
{

    /**
     * @var RegistrationNodeType $nameOfTheInsuranceCompany
     */
    protected $nameOfTheInsuranceCompany = null;

    /**
     * @var RegistrationNodeType $codeOfTheInsuranceCompany
     */
    protected $codeOfTheInsuranceCompany = null;

    /**
     * @param RegistrationNodeType $nameOfTheInsuranceCompany
     * @param RegistrationNodeType $codeOfTheInsuranceCompany
     */
    public function __construct($nameOfTheInsuranceCompany, $codeOfTheInsuranceCompany)
    {
      $this->nameOfTheInsuranceCompany = $nameOfTheInsuranceCompany;
      $this->codeOfTheInsuranceCompany = $codeOfTheInsuranceCompany;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getNameOfTheInsuranceCompany()
    {
      return $this->nameOfTheInsuranceCompany;
    }

    /**
     * @param RegistrationNodeType $nameOfTheInsuranceCompany
     * @return \AutovistaAppraisal\WSDL\InsuranceInfo
     */
    public function setNameOfTheInsuranceCompany($nameOfTheInsuranceCompany)
    {
      $this->nameOfTheInsuranceCompany = $nameOfTheInsuranceCompany;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getCodeOfTheInsuranceCompany()
    {
      return $this->codeOfTheInsuranceCompany;
    }

    /**
     * @param RegistrationNodeType $codeOfTheInsuranceCompany
     * @return \AutovistaAppraisal\WSDL\InsuranceInfo
     */
    public function setCodeOfTheInsuranceCompany($codeOfTheInsuranceCompany)
    {
      $this->codeOfTheInsuranceCompany = $codeOfTheInsuranceCompany;
      return $this;
    }

}
