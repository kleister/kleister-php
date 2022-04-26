# Kleister\AuthApi

All URIs are relative to http://try.kleister.tech/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**loginUser()**](AuthApi.md#loginUser) | **POST** /auth/login | Authenticate an user by credentials
[**refreshAuth()**](AuthApi.md#refreshAuth) | **GET** /auth/refresh | Refresh an auth token before it expires
[**verifyAuth()**](AuthApi.md#verifyAuth) | **GET** /auth/verify/{token} | Verify validity for an authentication token


## `loginUser()`

```php
loginUser($authLogin): \Kleister\Model\AuthToken
```

Authenticate an user by credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authLogin = new \Kleister\Model\AuthLogin(); // \Kleister\Model\AuthLogin | The credentials to authenticate

try {
    $result = $apiInstance->loginUser($authLogin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authLogin** | [**\Kleister\Model\AuthLogin**](../Model/AuthLogin.md)| The credentials to authenticate |

### Return type

[**\Kleister\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshAuth()`

```php
refreshAuth(): \Kleister\Model\AuthToken
```

Refresh an auth token before it expires

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->refreshAuth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->refreshAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAuth()`

```php
verifyAuth($token): \Kleister\Model\AuthVerify
```

Verify validity for an authentication token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | A token that have to be checked

try {
    $result = $apiInstance->verifyAuth($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->verifyAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**| A token that have to be checked |

### Return type

[**\Kleister\Model\AuthVerify**](../Model/AuthVerify.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
