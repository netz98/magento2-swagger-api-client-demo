# Swagger\Client\ConfigurableProductOptionRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductOptionRepositoryV1DeleteByIdDelete**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1DeleteByIdDelete) | **DELETE** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetGet) | **GET** /V1/configurable-products/{sku}/options/{id} | 
[**configurableProductOptionRepositoryV1GetListGet**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1GetListGet) | **GET** /V1/configurable-products/{sku}/options/all | 
[**configurableProductOptionRepositoryV1SavePost**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePost) | **POST** /V1/configurable-products/{sku}/options | 
[**configurableProductOptionRepositoryV1SavePut**](ConfigurableProductOptionRepositoryV1Api.md#configurableProductOptionRepositoryV1SavePut) | **PUT** /V1/configurable-products/{sku}/options/{id} | 


# **configurableProductOptionRepositoryV1DeleteByIdDelete**
> bool configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id)



Remove option from configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1DeleteByIdDelete($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetGet**
> \Swagger\Client\Model\ConfigurableProductDataOptionInterface configurableProductOptionRepositoryV1GetGet($sku, $id)



Get option for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = 56; // int | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1GetGet($sku, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ConfigurableProductDataOptionInterface**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1GetListGet**
> \Swagger\Client\Model\ConfigurableProductDataOptionInterface[] configurableProductOptionRepositoryV1GetListGet($sku)



Get all options for configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1GetListGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConfigurableProductDataOptionInterface[]**](../Model/ConfigurableProductDataOptionInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePost**
> int configurableProductOptionRepositoryV1SavePost($sku, $body)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body111(); // \Swagger\Client\Model\Body111 | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1SavePost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body111**](../Model/\Swagger\Client\Model\Body111.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductOptionRepositoryV1SavePut**
> int configurableProductOptionRepositoryV1SavePut($sku, $id, $body)



Save option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductOptionRepositoryV1Api();
$sku = "sku_example"; // string | 
$id = "id_example"; // string | 
$body = new \Swagger\Client\Model\Body110(); // \Swagger\Client\Model\Body110 | 

try {
    $result = $api_instance->configurableProductOptionRepositoryV1SavePut($sku, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductOptionRepositoryV1Api->configurableProductOptionRepositoryV1SavePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **id** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body110**](../Model/\Swagger\Client\Model\Body110.md)|  | [optional]

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

