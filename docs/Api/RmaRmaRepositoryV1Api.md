# Swagger\Client\RmaRmaRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rmaRmaRepositoryV1DeleteDelete**](RmaRmaRepositoryV1Api.md#rmaRmaRepositoryV1DeleteDelete) | **DELETE** /V1/returns/{id} | 
[**rmaRmaRepositoryV1GetGet**](RmaRmaRepositoryV1Api.md#rmaRmaRepositoryV1GetGet) | **GET** /V1/returns/{id} | 


# **rmaRmaRepositoryV1DeleteDelete**
> bool rmaRmaRepositoryV1DeleteDelete($id, $body)



Delete RMA

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RmaRmaRepositoryV1Api();
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body133(); // \Swagger\Client\Model\Body133 | 

try {
    $result = $api_instance->rmaRmaRepositoryV1DeleteDelete($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaRepositoryV1Api->rmaRmaRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body133**](../Model/\Swagger\Client\Model\Body133.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rmaRmaRepositoryV1GetGet**
> \Swagger\Client\Model\RmaDataRmaInterface rmaRmaRepositoryV1GetGet($id)



Return data object for specified RMA id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RmaRmaRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->rmaRmaRepositoryV1GetGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RmaRmaRepositoryV1Api->rmaRmaRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\RmaDataRmaInterface**](../Model/RmaDataRmaInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

