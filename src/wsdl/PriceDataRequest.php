<?php

namespace AutovistaAppraisal\WSDL;

class PriceDataRequest extends AbsAppraisalRequest
{

    /**
     * @var boolean $dealerAskingPrice
     */
    protected $dealerAskingPrice = null;

    /**
     * @var boolean $dealerDiscount
     */
    protected $dealerDiscount = null;

    /**
     * @var boolean $dealerSalesPrice
     */
    protected $dealerSalesPrice = null;

    /**
     * @var boolean $dealerCostTotal
     */
    protected $dealerCostTotal = null;

    /**
     * @var boolean $dealerMargin
     */
    protected $dealerMargin = null;

    /**
     * @var boolean $dealerPurchasePrice
     */
    protected $dealerPurchasePrice = null;

    /**
     * @var boolean $dealerWithoutWaitTime
     */
    protected $dealerWithoutWaitTime = null;

    /**
     * @var boolean $regionalAskingPrice
     */
    protected $regionalAskingPrice = null;

    /**
     * @var boolean $regionalDiscount
     */
    protected $regionalDiscount = null;

    /**
     * @var boolean $regionalSalesPrice
     */
    protected $regionalSalesPrice = null;

    /**
     * @var boolean $regionalCostTotal
     */
    protected $regionalCostTotal = null;

    /**
     * @var boolean $averageRegionalSalesTime
     */
    protected $averageRegionalSalesTime = null;

    /**
     * @var boolean $vehicleNewPrice
     */
    protected $vehicleNewPrice = null;

    /**
     * @var boolean $vehicleNewPriceDate
     */
    protected $vehicleNewPriceDate = null;

    /**
     * @var boolean $nationalCommonAskingPrice
     */
    protected $nationalCommonAskingPrice = null;

    /**
     * @var boolean $nationalCommonOptionsAskingPrice
     */
    protected $nationalCommonOptionsAskingPrice = null;

    /**
     * @var boolean $regionalCommonAskingPrice
     */
    protected $regionalCommonAskingPrice = null;

    /**
     * @var boolean $regionalCommonOptionsAskingPrice
     */
    protected $regionalCommonOptionsAskingPrice = null;

    /**
     * @var boolean $nationalConsumerAskingPrice
     */
    protected $nationalConsumerAskingPrice = null;

    /**
     * @var boolean $nationalConsumerOptionsAskingPrice
     */
    protected $nationalConsumerOptionsAskingPrice = null;

    /**
     * @var boolean $regionalConsumerAskingPrice
     */
    protected $regionalConsumerAskingPrice = null;

    /**
     * @var boolean $regionalConsumerOptionsAskingPrice
     */
    protected $regionalConsumerOptionsAskingPrice = null;

    /**
     * @var boolean $commonSalesTime
     */
    protected $commonSalesTime = null;

    /**
     * @var boolean $starRating
     */
    protected $starRating = null;

    /**
     * @var float $mileageNow
     */
    protected $mileageNow = null;

    /**
     * @var float $mileageAfterWaitTime
     */
    protected $mileageAfterWaitTime = null;

    /**
     * @var int $salesTime
     */
    protected $salesTime = null;

    /**
     * @var int $waitTime
     */
    protected $waitTime = null;

    /**
     * @var int $fixesTotal
     */
    protected $fixesTotal = null;

    /**
     * @var int $optionsTotal
     */
    protected $optionsTotal = null;

    /**
     * @var string $postCode
     */
    protected $postCode = null;

    /**
     * @param string $groupId
     * @param string $companyId
     * @param string $userId
     * @param int $appraisalId
     * @param boolean $dealerAskingPrice
     * @param boolean $dealerDiscount
     * @param boolean $dealerSalesPrice
     * @param boolean $dealerCostTotal
     * @param boolean $dealerMargin
     * @param boolean $dealerPurchasePrice
     * @param boolean $dealerWithoutWaitTime
     * @param boolean $regionalAskingPrice
     * @param boolean $regionalDiscount
     * @param boolean $regionalSalesPrice
     * @param boolean $regionalCostTotal
     * @param boolean $averageRegionalSalesTime
     * @param boolean $vehicleNewPrice
     * @param boolean $vehicleNewPriceDate
     * @param boolean $nationalCommonAskingPrice
     * @param boolean $nationalCommonOptionsAskingPrice
     * @param boolean $regionalCommonAskingPrice
     * @param boolean $regionalCommonOptionsAskingPrice
     * @param boolean $nationalConsumerAskingPrice
     * @param boolean $nationalConsumerOptionsAskingPrice
     * @param boolean $regionalConsumerAskingPrice
     * @param boolean $regionalConsumerOptionsAskingPrice
     * @param boolean $commonSalesTime
     * @param boolean $starRating
     * @param float $mileageNow
     * @param float $mileageAfterWaitTime
     * @param int $salesTime
     * @param int $waitTime
     * @param int $fixesTotal
     * @param int $optionsTotal
     * @param string $postCode
     */
    public function __construct($groupId, $companyId, $userId, $appraisalId, $dealerAskingPrice, $dealerDiscount, $dealerSalesPrice, $dealerCostTotal, $dealerMargin, $dealerPurchasePrice, $dealerWithoutWaitTime, $regionalAskingPrice, $regionalDiscount, $regionalSalesPrice, $regionalCostTotal, $averageRegionalSalesTime, $vehicleNewPrice, $vehicleNewPriceDate, $nationalCommonAskingPrice, $nationalCommonOptionsAskingPrice, $regionalCommonAskingPrice, $regionalCommonOptionsAskingPrice, $nationalConsumerAskingPrice, $nationalConsumerOptionsAskingPrice, $regionalConsumerAskingPrice, $regionalConsumerOptionsAskingPrice, $commonSalesTime, $starRating, $mileageNow, $mileageAfterWaitTime, $salesTime, $waitTime, $fixesTotal, $optionsTotal, $postCode)
    {
        parent::__construct($groupId, $companyId, $userId, $appraisalId);
        $this->dealerAskingPrice = $dealerAskingPrice;
        $this->dealerDiscount = $dealerDiscount;
        $this->dealerSalesPrice = $dealerSalesPrice;
        $this->dealerCostTotal = $dealerCostTotal;
        $this->dealerMargin = $dealerMargin;
        $this->dealerPurchasePrice = $dealerPurchasePrice;
        $this->dealerWithoutWaitTime = $dealerWithoutWaitTime;
        $this->regionalAskingPrice = $regionalAskingPrice;
        $this->regionalDiscount = $regionalDiscount;
        $this->regionalSalesPrice = $regionalSalesPrice;
        $this->regionalCostTotal = $regionalCostTotal;
        $this->averageRegionalSalesTime = $averageRegionalSalesTime;
        $this->vehicleNewPrice = $vehicleNewPrice;
        $this->vehicleNewPriceDate = $vehicleNewPriceDate;
        $this->nationalCommonAskingPrice = $nationalCommonAskingPrice;
        $this->nationalCommonOptionsAskingPrice = $nationalCommonOptionsAskingPrice;
        $this->regionalCommonAskingPrice = $regionalCommonAskingPrice;
        $this->regionalCommonOptionsAskingPrice = $regionalCommonOptionsAskingPrice;
        $this->nationalConsumerAskingPrice = $nationalConsumerAskingPrice;
        $this->nationalConsumerOptionsAskingPrice = $nationalConsumerOptionsAskingPrice;
        $this->regionalConsumerAskingPrice = $regionalConsumerAskingPrice;
        $this->regionalConsumerOptionsAskingPrice = $regionalConsumerOptionsAskingPrice;
        $this->commonSalesTime = $commonSalesTime;
        $this->starRating = $starRating;
        $this->mileageNow = $mileageNow;
        $this->mileageAfterWaitTime = $mileageAfterWaitTime;
        $this->salesTime = $salesTime;
        $this->waitTime = $waitTime;
        $this->fixesTotal = $fixesTotal;
        $this->optionsTotal = $optionsTotal;
        $this->postCode = $postCode;
    }

    /**
     * @return boolean
     */
    public function getDealerAskingPrice()
    {
        return $this->dealerAskingPrice;
    }

    /**
     * @param boolean $dealerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerAskingPrice($dealerAskingPrice)
    {
        $this->dealerAskingPrice = $dealerAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerDiscount()
    {
        return $this->dealerDiscount;
    }

    /**
     * @param boolean $dealerDiscount
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerDiscount($dealerDiscount)
    {
        $this->dealerDiscount = $dealerDiscount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerSalesPrice()
    {
        return $this->dealerSalesPrice;
    }

    /**
     * @param boolean $dealerSalesPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerSalesPrice($dealerSalesPrice)
    {
        $this->dealerSalesPrice = $dealerSalesPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerCostTotal()
    {
        return $this->dealerCostTotal;
    }

    /**
     * @param boolean $dealerCostTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerCostTotal($dealerCostTotal)
    {
        $this->dealerCostTotal = $dealerCostTotal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerMargin()
    {
        return $this->dealerMargin;
    }

    /**
     * @param boolean $dealerMargin
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerMargin($dealerMargin)
    {
        $this->dealerMargin = $dealerMargin;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerPurchasePrice()
    {
        return $this->dealerPurchasePrice;
    }

    /**
     * @param boolean $dealerPurchasePrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerPurchasePrice($dealerPurchasePrice)
    {
        $this->dealerPurchasePrice = $dealerPurchasePrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getDealerWithoutWaitTime()
    {
        return $this->dealerWithoutWaitTime;
    }

    /**
     * @param boolean $dealerWithoutWaitTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setDealerWithoutWaitTime($dealerWithoutWaitTime)
    {
        $this->dealerWithoutWaitTime = $dealerWithoutWaitTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalAskingPrice()
    {
        return $this->regionalAskingPrice;
    }

    /**
     * @param boolean $regionalAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalAskingPrice($regionalAskingPrice)
    {
        $this->regionalAskingPrice = $regionalAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalDiscount()
    {
        return $this->regionalDiscount;
    }

    /**
     * @param boolean $regionalDiscount
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalDiscount($regionalDiscount)
    {
        $this->regionalDiscount = $regionalDiscount;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalSalesPrice()
    {
        return $this->regionalSalesPrice;
    }

    /**
     * @param boolean $regionalSalesPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalSalesPrice($regionalSalesPrice)
    {
        $this->regionalSalesPrice = $regionalSalesPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalCostTotal()
    {
        return $this->regionalCostTotal;
    }

    /**
     * @param boolean $regionalCostTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalCostTotal($regionalCostTotal)
    {
        $this->regionalCostTotal = $regionalCostTotal;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAverageRegionalSalesTime()
    {
        return $this->averageRegionalSalesTime;
    }

    /**
     * @param boolean $averageRegionalSalesTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setAverageRegionalSalesTime($averageRegionalSalesTime)
    {
        $this->averageRegionalSalesTime = $averageRegionalSalesTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getVehicleNewPrice()
    {
        return $this->vehicleNewPrice;
    }

    /**
     * @param boolean $vehicleNewPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setVehicleNewPrice($vehicleNewPrice)
    {
        $this->vehicleNewPrice = $vehicleNewPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getVehicleNewPriceDate()
    {
        return $this->vehicleNewPriceDate;
    }

    /**
     * @param boolean $vehicleNewPriceDate
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setVehicleNewPriceDate($vehicleNewPriceDate)
    {
        $this->vehicleNewPriceDate = $vehicleNewPriceDate;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalCommonAskingPrice()
    {
        return $this->nationalCommonAskingPrice;
    }

    /**
     * @param boolean $nationalCommonAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setNationalCommonAskingPrice($nationalCommonAskingPrice)
    {
        $this->nationalCommonAskingPrice = $nationalCommonAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalCommonOptionsAskingPrice()
    {
        return $this->nationalCommonOptionsAskingPrice;
    }

    /**
     * @param boolean $nationalCommonOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setNationalCommonOptionsAskingPrice($nationalCommonOptionsAskingPrice)
    {
        $this->nationalCommonOptionsAskingPrice = $nationalCommonOptionsAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalCommonAskingPrice()
    {
        return $this->regionalCommonAskingPrice;
    }

    /**
     * @param boolean $regionalCommonAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalCommonAskingPrice($regionalCommonAskingPrice)
    {
        $this->regionalCommonAskingPrice = $regionalCommonAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalCommonOptionsAskingPrice()
    {
        return $this->regionalCommonOptionsAskingPrice;
    }

    /**
     * @param boolean $regionalCommonOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalCommonOptionsAskingPrice($regionalCommonOptionsAskingPrice)
    {
        $this->regionalCommonOptionsAskingPrice = $regionalCommonOptionsAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalConsumerAskingPrice()
    {
        return $this->nationalConsumerAskingPrice;
    }

    /**
     * @param boolean $nationalConsumerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setNationalConsumerAskingPrice($nationalConsumerAskingPrice)
    {
        $this->nationalConsumerAskingPrice = $nationalConsumerAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getNationalConsumerOptionsAskingPrice()
    {
        return $this->nationalConsumerOptionsAskingPrice;
    }

    /**
     * @param boolean $nationalConsumerOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setNationalConsumerOptionsAskingPrice($nationalConsumerOptionsAskingPrice)
    {
        $this->nationalConsumerOptionsAskingPrice = $nationalConsumerOptionsAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalConsumerAskingPrice()
    {
        return $this->regionalConsumerAskingPrice;
    }

    /**
     * @param boolean $regionalConsumerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalConsumerAskingPrice($regionalConsumerAskingPrice)
    {
        $this->regionalConsumerAskingPrice = $regionalConsumerAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getRegionalConsumerOptionsAskingPrice()
    {
        return $this->regionalConsumerOptionsAskingPrice;
    }

    /**
     * @param boolean $regionalConsumerOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setRegionalConsumerOptionsAskingPrice($regionalConsumerOptionsAskingPrice)
    {
        $this->regionalConsumerOptionsAskingPrice = $regionalConsumerOptionsAskingPrice;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getCommonSalesTime()
    {
        return $this->commonSalesTime;
    }

    /**
     * @param boolean $commonSalesTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setCommonSalesTime($commonSalesTime)
    {
        $this->commonSalesTime = $commonSalesTime;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getStarRating()
    {
        return $this->starRating;
    }

    /**
     * @param boolean $starRating
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setStarRating($starRating)
    {
        $this->starRating = $starRating;
        return $this;
    }

    /**
     * @return float
     */
    public function getMileageNow()
    {
        return $this->mileageNow;
    }

    /**
     * @param float $mileageNow
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setMileageNow($mileageNow)
    {
        $this->mileageNow = $mileageNow;
        return $this;
    }

    /**
     * @return float
     */
    public function getMileageAfterWaitTime()
    {
        return $this->mileageAfterWaitTime;
    }

    /**
     * @param float $mileageAfterWaitTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setMileageAfterWaitTime($mileageAfterWaitTime)
    {
        $this->mileageAfterWaitTime = $mileageAfterWaitTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesTime()
    {
        return $this->salesTime;
    }

    /**
     * @param int $salesTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setSalesTime($salesTime)
    {
        $this->salesTime = $salesTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getWaitTime()
    {
        return $this->waitTime;
    }

    /**
     * @param int $waitTime
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setWaitTime($waitTime)
    {
        $this->waitTime = $waitTime;
        return $this;
    }

    /**
     * @return int
     */
    public function getFixesTotal()
    {
        return $this->fixesTotal;
    }

    /**
     * @param int $fixesTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setFixesTotal($fixesTotal)
    {
        $this->fixesTotal = $fixesTotal;
        return $this;
    }

    /**
     * @return int
     */
    public function getOptionsTotal()
    {
        return $this->optionsTotal;
    }

    /**
     * @param int $optionsTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setOptionsTotal($optionsTotal)
    {
        $this->optionsTotal = $optionsTotal;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
        return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return \AutovistaAppraisal\WSDL\PriceDataRequest
     */
    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

}
