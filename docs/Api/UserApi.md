# Kleister\UserApi

All URIs are relative to *http://http:/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendUserToMod**](UserApi.md#appendUserToMod) | **POST** /users/{user_id}/mods | Assign a mod to user
[**appendUserToPack**](UserApi.md#appendUserToPack) | **POST** /users/{user_id}/packs | Assign a pack to user
[**appendUserToTeam**](UserApi.md#appendUserToTeam) | **POST** /users/{user_id}/teams | Assign a team to user
[**createUser**](UserApi.md#createUser) | **POST** /users | Create a new user
[**deleteUser**](UserApi.md#deleteUser) | **DELETE** /users/{user_id} | Delete a specific user
[**deleteUserFromMod**](UserApi.md#deleteUserFromMod) | **DELETE** /users/{user_id}/mods | Remove a mod from user
[**deleteUserFromPack**](UserApi.md#deleteUserFromPack) | **DELETE** /users/{user_id}/packs | Remove a pack from user
[**deleteUserFromTeam**](UserApi.md#deleteUserFromTeam) | **DELETE** /users/{user_id}/teams | Remove a team from user
[**listUserMods**](UserApi.md#listUserMods) | **GET** /users/{user_id}/mods | Fetch all mods assigned to user
[**listUserPacks**](UserApi.md#listUserPacks) | **GET** /users/{user_id}/packs | Fetch all packs assigned to user
[**listUserTeams**](UserApi.md#listUserTeams) | **GET** /users/{user_id}/teams | Fetch all teams assigned to user
[**listUsers**](UserApi.md#listUsers) | **GET** /users | Fetch all available users
[**permitUserMod**](UserApi.md#permitUserMod) | **PUT** /users/{user_id}/mods | Update mod perms for user
[**permitUserPack**](UserApi.md#permitUserPack) | **PUT** /users/{user_id}/packs | Update pack perms for user
[**permitUserTeam**](UserApi.md#permitUserTeam) | **PUT** /users/{user_id}/teams | Update team perms for user
[**showUser**](UserApi.md#showUser) | **GET** /users/{user_id} | Fetch a specific user
[**updateUser**](UserApi.md#updateUser) | **PUT** /users/{user_id} | Update a specific user



## appendUserToMod

> object appendUserToMod($userId, $params)

Assign a mod to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserModParams(); // \Kleister\Model\UserModParams | The user mod data to assign

try {
    $result = $apiInstance->appendUserToMod($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->appendUserToMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserModParams**](../Model/UserModParams.md)| The user mod data to assign |

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


## appendUserToPack

> object appendUserToPack($userId, $params)

Assign a pack to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserPackParams(); // \Kleister\Model\UserPackParams | The user pack data to assign

try {
    $result = $apiInstance->appendUserToPack($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->appendUserToPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserPackParams**](../Model/UserPackParams.md)| The user pack data to assign |

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


## appendUserToTeam

> object appendUserToTeam($userId, $params)

Assign a team to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserTeamParams(); // \Kleister\Model\UserTeamParams | The user team data to assign

try {
    $result = $apiInstance->appendUserToTeam($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->appendUserToTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserTeamParams**](../Model/UserTeamParams.md)| The user team data to assign |

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


## createUser

> \Kleister\Model\User createUser($params)

Create a new user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$params = new \Kleister\Model\User(); // \Kleister\Model\User | The user data to create

try {
    $result = $apiInstance->createUser($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **params** | [**\Kleister\Model\User**](../Model/User.md)| The user data to create |

### Return type

[**\Kleister\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteUser

> object deleteUser($userId)

Delete a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug

try {
    $result = $apiInstance->deleteUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |

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


## deleteUserFromMod

> object deleteUserFromMod($userId, $params)

Remove a mod from user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserModParams(); // \Kleister\Model\UserModParams | The user mod data to delete

try {
    $result = $apiInstance->deleteUserFromMod($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserFromMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserModParams**](../Model/UserModParams.md)| The user mod data to delete |

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


## deleteUserFromPack

> object deleteUserFromPack($userId, $params)

Remove a pack from user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserPackParams(); // \Kleister\Model\UserPackParams | The user pack data to delete

try {
    $result = $apiInstance->deleteUserFromPack($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserFromPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserPackParams**](../Model/UserPackParams.md)| The user pack data to delete |

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


## deleteUserFromTeam

> object deleteUserFromTeam($userId, $params)

Remove a team from user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserTeamParams(); // \Kleister\Model\UserTeamParams | The user team data to delete

try {
    $result = $apiInstance->deleteUserFromTeam($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserFromTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserTeamParams**](../Model/UserTeamParams.md)| The user team data to delete |

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


## listUserMods

> \Kleister\Model\UserMod[] listUserMods($userId)

Fetch all mods assigned to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug

try {
    $result = $apiInstance->listUserMods($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUserMods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |

### Return type

[**\Kleister\Model\UserMod[]**](../Model/UserMod.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUserPacks

> \Kleister\Model\UserPack[] listUserPacks($userId)

Fetch all packs assigned to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug

try {
    $result = $apiInstance->listUserPacks($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUserPacks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |

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


## listUserTeams

> \Kleister\Model\TeamUser[] listUserTeams($userId)

Fetch all teams assigned to user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug

try {
    $result = $apiInstance->listUserTeams($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUserTeams: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |

### Return type

[**\Kleister\Model\TeamUser[]**](../Model/TeamUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUsers

> \Kleister\Model\User[] listUsers()

Fetch all available users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\User[]**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitUserMod

> object permitUserMod($userId, $params)

Update mod perms for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserModParams(); // \Kleister\Model\UserModParams | The user mod data to update

try {
    $result = $apiInstance->permitUserMod($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->permitUserMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserModParams**](../Model/UserModParams.md)| The user mod data to update |

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


## permitUserPack

> object permitUserPack($userId, $params)

Update pack perms for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserPackParams(); // \Kleister\Model\UserPackParams | The user pack data to update

try {
    $result = $apiInstance->permitUserPack($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->permitUserPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserPackParams**](../Model/UserPackParams.md)| The user pack data to update |

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


## permitUserTeam

> object permitUserTeam($userId, $params)

Update team perms for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\UserTeamParams(); // \Kleister\Model\UserTeamParams | The user team data to update

try {
    $result = $apiInstance->permitUserTeam($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->permitUserTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\UserTeamParams**](../Model/UserTeamParams.md)| The user team data to update |

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


## showUser

> \Kleister\Model\User showUser($userId)

Fetch a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug

try {
    $result = $apiInstance->showUser($userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->showUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |

### Return type

[**\Kleister\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateUser

> \Kleister\Model\User updateUser($userId, $params)

Update a specific user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$userId = 'userId_example'; // string | A user UUID or slug
$params = new \Kleister\Model\User(); // \Kleister\Model\User | The user data to update

try {
    $result = $apiInstance->updateUser($userId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| A user UUID or slug |
 **params** | [**\Kleister\Model\User**](../Model/User.md)| The user data to update |

### Return type

[**\Kleister\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

