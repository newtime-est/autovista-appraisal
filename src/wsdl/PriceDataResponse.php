<?php

namespace AutovistaAppraisal\WSDL;

class PriceDataResponse
{

    /**
     * @var int $appraisalId
     */
    protected $appraisalId = null;

    /**
     * @var string $statusMessage
     */
    protected $statusMessage = null;

    /**
     * @var float $dealerAskingPrice
     */
    protected $dealerAskingPrice = null;

    /**
     * @var float $dealerDiscount
     */
    protected $dealerDiscount = null;

    /**
     * @var float $dealerSalesPrice
     */
    protected $dealerSalesPrice = null;

    /**
     * @var float $dealerCostTotal
     */
    protected $dealerCostTotal = null;

    /**
     * @var float $dealerMargin
     */
    protected $dealerMargin = null;

    /**
     * @var float $dealerPurchasePrice
     */
    protected $dealerPurchasePrice = null;

    /**
     * @var float $dealerWithoutWaitTime
     */
    protected $dealerWithoutWaitTime = null;

    /**
     * @var float $regionalAskingPrice
     */
    protected $regionalAskingPrice = null;

    /**
     * @var float $regionalDiscount
     */
    protected $regionalDiscount = null;

    /**
     * @var float $regionalSalesPrice
     */
    protected $regionalSalesPrice = null;

    /**
     * @var float $regionalCostTotal
     */
    protected $regionalCostTotal = null;

    /**
     * @var int $averageRegionalSalesTime
     */
    protected $averageRegionalSalesTime = null;

    /**
     * @var float $vehicleNewPrice
     */
    protected $vehicleNewPrice = null;

    /**
     * @var string $vehicleNewPriceDate
     */
    protected $vehicleNewPriceDate = null;

    /**
     * @var float $nationalCommonAskingPrice
     */
    protected $nationalCommonAskingPrice = null;

    /**
     * @var float $nationalCommonOptionsAskingPrice
     */
    protected $nationalCommonOptionsAskingPrice = null;

    /**
     * @var float $regionalCommonAskingPrice
     */
    protected $regionalCommonAskingPrice = null;

    /**
     * @var float $regionalCommonOptionsAskingPrice
     */
    protected $regionalCommonOptionsAskingPrice = null;

    /**
     * @var float $nationalConsumerAskingPrice
     */
    protected $nationalConsumerAskingPrice = null;

    /**
     * @var float $nationalConsumerOptionsAskingPrice
     */
    protected $nationalConsumerOptionsAskingPrice = null;

    /**
     * @var float $regionalConsumerAskingPrice
     */
    protected $regionalConsumerAskingPrice = null;

    /**
     * @var float $regionalConsumerOptionsAskingPrice
     */
    protected $regionalConsumerOptionsAskingPrice = null;

    /**
     * @var int $commonSalesTime
     */
    protected $commonSalesTime = null;

    /**
     * @var int $starRating
     */
    protected $starRating = null;

    /**
     * @var string $postCode
     */
    protected $postCode = null;

    /**
     * @var string $region
     */
    protected $region = null;

    /**
     * @param int $appraisalId
     * @param string $statusMessage
     * @param float $dealerAskingPrice
     * @param float $dealerDiscount
     * @param float $dealerSalesPrice
     * @param float $dealerCostTotal
     * @param float $dealerMargin
     * @param float $dealerPurchasePrice
     * @param float $dealerWithoutWaitTime
     * @param float $regionalAskingPrice
     * @param float $regionalDiscount
     * @param float $regionalSalesPrice
     * @param float $regionalCostTotal
     * @param int $averageRegionalSalesTime
     * @param float $vehicleNewPrice
     * @param string $vehicleNewPriceDate
     * @param float $nationalCommonAskingPrice
     * @param float $nationalCommonOptionsAskingPrice
     * @param float $regionalCommonAskingPrice
     * @param float $regionalCommonOptionsAskingPrice
     * @param float $nationalConsumerAskingPrice
     * @param float $nationalConsumerOptionsAskingPrice
     * @param float $regionalConsumerAskingPrice
     * @param float $regionalConsumerOptionsAskingPrice
     * @param int $commonSalesTime
     * @param int $starRating
     * @param string $postCode
     * @param string $region
     */
    public function __construct($appraisalId, $statusMessage, $dealerAskingPrice, $dealerDiscount, $dealerSalesPrice, $dealerCostTotal, $dealerMargin, $dealerPurchasePrice, $dealerWithoutWaitTime, $regionalAskingPrice, $regionalDiscount, $regionalSalesPrice, $regionalCostTotal, $averageRegionalSalesTime, $vehicleNewPrice, $vehicleNewPriceDate, $nationalCommonAskingPrice, $nationalCommonOptionsAskingPrice, $regionalCommonAskingPrice, $regionalCommonOptionsAskingPrice, $nationalConsumerAskingPrice, $nationalConsumerOptionsAskingPrice, $regionalConsumerAskingPrice, $regionalConsumerOptionsAskingPrice, $commonSalesTime, $starRating, $postCode, $region)
    {
      $this->appraisalId = $appraisalId;
      $this->statusMessage = $statusMessage;
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
      $this->postCode = $postCode;
      $this->region = $region;
    }

    /**
     * @return int
     */
    public function getAppraisalId()
    {
      return $this->appraisalId;
    }

    /**
     * @param int $appraisalId
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setAppraisalId($appraisalId)
    {
      $this->appraisalId = $appraisalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
      return $this->statusMessage;
    }

    /**
     * @param string $statusMessage
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setStatusMessage($statusMessage)
    {
      $this->statusMessage = $statusMessage;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerAskingPrice()
    {
      return $this->dealerAskingPrice;
    }

    /**
     * @param float $dealerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerAskingPrice($dealerAskingPrice)
    {
      $this->dealerAskingPrice = $dealerAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerDiscount()
    {
      return $this->dealerDiscount;
    }

    /**
     * @param float $dealerDiscount
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerDiscount($dealerDiscount)
    {
      $this->dealerDiscount = $dealerDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerSalesPrice()
    {
      return $this->dealerSalesPrice;
    }

    /**
     * @param float $dealerSalesPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerSalesPrice($dealerSalesPrice)
    {
      $this->dealerSalesPrice = $dealerSalesPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerCostTotal()
    {
      return $this->dealerCostTotal;
    }

    /**
     * @param float $dealerCostTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerCostTotal($dealerCostTotal)
    {
      $this->dealerCostTotal = $dealerCostTotal;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerMargin()
    {
      return $this->dealerMargin;
    }

    /**
     * @param float $dealerMargin
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerMargin($dealerMargin)
    {
      $this->dealerMargin = $dealerMargin;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerPurchasePrice()
    {
      return $this->dealerPurchasePrice;
    }

    /**
     * @param float $dealerPurchasePrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerPurchasePrice($dealerPurchasePrice)
    {
      $this->dealerPurchasePrice = $dealerPurchasePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealerWithoutWaitTime()
    {
      return $this->dealerWithoutWaitTime;
    }

    /**
     * @param float $dealerWithoutWaitTime
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setDealerWithoutWaitTime($dealerWithoutWaitTime)
    {
      $this->dealerWithoutWaitTime = $dealerWithoutWaitTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalAskingPrice()
    {
      return $this->regionalAskingPrice;
    }

    /**
     * @param float $regionalAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalAskingPrice($regionalAskingPrice)
    {
      $this->regionalAskingPrice = $regionalAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalDiscount()
    {
      return $this->regionalDiscount;
    }

    /**
     * @param float $regionalDiscount
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalDiscount($regionalDiscount)
    {
      $this->regionalDiscount = $regionalDiscount;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalSalesPrice()
    {
      return $this->regionalSalesPrice;
    }

    /**
     * @param float $regionalSalesPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalSalesPrice($regionalSalesPrice)
    {
      $this->regionalSalesPrice = $regionalSalesPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalCostTotal()
    {
      return $this->regionalCostTotal;
    }

    /**
     * @param float $regionalCostTotal
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalCostTotal($regionalCostTotal)
    {
      $this->regionalCostTotal = $regionalCostTotal;
      return $this;
    }

    /**
     * @return int
     */
    public function getAverageRegionalSalesTime()
    {
      return $this->averageRegionalSalesTime;
    }

    /**
     * @param int $averageRegionalSalesTime
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setAverageRegionalSalesTime($averageRegionalSalesTime)
    {
      $this->averageRegionalSalesTime = $averageRegionalSalesTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getVehicleNewPrice()
    {
      return $this->vehicleNewPrice;
    }

    /**
     * @param float $vehicleNewPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setVehicleNewPrice($vehicleNewPrice)
    {
      $this->vehicleNewPrice = $vehicleNewPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getVehicleNewPriceDate()
    {
      return $this->vehicleNewPriceDate;
    }

    /**
     * @param string $vehicleNewPriceDate
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setVehicleNewPriceDate($vehicleNewPriceDate)
    {
      $this->vehicleNewPriceDate = $vehicleNewPriceDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getNationalCommonAskingPrice()
    {
      return $this->nationalCommonAskingPrice;
    }

    /**
     * @param float $nationalCommonAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setNationalCommonAskingPrice($nationalCommonAskingPrice)
    {
      $this->nationalCommonAskingPrice = $nationalCommonAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNationalCommonOptionsAskingPrice()
    {
      return $this->nationalCommonOptionsAskingPrice;
    }

    /**
     * @param float $nationalCommonOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setNationalCommonOptionsAskingPrice($nationalCommonOptionsAskingPrice)
    {
      $this->nationalCommonOptionsAskingPrice = $nationalCommonOptionsAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalCommonAskingPrice()
    {
      return $this->regionalCommonAskingPrice;
    }

    /**
     * @param float $regionalCommonAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalCommonAskingPrice($regionalCommonAskingPrice)
    {
      $this->regionalCommonAskingPrice = $regionalCommonAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalCommonOptionsAskingPrice()
    {
      return $this->regionalCommonOptionsAskingPrice;
    }

    /**
     * @param float $regionalCommonOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalCommonOptionsAskingPrice($regionalCommonOptionsAskingPrice)
    {
      $this->regionalCommonOptionsAskingPrice = $regionalCommonOptionsAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNationalConsumerAskingPrice()
    {
      return $this->nationalConsumerAskingPrice;
    }

    /**
     * @param float $nationalConsumerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setNationalConsumerAskingPrice($nationalConsumerAskingPrice)
    {
      $this->nationalConsumerAskingPrice = $nationalConsumerAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNationalConsumerOptionsAskingPrice()
    {
      return $this->nationalConsumerOptionsAskingPrice;
    }

    /**
     * @param float $nationalConsumerOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setNationalConsumerOptionsAskingPrice($nationalConsumerOptionsAskingPrice)
    {
      $this->nationalConsumerOptionsAskingPrice = $nationalConsumerOptionsAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalConsumerAskingPrice()
    {
      return $this->regionalConsumerAskingPrice;
    }

    /**
     * @param float $regionalConsumerAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalConsumerAskingPrice($regionalConsumerAskingPrice)
    {
      $this->regionalConsumerAskingPrice = $regionalConsumerAskingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getRegionalConsumerOptionsAskingPrice()
    {
      return $this->regionalConsumerOptionsAskingPrice;
    }

    /**
     * @param float $regionalConsumerOptionsAskingPrice
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegionalConsumerOptionsAskingPrice($regionalConsumerOptionsAskingPrice)
    {
      $this->regionalConsumerOptionsAskingPrice = $regionalConsumerOptionsAskingPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getCommonSalesTime()
    {
      return $this->commonSalesTime;
    }

    /**
     * @param int $commonSalesTime
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setCommonSalesTime($commonSalesTime)
    {
      $this->commonSalesTime = $commonSalesTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getStarRating()
    {
      return $this->starRating;
    }

    /**
     * @param int $starRating
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setStarRating($starRating)
    {
      $this->starRating = $starRating;
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
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
      return $this->region;
    }

    /**
     * @param string $region
     * @return \AutovistaAppraisal\WSDL\PriceDataResponse
     */
    public function setRegion($region)
    {
      $this->region = $region;
      return $this;
    }

}
