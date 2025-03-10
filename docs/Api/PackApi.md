# Kleister\PackApi

All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachBuildToVersion()**](PackApi.md#attachBuildToVersion) | **POST** /packs/{pack_id}/builds/{build_id}/versions | Attach a version to a build |
| [**attachPackToGroup()**](PackApi.md#attachPackToGroup) | **POST** /packs/{pack_id}/groups | Attach a group to pack |
| [**attachPackToUser()**](PackApi.md#attachPackToUser) | **POST** /packs/{pack_id}/users | Attach a user to pack |
| [**createBuild()**](PackApi.md#createBuild) | **POST** /packs/{pack_id}/builds | Create a new build for a pack |
| [**createPack()**](PackApi.md#createPack) | **POST** /packs | Create a new pack |
| [**deleteBuild()**](PackApi.md#deleteBuild) | **DELETE** /packs/{pack_id}/builds/{build_id} | Delete a specific build for a pack |
| [**deleteBuildFromVersion()**](PackApi.md#deleteBuildFromVersion) | **DELETE** /packs/{pack_id}/builds/{build_id}/versions | Unlink a version from a build |
| [**deletePack()**](PackApi.md#deletePack) | **DELETE** /packs/{pack_id} | Delete a specific pack |
| [**deletePackFromGroup()**](PackApi.md#deletePackFromGroup) | **DELETE** /packs/{pack_id}/groups | Unlink a group from pack |
| [**deletePackFromUser()**](PackApi.md#deletePackFromUser) | **DELETE** /packs/{pack_id}/users | Unlink a user from pack |
| [**listBuildVersions()**](PackApi.md#listBuildVersions) | **GET** /packs/{pack_id}/builds/{build_id}/versions | Fetch all versions attached to build |
| [**listBuilds()**](PackApi.md#listBuilds) | **GET** /packs/{pack_id}/builds | Fetch all available builds for a pack |
| [**listPackGroups()**](PackApi.md#listPackGroups) | **GET** /packs/{pack_id}/groups | Fetch all groups attached to pack |
| [**listPackUsers()**](PackApi.md#listPackUsers) | **GET** /packs/{pack_id}/users | Fetch all users attached to pack |
| [**listPacks()**](PackApi.md#listPacks) | **GET** /packs | Fetch all available packs |
| [**permitPackGroup()**](PackApi.md#permitPackGroup) | **PUT** /packs/{pack_id}/groups | Update group perms for pack |
| [**permitPackUser()**](PackApi.md#permitPackUser) | **PUT** /packs/{pack_id}/users | Update user perms for pack |
| [**showBuild()**](PackApi.md#showBuild) | **GET** /packs/{pack_id}/builds/{build_id} | Fetch a specific build for a pack |
| [**showPack()**](PackApi.md#showPack) | **GET** /packs/{pack_id} | Fetch a specific pack |
| [**updateBuild()**](PackApi.md#updateBuild) | **PUT** /packs/{pack_id}/builds/{build_id} | Update a specific build for a pack |
| [**updatePack()**](PackApi.md#updatePack) | **PUT** /packs/{pack_id} | Update a specific pack |


## `attachBuildToVersion()`

```php
attachBuildToVersion($packId, $buildId, $attachBuildToVersionRequest): \Kleister\Model\Notification
```

Attach a version to a build

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug
$attachBuildToVersionRequest = new \Kleister\Model\AttachBuildToVersionRequest(); // \Kleister\Model\AttachBuildToVersionRequest | The build version data to create or delete

try {
    $result = $apiInstance->attachBuildToVersion($packId, $buildId, $attachBuildToVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->attachBuildToVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |
| **attachBuildToVersionRequest** | [**\Kleister\Model\AttachBuildToVersionRequest**](../Model/AttachBuildToVersionRequest.md)| The build version data to create or delete | |

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

## `attachPackToGroup()`

```php
attachPackToGroup($packId, $permitPackGroupRequest): \Kleister\Model\Notification
```

Attach a group to pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$permitPackGroupRequest = new \Kleister\Model\PermitPackGroupRequest(); // \Kleister\Model\PermitPackGroupRequest | The pack group data to permit

try {
    $result = $apiInstance->attachPackToGroup($packId, $permitPackGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->attachPackToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **permitPackGroupRequest** | [**\Kleister\Model\PermitPackGroupRequest**](../Model/PermitPackGroupRequest.md)| The pack group data to permit | |

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

## `attachPackToUser()`

```php
attachPackToUser($packId, $permitPackUserRequest): \Kleister\Model\Notification
```

Attach a user to pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$permitPackUserRequest = new \Kleister\Model\PermitPackUserRequest(); // \Kleister\Model\PermitPackUserRequest | The pack user data to permit

try {
    $result = $apiInstance->attachPackToUser($packId, $permitPackUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->attachPackToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **permitPackUserRequest** | [**\Kleister\Model\PermitPackUserRequest**](../Model/PermitPackUserRequest.md)| The pack user data to permit | |

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

## `createBuild()`

```php
createBuild($packId, $createBuildRequest): \Kleister\Model\Build
```

Create a new build for a pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$createBuildRequest = new \Kleister\Model\CreateBuildRequest(); // \Kleister\Model\CreateBuildRequest | The build data to create

try {
    $result = $apiInstance->createBuild($packId, $createBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->createBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **createBuildRequest** | [**\Kleister\Model\CreateBuildRequest**](../Model/CreateBuildRequest.md)| The build data to create | |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPack()`

```php
createPack($createPackRequest): \Kleister\Model\Pack
```

Create a new pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createPackRequest = new \Kleister\Model\CreatePackRequest(); // \Kleister\Model\CreatePackRequest | The pack data to create

try {
    $result = $apiInstance->createPack($createPackRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->createPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createPackRequest** | [**\Kleister\Model\CreatePackRequest**](../Model/CreatePackRequest.md)| The pack data to create | |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBuild()`

```php
deleteBuild($packId, $buildId): \Kleister\Model\Notification
```

Delete a specific build for a pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug

try {
    $result = $apiInstance->deleteBuild($packId, $buildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deleteBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |

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

## `deleteBuildFromVersion()`

```php
deleteBuildFromVersion($packId, $buildId, $attachBuildToVersionRequest): \Kleister\Model\Notification
```

Unlink a version from a build

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug
$attachBuildToVersionRequest = new \Kleister\Model\AttachBuildToVersionRequest(); // \Kleister\Model\AttachBuildToVersionRequest | The build version data to create or delete

try {
    $result = $apiInstance->deleteBuildFromVersion($packId, $buildId, $attachBuildToVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deleteBuildFromVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |
| **attachBuildToVersionRequest** | [**\Kleister\Model\AttachBuildToVersionRequest**](../Model/AttachBuildToVersionRequest.md)| The build version data to create or delete | |

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

## `deletePack()`

```php
deletePack($packId): \Kleister\Model\Notification
```

Delete a specific pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug

try {
    $result = $apiInstance->deletePack($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |

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

## `deletePackFromGroup()`

```php
deletePackFromGroup($packId, $deletePackFromGroupRequest): \Kleister\Model\Notification
```

Unlink a group from pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$deletePackFromGroupRequest = new \Kleister\Model\DeletePackFromGroupRequest(); // \Kleister\Model\DeletePackFromGroupRequest | The pack group data to unlink

try {
    $result = $apiInstance->deletePackFromGroup($packId, $deletePackFromGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePackFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **deletePackFromGroupRequest** | [**\Kleister\Model\DeletePackFromGroupRequest**](../Model/DeletePackFromGroupRequest.md)| The pack group data to unlink | |

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

## `deletePackFromUser()`

```php
deletePackFromUser($packId, $deletePackFromUserRequest): \Kleister\Model\Notification
```

Unlink a user from pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$deletePackFromUserRequest = new \Kleister\Model\DeletePackFromUserRequest(); // \Kleister\Model\DeletePackFromUserRequest | The pack user data to unlink

try {
    $result = $apiInstance->deletePackFromUser($packId, $deletePackFromUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePackFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **deletePackFromUserRequest** | [**\Kleister\Model\DeletePackFromUserRequest**](../Model/DeletePackFromUserRequest.md)| The pack user data to unlink | |

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

## `listBuildVersions()`

```php
listBuildVersions($packId, $buildId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListBuildVersions200Response
```

Fetch all versions attached to build

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listBuildVersions($packId, $buildId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listBuildVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListBuildVersions200Response**](../Model/ListBuildVersions200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBuilds()`

```php
listBuilds($packId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListBuilds200Response
```

Fetch all available builds for a pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listBuilds($packId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listBuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListBuilds200Response**](../Model/ListBuilds200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPackGroups()`

```php
listPackGroups($packId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListPackGroups200Response
```

Fetch all groups attached to pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listPackGroups($packId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPackGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListPackGroups200Response**](../Model/ListPackGroups200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPackUsers()`

```php
listPackUsers($packId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListPackUsers200Response
```

Fetch all users attached to pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listPackUsers($packId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPackUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListPackUsers200Response**](../Model/ListPackUsers200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPacks()`

```php
listPacks($search, $sort, $order, $limit, $offset): \Kleister\Model\ListPacks200Response
```

Fetch all available packs

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listPacks($search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListPacks200Response**](../Model/ListPacks200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitPackGroup()`

```php
permitPackGroup($packId, $permitPackGroupRequest): \Kleister\Model\Notification
```

Update group perms for pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$permitPackGroupRequest = new \Kleister\Model\PermitPackGroupRequest(); // \Kleister\Model\PermitPackGroupRequest | The pack group data to permit

try {
    $result = $apiInstance->permitPackGroup($packId, $permitPackGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->permitPackGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **permitPackGroupRequest** | [**\Kleister\Model\PermitPackGroupRequest**](../Model/PermitPackGroupRequest.md)| The pack group data to permit | |

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

## `permitPackUser()`

```php
permitPackUser($packId, $permitPackUserRequest): \Kleister\Model\Notification
```

Update user perms for pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$permitPackUserRequest = new \Kleister\Model\PermitPackUserRequest(); // \Kleister\Model\PermitPackUserRequest | The pack user data to permit

try {
    $result = $apiInstance->permitPackUser($packId, $permitPackUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->permitPackUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **permitPackUserRequest** | [**\Kleister\Model\PermitPackUserRequest**](../Model/PermitPackUserRequest.md)| The pack user data to permit | |

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

## `showBuild()`

```php
showBuild($packId, $buildId): \Kleister\Model\Build
```

Fetch a specific build for a pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug

try {
    $result = $apiInstance->showBuild($packId, $buildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->showBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showPack()`

```php
showPack($packId): \Kleister\Model\Pack
```

Fetch a specific pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug

try {
    $result = $apiInstance->showPack($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->showPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBuild()`

```php
updateBuild($packId, $buildId, $createBuildRequest): \Kleister\Model\Build
```

Update a specific build for a pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$buildId = 'buildId_example'; // string | A build identifier or slug
$createBuildRequest = new \Kleister\Model\CreateBuildRequest(); // \Kleister\Model\CreateBuildRequest | The build data to update

try {
    $result = $apiInstance->updateBuild($packId, $buildId, $createBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->updateBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **buildId** | **string**| A build identifier or slug | |
| **createBuildRequest** | [**\Kleister\Model\CreateBuildRequest**](../Model/CreateBuildRequest.md)| The build data to update | |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePack()`

```php
updatePack($packId, $createPackRequest): \Kleister\Model\Pack
```

Update a specific pack

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


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$createPackRequest = new \Kleister\Model\CreatePackRequest(); // \Kleister\Model\CreatePackRequest | The pack data to update

try {
    $result = $apiInstance->updatePack($packId, $createPackRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->updatePack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **createPackRequest** | [**\Kleister\Model\CreatePackRequest**](../Model/CreatePackRequest.md)| The pack data to update | |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
