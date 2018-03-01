<?php

namespace AutovistaAppraisal\WSDL;

class AppraisalService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AppraisalActivationRequest' => 'AutovistaAppraisal\\WSDL\\AppraisalActivationRequest',
      'AppraisalActivationResponse' => 'AutovistaAppraisal\\WSDL\\AppraisalActivationResponse',
      'AppraisalHistoryDataRequest' => 'AutovistaAppraisal\\WSDL\\AppraisalHistoryDataRequest',
      'AppraisalHistoryDataResponse' => 'AutovistaAppraisal\\WSDL\\AppraisalHistoryDataResponse',
      'AuthenticationRequest' => 'AutovistaAppraisal\\WSDL\\AuthenticationRequest',
      'AuthenticationResponse' => 'AutovistaAppraisal\\WSDL\\AuthenticationResponse',
      'DownloadCustomerAppraisalCardRequest' => 'AutovistaAppraisal\\WSDL\\DownloadCustomerAppraisalCardRequest',
      'DownloadCustomerAppraisalCardResponse' => 'AutovistaAppraisal\\WSDL\\DownloadCustomerAppraisalCardResponse',
      'FixConfirmationRequest' => 'AutovistaAppraisal\\WSDL\\FixConfirmationRequest',
      'FixConfirmationResponse' => 'AutovistaAppraisal\\WSDL\\FixConfirmationResponse',
      'FixDataRequest' => 'AutovistaAppraisal\\WSDL\\FixDataRequest',
      'FixDataResponse' => 'AutovistaAppraisal\\WSDL\\FixDataResponse',
      'IdentificationConfirmationRequest' => 'AutovistaAppraisal\\WSDL\\IdentificationConfirmationRequest',
      'IdentificationConfirmationResponse' => 'AutovistaAppraisal\\WSDL\\IdentificationConfirmationResponse',
      'IdentificationDataRequest' => 'AutovistaAppraisal\\WSDL\\IdentificationDataRequest',
      'IdentificationDataResponse' => 'AutovistaAppraisal\\WSDL\\IdentificationDataResponse',
      'OptionConfirmationRequest' => 'AutovistaAppraisal\\WSDL\\OptionConfirmationRequest',
      'OptionConfirmationResponse' => 'AutovistaAppraisal\\WSDL\\OptionConfirmationResponse',
      'OptionDataRequest' => 'AutovistaAppraisal\\WSDL\\OptionDataRequest',
      'OptionDataResponse' => 'AutovistaAppraisal\\WSDL\\OptionDataResponse',
      'PriceDataRequest' => 'AutovistaAppraisal\\WSDL\\PriceDataRequest',
      'PriceDataResponse' => 'AutovistaAppraisal\\WSDL\\PriceDataResponse',
      'RegistrationDataRequest' => 'AutovistaAppraisal\\WSDL\\RegistrationDataRequest',
      'RegistrationDataResponse' => 'AutovistaAppraisal\\WSDL\\RegistrationDataResponse',
      'AbsAppraisalRequest' => 'AutovistaAppraisal\\WSDL\\AbsAppraisalRequest',
      'OptionData' => 'AutovistaAppraisal\\WSDL\\OptionData',
      'FixData' => 'AutovistaAppraisal\\WSDL\\FixData',
      'AppraisalHistoryData' => 'AutovistaAppraisal\\WSDL\\AppraisalHistoryData',
      'Type' => 'AutovistaAppraisal\\WSDL\\Type',
      'AlternativeTypes' => 'AutovistaAppraisal\\WSDL\\AlternativeTypes',
      'RegistrationData' => 'AutovistaAppraisal\\WSDL\\RegistrationData',
      'RegistrationInfo' => 'AutovistaAppraisal\\WSDL\\RegistrationInfo',
      'RegistrationNodeType' => 'AutovistaAppraisal\\WSDL\\RegistrationNodeType',
      'LeafRegistrationNodeType' => 'AutovistaAppraisal\\WSDL\\LeafRegistrationNodeType',
      'InsuranceInfo' => 'AutovistaAppraisal\\WSDL\\InsuranceInfo',
      'VehicleInfo' => 'AutovistaAppraisal\\WSDL\\VehicleInfo',
      'OwnersHolder' => 'AutovistaAppraisal\\WSDL\\OwnersHolder',
      'InspectionHistory' => 'AutovistaAppraisal\\WSDL\\InspectionHistory',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://visws.autovista.eu/AbsAppraisal-1.2/service?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param AppraisalHistoryDataRequest $appraisalHistoryDataRequest
     * @return AppraisalHistoryDataResponse
     */
    public function AppraisalHistoryData(AppraisalHistoryDataRequest $appraisalHistoryDataRequest)
    {
      return $this->__soapCall('AppraisalHistoryData', array($appraisalHistoryDataRequest));
    }

    /**
     * @param IdentificationConfirmationRequest $identificationConfirmationRequest
     * @return IdentificationConfirmationResponse
     */
    public function IdentificationConfirmation(IdentificationConfirmationRequest $identificationConfirmationRequest)
    {
      return $this->__soapCall('IdentificationConfirmation', array($identificationConfirmationRequest));
    }

    /**
     * @param PriceDataRequest $priceDataRequest
     * @return PriceDataResponse
     */
    public function PriceData(PriceDataRequest $priceDataRequest)
    {
      return $this->__soapCall('PriceData', array($priceDataRequest));
    }

    /**
     * @param OptionConfirmationRequest $optionConfirmationRequest
     * @return OptionConfirmationResponse
     */
    public function OptionConfirmation(OptionConfirmationRequest $optionConfirmationRequest)
    {
      return $this->__soapCall('OptionConfirmation', array($optionConfirmationRequest));
    }

    /**
     * @param AuthenticationRequest $authenticationRequest
     * @return AuthenticationResponse
     */
    public function Authentication(AuthenticationRequest $authenticationRequest)
    {
      return $this->__soapCall('Authentication', array($authenticationRequest));
    }

    /**
     * @param IdentificationDataRequest $identificationDataRequest
     * @return IdentificationDataResponse
     */
    public function IdentificationData(IdentificationDataRequest $identificationDataRequest)
    {
      return $this->__soapCall('IdentificationData', array($identificationDataRequest));
    }

    /**
     * @param OptionDataRequest $optionDataRequest
     * @return OptionDataResponse
     */
    public function OptionData(OptionDataRequest $optionDataRequest)
    {
      return $this->__soapCall('OptionData', array($optionDataRequest));
    }

    /**
     * @param FixConfirmationRequest $fixConfirmationRequest
     * @return FixConfirmationResponse
     */
    public function FixConfirmation(FixConfirmationRequest $fixConfirmationRequest)
    {
      return $this->__soapCall('FixConfirmation', array($fixConfirmationRequest));
    }

    /**
     * @param RegistrationDataRequest $registrationDataRequest
     * @return RegistrationDataResponse
     */
    public function RegistrationData(RegistrationDataRequest $registrationDataRequest)
    {
      return $this->__soapCall('RegistrationData', array($registrationDataRequest));
    }

    /**
     * @param FixDataRequest $fixDataRequest
     * @return FixDataResponse
     */
    public function FixData(FixDataRequest $fixDataRequest)
    {
      return $this->__soapCall('FixData', array($fixDataRequest));
    }

    /**
     * @param AppraisalActivationRequest $appraisalActivationRequest
     * @return AppraisalActivationResponse
     */
    public function AppraisalActivation(AppraisalActivationRequest $appraisalActivationRequest)
    {
      return $this->__soapCall('AppraisalActivation', array($appraisalActivationRequest));
    }

}
