<?php

namespace AutovistaAppraisal\WSDL;

class IdentificationDataRequest extends AbsAppraisalRequest
{

    /**
     * @var string $regNo
     */
    protected $regNo = null;

    /**
     * @var string $vin
     */
    protected $vin = null;

    /**
     * @var string $atModelCode
     */
    protected $atModelCode = null;

    /**
     * @var string $modelSeriesCode
     */
    protected $modelSeriesCode = null;

    /**
     * @var string $bodyCode
     */
    protected $bodyCode = null;

    /**
     * @var string $driveCode
     */
    protected $driveCode = null;

    /**
     * @var string $brakeCode
     */
    protected $brakeCode = null;

    /**
     * @var string $fuelCode
     */
    protected $fuelCode = null;

    /**
     * @var string $gearBoxCode
     */
    protected $gearBoxCode = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @var int $curbWeight
     */
    protected $curbWeight = null;

    /**
     * @var int $modelYear
     */
    protected $modelYear = null;

    /**
     * @var int $modelMonth
     */
    protected $modelMonth = null;

    /**
     * @var int $persons
     */
    protected $persons = null;

    /**
     * @var int $doors
     */
    protected $doors = null;

    /**
     * @var int $minCylinderSize
     */
    protected $minCylinderSize = null;

    /**
     * @var int $maxCylinderSize
     */
    protected $maxCylinderSize = null;

    /**
     * @var int $minPower
     */
    protected $minPower = null;

    /**
     * @var int $maxPower
     */
    protected $maxPower = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param string $regNo
     * @param string $vin
     * @param string $atModelCode
     * @param string $modelSeriesCode
     * @param string $bodyCode
     * @param string $driveCode
     * @param string $brakeCode
     * @param string $fuelCode
     * @param string $gearBoxCode
     * @param int $length
     * @param int $curbWeight
     * @param int $modelYear
     * @param int $modelMonth
     * @param int $persons
     * @param int $doors
     * @param int $minCylinderSize
     * @param int $maxCylinderSize
     * @param int $minPower
     * @param int $maxPower
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $regNo, $vin, $atModelCode, $modelSeriesCode, $bodyCode, $driveCode, $brakeCode, $fuelCode, $gearBoxCode, $length, $curbWeight, $modelYear, $modelMonth, $persons, $doors, $minCylinderSize, $maxCylinderSize, $minPower, $maxPower)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->regNo = $regNo;
        $this->vin = $vin;
        $this->atModelCode = $atModelCode;
        $this->modelSeriesCode = $modelSeriesCode;
        $this->bodyCode = $bodyCode;
        $this->driveCode = $driveCode;
        $this->brakeCode = $brakeCode;
        $this->fuelCode = $fuelCode;
        $this->gearBoxCode = $gearBoxCode;
        $this->length = $length;
        $this->curbWeight = $curbWeight;
        $this->modelYear = $modelYear;
        $this->modelMonth = $modelMonth;
        $this->persons = $persons;
        $this->doors = $doors;
        $this->minCylinderSize = $minCylinderSize;
        $this->maxCylinderSize = $maxCylinderSize;
        $this->minPower = $minPower;
        $this->maxPower = $maxPower;
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
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setRegNo($regNo)
    {
        $this->regNo = $regNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getVin()
    {
        return $this->vin;
    }

    /**
     * @param string $vin
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setVin($vin)
    {
        $this->vin = $vin;
        return $this;
    }

    /**
     * @return string
     */
    public function getAtModelCode()
    {
        return $this->atModelCode;
    }

    /**
     * @param string $atModelCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setAtModelCode($atModelCode)
    {
        $this->atModelCode = $atModelCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getModelSeriesCode()
    {
        return $this->modelSeriesCode;
    }

    /**
     * @param string $modelSeriesCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setModelSeriesCode($modelSeriesCode)
    {
        $this->modelSeriesCode = $modelSeriesCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBodyCode()
    {
        return $this->bodyCode;
    }

    /**
     * @param string $bodyCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setBodyCode($bodyCode)
    {
        $this->bodyCode = $bodyCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDriveCode()
    {
        return $this->driveCode;
    }

    /**
     * @param string $driveCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setDriveCode($driveCode)
    {
        $this->driveCode = $driveCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrakeCode()
    {
        return $this->brakeCode;
    }

    /**
     * @param string $brakeCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setBrakeCode($brakeCode)
    {
        $this->brakeCode = $brakeCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getFuelCode()
    {
        return $this->fuelCode;
    }

    /**
     * @param string $fuelCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setFuelCode($fuelCode)
    {
        $this->fuelCode = $fuelCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getGearBoxCode()
    {
        return $this->gearBoxCode;
    }

    /**
     * @param string $gearBoxCode
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setGearBoxCode($gearBoxCode)
    {
        $this->gearBoxCode = $gearBoxCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getCurbWeight()
    {
        return $this->curbWeight;
    }

    /**
     * @param int $curbWeight
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setCurbWeight($curbWeight)
    {
        $this->curbWeight = $curbWeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * @param int $modelYear
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getModelMonth()
    {
        return $this->modelMonth;
    }

    /**
     * @param int $modelMonth
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setModelMonth($modelMonth)
    {
        $this->modelMonth = $modelMonth;
        return $this;
    }

    /**
     * @return int
     */
    public function getPersons()
    {
        return $this->persons;
    }

    /**
     * @param int $persons
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setPersons($persons)
    {
        $this->persons = $persons;
        return $this;
    }

    /**
     * @return int
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinCylinderSize()
    {
        return $this->minCylinderSize;
    }

    /**
     * @param int $minCylinderSize
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setMinCylinderSize($minCylinderSize)
    {
        $this->minCylinderSize = $minCylinderSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxCylinderSize()
    {
        return $this->maxCylinderSize;
    }

    /**
     * @param int $maxCylinderSize
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setMaxCylinderSize($maxCylinderSize)
    {
        $this->maxCylinderSize = $maxCylinderSize;
        return $this;
    }

    /**
     * @return int
     */
    public function getMinPower()
    {
        return $this->minPower;
    }

    /**
     * @param int $minPower
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setMinPower($minPower)
    {
        $this->minPower = $minPower;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxPower()
    {
        return $this->maxPower;
    }

    /**
     * @param int $maxPower
     * @return \AutovistaAppraisal\WSDL\IdentificationDataRequest
     */
    public function setMaxPower($maxPower)
    {
        $this->maxPower = $maxPower;
        return $this;
    }

}
