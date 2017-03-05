# Swagger\Client\SalesOrderManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesOrderManagementV1AddCommentPost**](SalesOrderManagementV1Api.md#salesOrderManagementV1AddCommentPost) | **POST** /V1/orders/{id}/comments | 
[**salesOrderManagementV1CancelPost**](SalesOrderManagementV1Api.md#salesOrderManagementV1CancelPost) | **POST** /V1/orders/{id}/cancel | 
[**salesOrderManagementV1GetCommentsListGet**](SalesOrderManagementV1Api.md#salesOrderManagementV1GetCommentsListGet) | **GET** /V1/orders/{id}/comments | 
[**salesOrderManagementV1GetStatusGet**](SalesOrderManagementV1Api.md#salesOrderManagementV1GetStatusGet) | **GET** /V1/orders/{id}/statuses | 
[**salesOrderManagementV1HoldPost**](SalesOrderManagementV1Api.md#salesOrderManagementV1HoldPost) | **POST** /V1/orders/{id}/hold | 
[**salesOrderManagementV1NotifyPost**](SalesOrderManagementV1Api.md#salesOrderManagementV1NotifyPost) | **POST** /V1/orders/{id}/emails | 
[**salesOrderManagementV1UnHoldPost**](SalesOrderManagementV1Api.md#salesOrderManagementV1UnHoldPost) | **POST** /V1/orders/{id}/unhold | 


# **salesOrderManagementV1AddCommentPost**
> bool salesOrderManagementV1AddCommentPost($id, $body)



Adds a comment to a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.
$body = new \Swagger\Client\Model\Body73(); // \Swagger\Client\Model\Body73 | 

try {
    $result = $api_instance->salesOrderManagementV1AddCommentPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1AddCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |
 **body** | [**\Swagger\Client\Model\Body73**](../Model/\Swagger\Client\Model\Body73.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1CancelPost**
> bool salesOrderManagementV1CancelPost($id)



Cancels a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1CancelPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1CancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1GetCommentsListGet**
> \Swagger\Client\Model\SalesDataOrderStatusHistorySearchResultInterface salesOrderManagementV1GetCommentsListGet($id)



Lists comments for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

[**\Swagger\Client\Model\SalesDataOrderStatusHistorySearchResultInterface**](../Model/SalesDataOrderStatusHistorySearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1GetStatusGet**
> string salesOrderManagementV1GetStatusGet($id)



Gets the status for a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1GetStatusGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1GetStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1HoldPost**
> bool salesOrderManagementV1HoldPost($id)



Holds a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1HoldPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1HoldPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1NotifyPost**
> bool salesOrderManagementV1NotifyPost($id)



Emails a user a specified order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesOrderManagementV1UnHoldPost**
> bool salesOrderManagementV1UnHoldPost($id)



Releases a specified order from hold status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesOrderManagementV1Api();
$id = 56; // int | The order ID.

try {
    $result = $api_instance->salesOrderManagementV1UnHoldPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesOrderManagementV1Api->salesOrderManagementV1UnHoldPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The order ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

