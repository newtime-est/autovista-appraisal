<?php

namespace AutovistaAppraisal\WSDL;

class Type
{

    /**
     * @var int $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $makeCode
     */
    protected $makeCode = null;

    /**
     * @var string $makeDescription
     */
    protected $makeDescription = null;

    /**
     * @var string $modelCode
     */
    protected $modelCode = null;

    /**
     * @var string $modelDescription
     */
    protected $modelDescription = null;

    /**
     * @var string $introDate
     */
    protected $introDate = null;

    /**
     * @var int $introYear
     */
    protected $introYear = null;

    /**
     * @var string $termDate
     */
    protected $termDate = null;

    /**
     * @var int $termYear
     */
    protected $termYear = null;

    /**
     * @var string $regDate
     */
    protected $regDate = null;

    /**
     * @var int $regYear
     */
    protected $regYear = null;

    /**
     * @var string $inTrafficDate
     */
    protected $inTrafficDate = null;

    /**
     * @var int $inTrafficYear
     */
    protected $inTrafficYear = null;

    /**
     * @var string $bodyCode
     */
    protected $bodyCode = null;

    /**
     * @var string $bodyDescription
     */
    protected $bodyDescription = null;

    /**
     * @var string $fuelCode
     */
    protected $fuelCode = null;

    /**
     * @var string $fuelDescription
     */
    protected $fuelDescription = null;

    /**
     * @var string $driveCode
     */
    protected $driveCode = null;

    /**
     * @var string $driveDescription
     */
    protected $driveDescription = null;

    /**
     * @var string $gearBoxCode
     */
    protected $gearBoxCode = null;

    /**
     * @var string $gearBoxDescription
     */
    protected $gearBoxDescription = null;

    /**
     * @var string $brakeCode
     */
    protected $brakeCode = null;

    /**
     * @var string $brakeDescription
     */
    protected $brakeDescription = null;

    /**
     * @var int $speed
     */
    protected $speed = null;

    /**
     * @var string $acceleration
     */
    protected $acceleration = null;

    /**
     * @var int $power
     */
    protected $power = null;

    /**
     * @var int $torque
     */
    protected $torque = null;

    /**
     * @var int $cylinderSize
     */
    protected $cylinderSize = null;

    /**
     * @var int $cylinders
     */
    protected $cylinders = null;

    /**
     * @var int $valves
     */
    protected $valves = null;

    /**
     * @var float $highwayConsumption
     */
    protected $highwayConsumption = null;

    /**
     * @var float $combinedConsumption
     */
    protected $combinedConsumption = null;

    /**
     * @var float $urbanConsumption
     */
    protected $urbanConsumption = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $curbWeight
     */
    protected $curbWeight = null;

    /**
     * @var int $grossWeight
     */
    protected $grossWeight = null;

    /**
     * @var int $towWeightWithBrakes
     */
    protected $towWeightWithBrakes = null;

    /**
     * @var int $doors
     */
    protected $doors = null;

    /**
     * @var string $modelSeriesCode
     */
    protected $modelSeriesCode = null;

    /**
     * @var int $co2
     */
    protected $co2 = null;

    /**
     * @var int $modelYear
     */
    protected $modelYear = null;

    /**
     * @var int $persons
     */
    protected $persons = null;

    /**
     * @var float $price
     */
    protected $price = null;

    /**
     * @var string $priceDate
     */
    protected $priceDate = null;

    /**
     * @var OptionData[] $option
     */
    protected $option = null;

    /**
     * @param int $code
     * @param string $description
     * @param string $makeCode
     * @param string $makeDescription
     * @param string $modelCode
     * @param string $modelDescription
     * @param string $introDate
     * @param int $introYear
     * @param string $termDate
     * @param int $termYear
     * @param string $regDate
     * @param int $regYear
     * @param string $inTrafficDate
     * @param int $inTrafficYear
     * @param string $bodyCode
     * @param string $bodyDescription
     * @param string $fuelCode
     * @param string $fuelDescription
     * @param string $driveCode
     * @param string $driveDescription
     * @param string $gearBoxCode
     * @param string $gearBoxDescription
     * @param string $brakeCode
     * @param string $brakeDescription
     * @param int $speed
     * @param string $acceleration
     * @param int $power
     * @param int $torque
     * @param int $cylinderSize
     * @param int $cylinders
     * @param int $valves
     * @param float $highwayConsumption
     * @param float $combinedConsumption
     * @param float $urbanConsumption
     * @param int $length
     * @param int $width
     * @param int $height
     * @param int $curbWeight
     * @param int $grossWeight
     * @param int $towWeightWithBrakes
     * @param int $doors
     * @param string $modelSeriesCode
     * @param int $co2
     * @param int $modelYear
     * @param int $persons
     * @param float $price
     * @param string $priceDate
     */
    public function __construct($code, $description, $makeCode, $makeDescription, $modelCode, $modelDescription, $introDate, $introYear, $termDate, $termYear, $regDate, $regYear, $inTrafficDate, $inTrafficYear, $bodyCode, $bodyDescription, $fuelCode, $fuelDescription, $driveCode, $driveDescription, $gearBoxCode, $gearBoxDescription, $brakeCode, $brakeDescription, $speed, $acceleration, $power, $torque, $cylinderSize, $cylinders, $valves, $highwayConsumption, $combinedConsumption, $urbanConsumption, $length, $width, $height, $curbWeight, $grossWeight, $towWeightWithBrakes, $doors, $modelSeriesCode, $co2, $modelYear, $persons, $price, $priceDate)
    {
      $this->code = $code;
      $this->description = $description;
      $this->makeCode = $makeCode;
      $this->makeDescription = $makeDescription;
      $this->modelCode = $modelCode;
      $this->modelDescription = $modelDescription;
      $this->introDate = $introDate;
      $this->introYear = $introYear;
      $this->termDate = $termDate;
      $this->termYear = $termYear;
      $this->regDate = $regDate;
      $this->regYear = $regYear;
      $this->inTrafficDate = $inTrafficDate;
      $this->inTrafficYear = $inTrafficYear;
      $this->bodyCode = $bodyCode;
      $this->bodyDescription = $bodyDescription;
      $this->fuelCode = $fuelCode;
      $this->fuelDescription = $fuelDescription;
      $this->driveCode = $driveCode;
      $this->driveDescription = $driveDescription;
      $this->gearBoxCode = $gearBoxCode;
      $this->gearBoxDescription = $gearBoxDescription;
      $this->brakeCode = $brakeCode;
      $this->brakeDescription = $brakeDescription;
      $this->speed = $speed;
      $this->acceleration = $acceleration;
      $this->power = $power;
      $this->torque = $torque;
      $this->cylinderSize = $cylinderSize;
      $this->cylinders = $cylinders;
      $this->valves = $valves;
      $this->highwayConsumption = $highwayConsumption;
      $this->combinedConsumption = $combinedConsumption;
      $this->urbanConsumption = $urbanConsumption;
      $this->length = $length;
      $this->width = $width;
      $this->height = $height;
      $this->curbWeight = $curbWeight;
      $this->grossWeight = $grossWeight;
      $this->towWeightWithBrakes = $towWeightWithBrakes;
      $this->doors = $doors;
      $this->modelSeriesCode = $modelSeriesCode;
      $this->co2 = $co2;
      $this->modelYear = $modelYear;
      $this->persons = $persons;
      $this->price = $price;
      $this->priceDate = $priceDate;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param int $code
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCode($code)
    {
      $this->code = $code;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getMakeCode()
    {
      return $this->makeCode;
    }

    /**
     * @param string $makeCode
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setMakeCode($makeCode)
    {
      $this->makeCode = $makeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMakeDescription()
    {
      return $this->makeDescription;
    }

    /**
     * @param string $makeDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setMakeDescription($makeDescription)
    {
      $this->makeDescription = $makeDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelCode()
    {
      return $this->modelCode;
    }

    /**
     * @param string $modelCode
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setModelCode($modelCode)
    {
      $this->modelCode = $modelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getModelDescription()
    {
      return $this->modelDescription;
    }

    /**
     * @param string $modelDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setModelDescription($modelDescription)
    {
      $this->modelDescription = $modelDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getIntroDate()
    {
      return $this->introDate;
    }

    /**
     * @param string $introDate
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setIntroDate($introDate)
    {
      $this->introDate = $introDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getIntroYear()
    {
      return $this->introYear;
    }

    /**
     * @param int $introYear
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setIntroYear($introYear)
    {
      $this->introYear = $introYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getTermDate()
    {
      return $this->termDate;
    }

    /**
     * @param string $termDate
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setTermDate($termDate)
    {
      $this->termDate = $termDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getTermYear()
    {
      return $this->termYear;
    }

    /**
     * @param int $termYear
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setTermYear($termYear)
    {
      $this->termYear = $termYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegDate()
    {
      return $this->regDate;
    }

    /**
     * @param string $regDate
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setRegDate($regDate)
    {
      $this->regDate = $regDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getRegYear()
    {
      return $this->regYear;
    }

    /**
     * @param int $regYear
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setRegYear($regYear)
    {
      $this->regYear = $regYear;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTrafficDate()
    {
      return $this->inTrafficDate;
    }

    /**
     * @param string $inTrafficDate
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setInTrafficDate($inTrafficDate)
    {
      $this->inTrafficDate = $inTrafficDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getInTrafficYear()
    {
      return $this->inTrafficYear;
    }

    /**
     * @param int $inTrafficYear
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setInTrafficYear($inTrafficYear)
    {
      $this->inTrafficYear = $inTrafficYear;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setBodyCode($bodyCode)
    {
      $this->bodyCode = $bodyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBodyDescription()
    {
      return $this->bodyDescription;
    }

    /**
     * @param string $bodyDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setBodyDescription($bodyDescription)
    {
      $this->bodyDescription = $bodyDescription;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setFuelCode($fuelCode)
    {
      $this->fuelCode = $fuelCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFuelDescription()
    {
      return $this->fuelDescription;
    }

    /**
     * @param string $fuelDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setFuelDescription($fuelDescription)
    {
      $this->fuelDescription = $fuelDescription;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setDriveCode($driveCode)
    {
      $this->driveCode = $driveCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDriveDescription()
    {
      return $this->driveDescription;
    }

    /**
     * @param string $driveDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setDriveDescription($driveDescription)
    {
      $this->driveDescription = $driveDescription;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setGearBoxCode($gearBoxCode)
    {
      $this->gearBoxCode = $gearBoxCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getGearBoxDescription()
    {
      return $this->gearBoxDescription;
    }

    /**
     * @param string $gearBoxDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setGearBoxDescription($gearBoxDescription)
    {
      $this->gearBoxDescription = $gearBoxDescription;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setBrakeCode($brakeCode)
    {
      $this->brakeCode = $brakeCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getBrakeDescription()
    {
      return $this->brakeDescription;
    }

    /**
     * @param string $brakeDescription
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setBrakeDescription($brakeDescription)
    {
      $this->brakeDescription = $brakeDescription;
      return $this;
    }

    /**
     * @return int
     */
    public function getSpeed()
    {
      return $this->speed;
    }

    /**
     * @param int $speed
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setSpeed($speed)
    {
      $this->speed = $speed;
      return $this;
    }

    /**
     * @return string
     */
    public function getAcceleration()
    {
      return $this->acceleration;
    }

    /**
     * @param string $acceleration
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setAcceleration($acceleration)
    {
      $this->acceleration = $acceleration;
      return $this;
    }

    /**
     * @return int
     */
    public function getPower()
    {
      return $this->power;
    }

    /**
     * @param int $power
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setPower($power)
    {
      $this->power = $power;
      return $this;
    }

    /**
     * @return int
     */
    public function getTorque()
    {
      return $this->torque;
    }

    /**
     * @param int $torque
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setTorque($torque)
    {
      $this->torque = $torque;
      return $this;
    }

    /**
     * @return int
     */
    public function getCylinderSize()
    {
      return $this->cylinderSize;
    }

    /**
     * @param int $cylinderSize
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCylinderSize($cylinderSize)
    {
      $this->cylinderSize = $cylinderSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getCylinders()
    {
      return $this->cylinders;
    }

    /**
     * @param int $cylinders
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCylinders($cylinders)
    {
      $this->cylinders = $cylinders;
      return $this;
    }

    /**
     * @return int
     */
    public function getValves()
    {
      return $this->valves;
    }

    /**
     * @param int $valves
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setValves($valves)
    {
      $this->valves = $valves;
      return $this;
    }

    /**
     * @return float
     */
    public function getHighwayConsumption()
    {
      return $this->highwayConsumption;
    }

    /**
     * @param float $highwayConsumption
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setHighwayConsumption($highwayConsumption)
    {
      $this->highwayConsumption = $highwayConsumption;
      return $this;
    }

    /**
     * @return float
     */
    public function getCombinedConsumption()
    {
      return $this->combinedConsumption;
    }

    /**
     * @param float $combinedConsumption
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCombinedConsumption($combinedConsumption)
    {
      $this->combinedConsumption = $combinedConsumption;
      return $this;
    }

    /**
     * @return float
     */
    public function getUrbanConsumption()
    {
      return $this->urbanConsumption;
    }

    /**
     * @param float $urbanConsumption
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setUrbanConsumption($urbanConsumption)
    {
      $this->urbanConsumption = $urbanConsumption;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setHeight($height)
    {
      $this->height = $height;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCurbWeight($curbWeight)
    {
      $this->curbWeight = $curbWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getGrossWeight()
    {
      return $this->grossWeight;
    }

    /**
     * @param int $grossWeight
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setGrossWeight($grossWeight)
    {
      $this->grossWeight = $grossWeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getTowWeightWithBrakes()
    {
      return $this->towWeightWithBrakes;
    }

    /**
     * @param int $towWeightWithBrakes
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setTowWeightWithBrakes($towWeightWithBrakes)
    {
      $this->towWeightWithBrakes = $towWeightWithBrakes;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setDoors($doors)
    {
      $this->doors = $doors;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setModelSeriesCode($modelSeriesCode)
    {
      $this->modelSeriesCode = $modelSeriesCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getCo2()
    {
      return $this->co2;
    }

    /**
     * @param int $co2
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setCo2($co2)
    {
      $this->co2 = $co2;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setModelYear($modelYear)
    {
      $this->modelYear = $modelYear;
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
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setPersons($persons)
    {
      $this->persons = $persons;
      return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
      return $this->price;
    }

    /**
     * @param float $price
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setPrice($price)
    {
      $this->price = $price;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceDate()
    {
      return $this->priceDate;
    }

    /**
     * @param string $priceDate
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setPriceDate($priceDate)
    {
      $this->priceDate = $priceDate;
      return $this;
    }

    /**
     * @return OptionData[]
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param OptionData[] $option
     * @return \AutovistaAppraisal\WSDL\Type
     */
    public function setOption(array $option = null)
    {
      $this->option = $option;
      return $this;
    }

}
