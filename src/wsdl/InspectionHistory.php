<?php

namespace AutovistaAppraisal\WSDL;

class InspectionHistory
{

    /**
     * @var date $timeOfInspection
     */
    protected $timeOfInspection = null;

    /**
     * @var RegistrationNodeType $typeOfInspection
     */
    protected $typeOfInspection = null;

    /**
     * @var RegistrationNodeType $inspectionPathos
     */
    protected $inspectionPathos = null;

    /**
     * @param date $timeOfInspection
     * @param RegistrationNodeType $typeOfInspection
     * @param RegistrationNodeType $inspectionPathos
     */
    public function __construct($timeOfInspection, $typeOfInspection, $inspectionPathos)
    {
      $this->timeOfInspection = $timeOfInspection;
      $this->typeOfInspection = $typeOfInspection;
      $this->inspectionPathos = $inspectionPathos;
    }

    /**
     * @return date
     */
    public function getTimeOfInspection()
    {
      return $this->timeOfInspection;
    }

    /**
     * @param date $timeOfInspection
     * @return \AutovistaAppraisal\WSDL\InspectionHistory
     */
    public function setTimeOfInspection($timeOfInspection)
    {
      $this->timeOfInspection = $timeOfInspection;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getTypeOfInspection()
    {
      return $this->typeOfInspection;
    }

    /**
     * @param RegistrationNodeType $typeOfInspection
     * @return \AutovistaAppraisal\WSDL\InspectionHistory
     */
    public function setTypeOfInspection($typeOfInspection)
    {
      $this->typeOfInspection = $typeOfInspection;
      return $this;
    }

    /**
     * @return RegistrationNodeType
     */
    public function getInspectionPathos()
    {
      return $this->inspectionPathos;
    }

    /**
     * @param RegistrationNodeType $inspectionPathos
     * @return \AutovistaAppraisal\WSDL\InspectionHistory
     */
    public function setInspectionPathos($inspectionPathos)
    {
      $this->inspectionPathos = $inspectionPathos;
      return $this;
    }

}
