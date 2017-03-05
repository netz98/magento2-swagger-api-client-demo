# Swagger\Client\DownloadableLinkRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**downloadableLinkRepositoryV1DeleteDelete**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1DeleteDelete) | **DELETE** /V1/products/downloadable-links/{id} | 
[**downloadableLinkRepositoryV1GetListGet**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1GetListGet) | **GET** /V1/products/{sku}/downloadable-links | 
[**downloadableLinkRepositoryV1SavePost**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1SavePost) | **POST** /V1/products/{sku}/downloadable-links | 
[**downloadableLinkRepositoryV1SavePut**](DownloadableLinkRepositoryV1Api.md#downloadableLinkRepositoryV1SavePut) | **PUT** /V1/products/{sku}/downloadable-links/{id} | 


# **downloadableLinkRepositoryV1DeleteDelete**
> bool downloadableLinkRepositoryV1DeleteDelete($id)



Delete downloadable link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableLinkRepositoryV1Api();
$id = 56; // int | 

try {
    $result = $api_instance->downloadableLinkRepositoryV1DeleteDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1DeleteDelete: ', $e->getMessage(), PHP_EOL;
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

# **downloadableLinkRepositoryV1GetListGet**
> \Swagger\Client\Model\DownloadableDataLinkInterface[] downloadableLinkRepositoryV1GetListGet($sku)



List of links with associated samples

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableLinkRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->downloadableLinkRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\DownloadableDataLinkInterface[]**](../Model/DownloadableDataLinkInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableLinkRepositoryV1SavePost**
> int downloadableLinkRepositoryV1SavePost($sku, $body)



Update downloadable link of the given product (link type and its resources cannot be changed)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body104(); // \Swagger\Client\Model\Body104 | 

try {
    $result = $api_instance->downloadableLinkRepositoryV1SavePost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body104**](../Model/\Swagger\Client\Model\Body104.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadableLinkRepositoryV1SavePut**
> int downloadableLinkRepositoryV1SavePut($sku, $id, $body)



Update downloadable link of the given product (link type and its resources cannot be changed)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\DownloadableLinkRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body105(); // \Swagger\Client\Model\Body105 | 

try {
    $result = $api_instance->downloadableLinkRepositoryV1SavePut($sku, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DownloadableLinkRepositoryV1Api->downloadableLinkRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body105**](../Model/\Swagger\Client\Model\Body105.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

