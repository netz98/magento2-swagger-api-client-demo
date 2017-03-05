# Swagger\Client\StoreStoreConfigManagerV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeStoreConfigManagerV1GetStoreConfigsGet**](StoreStoreConfigManagerV1Api.md#storeStoreConfigManagerV1GetStoreConfigsGet) | **GET** /V1/store/storeConfigs | 


# **storeStoreConfigManagerV1GetStoreConfigsGet**
> \Swagger\Client\Model\StoreDataStoreConfigInterface[] storeStoreConfigManagerV1GetStoreConfigsGet($store_codes)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StoreStoreConfigManagerV1Api();
$store_codes = array("store_codes_example"); // string[] | 

try {
    $result = $api_instance->storeStoreConfigManagerV1GetStoreConfigsGet($store_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreStoreConfigManagerV1Api->storeStoreConfigManagerV1GetStoreConfigsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **store_codes** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\StoreDataStoreConfigInterface[]**](../Model/StoreDataStoreConfigInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

