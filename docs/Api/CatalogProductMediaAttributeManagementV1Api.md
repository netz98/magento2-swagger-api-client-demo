# Swagger\Client\CatalogProductMediaAttributeManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductMediaAttributeManagementV1GetListGet**](CatalogProductMediaAttributeManagementV1Api.md#catalogProductMediaAttributeManagementV1GetListGet) | **GET** /V1/products/media/types/{attributeSetName} | 


# **catalogProductMediaAttributeManagementV1GetListGet**
> \Swagger\Client\Model\CatalogDataProductAttributeInterface[] catalogProductMediaAttributeManagementV1GetListGet($attribute_set_name)



Retrieve the list of media attributes (fronted input type is media_image) assigned to the given attribute set.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductMediaAttributeManagementV1Api();
$attribute_set_name = "attribute_set_name_example"; // string | 

try {
    $result = $api_instance->catalogProductMediaAttributeManagementV1GetListGet($attribute_set_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductMediaAttributeManagementV1Api->catalogProductMediaAttributeManagementV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_name** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductAttributeInterface[]**](../Model/CatalogDataProductAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

