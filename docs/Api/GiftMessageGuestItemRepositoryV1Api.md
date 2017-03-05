# Swagger\Client\GiftMessageGuestItemRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftMessageGuestItemRepositoryV1GetGet**](GiftMessageGuestItemRepositoryV1Api.md#giftMessageGuestItemRepositoryV1GetGet) | **GET** /V1/guest-carts/{cartId}/gift-message/{itemId} | 
[**giftMessageGuestItemRepositoryV1SavePost**](GiftMessageGuestItemRepositoryV1Api.md#giftMessageGuestItemRepositoryV1SavePost) | **POST** /V1/guest-carts/{cartId}/gift-message/{itemId} | 


# **giftMessageGuestItemRepositoryV1GetGet**
> \Swagger\Client\Model\GiftMessageDataMessageInterface giftMessageGuestItemRepositoryV1GetGet($cart_id, $item_id)



Return the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageGuestItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The shopping cart ID.
$item_id = 56; // int | The item ID.

try {
    $result = $api_instance->giftMessageGuestItemRepositoryV1GetGet($cart_id, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestItemRepositoryV1Api->giftMessageGuestItemRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The shopping cart ID. |
 **item_id** | **int**| The item ID. |

### Return type

[**\Swagger\Client\Model\GiftMessageDataMessageInterface**](../Model/GiftMessageDataMessageInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftMessageGuestItemRepositoryV1SavePost**
> bool giftMessageGuestItemRepositoryV1SavePost($cart_id, $item_id, $body)



Set the gift message for a specified item in a specified shopping cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftMessageGuestItemRepositoryV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.
$item_id = 56; // int | The item ID.
$body = new \Swagger\Client\Model\Body128(); // \Swagger\Client\Model\Body128 | 

try {
    $result = $api_instance->giftMessageGuestItemRepositoryV1SavePost($cart_id, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftMessageGuestItemRepositoryV1Api->giftMessageGuestItemRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **item_id** | **int**| The item ID. |
 **body** | [**\Swagger\Client\Model\Body128**](../Model/\Swagger\Client\Model\Body128.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

