# Swagger\Client\SalesShipmentManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentManagementV1GetCommentsListGet**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1GetCommentsListGet) | **GET** /V1/shipment/{id}/comments | 
[**salesShipmentManagementV1GetLabelGet**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1GetLabelGet) | **GET** /V1/shipment/{id}/label | 
[**salesShipmentManagementV1NotifyPost**](SalesShipmentManagementV1Api.md#salesShipmentManagementV1NotifyPost) | **POST** /V1/shipment/{id}/emails | 


# **salesShipmentManagementV1GetCommentsListGet**
> \Swagger\Client\Model\SalesDataShipmentCommentSearchResultInterface salesShipmentManagementV1GetCommentsListGet($id)



Lists comments for a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentManagementV1Api();
$id = 56; // int | The shipment ID.

try {
    $result = $api_instance->salesShipmentManagementV1GetCommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1GetCommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

[**\Swagger\Client\Model\SalesDataShipmentCommentSearchResultInterface**](../Model/SalesDataShipmentCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentManagementV1GetLabelGet**
> string salesShipmentManagementV1GetLabelGet($id)



Gets a specified shipment label.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentManagementV1Api();
$id = 56; // int | The shipment label ID.

try {
    $result = $api_instance->salesShipmentManagementV1GetLabelGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1GetLabelGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment label ID. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentManagementV1NotifyPost**
> bool salesShipmentManagementV1NotifyPost($id)



Emails user a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentManagementV1Api();
$id = 56; // int | The shipment ID.

try {
    $result = $api_instance->salesShipmentManagementV1NotifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentManagementV1Api->salesShipmentManagementV1NotifyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

