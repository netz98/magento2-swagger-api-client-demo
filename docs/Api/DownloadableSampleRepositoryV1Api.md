# Swagger\Client\DownloadableSampleRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadableSampleRepositoryV1DeleteDelete**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1DeleteDelete) | **DELETE** /V1/products/downloadable-links/samples/{id} | 
[**downloadableSampleRepositoryV1GetListGet**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1GetListGet) | **GET** /V1/products/{sku}/downloadable-links/samples | 
[**downloadableSampleRepositoryV1SavePost**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1SavePost) | **POST** /V1/products/{sku}/downloadable-links/samples | 
[**downloadableSampleRepositoryV1SavePut**](DownloadableSampleRepositoryV1Api.md#downloadableSampleRepositoryV1SavePut) | **PUT** /V1/products/{sku}/downloadable-links/samples/{id} | 


# **downloadableSampleRepositoryV1DeleteDelete**
> bool downloadableSampleRepositoryV1DeleteDelete($id)



Delete downloadable sample

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableSampleRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->downloadableSampleRepositoryV1DeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
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

# **downloadableSampleRepositoryV1GetListGet**
> \Swagger\Client\Model\DownloadableDataSampleInterface[] downloadableSampleRepositoryV1GetListGet($sku)



List of samples for downloadable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableSampleRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->downloadableSampleRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\DownloadableDataSampleInterface[]**](../Model/DownloadableDataSampleInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableSampleRepositoryV1SavePost**
> int downloadableSampleRepositoryV1SavePost($sku, $body)



Update downloadable sample of the given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableSampleRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body106(); // \Swagger\Client\Model\Body106 | 

try {
    $result = $api_instance->downloadableSampleRepositoryV1SavePost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body106**](../Model/\Swagger\Client\Model\Body106.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableSampleRepositoryV1SavePut**
> int downloadableSampleRepositoryV1SavePut($sku, $id, $body)



Update downloadable sample of the given product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableSampleRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body107(); // \Swagger\Client\Model\Body107 | 

try {
    $result = $api_instance->downloadableSampleRepositoryV1SavePut($sku, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableSampleRepositoryV1Api->downloadableSampleRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body107**](../Model/\Swagger\Client\Model\Body107.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

