# Swagger\Client\ConfigurableProductLinkManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**configurableProductLinkManagementV1AddChildPost**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1AddChildPost) | **POST** /V1/configurable-products/{sku}/child | 
[**configurableProductLinkManagementV1GetChildrenGet**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1GetChildrenGet) | **GET** /V1/configurable-products/{sku}/children | 
[**configurableProductLinkManagementV1RemoveChildDelete**](ConfigurableProductLinkManagementV1Api.md#configurableProductLinkManagementV1RemoveChildDelete) | **DELETE** /V1/configurable-products/{sku}/children/{childSku} | 


# **configurableProductLinkManagementV1AddChildPost**
> bool configurableProductLinkManagementV1AddChildPost($sku, $body)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductLinkManagementV1Api();
$sku = "sku_example"; // string | 
$body = new \Swagger\Client\Model\Body108(); // \Swagger\Client\Model\Body108 | 

try {
    $result = $api_instance->configurableProductLinkManagementV1AddChildPost($sku, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1AddChildPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body108**](../Model/\Swagger\Client\Model\Body108.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductLinkManagementV1GetChildrenGet**
> \Swagger\Client\Model\CatalogDataProductInterface[] configurableProductLinkManagementV1GetChildrenGet($sku)



Get all children for Configurable product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductLinkManagementV1Api();
$sku = "sku_example"; // string | 

try {
    $result = $api_instance->configurableProductLinkManagementV1GetChildrenGet($sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1GetChildrenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |

### Return type

[**\Swagger\Client\Model\CatalogDataProductInterface[]**](../Model/CatalogDataProductInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **configurableProductLinkManagementV1RemoveChildDelete**
> bool configurableProductLinkManagementV1RemoveChildDelete($sku, $child_sku)



Remove configurable product option

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ConfigurableProductLinkManagementV1Api();
$sku = "sku_example"; // string | 
$child_sku = "child_sku_example"; // string | 

try {
    $result = $api_instance->configurableProductLinkManagementV1RemoveChildDelete($sku, $child_sku);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConfigurableProductLinkManagementV1Api->configurableProductLinkManagementV1RemoveChildDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sku** | **string**|  |
 **child_sku** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

