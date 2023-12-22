# OpenAPI\Client\CrawlerApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**colorsApiV1CrawlerLabelsPost()**](CrawlerApi.md#colorsApiV1CrawlerLabelsPost) | **POST** /api/v1/crawler/labels | Colors
[**getImageApiV1CrawlerImagesFilenameGet()**](CrawlerApi.md#getImageApiV1CrawlerImagesFilenameGet) | **GET** /api/v1/crawler/images/{filename} | Get Image
[**logosApiV1CrawlerLogosPost()**](CrawlerApi.md#logosApiV1CrawlerLogosPost) | **POST** /api/v1/crawler/logos | Logos
[**searchFromGoogleLensApiV1CrawlerPost()**](CrawlerApi.md#searchFromGoogleLensApiV1CrawlerPost) | **POST** /api/v1/crawler/ | Search From Google Lens


## `colorsApiV1CrawlerLabelsPost()`

```php
colorsApiV1CrawlerLabelsPost($image): mixed
```

Colors

Using Google Vision API return colors and labels

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CrawlerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | Image File

try {
    $result = $apiInstance->colorsApiV1CrawlerLabelsPost($image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerApi->colorsApiV1CrawlerLabelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| Image File |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getImageApiV1CrawlerImagesFilenameGet()`

```php
getImageApiV1CrawlerImagesFilenameGet($filename): mixed
```

Get Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\CrawlerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filename = NULL; // mixed

try {
    $result = $apiInstance->getImageApiV1CrawlerImagesFilenameGet($filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerApi->getImageApiV1CrawlerImagesFilenameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | [**mixed**](../Model/.md)|  |

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

## `logosApiV1CrawlerLogosPost()`

```php
logosApiV1CrawlerLogosPost($image): mixed
```

Logos

Using Google Vision API return Logos

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CrawlerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | Image File

try {
    $result = $apiInstance->logosApiV1CrawlerLogosPost($image);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerApi->logosApiV1CrawlerLogosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| Image File |

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFromGoogleLensApiV1CrawlerPost()`

```php
searchFromGoogleLensApiV1CrawlerPost($image, $language): mixed
```

Search From Google Lens

Our Google Lens API allows you to scrape results from the Google Lens page when performing an image search. The results related to the image could contain a knowledge graph, visual matches, text, and other data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CrawlerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | Image File
$language = 'pl'; // string

try {
    $result = $apiInstance->searchFromGoogleLensApiV1CrawlerPost($image, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CrawlerApi->searchFromGoogleLensApiV1CrawlerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| Image File |
 **language** | **string**|  | [optional] [default to &#39;pl&#39;]

### Return type

**mixed**

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
