# Swagger\Client\QuoteGuestCouponManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteGuestCouponManagementV1GetGet**](QuoteGuestCouponManagementV1Api.md#quoteGuestCouponManagementV1GetGet) | **GET** /V1/guest-carts/{cartId}/coupons | 
[**quoteGuestCouponManagementV1RemoveDelete**](QuoteGuestCouponManagementV1Api.md#quoteGuestCouponManagementV1RemoveDelete) | **DELETE** /V1/guest-carts/{cartId}/coupons | 
[**quoteGuestCouponManagementV1SetPut**](QuoteGuestCouponManagementV1Api.md#quoteGuestCouponManagementV1SetPut) | **PUT** /V1/guest-carts/{cartId}/coupons/{couponCode} | 


# **quoteGuestCouponManagementV1GetGet**
> string quoteGuestCouponManagementV1GetGet($cart_id)



Return information for a coupon in a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCouponManagementV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestCouponManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCouponManagementV1Api->quoteGuestCouponManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCouponManagementV1RemoveDelete**
> bool quoteGuestCouponManagementV1RemoveDelete($cart_id)



Delete a coupon from a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCouponManagementV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.

try {
    $result = $api_instance->quoteGuestCouponManagementV1RemoveDelete($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCouponManagementV1Api->quoteGuestCouponManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteGuestCouponManagementV1SetPut**
> bool quoteGuestCouponManagementV1SetPut($cart_id, $coupon_code)



Add a coupon by code to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteGuestCouponManagementV1Api();
$cart_id = "cart_id_example"; // string | The cart ID.
$coupon_code = "coupon_code_example"; // string | The coupon code data.

try {
    $result = $api_instance->quoteGuestCouponManagementV1SetPut($cart_id, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteGuestCouponManagementV1Api->quoteGuestCouponManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **string**| The cart ID. |
 **coupon_code** | **string**| The coupon code data. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

