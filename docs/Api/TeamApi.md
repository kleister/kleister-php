# Kleister\TeamApi

All URIs are relative to http://try.kleister.tech/api/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendTeamToMod()**](TeamApi.md#appendTeamToMod) | **POST** /teams/{team_id}/mods | Assign a mod to team
[**appendTeamToPack()**](TeamApi.md#appendTeamToPack) | **POST** /teams/{team_id}/packs | Assign a pack to team
[**appendTeamToUser()**](TeamApi.md#appendTeamToUser) | **POST** /teams/{team_id}/users | Assign a user to team
[**createTeam()**](TeamApi.md#createTeam) | **POST** /teams | Create a new team
[**deleteTeam()**](TeamApi.md#deleteTeam) | **DELETE** /teams/{team_id} | Delete a specific team
[**deleteTeamFromMod()**](TeamApi.md#deleteTeamFromMod) | **DELETE** /teams/{team_id}/mods | Remove a mod from team
[**deleteTeamFromPack()**](TeamApi.md#deleteTeamFromPack) | **DELETE** /teams/{team_id}/packs | Remove a pack from team
[**deleteTeamFromUser()**](TeamApi.md#deleteTeamFromUser) | **DELETE** /teams/{team_id}/users | Remove a user from team
[**listTeamMods()**](TeamApi.md#listTeamMods) | **GET** /teams/{team_id}/mods | Fetch all mods assigned to team
[**listTeamPacks()**](TeamApi.md#listTeamPacks) | **GET** /teams/{team_id}/packs | Fetch all packs assigned to team
[**listTeamUsers()**](TeamApi.md#listTeamUsers) | **GET** /teams/{team_id}/users | Fetch all users assigned to team
[**listTeams()**](TeamApi.md#listTeams) | **GET** /teams | Fetch all available teams
[**permitTeamMod()**](TeamApi.md#permitTeamMod) | **PUT** /teams/{team_id}/mods | Update mod perms for team
[**permitTeamPack()**](TeamApi.md#permitTeamPack) | **PUT** /teams/{team_id}/packs | Update pack perms for team
[**permitTeamUser()**](TeamApi.md#permitTeamUser) | **PUT** /teams/{team_id}/users | Update user perms for team
[**showTeam()**](TeamApi.md#showTeam) | **GET** /teams/{team_id} | Fetch a specific team
[**updateTeam()**](TeamApi.md#updateTeam) | **PUT** /teams/{team_id} | Update a specific team


## `appendTeamToMod()`

```php
appendTeamToMod($teamId, $teamMod): \Kleister\Model\GeneralError
```

Assign a mod to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamMod = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to assign

try {
    $result = $apiInstance->appendTeamToMod($teamId, $teamMod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamMod** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to assign |

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

## `appendTeamToPack()`

```php
appendTeamToPack($teamId, $teamPack): \Kleister\Model\GeneralError
```

Assign a pack to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamPack = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to assign

try {
    $result = $apiInstance->appendTeamToPack($teamId, $teamPack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamPack** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to assign |

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

## `appendTeamToUser()`

```php
appendTeamToUser($teamId, $teamUser): \Kleister\Model\GeneralError
```

Assign a user to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamUser = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to assign

try {
    $result = $apiInstance->appendTeamToUser($teamId, $teamUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamUser** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to assign |

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

## `createTeam()`

```php
createTeam($team): \Kleister\Model\Team
```

Create a new team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$team = new \Kleister\Model\Team(); // \Kleister\Model\Team | The team data to create

try {
    $result = $apiInstance->createTeam($team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **team** | [**\Kleister\Model\Team**](../Model/Team.md)| The team data to create |

### Return type

[**\Kleister\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTeam()`

```php
deleteTeam($teamId): \Kleister\Model\GeneralError
```

Delete a specific team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug

try {
    $result = $apiInstance->deleteTeam($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |

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

## `deleteTeamFromMod()`

```php
deleteTeamFromMod($teamId, $teamMod): \Kleister\Model\GeneralError
```

Remove a mod from team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamMod = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to delete

try {
    $result = $apiInstance->deleteTeamFromMod($teamId, $teamMod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamMod** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to delete |

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

## `deleteTeamFromPack()`

```php
deleteTeamFromPack($teamId, $teamPack): \Kleister\Model\GeneralError
```

Remove a pack from team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamPack = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to delete

try {
    $result = $apiInstance->deleteTeamFromPack($teamId, $teamPack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamPack** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to delete |

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

## `deleteTeamFromUser()`

```php
deleteTeamFromUser($teamId, $teamUser): \Kleister\Model\GeneralError
```

Remove a user from team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamUser = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to delete

try {
    $result = $apiInstance->deleteTeamFromUser($teamId, $teamUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamUser** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to delete |

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

## `listTeamMods()`

```php
listTeamMods($teamId): \Kleister\Model\TeamMod[]
```

Fetch all mods assigned to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug

try {
    $result = $apiInstance->listTeamMods($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->listTeamMods: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |

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

## `listTeamPacks()`

```php
listTeamPacks($teamId): \Kleister\Model\TeamPack[]
```

Fetch all packs assigned to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug

try {
    $result = $apiInstance->listTeamPacks($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->listTeamPacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |

### Return type

[**\Kleister\Model\TeamPack[]**](../Model/TeamPack.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeamUsers()`

```php
listTeamUsers($teamId): \Kleister\Model\TeamUser[]
```

Fetch all users assigned to team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug

try {
    $result = $apiInstance->listTeamUsers($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->listTeamUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |

### Return type

[**\Kleister\Model\TeamUser[]**](../Model/TeamUser.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTeams()`

```php
listTeams(): \Kleister\Model\Team[]
```

Fetch all available teams

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listTeams();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->listTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Team[]**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permitTeamMod()`

```php
permitTeamMod($teamId, $teamMod): \Kleister\Model\GeneralError
```

Update mod perms for team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamMod = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to update

try {
    $result = $apiInstance->permitTeamMod($teamId, $teamMod);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamMod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamMod** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to update |

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

## `permitTeamPack()`

```php
permitTeamPack($teamId, $teamPack): \Kleister\Model\GeneralError
```

Update pack perms for team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamPack = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to update

try {
    $result = $apiInstance->permitTeamPack($teamId, $teamPack);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamPack: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamPack** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to update |

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

## `permitTeamUser()`

```php
permitTeamUser($teamId, $teamUser): \Kleister\Model\GeneralError
```

Update user perms for team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$teamUser = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to update

try {
    $result = $apiInstance->permitTeamUser($teamId, $teamUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **teamUser** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to update |

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

## `showTeam()`

```php
showTeam($teamId): \Kleister\Model\Team
```

Fetch a specific team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug

try {
    $result = $apiInstance->showTeam($teamId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->showTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |

### Return type

[**\Kleister\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTeam()`

```php
updateTeam($teamId, $team): \Kleister\Model\Team
```

Update a specific team

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Kleister\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$teamId = 'teamId_example'; // string | A team UUID or slug
$team = new \Kleister\Model\Team(); // \Kleister\Model\Team | The team data to update

try {
    $result = $apiInstance->updateTeam($teamId, $team);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **team** | [**\Kleister\Model\Team**](../Model/Team.md)| The team data to update |

### Return type

[**\Kleister\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
