# Swagger\Client\CustomerGroupManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupManagementV1GetDefaultGroupGet**](CustomerGroupManagementV1Api.md#customerGroupManagementV1GetDefaultGroupGet) | **GET** /V1/customerGroups/default/{storeId} | 
[**customerGroupManagementV1GetDefaultGroupGet_0**](CustomerGroupManagementV1Api.md#customerGroupManagementV1GetDefaultGroupGet_0) | **GET** /V1/customerGroups/default | 
[**customerGroupManagementV1IsReadonlyGet**](CustomerGroupManagementV1Api.md#customerGroupManagementV1IsReadonlyGet) | **GET** /V1/customerGroups/{id}/permissions | 


# **customerGroupManagementV1GetDefaultGroupGet**
> \Swagger\Client\Model\CustomerDataGroupInterface customerGroupManagementV1GetDefaultGroupGet($store_id)



Get default customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupManagementV1Api();
$store_id = 56; // int | 

try {
    $result = $api_instance->customerGroupManagementV1GetDefaultGroupGet($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupManagementV1Api->customerGroupManagementV1GetDefaultGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupManagementV1GetDefaultGroupGet_0**
> \Swagger\Client\Model\CustomerDataGroupInterface customerGroupManagementV1GetDefaultGroupGet_0($store_id)



Get default customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupManagementV1Api();
$store_id = 56; // int | 

try {
    $result = $api_instance->customerGroupManagementV1GetDefaultGroupGet_0($store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupManagementV1Api->customerGroupManagementV1GetDefaultGroupGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupManagementV1IsReadonlyGet**
> bool customerGroupManagementV1IsReadonlyGet($id)



Check if customer group can be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->customerGroupManagementV1IsReadonlyGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupManagementV1Api->customerGroupManagementV1IsReadonlyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

