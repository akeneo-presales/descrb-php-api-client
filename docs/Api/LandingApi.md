# OpenAPI\Client\LandingApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDescriptionApiV1LandingCountGet()**](LandingApi.md#getDescriptionApiV1LandingCountGet) | **GET** /api/v1/landing/count | Get Description


## `getDescriptionApiV1LandingCountGet()`

```php
getDescriptionApiV1LandingCountGet(): mixed
```

Get Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\LandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDescriptionApiV1LandingCountGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingApi->getDescriptionApiV1LandingCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
