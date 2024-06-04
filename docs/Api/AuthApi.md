# Kleister\AuthApi

All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**externalCallback()**](AuthApi.md#externalCallback) | **GET** /auth/{provider}/callback | Callback for external authentication |
| [**externalInitialize()**](AuthApi.md#externalInitialize) | **GET** /auth/{provider}/initialize | Initialize the external authentication |
| [**loginAuth()**](AuthApi.md#loginAuth) | **POST** /auth/login | Authenticate an user by credentials |
| [**refreshAuth()**](AuthApi.md#refreshAuth) | **GET** /auth/refresh | Refresh an auth token before it expires |
| [**verifyAuth()**](AuthApi.md#verifyAuth) | **GET** /auth/verify | Verify validity for an authentication token |


## `externalCallback()`

```php
externalCallback($provider, $state, $code): \Kleister\Model\Notification
```

Callback for external authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider = 'provider_example'; // string | An identifier for the auth provider
$state = 'state_example'; // string | Auth state
$code = 'code_example'; // string | Auth code

try {
    $result = $apiInstance->externalCallback($provider, $state, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->externalCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| An identifier for the auth provider | |
| **state** | **string**| Auth state | [optional] |
| **code** | **string**| Auth code | [optional] |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `externalInitialize()`

```php
externalInitialize($provider, $state): \Kleister\Model\Notification
```

Initialize the external authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider = 'provider_example'; // string | An identifier for the auth provider
$state = 'state_example'; // string | Auth state

try {
    $result = $apiInstance->externalInitialize($provider, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->externalInitialize: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| An identifier for the auth provider | |
| **state** | **string**| Auth state | [optional] |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loginAuth()`

```php
loginAuth($authLogin): \Kleister\Model\AuthToken
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
    $result = $apiInstance->loginAuth($authLogin);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authLogin** | [**\Kleister\Model\AuthLogin**](../Model/AuthLogin.md)| The credentials to authenticate | |

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


// Configure API key authorization: Cookie
$config = Kleister\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kleister\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure HTTP basic authorization: Basic
$config = Kleister\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Header
$config = Kleister\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kleister\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: Bearer
$config = Kleister\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
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

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `verifyAuth()`

```php
verifyAuth(): \Kleister\Model\AuthVerify
```

Verify validity for an authentication token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Cookie
$config = Kleister\Configuration::getDefaultConfiguration()->setApiKey('Cookie', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kleister\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Cookie', 'Bearer');

// Configure HTTP basic authorization: Basic
$config = Kleister\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Header
$config = Kleister\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Kleister\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure Bearer authorization: Bearer
$config = Kleister\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->verifyAuth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->verifyAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\AuthVerify**](../Model/AuthVerify.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
