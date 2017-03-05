# Swagger\Client\QuoteCouponManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**quoteCouponManagementV1GetGet**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1GetGet) | **GET** /V1/carts/{cartId}/coupons | 
[**quoteCouponManagementV1GetGet_0**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1GetGet_0) | **GET** /V1/carts/mine/coupons | 
[**quoteCouponManagementV1RemoveDelete**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1RemoveDelete) | **DELETE** /V1/carts/{cartId}/coupons | 
[**quoteCouponManagementV1RemoveDelete_0**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1RemoveDelete_0) | **DELETE** /V1/carts/mine/coupons | 
[**quoteCouponManagementV1SetPut**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1SetPut) | **PUT** /V1/carts/{cartId}/coupons/{couponCode} | 
[**quoteCouponManagementV1SetPut_0**](QuoteCouponManagementV1Api.md#quoteCouponManagementV1SetPut_0) | **PUT** /V1/carts/mine/coupons/{couponCode} | 


# **quoteCouponManagementV1GetGet**
> string quoteCouponManagementV1GetGet($cart_id)



Returns information for a coupon in a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();
$cart_id = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCouponManagementV1GetGet($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCouponManagementV1GetGet_0**
> string quoteCouponManagementV1GetGet_0()



Returns information for a coupon in a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();

try {
    $result = $api_instance->quoteCouponManagementV1GetGet_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1GetGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCouponManagementV1RemoveDelete**
> bool quoteCouponManagementV1RemoveDelete($cart_id)



Deletes a coupon from a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();
$cart_id = 56; // int | The cart ID.

try {
    $result = $api_instance->quoteCouponManagementV1RemoveDelete($cart_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1RemoveDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCouponManagementV1RemoveDelete_0**
> bool quoteCouponManagementV1RemoveDelete_0()



Deletes a coupon from a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();

try {
    $result = $api_instance->quoteCouponManagementV1RemoveDelete_0();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1RemoveDelete_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCouponManagementV1SetPut**
> bool quoteCouponManagementV1SetPut($cart_id, $coupon_code)



Adds a coupon by code to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();
$cart_id = 56; // int | The cart ID.
$coupon_code = "coupon_code_example"; // string | The coupon code data.

try {
    $result = $api_instance->quoteCouponManagementV1SetPut($cart_id, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1SetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cart_id** | **int**| The cart ID. |
 **coupon_code** | **string**| The coupon code data. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quoteCouponManagementV1SetPut_0**
> bool quoteCouponManagementV1SetPut_0($coupon_code)



Adds a coupon by code to a specified cart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QuoteCouponManagementV1Api();
$coupon_code = "coupon_code_example"; // string | The coupon code data.

try {
    $result = $api_instance->quoteCouponManagementV1SetPut_0($coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteCouponManagementV1Api->quoteCouponManagementV1SetPut_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coupon_code** | **string**| The coupon code data. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

