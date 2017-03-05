# Swagger\Client\TaxTaxRuleRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**taxTaxRuleRepositoryV1DeleteByIdDelete**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetGet) | **GET** /V1/taxRules/{ruleId} | 
[**taxTaxRuleRepositoryV1GetListGet**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1GetListGet) | **GET** /V1/taxRules/search | 
[**taxTaxRuleRepositoryV1SavePost**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePost) | **POST** /V1/taxRules | 
[**taxTaxRuleRepositoryV1SavePut**](TaxTaxRuleRepositoryV1Api.md#taxTaxRuleRepositoryV1SavePut) | **PUT** /V1/taxRules | 


# **taxTaxRuleRepositoryV1DeleteByIdDelete**
> bool taxTaxRuleRepositoryV1DeleteByIdDelete($rule_id)



Delete TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRuleRepositoryV1Api();
$rule_id = 56; // int | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1DeleteByIdDelete($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1GetGet**
> \Swagger\Client\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1GetGet($rule_id)



Get TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRuleRepositoryV1Api();
$rule_id = 56; // int | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1GetGet($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1GetListGet**
> \Swagger\Client\Model\TaxDataTaxRuleSearchResultsInterface taxTaxRuleRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Search TaxRules This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#TaxRuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRuleRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->taxTaxRuleRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\TaxDataTaxRuleSearchResultsInterface**](../Model/TaxDataTaxRuleSearchResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePost**
> \Swagger\Client\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePost($body)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRuleRepositoryV1Api();
$body = new \Swagger\Client\Model\Body115(); // \Swagger\Client\Model\Body115 | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body115**](../Model/\Swagger\Client\Model\Body115.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **taxTaxRuleRepositoryV1SavePut**
> \Swagger\Client\Model\TaxDataTaxRuleInterface taxTaxRuleRepositoryV1SavePut($body)



Save TaxRule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\TaxTaxRuleRepositoryV1Api();
$body = new \Swagger\Client\Model\Body114(); // \Swagger\Client\Model\Body114 | 

try {
    $result = $api_instance->taxTaxRuleRepositoryV1SavePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxTaxRuleRepositoryV1Api->taxTaxRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body114**](../Model/\Swagger\Client\Model\Body114.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\TaxDataTaxRuleInterface**](../Model/TaxDataTaxRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

