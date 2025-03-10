# Kleister\NeoforgeApi

All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachNeoforgeToBuild()**](NeoforgeApi.md#attachNeoforgeToBuild) | **POST** /neoforge/{neoforge_id}/builds | Attach a build to a Neoforge version |
| [**deleteNeoforgeFromBuild()**](NeoforgeApi.md#deleteNeoforgeFromBuild) | **DELETE** /neoforge/{neoforge_id}/builds | Unlink a build from a Neoforge version |
| [**listNeoforgeBuilds()**](NeoforgeApi.md#listNeoforgeBuilds) | **GET** /neoforge/{neoforge_id}/builds | Fetch the builds attached to a Neoforge version |
| [**listNeoforges()**](NeoforgeApi.md#listNeoforges) | **GET** /neoforge | Fetch the available Neoforge versions |
| [**updateNeoforge()**](NeoforgeApi.md#updateNeoforge) | **PUT** /neoforge | Update the available Neoforge versions |


## `attachNeoforgeToBuild()`

```php
attachNeoforgeToBuild($neoforgeId, $attachMinecraftToBuildRequest): \Kleister\Model\Notification
```

Attach a build to a Neoforge version

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


$apiInstance = new Kleister\Api\NeoforgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$neoforgeId = 'neoforgeId_example'; // string | A neoforge identifier or slug
$attachMinecraftToBuildRequest = new \Kleister\Model\AttachMinecraftToBuildRequest(); // \Kleister\Model\AttachMinecraftToBuildRequest | The neoforge build data to create or update

try {
    $result = $apiInstance->attachNeoforgeToBuild($neoforgeId, $attachMinecraftToBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NeoforgeApi->attachNeoforgeToBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **neoforgeId** | **string**| A neoforge identifier or slug | |
| **attachMinecraftToBuildRequest** | [**\Kleister\Model\AttachMinecraftToBuildRequest**](../Model/AttachMinecraftToBuildRequest.md)| The neoforge build data to create or update | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteNeoforgeFromBuild()`

```php
deleteNeoforgeFromBuild($neoforgeId, $attachMinecraftToBuildRequest): \Kleister\Model\Notification
```

Unlink a build from a Neoforge version

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


$apiInstance = new Kleister\Api\NeoforgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$neoforgeId = 'neoforgeId_example'; // string | A neoforge identifier or slug
$attachMinecraftToBuildRequest = new \Kleister\Model\AttachMinecraftToBuildRequest(); // \Kleister\Model\AttachMinecraftToBuildRequest | The neoforge build data to create or update

try {
    $result = $apiInstance->deleteNeoforgeFromBuild($neoforgeId, $attachMinecraftToBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NeoforgeApi->deleteNeoforgeFromBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **neoforgeId** | **string**| A neoforge identifier or slug | |
| **attachMinecraftToBuildRequest** | [**\Kleister\Model\AttachMinecraftToBuildRequest**](../Model/AttachMinecraftToBuildRequest.md)| The neoforge build data to create or update | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNeoforgeBuilds()`

```php
listNeoforgeBuilds($neoforgeId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListNeoforgeBuilds200Response
```

Fetch the builds attached to a Neoforge version

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


$apiInstance = new Kleister\Api\NeoforgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$neoforgeId = 'neoforgeId_example'; // string | A neoforge identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listNeoforgeBuilds($neoforgeId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NeoforgeApi->listNeoforgeBuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **neoforgeId** | **string**| A neoforge identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListNeoforgeBuilds200Response**](../Model/ListNeoforgeBuilds200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNeoforges()`

```php
listNeoforges($search): \Kleister\Model\ListNeoforges200Response
```

Fetch the available Neoforge versions

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


$apiInstance = new Kleister\Api\NeoforgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search query

try {
    $result = $apiInstance->listNeoforges($search);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NeoforgeApi->listNeoforges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search query | [optional] |

### Return type

[**\Kleister\Model\ListNeoforges200Response**](../Model/ListNeoforges200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateNeoforge()`

```php
updateNeoforge(): \Kleister\Model\Notification
```

Update the available Neoforge versions

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


$apiInstance = new Kleister\Api\NeoforgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->updateNeoforge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NeoforgeApi->updateNeoforge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
