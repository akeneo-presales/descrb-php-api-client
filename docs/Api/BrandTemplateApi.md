# AkeneoPresales\DescrbAPI\Client\BrandTemplateApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplateApiV1BrandTemplatePost()**](BrandTemplateApi.md#createTemplateApiV1BrandTemplatePost) | **POST** /api/v1/brand-template/ | Create Template
[**deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete()**](BrandTemplateApi.md#deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete) | **DELETE** /api/v1/brand-template/template/{template_id} | Delete Template
[**editTemplateApiV1BrandTemplateTemplateTemplateIdPatch()**](BrandTemplateApi.md#editTemplateApiV1BrandTemplateTemplateTemplateIdPatch) | **PATCH** /api/v1/brand-template/template/{template_id} | Edit Template
[**readUserTemplatesApiV1BrandTemplateMyTemplatesGet()**](BrandTemplateApi.md#readUserTemplatesApiV1BrandTemplateMyTemplatesGet) | **GET** /api/v1/brand-template/my-templates | Read User Templates


## `createTemplateApiV1BrandTemplatePost()`

```php
createTemplateApiV1BrandTemplatePost($brand_template_create): mixed
```

Create Template

Create new brand template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_template_create = new \AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateCreate(); // \AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateCreate

try {
    $result = $apiInstance->createTemplateApiV1BrandTemplatePost($brand_template_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->createTemplateApiV1BrandTemplatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_template_create** | [**\AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateCreate**](../Model/BrandTemplateCreate.md)|  |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete()`

```php
deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete($template_id): mixed
```

Delete Template

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string

try {
    $result = $apiInstance->deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->deleteTemplateApiV1BrandTemplateTemplateTemplateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |

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

## `editTemplateApiV1BrandTemplateTemplateTemplateIdPatch()`

```php
editTemplateApiV1BrandTemplateTemplateTemplateIdPatch($template_id, $brand_template_update): \AkeneoPresales\DescrbAPI\Client\Model\BrandTemplate
```

Edit Template

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$brand_template_update = new \AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateUpdate(); // \AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateUpdate

try {
    $result = $apiInstance->editTemplateApiV1BrandTemplateTemplateTemplateIdPatch($template_id, $brand_template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->editTemplateApiV1BrandTemplateTemplateTemplateIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **brand_template_update** | [**\AkeneoPresales\DescrbAPI\Client\Model\BrandTemplateUpdate**](../Model/BrandTemplateUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\BrandTemplate**](../Model/BrandTemplate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserTemplatesApiV1BrandTemplateMyTemplatesGet()`

```php
readUserTemplatesApiV1BrandTemplateMyTemplatesGet(): mixed
```

Read User Templates

Retrieve user Brand descriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\BrandTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readUserTemplatesApiV1BrandTemplateMyTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandTemplateApi->readUserTemplatesApiV1BrandTemplateMyTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
