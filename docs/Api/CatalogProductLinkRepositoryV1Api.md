# Swagger\Client\CatalogProductLinkRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductLinkRepositoryV1DeleteByIdDelete**](CatalogProductLinkRepositoryV1Api.md#catalogProductLinkRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku}/links/{type}/{linkedProductSku} | 
[**catalogProductLinkRepositoryV1SavePut**](CatalogProductLinkRepositoryV1Api.md#catalogProductLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/links | 


# **catalogProductLinkRepositoryV1DeleteByIdDelete**
> bool catalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linked_product_sku)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$type = "type_example"; // string | 
$linked_product_sku = "linked_product_sku_example"; // string | 

try {
    $result = $api_instance->catalogProductLinkRepositoryV1DeleteByIdDelete($sku, $type, $linked_product_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkRepositoryV1Api->catalogProductLinkRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **type** | **string**|  |
 **linked_product_sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductLinkRepositoryV1SavePut**
> bool catalogProductLinkRepositoryV1SavePut($sku, $body)



Save product link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body35(); // \Swagger\Client\Model\Body35 | 

try {
    $result = $api_instance->catalogProductLinkRepositoryV1SavePut($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductLinkRepositoryV1Api->catalogProductLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body35**](../Model/\Swagger\Client\Model\Body35.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

