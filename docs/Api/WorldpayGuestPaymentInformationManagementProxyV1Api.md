# Swagger\Client\WorldpayGuestPaymentInformationManagementProxyV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**](WorldpayGuestPaymentInformationManagementProxyV1Api.md#worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost) | **POST** /V1/worldpay-guest-carts/{cartId}/payment-information | 


# **worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost**
> int worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cart_id, $body)



Proxy handler for guest place order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WorldpayGuestPaymentInformationManagementProxyV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body138(); // \Swagger\Client\Model\Body138 | 

try {
    $result = $api_instance->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorldpayGuestPaymentInformationManagementProxyV1Api->worldpayGuestPaymentInformationManagementProxyV1SavePaymentInformationAndPlaceOrderPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body138**](../Model/\Swagger\Client\Model\Body138.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

