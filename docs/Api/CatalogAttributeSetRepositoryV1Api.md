# Swagger\Client\CatalogAttributeSetRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogAttributeSetRepositoryV1DeleteByIdDelete**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attribute-sets/{attributeSetId} | 
[**catalogAttributeSetRepositoryV1GetGet**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1GetGet) | **GET** /V1/products/attribute-sets/{attributeSetId} | 
[**catalogAttributeSetRepositoryV1GetListGet**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1GetListGet) | **GET** /V1/products/attribute-sets/sets/list | 
[**catalogAttributeSetRepositoryV1SavePut**](CatalogAttributeSetRepositoryV1Api.md#catalogAttributeSetRepositoryV1SavePut) | **PUT** /V1/products/attribute-sets/{attributeSetId} | 


# **catalogAttributeSetRepositoryV1DeleteByIdDelete**
> bool catalogAttributeSetRepositoryV1DeleteByIdDelete($attribute_set_id)



Remove attribute set by given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogAttributeSetRepositoryV1Api();
$attribute_set_id = 56; // int | 

try {
    $result = $api_instance->catalogAttributeSetRepositoryV1DeleteByIdDelete($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1GetGet**
> \Swagger\Client\Model\EavDataAttributeSetInterface catalogAttributeSetRepositoryV1GetGet($attribute_set_id)



Retrieve attribute set information based on given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogAttributeSetRepositoryV1Api();
$attribute_set_id = 56; // int | 

try {
    $result = $api_instance->catalogAttributeSetRepositoryV1GetGet($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1GetListGet**
> \Swagger\Client\Model\EavDataAttributeSetSearchResultsInterface catalogAttributeSetRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve list of Attribute Sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogAttributeSetRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->catalogAttributeSetRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\EavDataAttributeSetSearchResultsInterface**](../Model/EavDataAttributeSetSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogAttributeSetRepositoryV1SavePut**
> \Swagger\Client\Model\EavDataAttributeSetInterface catalogAttributeSetRepositoryV1SavePut($attribute_set_id, $body)



Save attribute set data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogAttributeSetRepositoryV1Api();
$attribute_set_id = "attribute_set_id_example"; // string | 
$body = new \Swagger\Client\Model\Body22(); // \Swagger\Client\Model\Body22 | 

try {
    $result = $api_instance->catalogAttributeSetRepositoryV1SavePut($attribute_set_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogAttributeSetRepositoryV1Api->catalogAttributeSetRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body22**](../Model/\Swagger\Client\Model\Body22.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

