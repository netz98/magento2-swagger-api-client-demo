# Swagger\Client\CheckoutShippingInformationManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkoutShippingInformationManagementV1SaveAddressInformationPost**](CheckoutShippingInformationManagementV1Api.md#checkoutShippingInformationManagementV1SaveAddressInformationPost) | **POST** /V1/carts/mine/shipping-information | 
[**checkoutShippingInformationManagementV1SaveAddressInformationPost_0**](CheckoutShippingInformationManagementV1Api.md#checkoutShippingInformationManagementV1SaveAddressInformationPost_0) | **POST** /V1/carts/{cartId}/shipping-information | 


# **checkoutShippingInformationManagementV1SaveAddressInformationPost**
> \Swagger\Client\Model\CheckoutDataPaymentDetailsInterface checkoutShippingInformationManagementV1SaveAddressInformationPost($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CheckoutShippingInformationManagementV1Api();
$body = new \Swagger\Client\Model\Body95(); // \Swagger\Client\Model\Body95 | 

try {
    $result = $api_instance->checkoutShippingInformationManagementV1SaveAddressInformationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutShippingInformationManagementV1Api->checkoutShippingInformationManagementV1SaveAddressInformationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body95**](../Model/\Swagger\Client\Model\Body95.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkoutShippingInformationManagementV1SaveAddressInformationPost_0**
> \Swagger\Client\Model\CheckoutDataPaymentDetailsInterface checkoutShippingInformationManagementV1SaveAddressInformationPost_0($cart_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CheckoutShippingInformationManagementV1Api();
$cart_id = 56; // int | 
$body = new \Swagger\Client\Model\Body96(); // \Swagger\Client\Model\Body96 | 

try {
    $result = $api_instance->checkoutShippingInformationManagementV1SaveAddressInformationPost_0($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutShippingInformationManagementV1Api->checkoutShippingInformationManagementV1SaveAddressInformationPost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body96**](../Model/\Swagger\Client\Model\Body96.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckoutDataPaymentDetailsInterface**](../Model/CheckoutDataPaymentDetailsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

