# Swagger\Client\CustomerGroupRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerGroupRepositoryV1DeleteByIdDelete**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1DeleteByIdDelete) | **DELETE** /V1/customerGroups/{id} | 
[**customerGroupRepositoryV1GetByIdGet**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1GetByIdGet) | **GET** /V1/customerGroups/{id} | 
[**customerGroupRepositoryV1GetListGet**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1GetListGet) | **GET** /V1/customerGroups/search | 
[**customerGroupRepositoryV1SavePost**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1SavePost) | **POST** /V1/customerGroups | 
[**customerGroupRepositoryV1SavePut**](CustomerGroupRepositoryV1Api.md#customerGroupRepositoryV1SavePut) | **PUT** /V1/customerGroups/{id} | 


# **customerGroupRepositoryV1DeleteByIdDelete**
> bool customerGroupRepositoryV1DeleteByIdDelete($id)



Delete customer group by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->customerGroupRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1GetByIdGet**
> \Swagger\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1GetByIdGet($id)



Get customer group by group ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->customerGroupRepositoryV1GetByIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1GetListGet**
> \Swagger\Client\Model\CustomerDataGroupSearchResultsInterface customerGroupRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve customer groups. The list of groups can be filtered to exclude the NOT_LOGGED_IN group using the first parameter and/or it can be filtered by tax class. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#GroupRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->customerGroupRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CustomerDataGroupSearchResultsInterface**](../Model/CustomerDataGroupSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1SavePost**
> \Swagger\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1SavePost($body)



Save customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupRepositoryV1Api();
$body = new \Swagger\Client\Model\Body3(); // \Swagger\Client\Model\Body3 | 

try {
    $result = $api_instance->customerGroupRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body3**](../Model/\Swagger\Client\Model\Body3.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerGroupRepositoryV1SavePut**
> \Swagger\Client\Model\CustomerDataGroupInterface customerGroupRepositoryV1SavePut($id, $body)



Save customer group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerGroupRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body2(); // \Swagger\Client\Model\Body2 | 

try {
    $result = $api_instance->customerGroupRepositoryV1SavePut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerGroupRepositoryV1Api->customerGroupRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body2**](../Model/\Swagger\Client\Model\Body2.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataGroupInterface**](../Model/CustomerDataGroupInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

