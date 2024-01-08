# AkeneoPresales\DescrbAPI\ProductTemplateApi

All URIs are relative to https://app.descrb.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTemplateApiV1ProductTemplatePost()**](ProductTemplateApi.md#createTemplateApiV1ProductTemplatePost) | **POST** /api/v1/product-template/ | Create Template
[**deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete()**](ProductTemplateApi.md#deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete) | **DELETE** /api/v1/product-template/template/{template_id} | Delete Template
[**editTemplateApiV1ProductTemplateTemplateTemplateIdPatch()**](ProductTemplateApi.md#editTemplateApiV1ProductTemplateTemplateTemplateIdPatch) | **PATCH** /api/v1/product-template/template/{template_id} | Edit Template
[**readUserTemplatesApiV1ProductTemplateMyTemplatesGet()**](ProductTemplateApi.md#readUserTemplatesApiV1ProductTemplateMyTemplatesGet) | **GET** /api/v1/product-template/my-templates | Read User Templates


## `createTemplateApiV1ProductTemplatePost()`

```php
createTemplateApiV1ProductTemplatePost($product_template_create): mixed
```

Create Template

Create new product template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_template_create = new \AkeneoPresales\DescrbAPI\Model\ProductTemplateCreate(); // \AkeneoPresales\DescrbAPI\Model\ProductTemplateCreate

try {
    $result = $apiInstance->createTemplateApiV1ProductTemplatePost($product_template_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTemplateApi->createTemplateApiV1ProductTemplatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_template_create** | [**\AkeneoPresales\DescrbAPI\Model\ProductTemplateCreate**](../Model/ProductTemplateCreate.md)|  |

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

## `deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete()`

```php
deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete($template_id): mixed
```

Delete Template

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string

try {
    $result = $apiInstance->deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTemplateApi->deleteTemplateApiV1ProductTemplateTemplateTemplateIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `editTemplateApiV1ProductTemplateTemplateTemplateIdPatch()`

```php
editTemplateApiV1ProductTemplateTemplateTemplateIdPatch($template_id, $product_template_update): \AkeneoPresales\DescrbAPI\Model\ProductTemplate
```

Edit Template

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string
$product_template_update = new \AkeneoPresales\DescrbAPI\Model\ProductTemplateUpdate(); // \AkeneoPresales\DescrbAPI\Model\ProductTemplateUpdate

try {
    $result = $apiInstance->editTemplateApiV1ProductTemplateTemplateTemplateIdPatch($template_id, $product_template_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTemplateApi->editTemplateApiV1ProductTemplateTemplateTemplateIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_id** | **string**|  |
 **product_template_update** | [**\AkeneoPresales\DescrbAPI\Model\ProductTemplateUpdate**](../Model/ProductTemplateUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductTemplate**](../Model/ProductTemplate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserTemplatesApiV1ProductTemplateMyTemplatesGet()`

```php
readUserTemplatesApiV1ProductTemplateMyTemplatesGet(): mixed
```

Read User Templates

Retrieve user product descriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readUserTemplatesApiV1ProductTemplateMyTemplatesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductTemplateApi->readUserTemplatesApiV1ProductTemplateMyTemplatesGet: ', $e->getMessage(), PHP_EOL;
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
