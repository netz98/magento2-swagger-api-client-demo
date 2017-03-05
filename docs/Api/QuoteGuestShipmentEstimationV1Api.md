# Swagger\Client\QuoteGuestShipmentEstimationV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**](QuoteGuestShipmentEstimationV1Api.md#quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost) | **POST** /V1/guest-carts/{cartId}/estimate-shipping-methods | 


# **quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost**
> \Swagger\Client\Model\QuoteDataShippingMethodInterface[] quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body)



Estimate shipping by address and return list of available shipping methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestShipmentEstimationV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body56(); // \Swagger\Client\Model\Body56 | 

try {
    $result = $api_instance->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestShipmentEstimationV1Api->quoteGuestShipmentEstimationV1EstimateByExtendedAddressPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body56**](../Model/\Swagger\Client\Model\Body56.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataShippingMethodInterface[]**](../Model/QuoteDataShippingMethodInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

