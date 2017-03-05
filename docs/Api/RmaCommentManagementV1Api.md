# Swagger\Client\RmaCommentManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaCommentManagementV1AddCommentPost**](RmaCommentManagementV1Api.md#rmaCommentManagementV1AddCommentPost) | **POST** /V1/returns/{id}/comments | 
[**rmaCommentManagementV1CommentsListGet**](RmaCommentManagementV1Api.md#rmaCommentManagementV1CommentsListGet) | **GET** /V1/returns/{id}/comments | 


# **rmaCommentManagementV1AddCommentPost**
> bool rmaCommentManagementV1AddCommentPost($id, $body)



Add comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RmaCommentManagementV1Api();
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body134(); // \Swagger\Client\Model\Body134 | 

try {
    $result = $api_instance->rmaCommentManagementV1AddCommentPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaCommentManagementV1Api->rmaCommentManagementV1AddCommentPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body134**](../Model/\Swagger\Client\Model\Body134.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaCommentManagementV1CommentsListGet**
> \Swagger\Client\Model\RmaDataCommentSearchResultInterface rmaCommentManagementV1CommentsListGet($id)



Comments list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RmaCommentManagementV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->rmaCommentManagementV1CommentsListGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaCommentManagementV1Api->rmaCommentManagementV1CommentsListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\RmaDataCommentSearchResultInterface**](../Model/RmaDataCommentSearchResultInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

