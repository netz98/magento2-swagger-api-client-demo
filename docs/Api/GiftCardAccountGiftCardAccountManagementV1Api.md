# Swagger\Client\GiftCardAccountGiftCardAccountManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet) | **GET** /V1/carts/mine/checkGiftCard/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete) | **DELETE** /V1/carts/{cartId}/giftCards/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0) | **DELETE** /V1/carts/mine/giftCards/{giftCardCode} | 
[**giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet) | **GET** /V1/carts/{quoteId}/giftCards | 
[**giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost) | **POST** /V1/carts/mine/giftCards | 
[**giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut**](GiftCardAccountGiftCardAccountManagementV1Api.md#giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut) | **PUT** /V1/carts/{cartId}/giftCards | 


# **giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet**
> float giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($gift_card_code)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet($gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1CheckGiftCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_code** | **string**|  |

### Return type

**float**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete**
> bool giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cart_id, $gift_card_code)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$cart_id = 56; // int | 
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete($cart_id, $gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**|  |
 **gift_card_code** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0**
> bool giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0($gift_card_code)



Remove GiftCard Account entity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$gift_card_code = "gift_card_code_example"; // string | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0($gift_card_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1DeleteByQuoteIdDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gift_card_code** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet**
> \Swagger\Client\Model\GiftCardAccountDataGiftCardAccountInterface giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quote_id)



Return GiftCard Account cards

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$quote_id = 56; // int | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet($quote_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1GetListByQuoteIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\GiftCardAccountDataGiftCardAccountInterface**](../Model/GiftCardAccountDataGiftCardAccountInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost**
> bool giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body119(); // \Swagger\Client\Model\Body119 | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body119**](../Model/\Swagger\Client\Model\Body119.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut**
> bool giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cart_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftCardAccountGiftCardAccountManagementV1Api();
$cart_id = 56; // int | 
$body = new \Swagger\Client\Model\Body118(); // \Swagger\Client\Model\Body118 | 

try {
    $result = $api_instance->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut($cart_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftCardAccountGiftCardAccountManagementV1Api->giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body118**](../Model/\Swagger\Client\Model\Body118.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

