# AkeneoPresales\DescrbAPI\ProductApi

All URIs are relative to https://app.descrb.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDemoProductAdApiV1ProductDemoPost()**](ProductApi.md#createDemoProductAdApiV1ProductDemoPost) | **POST** /api/v1/product/demo/ | Create Demo Product Ad
[**createProductAdApiV1ProductPost()**](ProductApi.md#createProductAdApiV1ProductPost) | **POST** /api/v1/product/ | Create Product Ad
[**editBrandDescriptionApiV1ProductBrandDescriptionIdPatch()**](ProductApi.md#editBrandDescriptionApiV1ProductBrandDescriptionIdPatch) | **PATCH** /api/v1/product/brand/{description_id} | Edit Brand Description
[**editDescriptionApiV1ProductDescriptionDescriptionIdPatch()**](ProductApi.md#editDescriptionApiV1ProductDescriptionDescriptionIdPatch) | **PATCH** /api/v1/product/description/{description_id} | Edit Description
[**editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch()**](ProductApi.md#editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch) | **PATCH** /api/v1/product/history/{description_id} | Edit History Description
[**exportChosenToCsvApiV1ProductExportChosenPut()**](ProductApi.md#exportChosenToCsvApiV1ProductExportChosenPut) | **PUT** /api/v1/product/export-chosen | Export Chosen To Csv
[**exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet()**](ProductApi.md#exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet) | **GET** /api/v1/product/admin/export-current-page | Export Page To Csv Admin Panel
[**exportPageToCsvApiV1ProductExportCurrentPageGet()**](ProductApi.md#exportPageToCsvApiV1ProductExportCurrentPageGet) | **GET** /api/v1/product/export-current-page | Export Page To Csv
[**exportToCsvAdminPanelApiV1ProductAdminExportAllGet()**](ProductApi.md#exportToCsvAdminPanelApiV1ProductAdminExportAllGet) | **GET** /api/v1/product/admin/export-all | Export To Csv Admin Panel
[**exportToCsvApiV1ProductExportAllGet()**](ProductApi.md#exportToCsvApiV1ProductExportAllGet) | **GET** /api/v1/product/export-all | Export To Csv
[**getDescriptionApiV1ProductDescriptionIdGet()**](ProductApi.md#getDescriptionApiV1ProductDescriptionIdGet) | **GET** /api/v1/product/{description_id} | Get Description
[**readAllProductDescriptionsApiV1ProductAllGet()**](ProductApi.md#readAllProductDescriptionsApiV1ProductAllGet) | **GET** /api/v1/product/all | Read All Product Descriptions
[**readUserProductDescriptionsApiV1ProductMyReviewsGet()**](ProductApi.md#readUserProductDescriptionsApiV1ProductMyReviewsGet) | **GET** /api/v1/product/my-reviews | Read User Product Descriptions
[**regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost()**](ProductApi.md#regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost) | **POST** /api/v1/product/regenerate-brand-description/{description_id} | Regenerate Brand Description
[**regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost()**](ProductApi.md#regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost) | **POST** /api/v1/product/regenerate-description/{description_id} | Regenerate Description
[**regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost()**](ProductApi.md#regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost) | **POST** /api/v1/product/regenerate-empty-description/{description_id} | Regenerate Empty
[**regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost()**](ProductApi.md#regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost) | **POST** /api/v1/product/regenerate-history-description/{description_id} | Regenerate History Description
[**regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost()**](ProductApi.md#regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost) | **POST** /api/v1/product/regenerate-technologies-description/{description_id} | Regenerate Technology
[**reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost()**](ProductApi.md#reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost) | **POST** /api/v1/product/brand/{description_id}/review | Review Brand Description
[**reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost()**](ProductApi.md#reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost) | **POST** /api/v1/product/description/{description_id}/review | Review Description
[**reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost()**](ProductApi.md#reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost) | **POST** /api/v1/product/history/{description_id}/review | Review History Description
[**translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost()**](ProductApi.md#translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost) | **POST** /api/v1/product/translate-description/{description_id} | Translate Description


## `createDemoProductAdApiV1ProductDemoPost()`

```php
createDemoProductAdApiV1ProductDemoPost($base_image, $segmented_image, $photo_url, $name, $product_id, $length, $language, $data_language, $language_style, $keywords, $seotags, $product_history, $manufacturer_history, $technologies, $labels, $logos, $search_codes, $unique_product, $describe_colors, $describe_materials): mixed
```

Create Demo Product Ad

Create new demo ad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_image = array("/path/to/file.txt"); // \SplFileObject[] | Image Files
$segmented_image = array(new \AkeneoPresales\DescrbAPI\Model\AnyOfFileString()); // AnyOfFileString[] | Segmented Image Files
$photo_url = ''; // string | Photo URL
$name = array('name_example'); // string[] | Product Names
$product_id = array('product_id_example'); // string[] | Product IDs
$length = 512; // int | Numer of Tokens
$language = 'pl'; // string | Supported languages: en,de,fr,es,ro,pl
$data_language = ''; // string | Data Source Language
$language_style = 'Neutral'; // string | Choose between Neutral, Casual, Specialist
$keywords = ''; // string | Important Keywords to include
$seotags = false; // bool | Add SEO Tags
$product_history = false; // bool | Add Product History
$manufacturer_history = false; // bool | Add Manufacturer History
$technologies = false; // bool | Add List of Technologies
$labels = false; // bool | Add Labels
$logos = false; // bool | Add Logo Detection
$search_codes = false; // bool | Search for SKU, MPU, Product ID
$unique_product = false; // bool | Unique product, use captions
$describe_colors = false; // bool | Should the description include colors
$describe_materials = false; // bool | Should the description include materials

try {
    $result = $apiInstance->createDemoProductAdApiV1ProductDemoPost($base_image, $segmented_image, $photo_url, $name, $product_id, $length, $language, $data_language, $language_style, $keywords, $seotags, $product_history, $manufacturer_history, $technologies, $labels, $logos, $search_codes, $unique_product, $describe_colors, $describe_materials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createDemoProductAdApiV1ProductDemoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_image** | **\SplFileObject[]**| Image Files | [optional]
 **segmented_image** | [**AnyOfFileString[]**](../Model/AnyOfFileString.md)| Segmented Image Files | [optional]
 **photo_url** | **string**| Photo URL | [optional] [default to &#39;&#39;]
 **name** | [**string[]**](../Model/string.md)| Product Names | [optional]
 **product_id** | [**string[]**](../Model/string.md)| Product IDs | [optional]
 **length** | **int**| Numer of Tokens | [optional] [default to 512]
 **language** | **string**| Supported languages: en,de,fr,es,ro,pl | [optional] [default to &#39;pl&#39;]
 **data_language** | **string**| Data Source Language | [optional] [default to &#39;&#39;]
 **language_style** | **string**| Choose between Neutral, Casual, Specialist | [optional] [default to &#39;Neutral&#39;]
 **keywords** | **string**| Important Keywords to include | [optional] [default to &#39;&#39;]
 **seotags** | **bool**| Add SEO Tags | [optional] [default to false]
 **product_history** | **bool**| Add Product History | [optional] [default to false]
 **manufacturer_history** | **bool**| Add Manufacturer History | [optional] [default to false]
 **technologies** | **bool**| Add List of Technologies | [optional] [default to false]
 **labels** | **bool**| Add Labels | [optional] [default to false]
 **logos** | **bool**| Add Logo Detection | [optional] [default to false]
 **search_codes** | **bool**| Search for SKU, MPU, Product ID | [optional] [default to false]
 **unique_product** | **bool**| Unique product, use captions | [optional] [default to false]
 **describe_colors** | **bool**| Should the description include colors | [optional] [default to false]
 **describe_materials** | **bool**| Should the description include materials | [optional] [default to false]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createProductAdApiV1ProductPost()`

```php
createProductAdApiV1ProductPost($base_image, $segmented_image, $photo_url, $name, $product_id, $length, $language, $data_language, $language_style, $keywords, $seotags, $product_history, $manufacturer_history, $technologies, $labels, $logos, $search_codes, $unique_product, $describe_colors, $describe_materials): mixed
```

Create Product Ad

Create new ad

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_image = array("/path/to/file.txt"); // \SplFileObject[] | Image Files
$segmented_image = array(new \AkeneoPresales\DescrbAPI\Model\AnyOfFileString()); // AnyOfFileString[] | Segmented Image Files
$photo_url = ''; // string | Photo URL
$name = array('name_example'); // string[] | Product Names
$product_id = array('product_id_example'); // string[] | Product IDs
$length = 512; // int | Numer of Tokens
$language = 'pl'; // string | Supported languages: en,de,fr,es,ro,pl
$data_language = ''; // string | Data Source Language
$language_style = 'Neutral'; // string | Choose between Neutral, Casual, Specialist
$keywords = ''; // string | Important Keywords to include
$seotags = false; // bool | Add SEO Tags
$product_history = false; // bool | Add Product History
$manufacturer_history = false; // bool | Add Manufacturer History
$technologies = false; // bool | Add List of Technologies
$labels = false; // bool | Add Labels
$logos = false; // bool | Add Logo Detection
$search_codes = false; // bool | Search for SKU, MPU, Product ID
$unique_product = false; // bool | Unique product, use captions
$describe_colors = false; // bool | Should the description include colors
$describe_materials = false; // bool | Should the description include materials

try {
    $result = $apiInstance->createProductAdApiV1ProductPost($base_image, $segmented_image, $photo_url, $name, $product_id, $length, $language, $data_language, $language_style, $keywords, $seotags, $product_history, $manufacturer_history, $technologies, $labels, $logos, $search_codes, $unique_product, $describe_colors, $describe_materials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->createProductAdApiV1ProductPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **base_image** | **\SplFileObject[]**| Image Files | [optional]
 **segmented_image** | [**AnyOfFileString[]**](../Model/AnyOfFileString.md)| Segmented Image Files | [optional]
 **photo_url** | **string**| Photo URL | [optional] [default to &#39;&#39;]
 **name** | [**string[]**](../Model/string.md)| Product Names | [optional]
 **product_id** | [**string[]**](../Model/string.md)| Product IDs | [optional]
 **length** | **int**| Numer of Tokens | [optional] [default to 512]
 **language** | **string**| Supported languages: en,de,fr,es,ro,pl | [optional] [default to &#39;pl&#39;]
 **data_language** | **string**| Data Source Language | [optional] [default to &#39;&#39;]
 **language_style** | **string**| Choose between Neutral, Casual, Specialist | [optional] [default to &#39;Neutral&#39;]
 **keywords** | **string**| Important Keywords to include | [optional] [default to &#39;&#39;]
 **seotags** | **bool**| Add SEO Tags | [optional] [default to false]
 **product_history** | **bool**| Add Product History | [optional] [default to false]
 **manufacturer_history** | **bool**| Add Manufacturer History | [optional] [default to false]
 **technologies** | **bool**| Add List of Technologies | [optional] [default to false]
 **labels** | **bool**| Add Labels | [optional] [default to false]
 **logos** | **bool**| Add Logo Detection | [optional] [default to false]
 **search_codes** | **bool**| Search for SKU, MPU, Product ID | [optional] [default to false]
 **unique_product** | **bool**| Unique product, use captions | [optional] [default to false]
 **describe_colors** | **bool**| Should the description include colors | [optional] [default to false]
 **describe_materials** | **bool**| Should the description include materials | [optional] [default to false]

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

## `editBrandDescriptionApiV1ProductBrandDescriptionIdPatch()`

```php
editBrandDescriptionApiV1ProductBrandDescriptionIdPatch($description_id, $brand_description_update): \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate
```

Edit Brand Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$brand_description_update = new \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate(); // \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate

try {
    $result = $apiInstance->editBrandDescriptionApiV1ProductBrandDescriptionIdPatch($description_id, $brand_description_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->editBrandDescriptionApiV1ProductBrandDescriptionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
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

## `editDescriptionApiV1ProductDescriptionDescriptionIdPatch()`

```php
editDescriptionApiV1ProductDescriptionDescriptionIdPatch($description_id, $product_description_update): \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate
```

Edit Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$product_description_update = new \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate(); // \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate

try {
    $result = $apiInstance->editDescriptionApiV1ProductDescriptionDescriptionIdPatch($description_id, $product_description_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->editDescriptionApiV1ProductDescriptionDescriptionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
 **product_description_update** | [**\AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate**](../Model/ProductDescriptionUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate**](../Model/ProductDescriptionUpdate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch()`

```php
editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch($description_id, $product_history_update): \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate
```

Edit History Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$product_history_update = new \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate(); // \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate

try {
    $result = $apiInstance->editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch($description_id, $product_history_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->editHistoryDescriptionApiV1ProductHistoryDescriptionIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
 **product_history_update** | [**\AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate**](../Model/ProductHistoryUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate**](../Model/ProductHistoryUpdate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exportChosenToCsvApiV1ProductExportChosenPut()`

```php
exportChosenToCsvApiV1ProductExportChosenPut($request_body): mixed
```

Export Chosen To Csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = NULL; // mixed[]

try {
    $result = $apiInstance->exportChosenToCsvApiV1ProductExportChosenPut($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->exportChosenToCsvApiV1ProductExportChosenPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**mixed[]**](../Model/mixed.md)|  |

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

## `exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet()`

```php
exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet($user_id, $limit, $offset): mixed
```

Export Page To Csv Admin Panel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->exportPageToCsvAdminPanelApiV1ProductAdminExportCurrentPageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

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

## `exportPageToCsvApiV1ProductExportCurrentPageGet()`

```php
exportPageToCsvApiV1ProductExportCurrentPageGet($limit, $offset): mixed
```

Export Page To Csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->exportPageToCsvApiV1ProductExportCurrentPageGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->exportPageToCsvApiV1ProductExportCurrentPageGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

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

## `exportToCsvAdminPanelApiV1ProductAdminExportAllGet()`

```php
exportToCsvAdminPanelApiV1ProductAdminExportAllGet($user_id, $limit, $offset): mixed
```

Export To Csv Admin Panel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$limit = NULL; // mixed
$offset = NULL; // mixed

try {
    $result = $apiInstance->exportToCsvAdminPanelApiV1ProductAdminExportAllGet($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->exportToCsvAdminPanelApiV1ProductAdminExportAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  | [optional]
 **limit** | [**mixed**](../Model/.md)|  | [optional]
 **offset** | [**mixed**](../Model/.md)|  | [optional]

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

## `exportToCsvApiV1ProductExportAllGet()`

```php
exportToCsvApiV1ProductExportAllGet($limit, $offset): mixed
```

Export To Csv

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = NULL; // mixed
$offset = NULL; // mixed

try {
    $result = $apiInstance->exportToCsvApiV1ProductExportAllGet($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->exportToCsvApiV1ProductExportAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | [**mixed**](../Model/.md)|  | [optional]
 **offset** | [**mixed**](../Model/.md)|  | [optional]

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

## `getDescriptionApiV1ProductDescriptionIdGet()`

```php
getDescriptionApiV1ProductDescriptionIdGet($description_id): \AkeneoPresales\DescrbAPI\Model\ProductDescriptionExtended
```

Get Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->getDescriptionApiV1ProductDescriptionIdGet($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->getDescriptionApiV1ProductDescriptionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductDescriptionExtended**](../Model/ProductDescriptionExtended.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAllProductDescriptionsApiV1ProductAllGet()`

```php
readAllProductDescriptionsApiV1ProductAllGet($score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionInDB
```

Read All Product Descriptions

Retrieve all product descriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 56; // int
$name__ilike = 'name__ilike_example'; // string
$brand_name__ilike = 'brand_name__ilike_example'; // string
$order_by = 'score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readAllProductDescriptionsApiV1ProductAllGet($score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readAllProductDescriptionsApiV1ProductAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **int**|  | [optional]
 **name__ilike** | **string**|  | [optional]
 **brand_name__ilike** | **string**|  | [optional]
 **order_by** | **string**|  | [optional] [default to &#39;score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool&#39;]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionInDB**](../Model/LimitOffsetPageProductDescriptionInDB.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserProductDescriptionsApiV1ProductMyReviewsGet()`

```php
readUserProductDescriptionsApiV1ProductMyReviewsGet($score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionInDB
```

Read User Product Descriptions

Retrieve user product descriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$score = 56; // int
$name__ilike = 'name__ilike_example'; // string
$brand_name__ilike = 'brand_name__ilike_example'; // string
$order_by = 'score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readUserProductDescriptionsApiV1ProductMyReviewsGet($score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->readUserProductDescriptionsApiV1ProductMyReviewsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **score** | **int**|  | [optional]
 **name__ilike** | **string**|  | [optional]
 **brand_name__ilike** | **string**|  | [optional]
 **order_by** | **string**|  | [optional] [default to &#39;score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool&#39;]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionInDB**](../Model/LimitOffsetPageProductDescriptionInDB.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost()`

```php
regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost($description_id): \AkeneoPresales\DescrbAPI\Model\BrandDescription
```

Regenerate Brand Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->regenerateBrandDescriptionApiV1ProductRegenerateBrandDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\BrandDescription**](../Model/BrandDescription.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost()`

```php
regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost($description_id): \AkeneoPresales\DescrbAPI\Model\ProductDescription
```

Regenerate Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->regenerateDescriptionApiV1ProductRegenerateDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductDescription**](../Model/ProductDescription.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost()`

```php
regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost($description_id): mixed
```

Regenerate Empty

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->regenerateEmptyApiV1ProductRegenerateEmptyDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

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

## `regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost()`

```php
regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost($description_id): \AkeneoPresales\DescrbAPI\Model\ProductHistory
```

Regenerate History Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->regenerateHistoryDescriptionApiV1ProductRegenerateHistoryDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductHistory**](../Model/ProductHistory.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost()`

```php
regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost($description_id): \AkeneoPresales\DescrbAPI\Model\Technologies
```

Regenerate Technology

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string

try {
    $result = $apiInstance->regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost($description_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->regenerateTechnologyApiV1ProductRegenerateTechnologiesDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\Technologies**](../Model/Technologies.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost()`

```php
reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost($description_id, $brand_description_update): \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate
```

Review Brand Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$brand_description_update = new \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate(); // \AkeneoPresales\DescrbAPI\Model\BrandDescriptionUpdate

try {
    $result = $apiInstance->reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost($description_id, $brand_description_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->reviewBrandDescriptionApiV1ProductBrandDescriptionIdReviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
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

## `reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost()`

```php
reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost($description_id, $product_description_update): \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate
```

Review Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$product_description_update = new \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate(); // \AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate

try {
    $result = $apiInstance->reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost($description_id, $product_description_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->reviewDescriptionApiV1ProductDescriptionDescriptionIdReviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
 **product_description_update** | [**\AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate**](../Model/ProductDescriptionUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductDescriptionUpdate**](../Model/ProductDescriptionUpdate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost()`

```php
reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost($description_id, $product_history_update): \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate
```

Review History Description

Get description by ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$product_history_update = new \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate(); // \AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate

try {
    $result = $apiInstance->reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost($description_id, $product_history_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->reviewHistoryDescriptionApiV1ProductHistoryDescriptionIdReviewPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
 **product_history_update** | [**\AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate**](../Model/ProductHistoryUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\ProductHistoryUpdate**](../Model/ProductHistoryUpdate.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost()`

```php
translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost($description_id, $language): mixed
```

Translate Description

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$description_id = 'description_id_example'; // string
$language = 'language_example'; // string

try {
    $result = $apiInstance->translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost($description_id, $language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->translateDescriptionApiV1ProductTranslateDescriptionDescriptionIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **description_id** | **string**|  |
 **language** | **string**|  |

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
