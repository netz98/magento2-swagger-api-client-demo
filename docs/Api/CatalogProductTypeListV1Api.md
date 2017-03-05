# Swagger\Client\CatalogProductTypeListV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductTypeListV1GetProductTypesGet**](CatalogProductTypeListV1Api.md#catalogProductTypeListV1GetProductTypesGet) | **GET** /V1/products/types | 


# **catalogProductTypeListV1GetProductTypesGet**
> \Swagger\Client\Model\CatalogDataProductTypeInterface[] catalogProductTypeListV1GetProductTypesGet()



Retrieve available product types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductTypeListV1Api();

try {
    $result = $api_instance->catalogProductTypeListV1GetProductTypesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductTypeListV1Api->catalogProductTypeListV1GetProductTypesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CatalogDataProductTypeInterface[]**](../Model/CatalogDataProductTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

