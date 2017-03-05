# Swagger\Client\SalesShipmentCommentRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesShipmentCommentRepositoryV1SavePost**](SalesShipmentCommentRepositoryV1Api.md#salesShipmentCommentRepositoryV1SavePost) | **POST** /V1/shipment/{id}/comments | 


# **salesShipmentCommentRepositoryV1SavePost**
> \Swagger\Client\Model\SalesDataShipmentCommentInterface salesShipmentCommentRepositoryV1SavePost($id, $body)



Performs persist operations for a specified shipment comment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\SalesShipmentCommentRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body83(); // \Swagger\Client\Model\Body83 | 

try {
    $result = $api_instance->salesShipmentCommentRepositoryV1SavePost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesShipmentCommentRepositoryV1Api->salesShipmentCommentRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body83**](../Model/\Swagger\Client\Model\Body83.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\SalesDataShipmentCommentInterface**](../Model/SalesDataShipmentCommentInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

