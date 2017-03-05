<?php

require_once __DIR__ . '/vendor/autoload.php';

$baseUrl = 'https://demoshop.dev/rest';
$token = 'bearer <token>';

$config = new \Swagger\Client\Configuration();
$config->setHost($baseUrl);
$config->addDefaultHeader($token);

$apiClient = new \Swagger\Client\ApiClient($config);

$apiInstance = new \Swagger\Client\Api\BackendModuleServiceV1Api($apiClient);

try {
    $result = $apiInstance->backendModuleServiceV1GetModulesGet();

    print_r($result);
} catch (Exception $e) {
    echo $e->getMessage();
}
