<?php

namespace AutovistaAppraisal\WSDL;

class VehicleInfo
{

    /**
     * @var date $inTrafficDate
     */
    protected $inTrafficDate = null;

    /**
     * @var date $inspectionPeriodStartDate
     */
    protected $inspectionPeriodStartDate = null;

    /**
     * @var date $inspectionPeriodEndDate
     */
    protected $inspectionPeriodEndDate = null;

    /**
     * @var date $firstRegistrationDate
     */
    protected $firstRegistrationDate = null;

    /**
     * @param date $inTrafficDate
     * @param date $inspectionPeriodStartDate
     * @param date $inspectionPeriodEndDate
     * @param date $firstRegistrationDate
     */
    public function __construct($inTrafficDate, $inspectionPeriodStartDate, $inspectionPeriodEndDate, $firstRegistrationDate)
    {
      $this->inTrafficDate = $inTrafficDate;
      $this->inspectionPeriodStartDate = $inspectionPeriodStartDate;
      $this->inspectionPeriodEndDate = $inspectionPeriodEndDate;
      $this->firstRegistrationDate = $firstRegistrationDate;
    }

    /**
     * @return date
     */
    public function getInTrafficDate()
    {
      return $this->inTrafficDate;
    }

    /**
     * @param date $inTrafficDate
     * @return \AutovistaAppraisal\WSDL\VehicleInfo
     */
    public function setInTrafficDate($inTrafficDate)
    {
      $this->inTrafficDate = $inTrafficDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getInspectionPeriodStartDate()
    {
      return $this->inspectionPeriodStartDate;
    }

    /**
     * @param date $inspectionPeriodStartDate
     * @return \AutovistaAppraisal\WSDL\VehicleInfo
     */
    public function setInspectionPeriodStartDate($inspectionPeriodStartDate)
    {
      $this->inspectionPeriodStartDate = $inspectionPeriodStartDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getInspectionPeriodEndDate()
    {
      return $this->inspectionPeriodEndDate;
    }

    /**
     * @param date $inspectionPeriodEndDate
     * @return \AutovistaAppraisal\WSDL\VehicleInfo
     */
    public function setInspectionPeriodEndDate($inspectionPeriodEndDate)
    {
      $this->inspectionPeriodEndDate = $inspectionPeriodEndDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getFirstRegistrationDate()
    {
      return $this->firstRegistrationDate;
    }

    /**
     * @param date $firstRegistrationDate
     * @return \AutovistaAppraisal\WSDL\VehicleInfo
     */
    public function setFirstRegistrationDate($firstRegistrationDate)
    {
      $this->firstRegistrationDate = $firstRegistrationDate;
      return $this;
    }

}
