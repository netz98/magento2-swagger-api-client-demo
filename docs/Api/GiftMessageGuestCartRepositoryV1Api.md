# Swagger\Client\GiftMessageGuestCartRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageGuestCartRepositoryV1GetGet**](GiftMessageGuestCartRepositoryV1Api.md#giftMessageGuestCartRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId}/gift-message | 
[**giftMessageGuestCartRepositoryV1SavePost**](GiftMessageGuestCartRepositoryV1Api.md#giftMessageGuestCartRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/gift-message | 


# **giftMessageGuestCartRepositoryV1GetGet**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageGuestCartRepositoryV1GetGet($cart_id)



Return the gift message for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageGuestCartRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The shopping cart ID.

try {
    $result = $api_instance->giftMessageGuestCartRepositoryV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestCartRepositoryV1Api->giftMessageGuestCartRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID. |

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageGuestCartRepositoryV1SavePost**
> bool giftMessageGuestCartRepositoryV1SavePost($cart_id, $body)



Set the gift message for an entire order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageGuestCartRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.
$body = new \Swagger\Client\Model\Body127(); // \Swagger\Client\Model\Body127 | 

try {
    $result = $api_instance->giftMessageGuestCartRepositoryV1SavePost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestCartRepositoryV1Api->giftMessageGuestCartRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **body** | [**\Swagger\Client\Model\Body127**](../Model/\Swagger\Client\Model\Body127.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

