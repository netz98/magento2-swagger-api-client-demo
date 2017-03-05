# Swagger\Client\SalesShipmentRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentRepositoryV1GetGet**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1GetGet) | **GET** /V1/shipment/{id} | 
[**salesShipmentRepositoryV1GetListGet**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1GetListGet) | **GET** /V1/shipments | 
[**salesShipmentRepositoryV1SavePost**](SalesShipmentRepositoryV1Api.md#salesShipmentRepositoryV1SavePost) | **POST** /V1/shipment/ | 


# **salesShipmentRepositoryV1GetGet**
> \Swagger\Client\Model\SalesDataShipmentInterface salesShipmentRepositoryV1GetGet($id)



Loads a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentRepositoryV1Api();
$id = 56; // int | The shipment ID.

try {
    $result = $api_instance->salesShipmentRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The shipment ID. |

### Return type

[**\Swagger\Client\Model\SalesDataShipmentInterface**](../Model/SalesDataShipmentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentRepositoryV1GetListGet**
> \Swagger\Client\Model\SalesDataShipmentSearchResultInterface salesShipmentRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Lists shipments that match specified search criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#ShipmentRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->salesShipmentRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SalesDataShipmentSearchResultInterface**](../Model/SalesDataShipmentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesShipmentRepositoryV1SavePost**
> \Swagger\Client\Model\SalesDataShipmentInterface salesShipmentRepositoryV1SavePost($body)



Performs persist operations for a specified shipment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentRepositoryV1Api();
$body = new \Swagger\Client\Model\Body82(); // \Swagger\Client\Model\Body82 | 

try {
    $result = $api_instance->salesShipmentRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentRepositoryV1Api->salesShipmentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body82**](../Model/\Swagger\Client\Model\Body82.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesDataShipmentInterface**](../Model/SalesDataShipmentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

