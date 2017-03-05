# Swagger\Client\GiftCardAccountGuestGiftCardAccountManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost) | **POST** /V1/carts/guest-carts/{cartId}/giftCards | 
[**giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet) | **GET** /V1/carts/guest-carts/{cartId}/checkGiftCard/{giftCardCode} | 
[**giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete**](GiftCardAccountGuestGiftCardAccountManagementV1Api.md#giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete) | **DELETE** /V1/carts/guest-carts/{cartId}/giftCards/{giftCardCode} | 


# **giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost**
> bool giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api();
$cart_id = "cart_id_example"; // string | 
$body = new \Swagger\Client\Model\Body120(); // \Swagger\Client\Model\Body120 | 

try {
    $result = $api_instance->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body120**](../Model/\Swagger\Client\Model\Body120.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet**
> float giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api();
$cart_id = "cart_id_example"; // string | 
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet($cart_id, $gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1CheckGiftCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **gift_card_code** | **string**|  |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete**
> bool giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cart_id, $gift_card_code)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGuestGiftCardAccountManagementV1Api();
$cart_id = "cart_id_example"; // string | 
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete($cart_id, $gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGuestGiftCardAccountManagementV1Api->giftCardAccountGuestGiftCardAccountManagementV1DeleteByQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**|  |
 **gift_card_code** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

