# Swagger\Client\EavAttributeSetRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**eavAttributeSetRepositoryV1DeleteByIdDelete**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1DeleteByIdDelete) | **DELETE** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetGet) | **GET** /V1/eav/attribute-sets/{attributeSetId} | 
[**eavAttributeSetRepositoryV1GetListGet**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1GetListGet) | **GET** /V1/eav/attribute-sets/list | 
[**eavAttributeSetRepositoryV1SavePut**](EavAttributeSetRepositoryV1Api.md#eavAttributeSetRepositoryV1SavePut) | **PUT** /V1/eav/attribute-sets/{attributeSetId} | 


# **eavAttributeSetRepositoryV1DeleteByIdDelete**
> bool eavAttributeSetRepositoryV1DeleteByIdDelete($attribute_set_id)



Remove attribute set by given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EavAttributeSetRepositoryV1Api();
$attribute_set_id = 56; // int | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1DeleteByIdDelete($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1GetGet**
> \Swagger\Client\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1GetGet($attribute_set_id)



Retrieve attribute set information based on given ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EavAttributeSetRepositoryV1Api();
$attribute_set_id = 56; // int | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1GetGet($attribute_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1GetListGet**
> \Swagger\Client\Model\EavDataAttributeSetSearchResultsInterface eavAttributeSetRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve list of Attribute Sets This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#AttributeSetRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EavAttributeSetRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->eavAttributeSetRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

# **eavAttributeSetRepositoryV1SavePut**
> \Swagger\Client\Model\EavDataAttributeSetInterface eavAttributeSetRepositoryV1SavePut($attribute_set_id, $body)



Save attribute set data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EavAttributeSetRepositoryV1Api();
$attribute_set_id = "attribute_set_id_example"; // string | 
$body = new \Swagger\Client\Model\Body(); // \Swagger\Client\Model\Body | 

try {
    $result = $api_instance->eavAttributeSetRepositoryV1SavePut($attribute_set_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EavAttributeSetRepositoryV1Api->eavAttributeSetRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attribute_set_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body**](../Model/\Swagger\Client\Model\Body.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\EavDataAttributeSetInterface**](../Model/EavDataAttributeSetInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

