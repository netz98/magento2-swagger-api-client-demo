# Swagger\Client\CatalogProductAttributeGroupRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1DeleteByIdDelete) | **DELETE** /V1/products/attribute-sets/groups/{groupId} | 
[**catalogProductAttributeGroupRepositoryV1GetListGet**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1GetListGet) | **GET** /V1/products/attribute-sets/groups/list | 
[**catalogProductAttributeGroupRepositoryV1SavePost**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePost) | **POST** /V1/products/attribute-sets/groups | 
[**catalogProductAttributeGroupRepositoryV1SavePut**](CatalogProductAttributeGroupRepositoryV1Api.md#catalogProductAttributeGroupRepositoryV1SavePut) | **PUT** /V1/products/attribute-sets/{attributeSetId}/groups | 


# **catalogProductAttributeGroupRepositoryV1DeleteByIdDelete**
> bool catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($group_id)



Remove attribute group by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$group_id = 56; // int | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **group_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1GetListGet**
> \Swagger\Client\Model\EavDataAttributeGroupSearchResultsInterface catalogProductAttributeGroupRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve list of attribute groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\EavDataAttributeGroupSearchResultsInterface**](../Model/EavDataAttributeGroupSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePost**
> \Swagger\Client\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePost($body)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$body = new \Swagger\Client\Model\Body25(); // \Swagger\Client\Model\Body25 | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body25**](../Model/\Swagger\Client\Model\Body25.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **catalogProductAttributeGroupRepositoryV1SavePut**
> \Swagger\Client\Model\EavDataAttributeGroupInterface catalogProductAttributeGroupRepositoryV1SavePut($attribute_set_id, $body)



Save attribute group

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CatalogProductAttributeGroupRepositoryV1Api();
$attribute_set_id = "attribute_set_id_example"; // string | 
$body = new \Swagger\Client\Model\Body26(); // \Swagger\Client\Model\Body26 | 

try {
    $result = $api_instance->catalogProductAttributeGroupRepositoryV1SavePut($attribute_set_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CatalogProductAttributeGroupRepositoryV1Api->catalogProductAttributeGroupRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body26**](../Model/\Swagger\Client\Model\Body26.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EavDataAttributeGroupInterface**](../Model/EavDataAttributeGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

