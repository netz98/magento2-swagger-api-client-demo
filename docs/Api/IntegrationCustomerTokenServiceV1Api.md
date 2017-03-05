# Swagger\Client\IntegrationCustomerTokenServiceV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**](IntegrationCustomerTokenServiceV1Api.md#integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost) | **POST** /V1/integration/customer/token | 


# **integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost**
> string integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($body)



Create access token for admin given the customer credentials.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\IntegrationCustomerTokenServiceV1Api();
$body = new \Swagger\Client\Model\Body137(); // \Swagger\Client\Model\Body137 | 

try {
    $result = $api_instance->integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationCustomerTokenServiceV1Api->integrationCustomerTokenServiceV1CreateCustomerAccessTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body137**](../Model/\Swagger\Client\Model\Body137.md)|  | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

