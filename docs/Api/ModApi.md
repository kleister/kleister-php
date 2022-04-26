# Kleister\ModApi

All URIs are relative to http://try.kleister.tech/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendModToTeam()**](ModApi.md#appendModToTeam) | **POST** /mods/{mod_id}/teams | Assign a team to mod
[**appendModToUser()**](ModApi.md#appendModToUser) | **POST** /mods/{mod_id}/users | Assign a user to mod
[**appendVersionToBuild()**](ModApi.md#appendVersionToBuild) | **POST** /mods/{mod_id}/versions/{version_id}/builds | Assign a build to a version
[**createMod()**](ModApi.md#createMod) | **POST** /mods | Create a new mod
[**createVersion()**](ModApi.md#createVersion) | **POST** /mods/{mod_id}/versions | Create a new version for a mod
[**deleteMod()**](ModApi.md#deleteMod) | **DELETE** /mods/{mod_id} | Delete a specific mod
[**deleteModFromTeam()**](ModApi.md#deleteModFromTeam) | **DELETE** /mods/{mod_id}/teams | Remove a team from mod
[**deleteModFromUser()**](ModApi.md#deleteModFromUser) | **DELETE** /mods/{mod_id}/users | Remove a user from mod
[**deleteVersion()**](ModApi.md#deleteVersion) | **DELETE** /mods/{mod_id}/versions/{version_id} | Delete a specific version for a mod
[**deleteVersionFromBuild()**](ModApi.md#deleteVersionFromBuild) | **DELETE** /mods/{mod_id}/versions/{version_id}/builds | Unlink a build from a version
[**listModTeams()**](ModApi.md#listModTeams) | **GET** /mods/{mod_id}/teams | Fetch all teams assigned to mod
[**listModUsers()**](ModApi.md#listModUsers) | **GET** /mods/{mod_id}/users | Fetch all users assigned to mod
[**listMods()**](ModApi.md#listMods) | **GET** /mods | Fetch all available mods
[**listVersionBuilds()**](ModApi.md#listVersionBuilds) | **GET** /mods/{mod_id}/versions/{version_id}/builds | Fetch all builds assigned to version
[**listVersions()**](ModApi.md#listVersions) | **GET** /mods/{mod_id}/versions | Fetch all available versions for a mod
[**permitModTeam()**](ModApi.md#permitModTeam) | **PUT** /mods/{mod_id}/teams | Update team perms for mod
[**permitModUser()**](ModApi.md#permitModUser) | **PUT** /mods/{mod_id}/users | Update user perms for mod
[**showMod()**](ModApi.md#showMod) | **GET** /mods/{mod_id} | Fetch a specific mod
[**showVersion()**](ModApi.md#showVersion) | **GET** /mods/{mod_id}/versions/{version_id} | Fetch a specific version for a mod
[**updateMod()**](ModApi.md#updateMod) | **PUT** /mods/{mod_id} | Update a specific mod
[**updateVersion()**](ModApi.md#updateVersion) | **PUT** /mods/{mod_id}/versions/{version_id} | Update a specific version for a mod


## `appendModToTeam()`

```php
appendModToTeam($modId, $modTeam): \Kleister\Model\GeneralError
```

Assign a team to mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modTeam = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The mod team data to assign

try {
    $result = $apiInstance->appendModToTeam($modId, $modTeam);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->appendModToTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modTeam** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The mod team data to assign |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendModToUser()`

```php
appendModToUser($modId, $modUser): \Kleister\Model\GeneralError
```

Assign a user to mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modUser = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The mod user data to assign

try {
    $result = $apiInstance->appendModToUser($modId, $modUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->appendModToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modUser** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The mod user data to assign |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appendVersionToBuild()`

```php
appendVersionToBuild($modId, $versionId, $versionBuild): \Kleister\Model\GeneralError
```

Assign a build to a version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug
$versionBuild = new \Kleister\Model\VersionBuildParams(); // \Kleister\Model\VersionBuildParams | The build data to append to version

try {
    $result = $apiInstance->appendVersionToBuild($modId, $versionId, $versionBuild);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->appendVersionToBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |
 **versionBuild** | [**\Kleister\Model\VersionBuildParams**](../Model/VersionBuildParams.md)| The build data to append to version |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mod** | [**\Kleister\Model\Mod**](../Model/Mod.md)| The mod data to create |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$version = new \Kleister\Model\Version(); // \Kleister\Model\Version | The version data to create

try {
    $result = $apiInstance->createVersion($modId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->createVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **version** | [**\Kleister\Model\Version**](../Model/Version.md)| The version data to create |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMod()`

```php
deleteMod($modId): \Kleister\Model\GeneralError
```

Delete a specific mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug

try {
    $result = $apiInstance->deleteMod($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModFromTeam()`

```php
deleteModFromTeam($modId, $modTeam): \Kleister\Model\GeneralError
```

Remove a team from mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modTeam = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The mod team data to delete

try {
    $result = $apiInstance->deleteModFromTeam($modId, $modTeam);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modTeam** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The mod team data to delete |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteModFromUser()`

```php
deleteModFromUser($modId, $modUser): \Kleister\Model\GeneralError
```

Remove a user from mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modUser = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The mod user data to delete

try {
    $result = $apiInstance->deleteModFromUser($modId, $modUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteModFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modUser** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The mod user data to delete |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVersion()`

```php
deleteVersion($modId, $versionId): \Kleister\Model\GeneralError
```

Delete a specific version for a mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug

try {
    $result = $apiInstance->deleteVersion($modId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteVersionFromBuild()`

```php
deleteVersionFromBuild($modId, $versionId, $versionBuild): \Kleister\Model\GeneralError
```

Unlink a build from a version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug
$versionBuild = new \Kleister\Model\VersionBuildParams(); // \Kleister\Model\VersionBuildParams | The build data to unlink from version

try {
    $result = $apiInstance->deleteVersionFromBuild($modId, $versionId, $versionBuild);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->deleteVersionFromBuild: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |
 **versionBuild** | [**\Kleister\Model\VersionBuildParams**](../Model/VersionBuildParams.md)| The build data to unlink from version |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModTeams()`

```php
listModTeams($modId): \Kleister\Model\TeamMod[]
```

Fetch all teams assigned to mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug

try {
    $result = $apiInstance->listModTeams($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listModTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |

### Return type

[**\Kleister\Model\TeamMod[]**](../Model/TeamMod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listModUsers()`

```php
listModUsers($modId): \Kleister\Model\UserMod[]
```

Fetch all users assigned to mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug

try {
    $result = $apiInstance->listModUsers($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listModUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |

### Return type

[**\Kleister\Model\UserMod[]**](../Model/UserMod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMods()`

```php
listMods(): \Kleister\Model\Mod[]
```

Fetch all available mods

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMods();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listMods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Mod[]**](../Model/Mod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersionBuilds()`

```php
listVersionBuilds($modId, $versionId): \Kleister\Model\BuildVersion[]
```

Fetch all builds assigned to version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug

try {
    $result = $apiInstance->listVersionBuilds($modId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listVersionBuilds: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |

### Return type

[**\Kleister\Model\BuildVersion[]**](../Model/BuildVersion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVersions()`

```php
listVersions($modId): \Kleister\Model\Version[]
```

Fetch all available versions for a mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug

try {
    $result = $apiInstance->listVersions($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->listVersions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |

### Return type

[**\Kleister\Model\Version[]**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitModTeam()`

```php
permitModTeam($modId, $modTeam): \Kleister\Model\GeneralError
```

Update team perms for mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modTeam = new \Kleister\Model\ModTeamParams(); // \Kleister\Model\ModTeamParams | The mod team data to update

try {
    $result = $apiInstance->permitModTeam($modId, $modTeam);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modTeam** | [**\Kleister\Model\ModTeamParams**](../Model/ModTeamParams.md)| The mod team data to update |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitModUser()`

```php
permitModUser($modId, $modUser): \Kleister\Model\GeneralError
```

Update user perms for mod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$modUser = new \Kleister\Model\ModUserParams(); // \Kleister\Model\ModUserParams | The mod user data to update

try {
    $result = $apiInstance->permitModUser($modId, $modUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->permitModUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **modUser** | [**\Kleister\Model\ModUserParams**](../Model/ModUserParams.md)| The mod user data to update |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug

try {
    $result = $apiInstance->showMod($modId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->showMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug

try {
    $result = $apiInstance->showVersion($modId, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->showVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$mod = new \Kleister\Model\Mod(); // \Kleister\Model\Mod | The mod data to update

try {
    $result = $apiInstance->updateMod($modId, $mod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->updateMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **mod** | [**\Kleister\Model\Mod**](../Model/Mod.md)| The mod data to update |

### Return type

[**\Kleister\Model\Mod**](../Model/Mod.md)

### Authorization

No authorization required

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



$apiInstance = new Kleister\Api\ModApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modId = 'modId_example'; // string | A mod UUID or slug
$versionId = 'versionId_example'; // string | A version UUID or slug
$version = new \Kleister\Model\Version(); // \Kleister\Model\Version | The version data to update

try {
    $result = $apiInstance->updateVersion($modId, $versionId, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModApi->updateVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modId** | **string**| A mod UUID or slug |
 **versionId** | **string**| A version UUID or slug |
 **version** | [**\Kleister\Model\Version**](../Model/Version.md)| The version data to update |

### Return type

[**\Kleister\Model\Version**](../Model/Version.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
