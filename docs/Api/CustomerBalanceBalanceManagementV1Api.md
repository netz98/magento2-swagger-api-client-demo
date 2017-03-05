# Swagger\Client\CustomerBalanceBalanceManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerBalanceBalanceManagementV1ApplyPost**](CustomerBalanceBalanceManagementV1Api.md#customerBalanceBalanceManagementV1ApplyPost) | **POST** /V1/carts/mine/balance/apply | 


# **customerBalanceBalanceManagementV1ApplyPost**
> bool customerBalanceBalanceManagementV1ApplyPost()



Apply store credit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerBalanceBalanceManagementV1Api();

try {
    $result = $api_instance->customerBalanceBalanceManagementV1ApplyPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerBalanceBalanceManagementV1Api->customerBalanceBalanceManagementV1ApplyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

