# Swagger\Client\CatalogInventoryStockRegistryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogInventoryStockRegistryV1GetLowStockItemsGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetLowStockItemsGet) | **GET** /V1/stockItems/lowStock/ | 
[**catalogInventoryStockRegistryV1GetStockItemBySkuGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetStockItemBySkuGet) | **GET** /V1/stockItems/{productSku} | 
[**catalogInventoryStockRegistryV1GetStockStatusBySkuGet**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1GetStockStatusBySkuGet) | **GET** /V1/stockStatuses/{productSku} | 
[**catalogInventoryStockRegistryV1UpdateStockItemBySkuPut**](CatalogInventoryStockRegistryV1Api.md#catalogInventoryStockRegistryV1UpdateStockItemBySkuPut) | **PUT** /V1/products/{productSku}/stockItems/{itemId} | 


# **catalogInventoryStockRegistryV1GetLowStockItemsGet**
> \Swagger\Client\Model\CatalogInventoryDataStockStatusCollectionInterface catalogInventoryStockRegistryV1GetLowStockItemsGet($scope_id, $qty, $current_page, $page_size)



Retrieves a list of SKU's with low inventory qty

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogInventoryStockRegistryV1Api();
$scope_id = 56; // int | 
$qty = 3.4; // float | 
$current_page = 56; // int | 
$page_size = 56; // int | 

try {
    $result = $api_instance->catalogInventoryStockRegistryV1GetLowStockItemsGet($scope_id, $qty, $current_page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetLowStockItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope_id** | **int**|  |
 **qty** | **float**|  |
 **current_page** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogInventoryDataStockStatusCollectionInterface**](../Model/CatalogInventoryDataStockStatusCollectionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1GetStockItemBySkuGet**
> \Swagger\Client\Model\CatalogInventoryDataStockItemInterface catalogInventoryStockRegistryV1GetStockItemBySkuGet($product_sku, $scope_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogInventoryStockRegistryV1Api();
$product_sku = "product_sku_example"; // string | 
$scope_id = 56; // int | 

try {
    $result = $api_instance->catalogInventoryStockRegistryV1GetStockItemBySkuGet($product_sku, $scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetStockItemBySkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku** | **string**|  |
 **scope_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogInventoryDataStockItemInterface**](../Model/CatalogInventoryDataStockItemInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1GetStockStatusBySkuGet**
> \Swagger\Client\Model\CatalogInventoryDataStockStatusInterface catalogInventoryStockRegistryV1GetStockStatusBySkuGet($product_sku, $scope_id)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogInventoryStockRegistryV1Api();
$product_sku = "product_sku_example"; // string | 
$scope_id = 56; // int | 

try {
    $result = $api_instance->catalogInventoryStockRegistryV1GetStockStatusBySkuGet($product_sku, $scope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1GetStockStatusBySkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku** | **string**|  |
 **scope_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogInventoryDataStockStatusInterface**](../Model/CatalogInventoryDataStockStatusInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogInventoryStockRegistryV1UpdateStockItemBySkuPut**
> int catalogInventoryStockRegistryV1UpdateStockItemBySkuPut($product_sku, $item_id, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogInventoryStockRegistryV1Api();
$product_sku = "product_sku_example"; // string | 
$item_id = "item_id_example"; // string | 
$body = new \Swagger\Client\Model\Body41(); // \Swagger\Client\Model\Body41 | 

try {
    $result = $api_instance->catalogInventoryStockRegistryV1UpdateStockItemBySkuPut($product_sku, $item_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogInventoryStockRegistryV1Api->catalogInventoryStockRegistryV1UpdateStockItemBySkuPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_sku** | **string**|  |
 **item_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body41**](../Model/\Swagger\Client\Model\Body41.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

