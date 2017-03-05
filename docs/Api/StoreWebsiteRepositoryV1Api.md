# Swagger\Client\StoreWebsiteRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**storeWebsiteRepositoryV1GetListGet**](StoreWebsiteRepositoryV1Api.md#storeWebsiteRepositoryV1GetListGet) | **GET** /V1/store/websites | 


# **storeWebsiteRepositoryV1GetListGet**
> \Swagger\Client\Model\StoreDataWebsiteInterface[] storeWebsiteRepositoryV1GetListGet()



Retrieve list of all websites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\StoreWebsiteRepositoryV1Api();

try {
    $result = $api_instance->storeWebsiteRepositoryV1GetListGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoreWebsiteRepositoryV1Api->storeWebsiteRepositoryV1GetListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StoreDataWebsiteInterface[]**](../Model/StoreDataWebsiteInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

