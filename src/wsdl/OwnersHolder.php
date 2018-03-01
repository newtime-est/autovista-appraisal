<?php

namespace AutovistaAppraisal\WSDL;

class OwnersHolder
{

    /**
     * @var RegistrationNodeType $typeOfOwnership
     */
    protected $typeOfOwnership = null;

    /**
     * @var RegistrationNodeType $typeOfClient
     */
    protected $typeOfClient = null;

    /**
     * @var RegistrationNodeType $lastName
     */
    protected $lastName = null;

    /**
     * @var RegistrationNodeType $firstNames
     */
    protected $firstNames = null;

    /**
     * @var RegistrationNodeType $postcode
     */
    protected $postcode = null;

    /**
     * @var RegistrationNodeType $locality
     */
    protected $locality = null;

    /**
     * @var date $inTermsOfStartDate
     */
    protected $inTermsOfStartDate = null;

    /**
     * @var date $inTermsOfEndDate
     */
    protected $inTermsOfEndDate = null;

    /**
     * @var InspectionHistory[] $inspectionHistories
     */
    protected $inspectionHistories = null;

    /**
     * @param RegistrationNodeType $typeOfOwnership
     * @param RegistrationNodeType $typeOfClient
     * @param RegistrationNodeType $lastName
     * @param RegistrationNodeType $firstNames
     * @param RegistrationNodeType $postcode
     * @param RegistrationNodeType $locality
     * @param date $inTermsOfStartDate
     * @param date $inTermsOfEndDate
     */
    public function __construct($typeOfOwnership, $typeOfClient, $lastName, $firstNames, $postcode, $locality, $inTermsOfStartDate, $inTermsOfEndDate)
    {
      $this->typeOfOwnership = $typeOfOwnership;
      $this->typeOfClient = $typeOfClient;
      $this->lastName = $lastName;
      $this->firstNames = $firstNames;
      $this->postcode = $postcode;
      $this->locality = $locality;
      $this->inTermsOfStartDate = $inTermsOfStartDate;
      $this->inTermsOfEndDate = $inTermsOfEndDate;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getTypeOfOwnership()
    {
      return $this->typeOfOwnership;
    }

    /**
     * @param RegistrationNodeType $typeOfOwnership
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setTypeOfOwnership($typeOfOwnership)
    {
      $this->typeOfOwnership = $typeOfOwnership;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getTypeOfClient()
    {
      return $this->typeOfClient;
    }

    /**
     * @param RegistrationNodeType $typeOfClient
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setTypeOfClient($typeOfClient)
    {
      $this->typeOfClient = $typeOfClient;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getLastName()
    {
      return $this->lastName;
    }

    /**
     * @param RegistrationNodeType $lastName
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setLastName($lastName)
    {
      $this->lastName = $lastName;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getFirstNames()
    {
      return $this->firstNames;
    }

    /**
     * @param RegistrationNodeType $firstNames
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setFirstNames($firstNames)
    {
      $this->firstNames = $firstNames;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param RegistrationNodeType $postcode
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getLocality()
    {
      return $this->locality;
    }

    /**
     * @param RegistrationNodeType $locality
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setLocality($locality)
    {
      $this->locality = $locality;
      return $this;
    }

    /**
     * @return date
     */
    public function getInTermsOfStartDate()
    {
      return $this->inTermsOfStartDate;
    }

    /**
     * @param date $inTermsOfStartDate
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setInTermsOfStartDate($inTermsOfStartDate)
    {
      $this->inTermsOfStartDate = $inTermsOfStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getInTermsOfEndDate()
    {
      return $this->inTermsOfEndDate;
    }

    /**
     * @param date $inTermsOfEndDate
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setInTermsOfEndDate($inTermsOfEndDate)
    {
      $this->inTermsOfEndDate = $inTermsOfEndDate;
      return $this;
    }

    /**
     * @return InspectionHistory[]
     */
    public function getInspectionHistories()
    {
      return $this->inspectionHistories;
    }

    /**
     * @param InspectionHistory[] $inspectionHistories
     * @return \AutovistaAppraisal\WSDL\OwnersHolder
     */
    public function setInspectionHistories(array $inspectionHistories = null)
    {
      $this->inspectionHistories = $inspectionHistories;
      return $this;
    }

}
