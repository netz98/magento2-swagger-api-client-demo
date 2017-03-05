# Swagger\Client\SalesInvoiceManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesInvoiceManagementV1GetCommentsListGet**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1GetCommentsListGet) | **GET** /V1/invoices/{id}/comments | 
[**salesInvoiceManagementV1NotifyPost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1NotifyPost) | **POST** /V1/invoices/{id}/emails | 
[**salesInvoiceManagementV1SetCapturePost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1SetCapturePost) | **POST** /V1/invoices/{id}/capture | 
[**salesInvoiceManagementV1SetVoidPost**](SalesInvoiceManagementV1Api.md#salesInvoiceManagementV1SetVoidPost) | **POST** /V1/invoices/{id}/void | 


# **salesInvoiceManagementV1GetCommentsListGet**
> \Swagger\Client\Model\SalesDataInvoiceCommentSearchResultInterface salesInvoiceManagementV1GetCommentsListGet($id)



Lists comments for a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesInvoiceManagementV1Api();
$id = 56; // int | The invoice ID.

try {
    $result = $api_instance->salesInvoiceManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

[**\Swagger\Client\Model\SalesDataInvoiceCommentSearchResultInterface**](../Model/SalesDataInvoiceCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1NotifyPost**
> bool salesInvoiceManagementV1NotifyPost($id)



Emails a user a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesInvoiceManagementV1Api();
$id = 56; // int | The invoice ID.

try {
    $result = $api_instance->salesInvoiceManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1SetCapturePost**
> string salesInvoiceManagementV1SetCapturePost($id)



Sets invoice capture.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesInvoiceManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->salesInvoiceManagementV1SetCapturePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1SetCapturePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesInvoiceManagementV1SetVoidPost**
> bool salesInvoiceManagementV1SetVoidPost($id)



Voids a specified invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesInvoiceManagementV1Api();
$id = 56; // int | The invoice ID.

try {
    $result = $api_instance->salesInvoiceManagementV1SetVoidPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesInvoiceManagementV1Api->salesInvoiceManagementV1SetVoidPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The invoice ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

