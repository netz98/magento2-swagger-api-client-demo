# Swagger\Client\QuoteCartTotalRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCartTotalRepositoryV1GetGet**](QuoteCartTotalRepositoryV1Api.md#quoteCartTotalRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/totals | 
[**quoteCartTotalRepositoryV1GetGet_0**](QuoteCartTotalRepositoryV1Api.md#quoteCartTotalRepositoryV1GetGet_0) | **GET** /V1/carts/mine/totals | 


# **quoteCartTotalRepositoryV1GetGet**
> \Swagger\Client\Model\QuoteDataTotalsInterface quoteCartTotalRepositoryV1GetGet($cart_id)



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCartTotalRepositoryV1Api();
$cart_id = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCartTotalRepositoryV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalRepositoryV1Api->quoteCartTotalRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCartTotalRepositoryV1GetGet_0**
> \Swagger\Client\Model\QuoteDataTotalsInterface quoteCartTotalRepositoryV1GetGet_0()



Returns quote totals data for a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCartTotalRepositoryV1Api();

try {
    $result = $api_instance->quoteCartTotalRepositoryV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCartTotalRepositoryV1Api->quoteCartTotalRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\QuoteDataTotalsInterface**](../Model/QuoteDataTotalsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

