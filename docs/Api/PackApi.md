# Kleister\PackApi

All URIs are relative to *http://http:/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendBuildToVersion**](PackApi.md#appendBuildToVersion) | **POST** /packs/{pack_id}/builds/{build_id}/versions | Assign a version to a build
[**appendPackToTeam**](PackApi.md#appendPackToTeam) | **POST** /packs/{pack_id}/teams | Assign a team to pack
[**appendPackToUser**](PackApi.md#appendPackToUser) | **POST** /packs/{pack_id}/users | Assign a user to pack
[**createBuild**](PackApi.md#createBuild) | **POST** /packs/{pack_id}/builds | Create a new build for a pack
[**createPack**](PackApi.md#createPack) | **POST** /packs | Create a new pack
[**deleteBuild**](PackApi.md#deleteBuild) | **DELETE** /packs/{pack_id}/builds/{build_id} | Delete a specific build for a pack
[**deleteBuildFromVersion**](PackApi.md#deleteBuildFromVersion) | **DELETE** /packs/{pack_id}/builds/{build_id}/versions | Unlink a version from a build
[**deletePack**](PackApi.md#deletePack) | **DELETE** /packs/{pack_id} | Delete a specific pack
[**deletePackFromTeam**](PackApi.md#deletePackFromTeam) | **DELETE** /packs/{pack_id}/teams | Remove a team from pack
[**deletePackFromUser**](PackApi.md#deletePackFromUser) | **DELETE** /packs/{pack_id}/users | Remove a user from pack
[**listBuildVersions**](PackApi.md#listBuildVersions) | **GET** /packs/{pack_id}/builds/{build_id}/versions | Fetch all versions assigned to build
[**listBuilds**](PackApi.md#listBuilds) | **GET** /packs/{pack_id}/builds | Fetch all available builds for a pack
[**listPackTeams**](PackApi.md#listPackTeams) | **GET** /packs/{pack_id}/teams | Fetch all teams assigned to pack
[**listPackUsers**](PackApi.md#listPackUsers) | **GET** /packs/{pack_id}/users | Fetch all users assigned to pack
[**listPacks**](PackApi.md#listPacks) | **GET** /packs | Fetch all available packs
[**permitPackTeam**](PackApi.md#permitPackTeam) | **PUT** /packs/{pack_id}/teams | Update team perms for pack
[**permitPackUser**](PackApi.md#permitPackUser) | **PUT** /packs/{pack_id}/users | Update user perms for pack
[**showBuild**](PackApi.md#showBuild) | **GET** /packs/{pack_id}/builds/{build_id} | Fetch a specific build for a pack
[**showPack**](PackApi.md#showPack) | **GET** /packs/{pack_id} | Fetch a specific pack
[**updateBuild**](PackApi.md#updateBuild) | **PUT** /packs/{pack_id}/builds/{build_id} | Update a specific build for a pack
[**updatePack**](PackApi.md#updatePack) | **PUT** /packs/{pack_id} | Update a specific pack



## appendBuildToVersion

> object appendBuildToVersion($packId, $buildId, $params)

Assign a version to a build

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug
$params = new \Kleister\Model\BuildVersionParams(); // \Kleister\Model\BuildVersionParams | The version data to append to build

try {
    $result = $apiInstance->appendBuildToVersion($packId, $buildId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->appendBuildToVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |
 **params** | [**\Kleister\Model\BuildVersionParams**](../Model/BuildVersionParams.md)| The version data to append to build |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appendPackToTeam

> object appendPackToTeam($packId, $params)

Assign a team to pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackTeamParams(); // \Kleister\Model\PackTeamParams | The pack team data to assign

try {
    $result = $apiInstance->appendPackToTeam($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->appendPackToTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackTeamParams**](../Model/PackTeamParams.md)| The pack team data to assign |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appendPackToUser

> object appendPackToUser($packId, $params)

Assign a user to pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackUserParams(); // \Kleister\Model\PackUserParams | The pack user data to assign

try {
    $result = $apiInstance->appendPackToUser($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->appendPackToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackUserParams**](../Model/PackUserParams.md)| The pack user data to assign |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createBuild

> \Kleister\Model\Build createBuild($packId, $params)

Create a new build for a pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\Build(); // \Kleister\Model\Build | The build data to create

try {
    $result = $apiInstance->createBuild($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->createBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\Build**](../Model/Build.md)| The build data to create |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createPack

> \Kleister\Model\Pack createPack($params)

Create a new pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$params = new \Kleister\Model\Pack(); // \Kleister\Model\Pack | The pack data to create

try {
    $result = $apiInstance->createPack($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->createPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **params** | [**\Kleister\Model\Pack**](../Model/Pack.md)| The pack data to create |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteBuild

> object deleteBuild($packId, $buildId)

Delete a specific build for a pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug

try {
    $result = $apiInstance->deleteBuild($packId, $buildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deleteBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteBuildFromVersion

> object deleteBuildFromVersion($packId, $buildId, $params)

Unlink a version from a build

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug
$params = new \Kleister\Model\BuildVersionParams(); // \Kleister\Model\BuildVersionParams | The version data to unlink from build

try {
    $result = $apiInstance->deleteBuildFromVersion($packId, $buildId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deleteBuildFromVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |
 **params** | [**\Kleister\Model\BuildVersionParams**](../Model/BuildVersionParams.md)| The version data to unlink from build |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePack

> object deletePack($packId)

Delete a specific pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug

try {
    $result = $apiInstance->deletePack($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePackFromTeam

> object deletePackFromTeam($packId, $params)

Remove a team from pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackTeamParams(); // \Kleister\Model\PackTeamParams | The pack team data to delete

try {
    $result = $apiInstance->deletePackFromTeam($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePackFromTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackTeamParams**](../Model/PackTeamParams.md)| The pack team data to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deletePackFromUser

> object deletePackFromUser($packId, $params)

Remove a user from pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackUserParams(); // \Kleister\Model\PackUserParams | The pack user data to delete

try {
    $result = $apiInstance->deletePackFromUser($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->deletePackFromUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackUserParams**](../Model/PackUserParams.md)| The pack user data to delete |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listBuildVersions

> \Kleister\Model\BuildVersion[] listBuildVersions($packId, $buildId)

Fetch all versions assigned to build

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug

try {
    $result = $apiInstance->listBuildVersions($packId, $buildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listBuildVersions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |

### Return type

[**\Kleister\Model\BuildVersion[]**](../Model/BuildVersion.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listBuilds

> \Kleister\Model\Build[] listBuilds($packId)

Fetch all available builds for a pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug

try {
    $result = $apiInstance->listBuilds($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |

### Return type

[**\Kleister\Model\Build[]**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPackTeams

> \Kleister\Model\TeamPack[] listPackTeams($packId)

Fetch all teams assigned to pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug

try {
    $result = $apiInstance->listPackTeams($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPackTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |

### Return type

[**\Kleister\Model\TeamPack[]**](../Model/TeamPack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPackUsers

> \Kleister\Model\UserPack[] listPackUsers($packId)

Fetch all users assigned to pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug

try {
    $result = $apiInstance->listPackUsers($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPackUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |

### Return type

[**\Kleister\Model\UserPack[]**](../Model/UserPack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listPacks

> \Kleister\Model\Pack[] listPacks()

Fetch all available packs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listPacks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->listPacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Pack[]**](../Model/Pack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitPackTeam

> object permitPackTeam($packId, $params)

Update team perms for pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackTeamParams(); // \Kleister\Model\PackTeamParams | The pack team data to update

try {
    $result = $apiInstance->permitPackTeam($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->permitPackTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackTeamParams**](../Model/PackTeamParams.md)| The pack team data to update |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitPackUser

> object permitPackUser($packId, $params)

Update user perms for pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\PackUserParams(); // \Kleister\Model\PackUserParams | The pack user data to update

try {
    $result = $apiInstance->permitPackUser($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->permitPackUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\PackUserParams**](../Model/PackUserParams.md)| The pack user data to update |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showBuild

> \Kleister\Model\Build showBuild($packId, $buildId)

Fetch a specific build for a pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug

try {
    $result = $apiInstance->showBuild($packId, $buildId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->showBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showPack

> \Kleister\Model\Pack showPack($packId)

Fetch a specific pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug

try {
    $result = $apiInstance->showPack($packId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->showPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateBuild

> \Kleister\Model\Build updateBuild($packId, $buildId, $params)

Update a specific build for a pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$buildId = 'buildId_example'; // string | A build UUID or slug
$params = new \Kleister\Model\Build(); // \Kleister\Model\Build | The build data to update

try {
    $result = $apiInstance->updateBuild($packId, $buildId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->updateBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **buildId** | **string**| A build UUID or slug |
 **params** | [**\Kleister\Model\Build**](../Model/Build.md)| The build data to update |

### Return type

[**\Kleister\Model\Build**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updatePack

> \Kleister\Model\Pack updatePack($packId, $params)

Update a specific pack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\PackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$packId = 'packId_example'; // string | A pack UUID or slug
$params = new \Kleister\Model\Pack(); // \Kleister\Model\Pack | The pack data to update

try {
    $result = $apiInstance->updatePack($packId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PackApi->updatePack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **packId** | **string**| A pack UUID or slug |
 **params** | [**\Kleister\Model\Pack**](../Model/Pack.md)| The pack data to update |

### Return type

[**\Kleister\Model\Pack**](../Model/Pack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

