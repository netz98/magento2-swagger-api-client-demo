# Swagger\Client\CatalogProductLinkTypeListV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkTypeListV1GetItemAttributesGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemAttributesGet) | **GET** /V1/products/links/{type}/attributes | 
[**catalogProductLinkTypeListV1GetItemsGet**](CatalogProductLinkTypeListV1Api.md#catalogProductLinkTypeListV1GetItemsGet) | **GET** /V1/products/links/types | 


# **catalogProductLinkTypeListV1GetItemAttributesGet**
> \Swagger\Client\Model\CatalogDataProductLinkAttributeInterface[] catalogProductLinkTypeListV1GetItemAttributesGet($type)



Provide a list of the product link type attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductLinkTypeListV1Api();
$type = "type_example"; // string | 

try {
    $result = $api_instance->catalogProductLinkTypeListV1GetItemAttributesGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemAttributesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductLinkAttributeInterface[]**](../Model/CatalogDataProductLinkAttributeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkTypeListV1GetItemsGet**
> \Swagger\Client\Model\CatalogDataProductLinkTypeInterface[] catalogProductLinkTypeListV1GetItemsGet()



Retrieve information about available product link types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductLinkTypeListV1Api();

try {
    $result = $api_instance->catalogProductLinkTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkTypeListV1Api->catalogProductLinkTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CatalogDataProductLinkTypeInterface[]**](../Model/CatalogDataProductLinkTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

