# Swagger\Client\RewardRewardManagementV1Api

All URIs are relative to *http://t213.vg/rest/default*

Method | HTTP request | Description
------------- | ------------- | -------------
[**rewardRewardManagementV1SetPost**](RewardRewardManagementV1Api.md#rewardRewardManagementV1SetPost) | **POST** /V1/reward/mine/use-reward | 


# **rewardRewardManagementV1SetPost**
> bool rewardRewardManagementV1SetPost()



Set reward points to quote

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\RewardRewardManagementV1Api();

try {
    $result = $api_instance->rewardRewardManagementV1SetPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RewardRewardManagementV1Api->rewardRewardManagementV1SetPost: ', $e->getMessage(), PHP_EOL;
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

