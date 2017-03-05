# Swagger\Client\CustomerCustomerMetadataV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerCustomerMetadataV1GetAllAttributesMetadataGet**](CustomerCustomerMetadataV1Api.md#customerCustomerMetadataV1GetAllAttributesMetadataGet) | **GET** /V1/attributeMetadata/customer | 
[**customerCustomerMetadataV1GetAttributeMetadataGet**](CustomerCustomerMetadataV1Api.md#customerCustomerMetadataV1GetAttributeMetadataGet) | **GET** /V1/attributeMetadata/customer/attribute/{attributeCode} | 
[**customerCustomerMetadataV1GetAttributesGet**](CustomerCustomerMetadataV1Api.md#customerCustomerMetadataV1GetAttributesGet) | **GET** /V1/attributeMetadata/customer/form/{formCode} | 
[**customerCustomerMetadataV1GetCustomAttributesMetadataGet**](CustomerCustomerMetadataV1Api.md#customerCustomerMetadataV1GetCustomAttributesMetadataGet) | **GET** /V1/attributeMetadata/customer/custom | 


# **customerCustomerMetadataV1GetAllAttributesMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerCustomerMetadataV1GetAllAttributesMetadataGet()



Get all attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerCustomerMetadataV1Api();

try {
    $result = $api_instance->customerCustomerMetadataV1GetAllAttributesMetadataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerMetadataV1Api->customerCustomerMetadataV1GetAllAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerMetadataV1GetAttributeMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface customerCustomerMetadataV1GetAttributeMetadataGet($attribute_code)



Retrieve attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerCustomerMetadataV1Api();
$attribute_code = "attribute_code_example"; // string | 

try {
    $result = $api_instance->customerCustomerMetadataV1GetAttributeMetadataGet($attribute_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerMetadataV1Api->customerCustomerMetadataV1GetAttributeMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataAttributeMetadataInterface**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerMetadataV1GetAttributesGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerCustomerMetadataV1GetAttributesGet($form_code)



Retrieve all attributes filtered by form code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerCustomerMetadataV1Api();
$form_code = "form_code_example"; // string | 

try {
    $result = $api_instance->customerCustomerMetadataV1GetAttributesGet($form_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerMetadataV1Api->customerCustomerMetadataV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerCustomerMetadataV1GetCustomAttributesMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerCustomerMetadataV1GetCustomAttributesMetadataGet($data_interface_name)



Get custom attributes metadata for the given data interface.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerCustomerMetadataV1Api();
$data_interface_name = "data_interface_name_example"; // string | 

try {
    $result = $api_instance->customerCustomerMetadataV1GetCustomAttributesMetadataGet($data_interface_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCustomerMetadataV1Api->customerCustomerMetadataV1GetCustomAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data_interface_name** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataAttributeMetadataInterface[]**](../Model/CustomerDataAttributeMetadataInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

