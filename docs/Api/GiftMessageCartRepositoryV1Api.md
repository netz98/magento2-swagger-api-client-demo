# Swagger\Client\GiftMessageCartRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageCartRepositoryV1GetGet**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1GetGet) | **GET** /V1/carts/{cartId}/gift-message | 
[**giftMessageCartRepositoryV1GetGet_0**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1GetGet_0) | **GET** /V1/carts/mine/gift-message | 
[**giftMessageCartRepositoryV1SavePost**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1SavePost) | **POST** /V1/carts/{cartId}/gift-message | 
[**giftMessageCartRepositoryV1SavePost_0**](GiftMessageCartRepositoryV1Api.md#giftMessageCartRepositoryV1SavePost_0) | **POST** /V1/carts/mine/gift-message | 


# **giftMessageCartRepositoryV1GetGet**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageCartRepositoryV1GetGet($cart_id)



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageCartRepositoryV1Api();
$cart_id = 56; // int | The shopping cart ID.

try {
    $result = $api_instance->giftMessageCartRepositoryV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The shopping cart ID. |

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1GetGet_0**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageCartRepositoryV1GetGet_0()



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageCartRepositoryV1Api();

try {
    $result = $api_instance->giftMessageCartRepositoryV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1SavePost**
> bool giftMessageCartRepositoryV1SavePost($cart_id, $body)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageCartRepositoryV1Api();
$cart_id = 56; // int | The cart ID.
$body = new \Swagger\Client\Model\Body123(); // \Swagger\Client\Model\Body123 | 

try {
    $result = $api_instance->giftMessageCartRepositoryV1SavePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body123**](../Model/\Swagger\Client\Model\Body123.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageCartRepositoryV1SavePost_0**
> bool giftMessageCartRepositoryV1SavePost_0($body)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageCartRepositoryV1Api();
$body = new \Swagger\Client\Model\Body124(); // \Swagger\Client\Model\Body124 | 

try {
    $result = $api_instance->giftMessageCartRepositoryV1SavePost_0($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageCartRepositoryV1Api->giftMessageCartRepositoryV1SavePost_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body124**](../Model/\Swagger\Client\Model\Body124.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

