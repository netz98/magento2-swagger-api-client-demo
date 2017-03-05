# Swagger\Client\CustomerAccountManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerAccountManagementV1ActivateByIdPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ActivateByIdPut) | **PUT** /V1/customers/me/activate | 
[**customerAccountManagementV1ActivatePut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ActivatePut) | **PUT** /V1/customers/{email}/activate | 
[**customerAccountManagementV1ChangePasswordByIdPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ChangePasswordByIdPut) | **PUT** /V1/customers/me/password | 
[**customerAccountManagementV1CreateAccountPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1CreateAccountPost) | **POST** /V1/customers | 
[**customerAccountManagementV1GetConfirmationStatusGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetConfirmationStatusGet) | **GET** /V1/customers/{customerId}/confirm | 
[**customerAccountManagementV1GetDefaultBillingAddressGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultBillingAddressGet) | **GET** /V1/customers/me/billingAddress | 
[**customerAccountManagementV1GetDefaultBillingAddressGet_0**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultBillingAddressGet_0) | **GET** /V1/customers/{customerId}/billingAddress | 
[**customerAccountManagementV1GetDefaultShippingAddressGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultShippingAddressGet) | **GET** /V1/customers/me/shippingAddress | 
[**customerAccountManagementV1GetDefaultShippingAddressGet_0**](CustomerAccountManagementV1Api.md#customerAccountManagementV1GetDefaultShippingAddressGet_0) | **GET** /V1/customers/{customerId}/shippingAddress | 
[**customerAccountManagementV1InitiatePasswordResetPut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1InitiatePasswordResetPut) | **PUT** /V1/customers/password | 
[**customerAccountManagementV1IsEmailAvailablePost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1IsEmailAvailablePost) | **POST** /V1/customers/isEmailAvailable | 
[**customerAccountManagementV1IsReadonlyGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1IsReadonlyGet) | **GET** /V1/customers/{customerId}/permissions/readonly | 
[**customerAccountManagementV1ResendConfirmationPost**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ResendConfirmationPost) | **POST** /V1/customers/confirm | 
[**customerAccountManagementV1ValidatePut**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ValidatePut) | **PUT** /V1/customers/validate | 
[**customerAccountManagementV1ValidateResetPasswordLinkTokenGet**](CustomerAccountManagementV1Api.md#customerAccountManagementV1ValidateResetPasswordLinkTokenGet) | **GET** /V1/customers/{customerId}/password/resetLinkToken/{resetPasswordLinkToken} | 


# **customerAccountManagementV1ActivateByIdPut**
> \Swagger\Client\Model\CustomerDataCustomerInterface customerAccountManagementV1ActivateByIdPut($body)



Activate a customer account using a key that was sent in a confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body7(); // \Swagger\Client\Model\Body7 | 

try {
    $result = $api_instance->customerAccountManagementV1ActivateByIdPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ActivateByIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body7**](../Model/\Swagger\Client\Model\Body7.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ActivatePut**
> \Swagger\Client\Model\CustomerDataCustomerInterface customerAccountManagementV1ActivatePut($email, $body)



Activate a customer account using a key that was sent in a confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$email = "email_example"; // string | 
$body = new \Swagger\Client\Model\Body8(); // \Swagger\Client\Model\Body8 | 

try {
    $result = $api_instance->customerAccountManagementV1ActivatePut($email, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ActivatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **body** | [**\Swagger\Client\Model\Body8**](../Model/\Swagger\Client\Model\Body8.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ChangePasswordByIdPut**
> bool customerAccountManagementV1ChangePasswordByIdPut($body)



Change customer password.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body9(); // \Swagger\Client\Model\Body9 | 

try {
    $result = $api_instance->customerAccountManagementV1ChangePasswordByIdPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ChangePasswordByIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body9**](../Model/\Swagger\Client\Model\Body9.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1CreateAccountPost**
> \Swagger\Client\Model\CustomerDataCustomerInterface customerAccountManagementV1CreateAccountPost($body)



Create customer account. Perform necessary business operations like sending email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body6(); // \Swagger\Client\Model\Body6 | 

try {
    $result = $api_instance->customerAccountManagementV1CreateAccountPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1CreateAccountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body6**](../Model/\Swagger\Client\Model\Body6.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataCustomerInterface**](../Model/CustomerDataCustomerInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetConfirmationStatusGet**
> string customerAccountManagementV1GetConfirmationStatusGet($customer_id)



Gets the account confirmation status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$customer_id = 56; // int | 

try {
    $result = $api_instance->customerAccountManagementV1GetConfirmationStatusGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetConfirmationStatusGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultBillingAddressGet**
> \Swagger\Client\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultBillingAddressGet()



Retrieve default billing address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();

try {
    $result = $api_instance->customerAccountManagementV1GetDefaultBillingAddressGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultBillingAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultBillingAddressGet_0**
> \Swagger\Client\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultBillingAddressGet_0($customer_id)



Retrieve default billing address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$customer_id = 56; // int | 

try {
    $result = $api_instance->customerAccountManagementV1GetDefaultBillingAddressGet_0($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultBillingAddressGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultShippingAddressGet**
> \Swagger\Client\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultShippingAddressGet()



Retrieve default shipping address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();

try {
    $result = $api_instance->customerAccountManagementV1GetDefaultShippingAddressGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultShippingAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1GetDefaultShippingAddressGet_0**
> \Swagger\Client\Model\CustomerDataAddressInterface customerAccountManagementV1GetDefaultShippingAddressGet_0($customer_id)



Retrieve default shipping address for the given customerId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$customer_id = 56; // int | 

try {
    $result = $api_instance->customerAccountManagementV1GetDefaultShippingAddressGet_0($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1GetDefaultShippingAddressGet_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\CustomerDataAddressInterface**](../Model/CustomerDataAddressInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1InitiatePasswordResetPut**
> bool customerAccountManagementV1InitiatePasswordResetPut($body)



Send an email to the customer with a password reset link.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body10(); // \Swagger\Client\Model\Body10 | 

try {
    $result = $api_instance->customerAccountManagementV1InitiatePasswordResetPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1InitiatePasswordResetPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body10**](../Model/\Swagger\Client\Model\Body10.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1IsEmailAvailablePost**
> bool customerAccountManagementV1IsEmailAvailablePost($body)



Check if given email is associated with a customer account in given website.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body13(); // \Swagger\Client\Model\Body13 | 

try {
    $result = $api_instance->customerAccountManagementV1IsEmailAvailablePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1IsEmailAvailablePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body13**](../Model/\Swagger\Client\Model\Body13.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1IsReadonlyGet**
> bool customerAccountManagementV1IsReadonlyGet($customer_id)



Check if customer can be deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$customer_id = 56; // int | 

try {
    $result = $api_instance->customerAccountManagementV1IsReadonlyGet($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1IsReadonlyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ResendConfirmationPost**
> bool customerAccountManagementV1ResendConfirmationPost($body)



Resend confirmation email.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body11(); // \Swagger\Client\Model\Body11 | 

try {
    $result = $api_instance->customerAccountManagementV1ResendConfirmationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ResendConfirmationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body11**](../Model/\Swagger\Client\Model\Body11.md)|  | [optional]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidatePut**
> \Swagger\Client\Model\CustomerDataValidationResultsInterface customerAccountManagementV1ValidatePut($body)



Validate customer data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$body = new \Swagger\Client\Model\Body12(); // \Swagger\Client\Model\Body12 | 

try {
    $result = $api_instance->customerAccountManagementV1ValidatePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ValidatePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Body12**](../Model/\Swagger\Client\Model\Body12.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CustomerDataValidationResultsInterface**](../Model/CustomerDataValidationResultsInterface.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customerAccountManagementV1ValidateResetPasswordLinkTokenGet**
> bool customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customer_id, $reset_password_link_token)



Check if password reset token is valid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomerAccountManagementV1Api();
$customer_id = 56; // int | 
$reset_password_link_token = "reset_password_link_token_example"; // string | 

try {
    $result = $api_instance->customerAccountManagementV1ValidateResetPasswordLinkTokenGet($customer_id, $reset_password_link_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerAccountManagementV1Api->customerAccountManagementV1ValidateResetPasswordLinkTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**|  |
 **reset_password_link_token** | **string**|  |

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

