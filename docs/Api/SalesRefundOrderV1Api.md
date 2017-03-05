# Swagger\Client\SalesRefundOrderV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesRefundOrderV1ExecutePost**](SalesRefundOrderV1Api.md#salesRefundOrderV1ExecutePost) | **POST** /V1/order/{orderId}/refund | 


# **salesRefundOrderV1ExecutePost**
> int salesRefundOrderV1ExecutePost($order_id, $body)



Create offline refund for order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesRefundOrderV1Api();
$order_id = 56; // int | 
$body = new \Swagger\Client\Model\Body81(); // \Swagger\Client\Model\Body81 | 

try {
    $result = $api_instance->salesRefundOrderV1ExecutePost($order_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesRefundOrderV1Api->salesRefundOrderV1ExecutePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Body81**](../Model/\Swagger\Client\Model\Body81.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

