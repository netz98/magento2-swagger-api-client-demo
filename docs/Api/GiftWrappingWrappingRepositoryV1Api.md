# Swagger\Client\GiftWrappingWrappingRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**giftWrappingWrappingRepositoryV1DeleteByIdDelete**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1DeleteByIdDelete) | **DELETE** /V1/gift-wrappings/{id} | 
[**giftWrappingWrappingRepositoryV1GetGet**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1GetGet) | **GET** /V1/gift-wrappings/{id} | 
[**giftWrappingWrappingRepositoryV1GetListGet**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1GetListGet) | **GET** /V1/gift-wrappings | 
[**giftWrappingWrappingRepositoryV1SavePost**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1SavePost) | **POST** /V1/gift-wrappings | 
[**giftWrappingWrappingRepositoryV1SavePut**](GiftWrappingWrappingRepositoryV1Api.md#giftWrappingWrappingRepositoryV1SavePut) | **PUT** /V1/gift-wrappings/{wrappingId} | 


# **giftWrappingWrappingRepositoryV1DeleteByIdDelete**
> bool giftWrappingWrappingRepositoryV1DeleteByIdDelete($id)



Delete gift wrapping

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftWrappingWrappingRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->giftWrappingWrappingRepositoryV1DeleteByIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **giftWrappingWrappingRepositoryV1GetGet**
> \Swagger\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1GetGet($id, $store_id)



Return data object for specified wrapping ID and store.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftWrappingWrappingRepositoryV1Api();
$id = 56; // int | 
$store_id = 56; // int | 

try {
    $result = $api_instance->giftWrappingWrappingRepositoryV1GetGet($id, $store_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **store_id** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1GetListGet**
> \Swagger\Client\Model\GiftWrappingDataWrappingSearchResultsInterface giftWrappingWrappingRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Return list of gift wrapping data objects based on search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftWrappingWrappingRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->giftWrappingWrappingRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GiftWrappingDataWrappingSearchResultsInterface**](../Model/GiftWrappingDataWrappingSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1SavePost**
> \Swagger\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1SavePost($body)



Create/Update new gift wrapping with data object values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftWrappingWrappingRepositoryV1Api();
$body = new \Swagger\Client\Model\Body129(); // \Swagger\Client\Model\Body129 | 

try {
    $result = $api_instance->giftWrappingWrappingRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body129**](../Model/\Swagger\Client\Model\Body129.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **giftWrappingWrappingRepositoryV1SavePut**
> \Swagger\Client\Model\GiftWrappingDataWrappingInterface giftWrappingWrappingRepositoryV1SavePut($wrapping_id, $body)



Create/Update new gift wrapping with data object values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\GiftWrappingWrappingRepositoryV1Api();
$wrapping_id = "wrapping_id_example"; // string | 
$body = new \Swagger\Client\Model\Body130(); // \Swagger\Client\Model\Body130 | 

try {
    $result = $api_instance->giftWrappingWrappingRepositoryV1SavePut($wrapping_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GiftWrappingWrappingRepositoryV1Api->giftWrappingWrappingRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **wrapping_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body130**](../Model/\Swagger\Client\Model\Body130.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\GiftWrappingDataWrappingInterface**](../Model/GiftWrappingDataWrappingInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

