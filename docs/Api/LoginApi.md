# AkeneoPresales\DescrbAPI\Client\LoginApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authViaFacebookApiV1LoginAuthFacebookGet()**](LoginApi.md#authViaFacebookApiV1LoginAuthFacebookGet) | **GET** /api/v1/login/auth/facebook | Auth Via Facebook
[**authViaGoogleApiV1LoginAuthGoogleGet()**](LoginApi.md#authViaGoogleApiV1LoginAuthGoogleGet) | **GET** /api/v1/login/auth/google | Auth Via Google
[**authViaLinkedinApiV1LoginAuthLinkedinGet()**](LoginApi.md#authViaLinkedinApiV1LoginAuthLinkedinGet) | **GET** /api/v1/login/auth/linkedin | Auth Via Linkedin
[**disableTotpAuthenticationApiV1LoginTotpDelete()**](LoginApi.md#disableTotpAuthenticationApiV1LoginTotpDelete) | **DELETE** /api/v1/login/totp | Disable Totp Authentication
[**enableTotpAuthenticationApiV1LoginTotpPut()**](LoginApi.md#enableTotpAuthenticationApiV1LoginTotpPut) | **PUT** /api/v1/login/totp | Enable Totp Authentication
[**loginViaFacebookApiV1LoginFacebookGet()**](LoginApi.md#loginViaFacebookApiV1LoginFacebookGet) | **GET** /api/v1/login/facebook | Login Via Facebook
[**loginViaGoogleApiV1LoginGoogleGet()**](LoginApi.md#loginViaGoogleApiV1LoginGoogleGet) | **GET** /api/v1/login/google | Login Via Google
[**loginViaLinkedinApiV1LoginLinkedinGet()**](LoginApi.md#loginViaLinkedinApiV1LoginLinkedinGet) | **GET** /api/v1/login/linkedin | Login Via Linkedin
[**loginWithMagicLinkApiV1LoginMagicEmailGet()**](LoginApi.md#loginWithMagicLinkApiV1LoginMagicEmailGet) | **GET** /api/v1/login/magic/{email} | Login With Magic Link
[**loginWithOauth2ApiV1LoginOauthPost()**](LoginApi.md#loginWithOauth2ApiV1LoginOauthPost) | **POST** /api/v1/login/oauth | Login With Oauth2
[**loginWithTotpApiV1LoginTotpPost()**](LoginApi.md#loginWithTotpApiV1LoginTotpPost) | **POST** /api/v1/login/totp | Login With Totp
[**recoverPasswordApiV1LoginRecoverEmailPost()**](LoginApi.md#recoverPasswordApiV1LoginRecoverEmailPost) | **POST** /api/v1/login/recover/{email} | Recover Password
[**refreshTokenApiV1LoginRefreshPost()**](LoginApi.md#refreshTokenApiV1LoginRefreshPost) | **POST** /api/v1/login/refresh | Refresh Token
[**registerApiV1LoginSignInPost()**](LoginApi.md#registerApiV1LoginSignInPost) | **POST** /api/v1/login/sign-in | Register
[**resetPasswordApiV1LoginResetPost()**](LoginApi.md#resetPasswordApiV1LoginResetPost) | **POST** /api/v1/login/reset | Reset Password
[**revokeTokenApiV1LoginRevokePost()**](LoginApi.md#revokeTokenApiV1LoginRevokePost) | **POST** /api/v1/login/revoke | Revoke Token
[**validateMagicLinkApiV1LoginClaimPost()**](LoginApi.md#validateMagicLinkApiV1LoginClaimPost) | **POST** /api/v1/login/claim | Validate Magic Link
[**verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost()**](LoginApi.md#verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost) | **POST** /api/v1/login/verify-recaptcha | Verify Recaptcha Endpoint


## `authViaFacebookApiV1LoginAuthFacebookGet()`

```php
authViaFacebookApiV1LoginAuthFacebookGet(): mixed
```

Auth Via Facebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->authViaFacebookApiV1LoginAuthFacebookGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->authViaFacebookApiV1LoginAuthFacebookGet: ', $e->getMessage(), PHP_EOL;
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

## `authViaGoogleApiV1LoginAuthGoogleGet()`

```php
authViaGoogleApiV1LoginAuthGoogleGet(): mixed
```

Auth Via Google

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->authViaGoogleApiV1LoginAuthGoogleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->authViaGoogleApiV1LoginAuthGoogleGet: ', $e->getMessage(), PHP_EOL;
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

## `authViaLinkedinApiV1LoginAuthLinkedinGet()`

```php
authViaLinkedinApiV1LoginAuthLinkedinGet(): mixed
```

Auth Via Linkedin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->authViaLinkedinApiV1LoginAuthLinkedinGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->authViaLinkedinApiV1LoginAuthLinkedinGet: ', $e->getMessage(), PHP_EOL;
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

## `disableTotpAuthenticationApiV1LoginTotpDelete()`

```php
disableTotpAuthenticationApiV1LoginTotpDelete($user_update): \AkeneoPresales\DescrbAPI\Client\Model\Msg
```

Disable Totp Authentication

Disable TOTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_update = new \AkeneoPresales\DescrbAPI\Client\Model\UserUpdate(); // \AkeneoPresales\DescrbAPI\Client\Model\UserUpdate

try {
    $result = $apiInstance->disableTotpAuthenticationApiV1LoginTotpDelete($user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->disableTotpAuthenticationApiV1LoginTotpDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_update** | [**\AkeneoPresales\DescrbAPI\Client\Model\UserUpdate**](../Model/UserUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableTotpAuthenticationApiV1LoginTotpPut()`

```php
enableTotpAuthenticationApiV1LoginTotpPut($enable_totp): \AkeneoPresales\DescrbAPI\Client\Model\Msg
```

Enable Totp Authentication

For validation of token before enabling TOTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enable_totp = new \AkeneoPresales\DescrbAPI\Client\Model\EnableTOTP(); // \AkeneoPresales\DescrbAPI\Client\Model\EnableTOTP

try {
    $result = $apiInstance->enableTotpAuthenticationApiV1LoginTotpPut($enable_totp);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->enableTotpAuthenticationApiV1LoginTotpPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **enable_totp** | [**\AkeneoPresales\DescrbAPI\Client\Model\EnableTOTP**](../Model/EnableTOTP.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginViaFacebookApiV1LoginFacebookGet()`

```php
loginViaFacebookApiV1LoginFacebookGet(): mixed
```

Login Via Facebook

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginViaFacebookApiV1LoginFacebookGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginViaFacebookApiV1LoginFacebookGet: ', $e->getMessage(), PHP_EOL;
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

## `loginViaGoogleApiV1LoginGoogleGet()`

```php
loginViaGoogleApiV1LoginGoogleGet(): mixed
```

Login Via Google

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginViaGoogleApiV1LoginGoogleGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginViaGoogleApiV1LoginGoogleGet: ', $e->getMessage(), PHP_EOL;
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

## `loginViaLinkedinApiV1LoginLinkedinGet()`

```php
loginViaLinkedinApiV1LoginLinkedinGet(): mixed
```

Login Via Linkedin

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginViaLinkedinApiV1LoginLinkedinGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginViaLinkedinApiV1LoginLinkedinGet: ', $e->getMessage(), PHP_EOL;
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

## `loginWithMagicLinkApiV1LoginMagicEmailGet()`

```php
loginWithMagicLinkApiV1LoginMagicEmailGet($email, $user_language): \AkeneoPresales\DescrbAPI\Client\Model\WebToken
```

Login With Magic Link

First step of a 'magic link' login. Check if the user exists and generate a magic link. Generates two short-duration jwt tokens, one for validation, one for email. Creates user if not exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string
$user_language = 'user_language_example'; // string

try {
    $result = $apiInstance->loginWithMagicLinkApiV1LoginMagicEmailGet($email, $user_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginWithMagicLinkApiV1LoginMagicEmailGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **user_language** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\WebToken**](../Model/WebToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginWithOauth2ApiV1LoginOauthPost()`

```php
loginWithOauth2ApiV1LoginOauthPost($username, $password, $grant_type, $scope, $client_id, $client_secret): \AkeneoPresales\DescrbAPI\Client\Model\Token
```

Login With Oauth2

First step with OAuth2 compatible token login, get an access token for future requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = 'username_example'; // string
$password = 'password_example'; // string
$grant_type = 'grant_type_example'; // string
$scope = ''; // string
$client_id = 'client_id_example'; // string
$client_secret = 'client_secret_example'; // string

try {
    $result = $apiInstance->loginWithOauth2ApiV1LoginOauthPost($username, $password, $grant_type, $scope, $client_id, $client_secret);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginWithOauth2ApiV1LoginOauthPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**|  |
 **password** | **string**|  |
 **grant_type** | **string**|  | [optional]
 **scope** | **string**|  | [optional] [default to &#39;&#39;]
 **client_id** | **string**|  | [optional]
 **client_secret** | **string**|  | [optional]

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginWithTotpApiV1LoginTotpPost()`

```php
loginWithTotpApiV1LoginTotpPost($web_token): \AkeneoPresales\DescrbAPI\Client\Model\Token
```

Login With Totp

Final validation step, using TOTP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_token = new \AkeneoPresales\DescrbAPI\Client\Model\WebToken(); // \AkeneoPresales\DescrbAPI\Client\Model\WebToken

try {
    $result = $apiInstance->loginWithTotpApiV1LoginTotpPost($web_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->loginWithTotpApiV1LoginTotpPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_token** | [**\AkeneoPresales\DescrbAPI\Client\Model\WebToken**](../Model/WebToken.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoverPasswordApiV1LoginRecoverEmailPost()`

```php
recoverPasswordApiV1LoginRecoverEmailPost($email): AnyOfWebTokenMsg
```

Recover Password

Password Recovery

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string

try {
    $result = $apiInstance->recoverPasswordApiV1LoginRecoverEmailPost($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->recoverPasswordApiV1LoginRecoverEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |

### Return type

[**AnyOfWebTokenMsg**](../Model/AnyOfWebTokenMsg.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshTokenApiV1LoginRefreshPost()`

```php
refreshTokenApiV1LoginRefreshPost(): \AkeneoPresales\DescrbAPI\Client\Model\Token
```

Refresh Token

Refresh tokens for future requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->refreshTokenApiV1LoginRefreshPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->refreshTokenApiV1LoginRefreshPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `registerApiV1LoginSignInPost()`

```php
registerApiV1LoginSignInPost($user_create): mixed
```

Register

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_create = new \AkeneoPresales\DescrbAPI\Client\Model\UserCreate(); // \AkeneoPresales\DescrbAPI\Client\Model\UserCreate

try {
    $result = $apiInstance->registerApiV1LoginSignInPost($user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->registerApiV1LoginSignInPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_create** | [**\AkeneoPresales\DescrbAPI\Client\Model\UserCreate**](../Model/UserCreate.md)|  |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPasswordApiV1LoginResetPost()`

```php
resetPasswordApiV1LoginResetPost($body_reset_password_api_v1_login_reset_post): \AkeneoPresales\DescrbAPI\Client\Model\Msg
```

Reset Password

Reset password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body_reset_password_api_v1_login_reset_post = new \AkeneoPresales\DescrbAPI\Client\Model\BodyResetPasswordApiV1LoginResetPost(); // \AkeneoPresales\DescrbAPI\Client\Model\BodyResetPasswordApiV1LoginResetPost

try {
    $result = $apiInstance->resetPasswordApiV1LoginResetPost($body_reset_password_api_v1_login_reset_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->resetPasswordApiV1LoginResetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_reset_password_api_v1_login_reset_post** | [**\AkeneoPresales\DescrbAPI\Client\Model\BodyResetPasswordApiV1LoginResetPost**](../Model/BodyResetPasswordApiV1LoginResetPost.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeTokenApiV1LoginRevokePost()`

```php
revokeTokenApiV1LoginRevokePost(): \AkeneoPresales\DescrbAPI\Client\Model\Msg
```

Revoke Token

Revoke a refresh token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->revokeTokenApiV1LoginRevokePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->revokeTokenApiV1LoginRevokePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateMagicLinkApiV1LoginClaimPost()`

```php
validateMagicLinkApiV1LoginClaimPost($web_token): \AkeneoPresales\DescrbAPI\Client\Model\Token
```

Validate Magic Link

Second step of a 'magic link' login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$web_token = new \AkeneoPresales\DescrbAPI\Client\Model\WebToken(); // \AkeneoPresales\DescrbAPI\Client\Model\WebToken

try {
    $result = $apiInstance->validateMagicLinkApiV1LoginClaimPost($web_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->validateMagicLinkApiV1LoginClaimPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **web_token** | [**\AkeneoPresales\DescrbAPI\Client\Model\WebToken**](../Model/WebToken.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Client\Model\Token**](../Model/Token.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost()`

```php
verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost($recaptcha_data): mixed
```

Verify Recaptcha Endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Client\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recaptcha_data = new \AkeneoPresales\DescrbAPI\Client\Model\RecaptchaData(); // \AkeneoPresales\DescrbAPI\Client\Model\RecaptchaData

try {
    $result = $apiInstance->verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost($recaptcha_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->verifyRecaptchaEndpointApiV1LoginVerifyRecaptchaPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recaptcha_data** | [**\AkeneoPresales\DescrbAPI\Client\Model\RecaptchaData**](../Model/RecaptchaData.md)|  |

### Return type

**mixed**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
