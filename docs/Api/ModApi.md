# Kleister\ModApi



All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachModToGroup()**](ModApi.md#attachModToGroup) | **POST** /mods/{mod_id}/groups | Attach a group to mod |
| [**attachModToUser()**](ModApi.md#attachModToUser) | **POST** /mods/{mod_id}/users | Attach a user to mod |
| [**attachVersionToBuild()**](ModApi.md#attachVersionToBuild) | **POST** /mods/{mod_id}/versions/{version_id}/builds | Attach a build to a version |
| [**createMod()**](ModApi.md#createMod) | **POST** /mods | Create a new mod |
| [**createModAvatar()**](ModApi.md#createModAvatar) | **POST** /mods/{mod_id}/avatar | Upload an avatar for the defined mod |
| [**createPackAvatar()**](ModApi.md#createPackAvatar) | **POST** /packs/{pack_id}/avatar | Upload an avatar for the defined pack |
| [**createVersion()**](ModApi.md#createVersion) | **POST** /mods/{mod_id}/versions | Create a new version for a mod |
| [**deleteMod()**](ModApi.md#deleteMod) | **DELETE** /mods/{mod_id} | Delete a specific mod |
| [**deleteModAvatar()**](ModApi.md#deleteModAvatar) | **DELETE** /mods/{mod_id}/avatar | Delete the avatar for the defined mod |
| [**deleteModFromGroup()**](ModApi.md#deleteModFromGroup) | **DELETE** /mods/{mod_id}/groups | Unlink a group from mod |
| [**deleteModFromUser()**](ModApi.md#deleteModFromUser) | **DELETE** /mods/{mod_id}/users | Unlink a user from mod |
| [**deletePackAvatar()**](ModApi.md#deletePackAvatar) | **DELETE** /packs/{pack_id}/avatar | Delete the avatar for the defined pack |
| [**deleteVersion()**](ModApi.md#deleteVersion) | **DELETE** /mods/{mod_id}/versions/{version_id} | Delete a specific version for a mod |
| [**deleteVersionFromBuild()**](ModApi.md#deleteVersionFromBuild) | **DELETE** /mods/{mod_id}/versions/{version_id}/builds | Unlink a build from a version |
| [**listModGroups()**](ModApi.md#listModGroups) | **GET** /mods/{mod_id}/groups | Fetch all groups attached to mod |
| [**listModUsers()**](ModApi.md#listModUsers) | **GET** /mods/{mod_id}/users | Fetch all users attached to mod |
| [**listMods()**](ModApi.md#listMods) | **GET** /mods | Fetch all available mods |
| [**listVersionBuilds()**](ModApi.md#listVersionBuilds) | **GET** /mods/{mod_id}/versions/{version_id}/builds | Fetch all builds attached to version |
| [**listVersions()**](ModApi.md#listVersions) | **GET** /mods/{mod_id}/versions | Fetch all available versions for a mod |
| [**permitModGroup()**](ModApi.md#permitModGroup) | **PUT** /mods/{mod_id}/groups | Update group perms for mod |
| [**permitModUser()**](ModApi.md#permitModUser) | **PUT** /mods/{mod_id}/users | Update user perms for mod |
| [**showMod()**](ModApi.md#showMod) | **GET** /mods/{mod_id} | Fetch a specific mod |
| [**showVersion()**](ModApi.md#showVersion) | **GET** /mods/{mod_id}/versions/{version_id} | Fetch a specific version for a mod |
| [**updateMod()**](ModApi.md#updateMod) | **PUT** /mods/{mod_id} | Update a specific mod |
| [**updateVersion()**](ModApi.md#updateVersion) | **PUT** /mods/{mod_id}/versions/{version_id} | Update a specific version for a mod |


## `attachModToGroup()`

```php
attachModToGroup($modId, $permitPackGroupRequest): \Kleister\Model\Notification
```

Attach a group to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$permitPackGroupRequest = new \Kleister\Model\PermitPackGroupRequest(); // \Kleister\Model\PermitPackGroupRequest | The mod group data to permit

try {
    $result = $apiInstance->attachModToGroup($modId, $permitPackGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->attachModToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **permitPackGroupRequest** | [**\Kleister\Model\PermitPackGroupRequest**](../Model/PermitPackGroupRequest.md)| The mod group data to permit | |

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

## `attachModToUser()`

```php
attachModToUser($modId, $permitPackUserRequest): \Kleister\Model\Notification
```

Attach a user to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$permitPackUserRequest = new \Kleister\Model\PermitPackUserRequest(); // \Kleister\Model\PermitPackUserRequest | The mod user data to permit

try {
    $result = $apiInstance->attachModToUser($modId, $permitPackUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->attachModToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **permitPackUserRequest** | [**\Kleister\Model\PermitPackUserRequest**](../Model/PermitPackUserRequest.md)| The mod user data to permit | |

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

## `attachVersionToBuild()`

```php
attachVersionToBuild($modId, $versionId, $attachMinecraftToBuildRequest): \Kleister\Model\Notification
```

Attach a build to a version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$attachMinecraftToBuildRequest = new \Kleister\Model\AttachMinecraftToBuildRequest(); // \Kleister\Model\AttachMinecraftToBuildRequest | The version build data to create or delete

try {
    $result = $apiInstance->attachVersionToBuild($modId, $versionId, $attachMinecraftToBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->attachVersionToBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |
| **attachMinecraftToBuildRequest** | [**\Kleister\Model\AttachMinecraftToBuildRequest**](../Model/AttachMinecraftToBuildRequest.md)| The version build data to create or delete | |

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

## `createMod()`

```php
createMod($createModRequest): \Kleister\Model\Mod
```

Create a new mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createModRequest = new \Kleister\Model\CreateModRequest(); // \Kleister\Model\CreateModRequest | The mod data to create

try {
    $result = $apiInstance->createMod($createModRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createModRequest** | [**\Kleister\Model\CreateModRequest**](../Model/CreateModRequest.md)| The mod data to create | |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createModAvatar()`

```php
createModAvatar($modId, $file): \Kleister\Model\ModAvatar
```

Upload an avatar for the defined mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->createModAvatar($modId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createModAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Kleister\Model\ModAvatar**](../Model/ModAvatar.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPackAvatar()`

```php
createPackAvatar($packId, $file): \Kleister\Model\PackAvatar
```

Upload an avatar for the defined pack

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->createPackAvatar($packId, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createPackAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Kleister\Model\PackAvatar**](../Model/PackAvatar.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVersion()`

```php
createVersion($modId, $createVersionRequest): \Kleister\Model\Version
```

Create a new version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$createVersionRequest = new \Kleister\Model\CreateVersionRequest(); // \Kleister\Model\CreateVersionRequest | The version data to create

try {
    $result = $apiInstance->createVersion($modId, $createVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **createVersionRequest** | [**\Kleister\Model\CreateVersionRequest**](../Model/CreateVersionRequest.md)| The version data to create | |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMod()`

```php
deleteMod($modId): \Kleister\Model\Notification
```

Delete a specific mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug

try {
    $result = $apiInstance->deleteMod($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |

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

## `deleteModAvatar()`

```php
deleteModAvatar($modId): \Kleister\Model\ModAvatar
```

Delete the avatar for the defined mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug

try {
    $result = $apiInstance->deleteModAvatar($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |

### Return type

[**\Kleister\Model\ModAvatar**](../Model/ModAvatar.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModFromGroup()`

```php
deleteModFromGroup($modId, $deletePackFromGroupRequest): \Kleister\Model\Notification
```

Unlink a group from mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$deletePackFromGroupRequest = new \Kleister\Model\DeletePackFromGroupRequest(); // \Kleister\Model\DeletePackFromGroupRequest | The mod group data to unlink

try {
    $result = $apiInstance->deleteModFromGroup($modId, $deletePackFromGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **deletePackFromGroupRequest** | [**\Kleister\Model\DeletePackFromGroupRequest**](../Model/DeletePackFromGroupRequest.md)| The mod group data to unlink | |

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

## `deleteModFromUser()`

```php
deleteModFromUser($modId, $deletePackFromUserRequest): \Kleister\Model\Notification
```

Unlink a user from mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$deletePackFromUserRequest = new \Kleister\Model\DeletePackFromUserRequest(); // \Kleister\Model\DeletePackFromUserRequest | The mod user data to unlink

try {
    $result = $apiInstance->deleteModFromUser($modId, $deletePackFromUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **deletePackFromUserRequest** | [**\Kleister\Model\DeletePackFromUserRequest**](../Model/DeletePackFromUserRequest.md)| The mod user data to unlink | |

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

## `deletePackAvatar()`

```php
deletePackAvatar($packId): \Kleister\Model\PackAvatar
```

Delete the avatar for the defined pack

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$packId = 'packId_example'; // string | A pack identifier or slug

try {
    $result = $apiInstance->deletePackAvatar($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deletePackAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **packId** | **string**| A pack identifier or slug | |

### Return type

[**\Kleister\Model\PackAvatar**](../Model/PackAvatar.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVersion()`

```php
deleteVersion($modId, $versionId): \Kleister\Model\Notification
```

Delete a specific version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug

try {
    $result = $apiInstance->deleteVersion($modId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |

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

## `deleteVersionFromBuild()`

```php
deleteVersionFromBuild($modId, $versionId, $attachMinecraftToBuildRequest): \Kleister\Model\Notification
```

Unlink a build from a version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$attachMinecraftToBuildRequest = new \Kleister\Model\AttachMinecraftToBuildRequest(); // \Kleister\Model\AttachMinecraftToBuildRequest | The version build data to create or delete

try {
    $result = $apiInstance->deleteVersionFromBuild($modId, $versionId, $attachMinecraftToBuildRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteVersionFromBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |
| **attachMinecraftToBuildRequest** | [**\Kleister\Model\AttachMinecraftToBuildRequest**](../Model/AttachMinecraftToBuildRequest.md)| The version build data to create or delete | |

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

## `listModGroups()`

```php
listModGroups($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListModGroups200Response
```

Fetch all groups attached to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listModGroups($modId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listModGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListModGroups200Response**](../Model/ListModGroups200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModUsers()`

```php
listModUsers($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListModUsers200Response
```

Fetch all users attached to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listModUsers($modId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listModUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListModUsers200Response**](../Model/ListModUsers200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMods()`

```php
listMods($search, $sort, $order, $limit, $offset): \Kleister\Model\ListMods200Response
```

Fetch all available mods

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


$apiInstance = new Kleister\Api\ModApi(
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
    $result = $apiInstance->listMods($search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listMods: ', $e->getMessage(), PHP_EOL;
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

[**\Kleister\Model\ListMods200Response**](../Model/ListMods200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersionBuilds()`

```php
listVersionBuilds($modId, $versionId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListVersionBuilds200Response
```

Fetch all builds attached to version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listVersionBuilds($modId, $versionId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listVersionBuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListVersionBuilds200Response**](../Model/ListVersionBuilds200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersions()`

```php
listVersions($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ListVersions200Response
```

Fetch all available versions for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'sort_example'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listVersions($modId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ListVersions200Response**](../Model/ListVersions200Response.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitModGroup()`

```php
permitModGroup($modId, $permitPackGroupRequest): \Kleister\Model\Notification
```

Update group perms for mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$permitPackGroupRequest = new \Kleister\Model\PermitPackGroupRequest(); // \Kleister\Model\PermitPackGroupRequest | The mod group data to permit

try {
    $result = $apiInstance->permitModGroup($modId, $permitPackGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **permitPackGroupRequest** | [**\Kleister\Model\PermitPackGroupRequest**](../Model/PermitPackGroupRequest.md)| The mod group data to permit | |

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

## `permitModUser()`

```php
permitModUser($modId, $permitPackUserRequest): \Kleister\Model\Notification
```

Update user perms for mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$permitPackUserRequest = new \Kleister\Model\PermitPackUserRequest(); // \Kleister\Model\PermitPackUserRequest | The mod user data to permit

try {
    $result = $apiInstance->permitModUser($modId, $permitPackUserRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **permitPackUserRequest** | [**\Kleister\Model\PermitPackUserRequest**](../Model/PermitPackUserRequest.md)| The mod user data to permit | |

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

## `showMod()`

```php
showMod($modId): \Kleister\Model\Mod
```

Fetch a specific mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug

try {
    $result = $apiInstance->showMod($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->showMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `showVersion()`

```php
showVersion($modId, $versionId): \Kleister\Model\Version
```

Fetch a specific version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug

try {
    $result = $apiInstance->showVersion($modId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->showVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMod()`

```php
updateMod($modId, $createModRequest): \Kleister\Model\Mod
```

Update a specific mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$createModRequest = new \Kleister\Model\CreateModRequest(); // \Kleister\Model\CreateModRequest | The mod data to update

try {
    $result = $apiInstance->updateMod($modId, $createModRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->updateMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **createModRequest** | [**\Kleister\Model\CreateModRequest**](../Model/CreateModRequest.md)| The mod data to update | |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVersion()`

```php
updateVersion($modId, $versionId, $createVersionRequest): \Kleister\Model\Version
```

Update a specific version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$createVersionRequest = new \Kleister\Model\CreateVersionRequest(); // \Kleister\Model\CreateVersionRequest | The version data to update

try {
    $result = $apiInstance->updateVersion($modId, $versionId, $createVersionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->updateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **versionId** | **string**| A version identifier or slug | |
| **createVersionRequest** | [**\Kleister\Model\CreateVersionRequest**](../Model/CreateVersionRequest.md)| The version data to update | |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

[Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
