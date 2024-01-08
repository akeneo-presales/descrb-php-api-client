# AkeneoPresales\DescrbAPI\TaskApi

All URIs are relative to https://app.descrb.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatusApiV1TaskCheckStatusGet()**](TaskApi.md#getStatusApiV1TaskCheckStatusGet) | **GET** /api/v1/task/check-status | Get Status


## `getStatusApiV1TaskCheckStatusGet()`

```php
getStatusApiV1TaskCheckStatusGet($task_ids): mixed
```

Get Status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_ids = array('task_ids_example'); // string[]

try {
    $result = $apiInstance->getStatusApiV1TaskCheckStatusGet($task_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getStatusApiV1TaskCheckStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_ids** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
