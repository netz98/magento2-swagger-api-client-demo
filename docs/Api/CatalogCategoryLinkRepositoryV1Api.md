# Swagger\Client\CatalogCategoryLinkRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogCategoryLinkRepositoryV1DeleteByIdsDelete**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1DeleteByIdsDelete) | **DELETE** /V1/categories/{categoryId}/products/{sku} | 
[**catalogCategoryLinkRepositoryV1SavePost**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePost) | **POST** /V1/categories/{categoryId}/products | 
[**catalogCategoryLinkRepositoryV1SavePut**](CatalogCategoryLinkRepositoryV1Api.md#catalogCategoryLinkRepositoryV1SavePut) | **PUT** /V1/categories/{categoryId}/products | 


# **catalogCategoryLinkRepositoryV1DeleteByIdsDelete**
> bool catalogCategoryLinkRepositoryV1DeleteByIdsDelete($category_id, $sku)



Remove the product assignment from the category by category id and sku

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogCategoryLinkRepositoryV1Api();
$category_id = "category_id_example"; // string | 
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->catalogCategoryLinkRepositoryV1DeleteByIdsDelete($category_id, $sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1DeleteByIdsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**|  |
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePost**
> bool catalogCategoryLinkRepositoryV1SavePost($category_id, $body)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogCategoryLinkRepositoryV1Api();
$category_id = "category_id_example"; // string | 
$body = new \Swagger\Client\Model\Body38(); // \Swagger\Client\Model\Body38 | 

try {
    $result = $api_instance->catalogCategoryLinkRepositoryV1SavePost($category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body38**](../Model/\Swagger\Client\Model\Body38.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogCategoryLinkRepositoryV1SavePut**
> bool catalogCategoryLinkRepositoryV1SavePut($category_id, $body)



Assign a product to the required category

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogCategoryLinkRepositoryV1Api();
$category_id = "category_id_example"; // string | 
$body = new \Swagger\Client\Model\Body37(); // \Swagger\Client\Model\Body37 | 

try {
    $result = $api_instance->catalogCategoryLinkRepositoryV1SavePut($category_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogCategoryLinkRepositoryV1Api->catalogCategoryLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body37**](../Model/\Swagger\Client\Model\Body37.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

