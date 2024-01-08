# AkeneoPresales\DescrbAPI\UsersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeUserLanguageApiV1UsersLanguagePatch()**](UsersApi.md#changeUserLanguageApiV1UsersLanguagePatch) | **PATCH** /api/v1/users/language | Change User Language
[**createTrialSubApiV1UsersGetTrialPatch()**](UsersApi.md#createTrialSubApiV1UsersGetTrialPatch) | **PATCH** /api/v1/users/get-trial | Create Trial Sub
[**createUserApiV1UsersCreatePost()**](UsersApi.md#createUserApiV1UsersCreatePost) | **POST** /api/v1/users/create | Create User
[**createUserProfileApiV1UsersPost()**](UsersApi.md#createUserProfileApiV1UsersPost) | **POST** /api/v1/users/ | Create User Profile
[**endActiveTrialApiV1UsersEndCurrentTrialPatch()**](UsersApi.md#endActiveTrialApiV1UsersEndCurrentTrialPatch) | **PATCH** /api/v1/users/end-current-trial | End Active Trial
[**generateReportApiV1UsersReportGet()**](UsersApi.md#generateReportApiV1UsersReportGet) | **GET** /api/v1/users/report | Generate Report
[**markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost()**](UsersApi.md#markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost) | **POST** /api/v1/users/notification-about-expire | Mark Trial Notification As Seen
[**patchUserApiV1UsersPatch()**](UsersApi.md#patchUserApiV1UsersPatch) | **PATCH** /api/v1/users/ | Patch User
[**readAllUsersApiV1UsersAllGet()**](UsersApi.md#readAllUsersApiV1UsersAllGet) | **GET** /api/v1/users/all | Read All Users
[**readUserApiV1UsersGet()**](UsersApi.md#readUserApiV1UsersGet) | **GET** /api/v1/users/ | Read User
[**readUserApiV1UsersPaymentsInfoGet()**](UsersApi.md#readUserApiV1UsersPaymentsInfoGet) | **GET** /api/v1/users/payments-info | Read User
[**readUserDescriptionsApiV1UsersUserIdDescriptionsGet()**](UsersApi.md#readUserDescriptionsApiV1UsersUserIdDescriptionsGet) | **GET** /api/v1/users/{user_id}/descriptions | Read User Descriptions
[**readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet()**](UsersApi.md#readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet) | **GET** /api/v1/users/{user_id}/not-reviewed-descriptions | Read User Not Reviewed Descriptions
[**readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet()**](UsersApi.md#readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet) | **GET** /api/v1/users/{user_id}/not-seen-descriptions | Read User Not Seen Descriptions
[**requestNewTotpApiV1UsersNewTotpPost()**](UsersApi.md#requestNewTotpApiV1UsersNewTotpPost) | **POST** /api/v1/users/new-totp | Request New Totp
[**testEndpointApiV1UsersTesterGet()**](UsersApi.md#testEndpointApiV1UsersTesterGet) | **GET** /api/v1/users/tester | Test Endpoint
[**toggleStateApiV1UsersToggleStatePost()**](UsersApi.md#toggleStateApiV1UsersToggleStatePost) | **POST** /api/v1/users/toggle-state | Toggle State
[**updateUserApiV1UsersPut()**](UsersApi.md#updateUserApiV1UsersPut) | **PUT** /api/v1/users/ | Update User
[**validateEmailApiV1UsersValidateEmailPost()**](UsersApi.md#validateEmailApiV1UsersValidateEmailPost) | **POST** /api/v1/users/validate-email | Validate Email


## `changeUserLanguageApiV1UsersLanguagePatch()`

```php
changeUserLanguageApiV1UsersLanguagePatch($language): \AkeneoPresales\DescrbAPI\Model\User
```

Change User Language

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$language = 'language_example'; // string

try {
    $result = $apiInstance->changeUserLanguageApiV1UsersLanguagePatch($language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->changeUserLanguageApiV1UsersLanguagePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **language** | **string**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTrialSubApiV1UsersGetTrialPatch()`

```php
createTrialSubApiV1UsersGetTrialPatch($pro): mixed
```

Create Trial Sub

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pro = True; // bool

try {
    $result = $apiInstance->createTrialSubApiV1UsersGetTrialPatch($pro);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createTrialSubApiV1UsersGetTrialPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pro** | **bool**|  |

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

## `createUserApiV1UsersCreatePost()`

```php
createUserApiV1UsersCreatePost($user_create): \AkeneoPresales\DescrbAPI\Model\User
```

Create User

Create new user (moderator function).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_create = new \AkeneoPresales\DescrbAPI\Model\UserCreate(); // \AkeneoPresales\DescrbAPI\Model\UserCreate

try {
    $result = $apiInstance->createUserApiV1UsersCreatePost($user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUserApiV1UsersCreatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_create** | [**\AkeneoPresales\DescrbAPI\Model\UserCreate**](../Model/UserCreate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createUserProfileApiV1UsersPost()`

```php
createUserProfileApiV1UsersPost($body_create_user_profile_api_v1_users_post): \AkeneoPresales\DescrbAPI\Model\User
```

Create User Profile

Create new user without the need to be logged in.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body_create_user_profile_api_v1_users_post = new \AkeneoPresales\DescrbAPI\Model\BodyCreateUserProfileApiV1UsersPost(); // \AkeneoPresales\DescrbAPI\Model\BodyCreateUserProfileApiV1UsersPost

try {
    $result = $apiInstance->createUserProfileApiV1UsersPost($body_create_user_profile_api_v1_users_post);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->createUserProfileApiV1UsersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body_create_user_profile_api_v1_users_post** | [**\AkeneoPresales\DescrbAPI\Model\BodyCreateUserProfileApiV1UsersPost**](../Model/BodyCreateUserProfileApiV1UsersPost.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `endActiveTrialApiV1UsersEndCurrentTrialPatch()`

```php
endActiveTrialApiV1UsersEndCurrentTrialPatch(): mixed
```

End Active Trial

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->endActiveTrialApiV1UsersEndCurrentTrialPatch();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->endActiveTrialApiV1UsersEndCurrentTrialPatch: ', $e->getMessage(), PHP_EOL;
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

## `generateReportApiV1UsersReportGet()`

```php
generateReportApiV1UsersReportGet(): mixed
```

Generate Report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generateReportApiV1UsersReportGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->generateReportApiV1UsersReportGet: ', $e->getMessage(), PHP_EOL;
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

## `markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost()`

```php
markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost(): mixed
```

Mark Trial Notification As Seen

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->markTrialNotificationAsSeenApiV1UsersNotificationAboutExpirePost: ', $e->getMessage(), PHP_EOL;
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

## `patchUserApiV1UsersPatch()`

```php
patchUserApiV1UsersPatch($user_in_db): \AkeneoPresales\DescrbAPI\Model\User
```

Patch User

Patch user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_in_db = new \AkeneoPresales\DescrbAPI\Model\UserInDB(); // \AkeneoPresales\DescrbAPI\Model\UserInDB

try {
    $result = $apiInstance->patchUserApiV1UsersPatch($user_in_db);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->patchUserApiV1UsersPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_in_db** | [**\AkeneoPresales\DescrbAPI\Model\UserInDB**](../Model/UserInDB.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAllUsersApiV1UsersAllGet()`

```php
readAllUsersApiV1UsersAllGet($id, $full_name__ilike, $email__ilike, $is_active, $order_by, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageUser
```

Read All Users

Retrieve all current users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$full_name__ilike = 'full_name__ilike_example'; // string
$email__ilike = 'email__ilike_example'; // string
$is_active = True; // bool
$order_by = 'full_name,email,is_active,is_superuser,count_descriptions,user_type'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readAllUsersApiV1UsersAllGet($id, $full_name__ilike, $email__ilike, $is_active, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readAllUsersApiV1UsersAllGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  | [optional]
 **full_name__ilike** | **string**|  | [optional]
 **email__ilike** | **string**|  | [optional]
 **is_active** | **bool**|  | [optional]
 **order_by** | **string**|  | [optional] [default to &#39;full_name,email,is_active,is_superuser,count_descriptions,user_type&#39;]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageUser**](../Model/LimitOffsetPageUser.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserApiV1UsersGet()`

```php
readUserApiV1UsersGet(): \AkeneoPresales\DescrbAPI\Model\User
```

Read User

Get current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readUserApiV1UsersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserApiV1UsersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserApiV1UsersPaymentsInfoGet()`

```php
readUserApiV1UsersPaymentsInfoGet(): mixed
```

Read User

Get current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->readUserApiV1UsersPaymentsInfoGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserApiV1UsersPaymentsInfoGet: ', $e->getMessage(), PHP_EOL;
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

## `readUserDescriptionsApiV1UsersUserIdDescriptionsGet()`

```php
readUserDescriptionsApiV1UsersUserIdDescriptionsGet($user_id, $score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescription
```

Read User Descriptions

Retrieve Descriptions for Given users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$score = 56; // int
$name__ilike = 'name__ilike_example'; // string
$brand_name__ilike = 'brand_name__ilike_example'; // string
$order_by = 'score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readUserDescriptionsApiV1UsersUserIdDescriptionsGet($user_id, $score, $name__ilike, $brand_name__ilike, $order_by, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserDescriptionsApiV1UsersUserIdDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **score** | **int**|  | [optional]
 **name__ilike** | **string**|  | [optional]
 **brand_name__ilike** | **string**|  | [optional]
 **order_by** | **string**|  | [optional] [default to &#39;score,name,brand_name,created_at,brand_description_bool,product_history_description_bool,technologies_bool&#39;]
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescription**](../Model/LimitOffsetPageProductDescription.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet()`

```php
readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet($user_id, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionList
```

Read User Not Reviewed Descriptions

Retrieve Not Reviewed Descriptions for Given users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserNotReviewedDescriptionsApiV1UsersUserIdNotReviewedDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionList**](../Model/LimitOffsetPageProductDescriptionList.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet()`

```php
readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet($user_id, $limit, $offset): \AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionList
```

Read User Not Seen Descriptions

Retrieve Not Reviewed Descriptions for Given users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$limit = 50; // int
$offset = 0; // int

try {
    $result = $apiInstance->readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet($user_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->readUserNotSeenDescriptionsApiV1UsersUserIdNotSeenDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **limit** | **int**|  | [optional] [default to 50]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\LimitOffsetPageProductDescriptionList**](../Model/LimitOffsetPageProductDescriptionList.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestNewTotpApiV1UsersNewTotpPost()`

```php
requestNewTotpApiV1UsersNewTotpPost(): \AkeneoPresales\DescrbAPI\Model\NewTOTP
```

Request New Totp

Request new keys to enable TOTP on the user account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->requestNewTotpApiV1UsersNewTotpPost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->requestNewTotpApiV1UsersNewTotpPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AkeneoPresales\DescrbAPI\Model\NewTOTP**](../Model/NewTOTP.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testEndpointApiV1UsersTesterGet()`

```php
testEndpointApiV1UsersTesterGet(): \AkeneoPresales\DescrbAPI\Model\Msg
```

Test Endpoint

Test current endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->testEndpointApiV1UsersTesterGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->testEndpointApiV1UsersTesterGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\AkeneoPresales\DescrbAPI\Model\Msg**](../Model/Msg.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleStateApiV1UsersToggleStatePost()`

```php
toggleStateApiV1UsersToggleStatePost($user_update): \AkeneoPresales\DescrbAPI\Model\Msg
```

Toggle State

Toggle user state (moderator function)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_update = new \AkeneoPresales\DescrbAPI\Model\UserUpdate(); // \AkeneoPresales\DescrbAPI\Model\UserUpdate

try {
    $result = $apiInstance->toggleStateApiV1UsersToggleStatePost($user_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->toggleStateApiV1UsersToggleStatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_update** | [**\AkeneoPresales\DescrbAPI\Model\UserUpdate**](../Model/UserUpdate.md)|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateUserApiV1UsersPut()`

```php
updateUserApiV1UsersPut($marketing_agreement, $terms_agreement, $profile_picture, $original, $password, $full_name, $email): \AkeneoPresales\DescrbAPI\Model\User
```

Update User

Update user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$marketing_agreement = True; // bool | Marketing agreement
$terms_agreement = True; // bool | Terms agreement
$profile_picture = new \AkeneoPresales\DescrbAPI\Model\AnyOfFileString(); // AnyOfFileString | Profile picture
$original = ''; // string | Original password
$password = 'password_example'; // string | New password
$full_name = 'full_name_example'; // string | Full user name
$email = 'email_example'; // string | User email

try {
    $result = $apiInstance->updateUserApiV1UsersPut($marketing_agreement, $terms_agreement, $profile_picture, $original, $password, $full_name, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUserApiV1UsersPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **marketing_agreement** | **bool**| Marketing agreement |
 **terms_agreement** | **bool**| Terms agreement |
 **profile_picture** | [**AnyOfFileString**](../Model/AnyOfFileString.md)| Profile picture | [optional]
 **original** | **string**| Original password | [optional] [default to &#39;&#39;]
 **password** | **string**| New password | [optional]
 **full_name** | **string**| Full user name | [optional]
 **email** | **string**| User email | [optional]

### Return type

[**\AkeneoPresales\DescrbAPI\Model\User**](../Model/User.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateEmailApiV1UsersValidateEmailPost()`

```php
validateEmailApiV1UsersValidateEmailPost($body): \AkeneoPresales\DescrbAPI\Model\Msg
```

Validate Email

Reset password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2PasswordBearer
$config = AkeneoPresales\DescrbAPI\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new AkeneoPresales\DescrbAPI\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->validateEmailApiV1UsersValidateEmailPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->validateEmailApiV1UsersValidateEmailPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **object**|  |

### Return type

[**\AkeneoPresales\DescrbAPI\Model\Msg**](../Model/Msg.md)

### Authorization

[OAuth2PasswordBearer](../../README.md#OAuth2PasswordBearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
