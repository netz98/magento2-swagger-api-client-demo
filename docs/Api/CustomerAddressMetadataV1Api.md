# Swagger\Client\CustomerAddressMetadataV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAddressMetadataV1GetAllAttributesMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAllAttributesMetadataGet) | **GET** /V1/attributeMetadata/customerAddress | 
[**customerAddressMetadataV1GetAttributeMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAttributeMetadataGet) | **GET** /V1/attributeMetadata/customerAddress/attribute/{attributeCode} | 
[**customerAddressMetadataV1GetAttributesGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetAttributesGet) | **GET** /V1/attributeMetadata/customerAddress/form/{formCode} | 
[**customerAddressMetadataV1GetCustomAttributesMetadataGet**](CustomerAddressMetadataV1Api.md#customerAddressMetadataV1GetCustomAttributesMetadataGet) | **GET** /V1/attributeMetadata/customerAddress/custom | 


# **customerAddressMetadataV1GetAllAttributesMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetAllAttributesMetadataGet()



Get all attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressMetadataV1Api();

try {
    $result = $api_instance->customerAddressMetadataV1GetAllAttributesMetadataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAllAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetAttributeMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface customerAddressMetadataV1GetAttributeMetadataGet($attribute_code)



Retrieve attribute metadata.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressMetadataV1Api();
$attribute_code = "attribute_code_example"; // string | 

try {
    $result = $api_instance->customerAddressMetadataV1GetAttributeMetadataGet($attribute_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAttributeMetadataGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetAttributesGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetAttributesGet($form_code)



Retrieve all attributes filtered by form code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressMetadataV1Api();
$form_code = "form_code_example"; // string | 

try {
    $result = $api_instance->customerAddressMetadataV1GetAttributesGet($form_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetAttributesGet: ', $e->getMessage(), PHP_EOL;
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

# **customerAddressMetadataV1GetCustomAttributesMetadataGet**
> \Swagger\Client\Model\CustomerDataAttributeMetadataInterface[] customerAddressMetadataV1GetCustomAttributesMetadataGet($data_interface_name)



Get custom attributes metadata for the given data interface.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressMetadataV1Api();
$data_interface_name = "data_interface_name_example"; // string | 

try {
    $result = $api_instance->customerAddressMetadataV1GetCustomAttributesMetadataGet($data_interface_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressMetadataV1Api->customerAddressMetadataV1GetCustomAttributesMetadataGet: ', $e->getMessage(), PHP_EOL;
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

