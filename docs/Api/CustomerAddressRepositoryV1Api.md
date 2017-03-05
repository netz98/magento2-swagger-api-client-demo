# Swagger\Client\CustomerAddressRepositoryV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAddressRepositoryV1DeleteByIdDelete**](CustomerAddressRepositoryV1Api.md#customerAddressRepositoryV1DeleteByIdDelete) | **DELETE** /V1/addresses/{addressId} | 
[**customerAddressRepositoryV1GetByIdGet**](CustomerAddressRepositoryV1Api.md#customerAddressRepositoryV1GetByIdGet) | **GET** /V1/customers/addresses/{addressId} | 


# **customerAddressRepositoryV1DeleteByIdDelete**
> bool customerAddressRepositoryV1DeleteByIdDelete($address_id)



Delete customer address by ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressRepositoryV1Api();
$address_id = 56; // int | 

try {
    $result = $api_instance->customerAddressRepositoryV1DeleteByIdDelete($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressRepositoryV1Api->customerAddressRepositoryV1DeleteByIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAddressRepositoryV1GetByIdGet**
> \Swagger\Client\Model\CustomerDataAddressInterface customerAddressRepositoryV1GetByIdGet($address_id)



Retrieve customer address.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAddressRepositoryV1Api();
$address_id = 56; // int | 

try {
    $result = $api_instance->customerAddressRepositoryV1GetByIdGet($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAddressRepositoryV1Api->customerAddressRepositoryV1GetByIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

