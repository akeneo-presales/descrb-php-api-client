# AkeneoPresales\DescrbAPI\ContactApi

All URIs are relative to https://app.descrb.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**contactFormApiV1ContactPost()**](ContactApi.md#contactFormApiV1ContactPost) | **POST** /api/v1/contact/ | Contact Form


## `contactFormApiV1ContactPost()`

```php
contactFormApiV1ContactPost($language, $name, $email, $message, $phone_number): mixed
```

Contact Form

Contact form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$language = 'language_example'; // string
$name = 'name_example'; // string | Name
$email = 'email_example'; // string | Email
$message = 'message_example'; // string | Email Message
$phone_number = ''; // string | Phone Number

try {
    $result = $apiInstance->contactFormApiV1ContactPost($language, $name, $email, $message, $phone_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactFormApiV1ContactPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |
 **name** | **string**| Name |
 **email** | **string**| Email |
 **message** | **string**| Email Message |
 **phone_number** | **string**| Phone Number | [optional] [default to &#39;&#39;]

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
