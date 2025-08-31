# Kleister\AuthApi

All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**callbackProvider()**](AuthApi.md#callbackProvider) | **GET** /auth/{provider}/callback | Callback to parse the defined provider |
| [**listProviders()**](AuthApi.md#listProviders) | **GET** /auth/providers | Fetch the available auth providers |
| [**loginAuth()**](AuthApi.md#loginAuth) | **POST** /auth/login | Authenticate an user by credentials |
| [**redirectAuth()**](AuthApi.md#redirectAuth) | **POST** /auth/redirect | Retrieve real token after redirect |
| [**refreshAuth()**](AuthApi.md#refreshAuth) | **GET** /auth/refresh | Refresh an auth token before it expires |
| [**requestProvider()**](AuthApi.md#requestProvider) | **GET** /auth/{provider}/request | Request the redirect to defined provider |
| [**verifyAuth()**](AuthApi.md#verifyAuth) | **GET** /auth/verify | Verify validity for an authentication token |


## `callbackProvider()`

```php
callbackProvider($provider, $state, $code)
```

Callback to parse the defined provider

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
    $apiInstance->callbackProvider($provider, $state, $code);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->callbackProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| An identifier for the auth provider | |
| **state** | **string**| Auth state | [optional] |
| **code** | **string**| Auth code | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listProviders()`

```php
listProviders(): \Kleister\Model\InlineObject
```

Fetch the available auth providers

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
    $result = $apiInstance->listProviders();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->listProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\InlineObject**](../Model/InlineObject.md)

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
loginAuth($loginAuthRequest): \Kleister\Model\AuthToken
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
$loginAuthRequest = new \Kleister\Model\LoginAuthRequest(); // \Kleister\Model\LoginAuthRequest | The credentials to authenticate

try {
    $result = $apiInstance->loginAuth($loginAuthRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->loginAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loginAuthRequest** | [**\Kleister\Model\LoginAuthRequest**](../Model/LoginAuthRequest.md)| The credentials to authenticate | |

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

## `redirectAuth()`

```php
redirectAuth($redirectAuthRequest): \Kleister\Model\AuthToken
```

Retrieve real token after redirect

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redirectAuthRequest = new \Kleister\Model\RedirectAuthRequest(); // \Kleister\Model\RedirectAuthRequest | The redirect token to authenticate

try {
    $result = $apiInstance->redirectAuth($redirectAuthRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->redirectAuth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redirectAuthRequest** | [**\Kleister\Model\RedirectAuthRequest**](../Model/RedirectAuthRequest.md)| The redirect token to authenticate | |

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

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestProvider()`

```php
requestProvider($provider)
```

Request the redirect to defined provider

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

try {
    $apiInstance->requestProvider($provider);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->requestProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| An identifier for the auth provider | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

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

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
