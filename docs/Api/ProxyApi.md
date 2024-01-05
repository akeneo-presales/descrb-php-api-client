# AkeneoPresales\DescrbAPI\Client\ProxyApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proxyGetRequestApiV1ProxyPathGet()**](ProxyApi.md#proxyGetRequestApiV1ProxyPathGet) | **GET** /api/v1/proxy/{path} | Proxy Get Request
[**proxyPostRequestApiV1ProxyPathPost()**](ProxyApi.md#proxyPostRequestApiV1ProxyPathPost) | **POST** /api/v1/proxy/{path} | Proxy Post Request


## `proxyGetRequestApiV1ProxyPathGet()`

```php
proxyGetRequestApiV1ProxyPathGet($path): mixed
```

Proxy Get Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\ProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string

try {
    $result = $apiInstance->proxyGetRequestApiV1ProxyPathGet($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyApi->proxyGetRequestApiV1ProxyPathGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |

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

## `proxyPostRequestApiV1ProxyPathPost()`

```php
proxyPostRequestApiV1ProxyPathPost($path): mixed
```

Proxy Post Request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\ProxyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$path = 'path_example'; // string

try {
    $result = $apiInstance->proxyPostRequestApiV1ProxyPathPost($path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProxyApi->proxyPostRequestApiV1ProxyPathPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **path** | **string**|  |

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
