# Swagger\Client\CatalogProductAttributeOptionManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeOptionManagementV1AddPost**](CatalogProductAttributeOptionManagementV1Api.md#catalogProductAttributeOptionManagementV1AddPost) | **POST** /V1/products/attributes/{attributeCode}/options | 
[**catalogProductAttributeOptionManagementV1DeleteDelete**](CatalogProductAttributeOptionManagementV1Api.md#catalogProductAttributeOptionManagementV1DeleteDelete) | **DELETE** /V1/products/attributes/{attributeCode}/options/{optionId} | 
[**catalogProductAttributeOptionManagementV1GetItemsGet**](CatalogProductAttributeOptionManagementV1Api.md#catalogProductAttributeOptionManagementV1GetItemsGet) | **GET** /V1/products/attributes/{attributeCode}/options | 


# **catalogProductAttributeOptionManagementV1AddPost**
> bool catalogProductAttributeOptionManagementV1AddPost($attribute_code, $body)



Add option to attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeOptionManagementV1Api();
$attribute_code = "attribute_code_example"; // string | 
$body = new \Swagger\Client\Model\Body27(); // \Swagger\Client\Model\Body27 | 

try {
    $result = $api_instance->catalogProductAttributeOptionManagementV1AddPost($attribute_code, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeOptionManagementV1Api->catalogProductAttributeOptionManagementV1AddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_code** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body27**](../Model/\Swagger\Client\Model\Body27.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeOptionManagementV1DeleteDelete**
> bool catalogProductAttributeOptionManagementV1DeleteDelete($attribute_code, $option_id)



Delete option from attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeOptionManagementV1Api();
$attribute_code = "attribute_code_example"; // string | 
$option_id = "option_id_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeOptionManagementV1DeleteDelete($attribute_code, $option_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeOptionManagementV1Api->catalogProductAttributeOptionManagementV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_code** | **string**|  |
 **option_id** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeOptionManagementV1GetItemsGet**
> \Swagger\Client\Model\EavDataAttributeOptionInterface[] catalogProductAttributeOptionManagementV1GetItemsGet($attribute_code)



Retrieve list of attribute options

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeOptionManagementV1Api();
$attribute_code = "attribute_code_example"; // string | 

try {
    $result = $api_instance->catalogProductAttributeOptionManagementV1GetItemsGet($attribute_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeOptionManagementV1Api->catalogProductAttributeOptionManagementV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_code** | **string**|  |

### Return type

[**\Swagger\Client\Model\EavDataAttributeOptionInterface[]**](../Model/EavDataAttributeOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

