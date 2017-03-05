# Swagger\Client\QuoteGuestCartRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartRepositoryV1GetGet**](QuoteGuestCartRepositoryV1Api.md#quoteGuestCartRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId} | 


# **quoteGuestCartRepositoryV1GetGet**
> \Swagger\Client\Model\QuoteDataCartInterface quoteGuestCartRepositoryV1GetGet($cart_id)



Enable a guest user to return information for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartRepositoryV1Api();
$cart_id = "cart_id_example"; // string | 

try {
    $result = $api_instance->quoteGuestCartRepositoryV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartRepositoryV1Api->quoteGuestCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\QuoteDataCartInterface**](../Model/QuoteDataCartInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

