# Swagger\Client\SalesRuleRuleRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRuleRuleRepositoryV1DeleteByIdDelete**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1DeleteByIdDelete) | **DELETE** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetByIdGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetByIdGet) | **GET** /V1/salesRules/{ruleId} | 
[**salesRuleRuleRepositoryV1GetListGet**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1GetListGet) | **GET** /V1/salesRules/search | 
[**salesRuleRuleRepositoryV1SavePost**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePost) | **POST** /V1/salesRules | 
[**salesRuleRuleRepositoryV1SavePut**](SalesRuleRuleRepositoryV1Api.md#salesRuleRuleRepositoryV1SavePut) | **PUT** /V1/salesRules/{ruleId} | 


# **salesRuleRuleRepositoryV1DeleteByIdDelete**
> bool salesRuleRuleRepositoryV1DeleteByIdDelete($rule_id)



Delete rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRuleRuleRepositoryV1Api();
$rule_id = 56; // int | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1DeleteByIdDelete($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
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

# **salesRuleRuleRepositoryV1GetByIdGet**
> \Swagger\Client\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1GetByIdGet($rule_id)



Get rule by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRuleRuleRepositoryV1Api();
$rule_id = 56; // int | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1GetByIdGet($rule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1GetListGet**
> \Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface salesRuleRuleRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page)



Retrieve sales rules that match te specified criteria. This call returns an array of objects, but detailed information about each object’s attributes might not be included. See http://devdocs.magento.com/codelinks/attributes.html#RuleRepositoryInterface to determine which call to use to get detailed information about all attributes for an object.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRuleRuleRepositoryV1Api();
$search_criteria_filter_groups_filters_field = "search_criteria_filter_groups_filters_field_example"; // string | Field
$search_criteria_filter_groups_filters_value = "search_criteria_filter_groups_filters_value_example"; // string | Value
$search_criteria_filter_groups_filters_condition_type = "search_criteria_filter_groups_filters_condition_type_example"; // string | Condition type
$search_criteria_sort_orders_field = "search_criteria_sort_orders_field_example"; // string | Sorting field.
$search_criteria_sort_orders_direction = "search_criteria_sort_orders_direction_example"; // string | Sorting direction.
$search_criteria_page_size = 56; // int | Page size.
$search_criteria_current_page = 56; // int | Current page.

try {
    $result = $api_instance->salesRuleRuleRepositoryV1GetListGet($search_criteria_filter_groups_filters_field, $search_criteria_filter_groups_filters_value, $search_criteria_filter_groups_filters_condition_type, $search_criteria_sort_orders_field, $search_criteria_sort_orders_direction, $search_criteria_page_size, $search_criteria_current_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SalesRuleDataRuleSearchResultInterface**](../Model/SalesRuleDataRuleSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePost**
> \Swagger\Client\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePost($body)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRuleRuleRepositoryV1Api();
$body = new \Swagger\Client\Model\Body88(); // \Swagger\Client\Model\Body88 | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1SavePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body88**](../Model/\Swagger\Client\Model\Body88.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesRuleRuleRepositoryV1SavePut**
> \Swagger\Client\Model\SalesRuleDataRuleInterface salesRuleRuleRepositoryV1SavePut($rule_id, $body)



Save sales rule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRuleRuleRepositoryV1Api();
$rule_id = "rule_id_example"; // string | 
$body = new \Swagger\Client\Model\Body87(); // \Swagger\Client\Model\Body87 | 

try {
    $result = $api_instance->salesRuleRuleRepositoryV1SavePut($rule_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRuleRuleRepositoryV1Api->salesRuleRuleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rule_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body87**](../Model/\Swagger\Client\Model\Body87.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesRuleDataRuleInterface**](../Model/SalesRuleDataRuleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

