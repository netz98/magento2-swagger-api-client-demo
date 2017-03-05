# Swagger\Client\TaxTaxRateRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxRateRepositoryV1DeleteByIdDelete**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxRates/{rateId} | 
[**taxTaxRateRepositoryV1GetGet**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1GetGet) | **GET** /V1/taxRates/{rateId} | 
[**taxTaxRateRepositoryV1GetListGet**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1GetListGet) | **GET** /V1/taxRates/search | 
[**taxTaxRateRepositoryV1SavePost**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1SavePost) | **POST** /V1/taxRates | 
[**taxTaxRateRepositoryV1SavePut**](TaxTaxRateRepositoryV1Api.md#taxTaxRateRepositoryV1SavePut) | **PUT** /V1/taxRates | 


# **taxTaxRateRepositoryV1DeleteByIdDelete**
> bool taxTaxRateRepositoryV1DeleteByIdDelete($rate_id)



Delete tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRateRepositoryV1Api();
$rate_id = 56; // int | 

try {
    $result = $api_instance->taxTaxRateRepositoryV1DeleteByIdDelete($rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1GetGet**
> \Swagger\Client\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1GetGet($rate_id)



Get tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRateRepositoryV1Api();
$rate_id = 56; // int | 

try {
    $result = $api_instance->taxTaxRateRepositoryV1GetGet($rate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rate_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1GetListGet**
> \Swagger\Client\Model\TaxDataTaxRateSearchResultsInterface taxTaxRateRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Search TaxRates This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRateRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRateRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->taxTaxRateRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TaxDataTaxRateSearchResultsInterface**](../Model/TaxDataTaxRateSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1SavePost**
> \Swagger\Client\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1SavePost($body)



Create or update tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRateRepositoryV1Api();
$body = new \Swagger\Client\Model\Body113(); // \Swagger\Client\Model\Body113 | 

try {
    $result = $api_instance->taxTaxRateRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body113**](../Model/\Swagger\Client\Model\Body113.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRateRepositoryV1SavePut**
> \Swagger\Client\Model\TaxDataTaxRateInterface taxTaxRateRepositoryV1SavePut($body)



Create or update tax rate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRateRepositoryV1Api();
$body = new \Swagger\Client\Model\Body112(); // \Swagger\Client\Model\Body112 | 

try {
    $result = $api_instance->taxTaxRateRepositoryV1SavePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRateRepositoryV1Api->taxTaxRateRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body112**](../Model/\Swagger\Client\Model\Body112.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TaxDataTaxRateInterface**](../Model/TaxDataTaxRateInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

