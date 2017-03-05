# Swagger\Client\TaxTaxClassRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxClassRepositoryV1DeleteByIdDelete**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetGet) | **GET** /V1/taxClasses/{taxClassId} | 
[**taxTaxClassRepositoryV1GetListGet**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1GetListGet) | **GET** /V1/taxClasses/search | 
[**taxTaxClassRepositoryV1SavePost**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePost) | **POST** /V1/taxClasses | 
[**taxTaxClassRepositoryV1SavePut**](TaxTaxClassRepositoryV1Api.md#taxTaxClassRepositoryV1SavePut) | **PUT** /V1/taxClasses/{classId} | 


# **taxTaxClassRepositoryV1DeleteByIdDelete**
> bool taxTaxClassRepositoryV1DeleteByIdDelete($tax_class_id)



Delete a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxClassRepositoryV1Api();
$tax_class_id = 56; // int | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1DeleteByIdDelete($tax_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_class_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetGet**
> \Swagger\Client\Model\TaxDataTaxClassInterface taxTaxClassRepositoryV1GetGet($tax_class_id)



Get a tax class with the given tax class id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxClassRepositoryV1Api();
$tax_class_id = 56; // int | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1GetGet($tax_class_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tax_class_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\TaxDataTaxClassInterface**](../Model/TaxDataTaxClassInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1GetListGet**
> \Swagger\Client\Model\TaxDataTaxClassSearchResultsInterface taxTaxClassRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve tax classes which match a specific criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxClassRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxClassRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->taxTaxClassRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TaxDataTaxClassSearchResultsInterface**](../Model/TaxDataTaxClassSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePost**
> string taxTaxClassRepositoryV1SavePost($body)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxClassRepositoryV1Api();
$body = new \Swagger\Client\Model\Body116(); // \Swagger\Client\Model\Body116 | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body116**](../Model/\Swagger\Client\Model\Body116.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxClassRepositoryV1SavePut**
> string taxTaxClassRepositoryV1SavePut($class_id, $body)



Create a Tax Class

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxClassRepositoryV1Api();
$class_id = "class_id_example"; // string | 
$body = new \Swagger\Client\Model\Body117(); // \Swagger\Client\Model\Body117 | 

try {
    $result = $api_instance->taxTaxClassRepositoryV1SavePut($class_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxClassRepositoryV1Api->taxTaxClassRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **class_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body117**](../Model/\Swagger\Client\Model\Body117.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

