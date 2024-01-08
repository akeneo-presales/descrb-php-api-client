# AkeneoPresales\DescrbAPI\DefaultApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**metricsMetricsGet()**](DefaultApi.md#metricsMetricsGet) | **GET** /metrics | Metrics


## `metricsMetricsGet()`

```php
metricsMetricsGet(): mixed
```

Metrics

Endpoint that serves Prometheus metrics.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->metricsMetricsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->metricsMetricsGet: ', $e->getMessage(), PHP_EOL;
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
