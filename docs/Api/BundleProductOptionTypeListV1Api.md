# Swagger\Client\BundleProductOptionTypeListV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bundleProductOptionTypeListV1GetItemsGet**](BundleProductOptionTypeListV1Api.md#bundleProductOptionTypeListV1GetItemsGet) | **GET** /V1/bundle-products/options/types | 


# **bundleProductOptionTypeListV1GetItemsGet**
> \Swagger\Client\Model\BundleDataOptionTypeInterface[] bundleProductOptionTypeListV1GetItemsGet()



Get all types for options for bundle products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\BundleProductOptionTypeListV1Api();

try {
    $result = $api_instance->bundleProductOptionTypeListV1GetItemsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundleProductOptionTypeListV1Api->bundleProductOptionTypeListV1GetItemsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\BundleDataOptionTypeInterface[]**](../Model/BundleDataOptionTypeInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

