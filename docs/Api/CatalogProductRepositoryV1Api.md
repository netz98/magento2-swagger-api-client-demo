# Swagger\Client\CatalogProductRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductRepositoryV1DeleteByIdDelete**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetGet) | **GET** /V1/products/{sku} | 
[**catalogProductRepositoryV1GetListGet**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1GetListGet) | **GET** /V1/products | 
[**catalogProductRepositoryV1SavePost**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePost) | **POST** /V1/products | 
[**catalogProductRepositoryV1SavePut**](CatalogProductRepositoryV1Api.md#catalogProductRepositoryV1SavePut) | **PUT** /V1/products/{sku} | 


# **catalogProductRepositoryV1DeleteByIdDelete**
> bool catalogProductRepositoryV1DeleteByIdDelete($sku)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->catalogProductRepositoryV1DeleteByIdDelete($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetGet**
> \Swagger\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1GetGet($sku, $edit_mode, $store_id, $force_reload)



Get info about product by product SKU

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 
$edit_mode = true; // bool | 
$store_id = 56; // int | 
$force_reload = true; // bool | 

try {
    $result = $api_instance->catalogProductRepositoryV1GetGet($sku, $edit_mode, $store_id, $force_reload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **edit_mode** | **bool**|  | [optional]
 **store_id** | **int**|  | [optional]
 **force_reload** | **bool**|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1GetListGet**
> \Swagger\Client\Model\CatalogDataProductSearchResultsInterface catalogProductRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Get product list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->catalogProductRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **search_criteria_filter_groups_filters_field** | **string**| Field | [optional]
 **search_criteria_filter_groups_filters_value** | **string**| Value | [optional]
 **search_criteria_filter_groups_filters_condition_type** | **string**| Condition type | [optional]
 **search_criteria_sort_orders_field** | **string**| Sorting field. | [optional]
 **search_criteria_sort_orders_direction** | **string**| Sorting direction. | [optional]
 **search_criteria_page_size** | **int**| Page size. | [optional]
 **search_criteria_current_page** | **int**| Current page. | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataProductSearchResultsInterface**](../Model/CatalogDataProductSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePost**
> \Swagger\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePost($body)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductRepositoryV1Api();
$body = new \Swagger\Client\Model\Body18(); // \Swagger\Client\Model\Body18 | 

try {
    $result = $api_instance->catalogProductRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body18**](../Model/\Swagger\Client\Model\Body18.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductRepositoryV1SavePut**
> \Swagger\Client\Model\CatalogDataProductInterface catalogProductRepositoryV1SavePut($sku, $body)



Create product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body19(); // \Swagger\Client\Model\Body19 | 

try {
    $result = $api_instance->catalogProductRepositoryV1SavePut($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductRepositoryV1Api->catalogProductRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body19**](../Model/\Swagger\Client\Model\Body19.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CatalogDataProductInterface**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

