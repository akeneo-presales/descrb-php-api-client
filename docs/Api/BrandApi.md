# AkeneoPresales\DescrbAPI\BrandApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBrandAdApiV1BrandPost()**](BrandApi.md#createBrandAdApiV1BrandPost) | **POST** /api/v1/brand/ | Create Brand Ad
[**reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost()**](BrandApi.md#reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost) | **POST** /api/v1/brand/{brand_description_id}/review | Review Brand Description


## `createBrandAdApiV1BrandPost()`

```php
createBrandAdApiV1BrandPost($image, $photo_url, $brand_name, $length, $language, $data_language, $language_style): mixed
```

Create Brand Ad

Create new ad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$image = "/path/to/file.txt"; // \SplFileObject | Image File
$photo_url = ''; // string | Photo URL
$brand_name = ''; // string | Product Name
$length = 512; // int | Numer of Tokens
$language = 'pl'; // string | Supported languages: en,de,fr,es,ro,pl
$data_language = ''; // string | Data Source Language
$language_style = 'Neutral'; // string | Choose between Neutral, Casual, Specialist

try {
    $result = $apiInstance->createBrandAdApiV1BrandPost($image, $photo_url, $brand_name, $length, $language, $data_language, $language_style);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->createBrandAdApiV1BrandPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **\SplFileObject****\SplFileObject**| Image File | [optional]
 **photo_url** | **string**| Photo URL | [optional] [default to &#39;&#39;]
 **brand_name** | **string**| Product Name | [optional] [default to &#39;&#39;]
 **length** | **int**| Numer of Tokens | [optional] [default to 512]
 **language** | **string**| Supported languages: en,de,fr,es,ro,pl | [optional] [default to &#39;pl&#39;]
 **data_language** | **string**| Data Source Language | [optional] [default to &#39;&#39;]
 **language_style** | **string**| Choose between Neutral, Casual, Specialist | [optional] [default to &#39;Neutral&#39;]

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

## `reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost()`

```php
reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost($brand_description_id, $brand_description_update): \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate
```

Review Brand Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\BrandApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$brand_description_id = 'brand_description_id_example'; // string
$brand_description_update = new \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate(); // \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate

try {
    $result = $apiInstance->reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost($brand_description_id, $brand_description_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandApi->reviewBrandDescriptionApiV1BrandBrandDescriptionIdReviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **brand_description_id** | **string**|  |
 **brand_description_update** | [**\AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate**](../Model/BrandDescriptionUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate**](../Model/BrandDescriptionUpdate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
