# Swagger\Client\QuoteGuestCartItemRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCartItemRepositoryV1DeleteByIdDelete**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1DeleteByIdDelete) | **DELETE** /V1/guest-carts/{cartId}/items/{itemId} | 
[**quoteGuestCartItemRepositoryV1GetListGet**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1GetListGet) | **GET** /V1/guest-carts/{cartId}/items | 
[**quoteGuestCartItemRepositoryV1SavePost**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/items | 
[**quoteGuestCartItemRepositoryV1SavePut**](QuoteGuestCartItemRepositoryV1Api.md#quoteGuestCartItemRepositoryV1SavePut) | **PUT** /V1/guest-carts/{cartId}/items/{itemId} | 


# **quoteGuestCartItemRepositoryV1DeleteByIdDelete**
> bool quoteGuestCartItemRepositoryV1DeleteByIdDelete($cart_id, $item_id)



Remove the specified item from the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.
$item_id = 56; // int | The item ID of the item to be removed.

try {
    $result = $api_instance->quoteGuestCartItemRepositoryV1DeleteByIdDelete($cart_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **item_id** | **int**| The item ID of the item to be removed. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1GetListGet**
> \Swagger\Client\Model\QuoteDataCartItemInterface[] quoteGuestCartItemRepositoryV1GetListGet($cart_id)



List items that are assigned to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestCartItemRepositoryV1GetListGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

[**\Swagger\Client\Model\QuoteDataCartItemInterface[]**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1SavePost**
> \Swagger\Client\Model\QuoteDataCartItemInterface quoteGuestCartItemRepositoryV1SavePost($cart_id, $body)



Add the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body61(); // \Swagger\Client\Model\Body61 | 

try {
    $result = $api_instance->quoteGuestCartItemRepositoryV1SavePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body61**](../Model/\Swagger\Client\Model\Body61.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCartItemRepositoryV1SavePut**
> \Swagger\Client\Model\QuoteDataCartItemInterface quoteGuestCartItemRepositoryV1SavePut($cart_id, $item_id, $body)



Add the specified item to the specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCartItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | 
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\Body62(); // \Swagger\Client\Model\Body62 | 

try {
    $result = $api_instance->quoteGuestCartItemRepositoryV1SavePut($cart_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCartItemRepositoryV1Api->quoteGuestCartItemRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body62**](../Model/\Swagger\Client\Model\Body62.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QuoteDataCartItemInterface**](../Model/QuoteDataCartItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

