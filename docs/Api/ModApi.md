# Kleister\ModApi

All URIs are relative to https://try.kleister.eu/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachModToTeam()**](ModApi.md#attachModToTeam) | **POST** /mods/{mod_id}/teams | Attach a team to mod |
| [**attachModToUser()**](ModApi.md#attachModToUser) | **POST** /mods/{mod_id}/users | Attach a user to mod |
| [**attachVersionToBuild()**](ModApi.md#attachVersionToBuild) | **POST** /mods/{mod_id}/versions/{version_id}/builds | Attach a build to a version |
| [**createMod()**](ModApi.md#createMod) | **POST** /mods | Create a new mod |
| [**createVersion()**](ModApi.md#createVersion) | **POST** /mods/{mod_id}/versions | Create a new version for a mod |
| [**deleteMod()**](ModApi.md#deleteMod) | **DELETE** /mods/{mod_id} | Delete a specific mod |
| [**deleteModFromTeam()**](ModApi.md#deleteModFromTeam) | **DELETE** /mods/{mod_id}/teams | Unlink a team from mod |
| [**deleteModFromUser()**](ModApi.md#deleteModFromUser) | **DELETE** /mods/{mod_id}/users | Unlink a user from mod |
| [**deleteVersion()**](ModApi.md#deleteVersion) | **DELETE** /mods/{mod_id}/versions/{version_id} | Delete a specific version for a mod |
| [**deleteVersionFromBuild()**](ModApi.md#deleteVersionFromBuild) | **DELETE** /mods/{mod_id}/versions/{version_id}/builds | Unlink a build from a version |
| [**listModTeams()**](ModApi.md#listModTeams) | **GET** /mods/{mod_id}/teams | Fetch all teams attached to mod |
| [**listModUsers()**](ModApi.md#listModUsers) | **GET** /mods/{mod_id}/users | Fetch all users attached to mod |
| [**listMods()**](ModApi.md#listMods) | **GET** /mods | Fetch all available mods |
| [**listVersionBuilds()**](ModApi.md#listVersionBuilds) | **GET** /mods/{mod_id}/versions/{version_id}/builds | Fetch all builds attached to version |
| [**listVersions()**](ModApi.md#listVersions) | **GET** /mods/{mod_id}/versions | Fetch all available versions for a mod |
| [**permitModTeam()**](ModApi.md#permitModTeam) | **PUT** /mods/{mod_id}/teams | Update team perms for mod |
| [**permitModUser()**](ModApi.md#permitModUser) | **PUT** /mods/{mod_id}/users | Update user perms for mod |
| [**showMod()**](ModApi.md#showMod) | **GET** /mods/{mod_id} | Fetch a specific mod |
| [**showVersion()**](ModApi.md#showVersion) | **GET** /mods/{mod_id}/versions/{version_id} | Fetch a specific version for a mod |
| [**updateMod()**](ModApi.md#updateMod) | **PUT** /mods/{mod_id} | Update a specific mod |
| [**updateVersion()**](ModApi.md#updateVersion) | **PUT** /mods/{mod_id}/versions/{version_id} | Update a specific version for a mod |


## `attachModToTeam()`

```php
attachModToTeam($modId, $modTeamParams): \Kleister\Model\Notification
```

Attach a team to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modTeamParams = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The team data to attach

try {
    $result = $apiInstance->attachModToTeam($modId, $modTeamParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->attachModToTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modTeamParams** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The team data to attach | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachModToUser()`

```php
attachModToUser($modId, $modUserParams): \Kleister\Model\Notification
```

Attach a user to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modUserParams = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The user data to attach

try {
    $result = $apiInstance->attachModToUser($modId, $modUserParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->attachModToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modUserParams** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The user data to attach | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachVersionToBuild()`

```php
attachVersionToBuild($modId, $versionId, $versionBuildParams): \Kleister\Model\Notification
```

Attach a build to a version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$versionBuildParams = new \Kleister\Model\VersionBuildParams(); // \Kleister\Model\VersionBuildParams | The version build data to attach

try {
    $result = $apiInstance->attachVersionToBuild($modId, $versionId, $versionBuildParams);
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
| **versionBuildParams** | [**\Kleister\Model\VersionBuildParams**](../Model/VersionBuildParams.md)| The version build data to attach | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMod()`

```php
createMod($mod): \Kleister\Model\Mod
```

Create a new mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mod = new \Kleister\Model\Mod(); // \Kleister\Model\Mod | The mod data to create

try {
    $result = $apiInstance->createMod($mod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mod** | [**\Kleister\Model\Mod**](../Model/Mod.md)| The mod data to create | |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createVersion()`

```php
createVersion($modId, $version): \Kleister\Model\Version
```

Create a new version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$version = new \Kleister\Model\Version(); // \Kleister\Model\Version | The version data to create

try {
    $result = $apiInstance->createVersion($modId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **version** | [**\Kleister\Model\Version**](../Model/Version.md)| The version data to create | |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

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

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModFromTeam()`

```php
deleteModFromTeam($modId, $modTeamParams): \Kleister\Model\Notification
```

Unlink a team from mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modTeamParams = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The mod team data to unlink

try {
    $result = $apiInstance->deleteModFromTeam($modId, $modTeamParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modTeamParams** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The mod team data to unlink | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModFromUser()`

```php
deleteModFromUser($modId, $modUserParams): \Kleister\Model\Notification
```

Unlink a user from mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modUserParams = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The mod user data to unlink

try {
    $result = $apiInstance->deleteModFromUser($modId, $modUserParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modUserParams** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The mod user data to unlink | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
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

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVersionFromBuild()`

```php
deleteVersionFromBuild($modId, $versionId, $versionBuildParams): \Kleister\Model\Notification
```

Unlink a build from a version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$versionBuildParams = new \Kleister\Model\VersionBuildParams(); // \Kleister\Model\VersionBuildParams | The version build data to unlink

try {
    $result = $apiInstance->deleteVersionFromBuild($modId, $versionId, $versionBuildParams);
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
| **versionBuildParams** | [**\Kleister\Model\VersionBuildParams**](../Model/VersionBuildParams.md)| The version build data to unlink | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModTeams()`

```php
listModTeams($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ModTeams
```

Fetch all teams attached to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'name'; // string | Sorting column
$order = 'asc'; // string | Sorting order
$limit = 100; // int | Paging limit
$offset = 0; // int | Paging offset

try {
    $result = $apiInstance->listModTeams($modId, $search, $sort, $order, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listModTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **search** | **string**| Search query | [optional] |
| **sort** | **string**| Sorting column | [optional] [default to &#39;name&#39;] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ModTeams**](../Model/ModTeams.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModUsers()`

```php
listModUsers($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\ModUsers
```

Fetch all users attached to mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'username'; // string | Sorting column
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
| **sort** | **string**| Sorting column | [optional] [default to &#39;username&#39;] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\ModUsers**](../Model/ModUsers.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMods()`

```php
listMods($search, $sort, $order, $limit, $offset): \Kleister\Model\Mods
```

Fetch all available mods

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search query
$sort = 'name'; // string | Sorting column
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
| **sort** | **string**| Sorting column | [optional] [default to &#39;name&#39;] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\Mods**](../Model/Mods.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersionBuilds()`

```php
listVersionBuilds($modId, $versionId, $search, $sort, $order, $limit, $offset): \Kleister\Model\VersionBuilds
```

Fetch all builds attached to version

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'name'; // string | Sorting column
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
| **sort** | **string**| Sorting column | [optional] [default to &#39;name&#39;] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\VersionBuilds**](../Model/VersionBuilds.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersions()`

```php
listVersions($modId, $search, $sort, $order, $limit, $offset): \Kleister\Model\Versions
```

Fetch all available versions for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$search = 'search_example'; // string | Search query
$sort = 'name'; // string | Sorting column
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
| **sort** | **string**| Sorting column | [optional] [default to &#39;name&#39;] |
| **order** | **string**| Sorting order | [optional] [default to &#39;asc&#39;] |
| **limit** | **int**| Paging limit | [optional] [default to 100] |
| **offset** | **int**| Paging offset | [optional] [default to 0] |

### Return type

[**\Kleister\Model\Versions**](../Model/Versions.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitModTeam()`

```php
permitModTeam($modId, $modTeamParams): \Kleister\Model\Notification
```

Update team perms for mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modTeamParams = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The team data to update

try {
    $result = $apiInstance->permitModTeam($modId, $modTeamParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modTeamParams** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The team data to update | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitModUser()`

```php
permitModUser($modId, $modUserParams): \Kleister\Model\Notification
```

Update user perms for mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$modUserParams = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The user data to update

try {
    $result = $apiInstance->permitModUser($modId, $modUserParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **modUserParams** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The user data to update | |

### Return type

[**\Kleister\Model\Notification**](../Model/Notification.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

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

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

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

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMod()`

```php
updateMod($modId, $mod): \Kleister\Model\Mod
```

Update a specific mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$mod = new \Kleister\Model\Mod(); // \Kleister\Model\Mod | The mod data to update

try {
    $result = $apiInstance->updateMod($modId, $mod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->updateMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modId** | **string**| A mod identifier or slug | |
| **mod** | [**\Kleister\Model\Mod**](../Model/Mod.md)| The mod data to update | |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVersion()`

```php
updateVersion($modId, $versionId, $version): \Kleister\Model\Version
```

Update a specific version for a mod

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


$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modId = 'modId_example'; // string | A mod identifier or slug
$versionId = 'versionId_example'; // string | A version identifier or slug
$version = new \Kleister\Model\Version(); // \Kleister\Model\Version | The version data to update

try {
    $result = $apiInstance->updateVersion($modId, $versionId, $version);
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
| **version** | [**\Kleister\Model\Version**](../Model/Version.md)| The version data to update | |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

[Cookie](../../README.md#Cookie), [Basic](../../README.md#Basic), [Header](../../README.md#Header), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
