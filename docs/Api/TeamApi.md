# Kleister\TeamApi

All URIs are relative to *http://try.kleister.tech/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendTeamToMod**](TeamApi.md#appendTeamToMod) | **POST** /teams/{team_id}/mods | Assign a mod to team
[**appendTeamToPack**](TeamApi.md#appendTeamToPack) | **POST** /teams/{team_id}/packs | Assign a pack to team
[**appendTeamToUser**](TeamApi.md#appendTeamToUser) | **POST** /teams/{team_id}/users | Assign a user to team
[**createTeam**](TeamApi.md#createTeam) | **POST** /teams | Create a new team
[**deleteTeam**](TeamApi.md#deleteTeam) | **DELETE** /teams/{team_id} | Delete a specific team
[**deleteTeamFromMod**](TeamApi.md#deleteTeamFromMod) | **DELETE** /teams/{team_id}/mods | Remove a mod from team
[**deleteTeamFromPack**](TeamApi.md#deleteTeamFromPack) | **DELETE** /teams/{team_id}/packs | Remove a pack from team
[**deleteTeamFromUser**](TeamApi.md#deleteTeamFromUser) | **DELETE** /teams/{team_id}/users | Remove a user from team
[**listTeamMods**](TeamApi.md#listTeamMods) | **GET** /teams/{team_id}/mods | Fetch all mods assigned to team
[**listTeamPacks**](TeamApi.md#listTeamPacks) | **GET** /teams/{team_id}/packs | Fetch all packs assigned to team
[**listTeamUsers**](TeamApi.md#listTeamUsers) | **GET** /teams/{team_id}/users | Fetch all users assigned to team
[**listTeams**](TeamApi.md#listTeams) | **GET** /teams | Fetch all available teams
[**permitTeamMod**](TeamApi.md#permitTeamMod) | **PUT** /teams/{team_id}/mods | Update mod perms for team
[**permitTeamPack**](TeamApi.md#permitTeamPack) | **PUT** /teams/{team_id}/packs | Update pack perms for team
[**permitTeamUser**](TeamApi.md#permitTeamUser) | **PUT** /teams/{team_id}/users | Update user perms for team
[**showTeam**](TeamApi.md#showTeam) | **GET** /teams/{team_id} | Fetch a specific team
[**updateTeam**](TeamApi.md#updateTeam) | **PUT** /teams/{team_id} | Update a specific team



## appendTeamToMod

> \Kleister\Model\GeneralError appendTeamToMod($teamId, $params)

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
$params = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to assign

try {
    $result = $apiInstance->appendTeamToMod($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to assign |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appendTeamToPack

> \Kleister\Model\GeneralError appendTeamToPack($teamId, $params)

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
$params = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to assign

try {
    $result = $apiInstance->appendTeamToPack($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to assign |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## appendTeamToUser

> \Kleister\Model\GeneralError appendTeamToUser($teamId, $params)

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
$params = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to assign

try {
    $result = $apiInstance->appendTeamToUser($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->appendTeamToUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to assign |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTeam

> \Kleister\Model\Team createTeam($params)

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
$params = new \Kleister\Model\Team(); // \Kleister\Model\Team | The team data to create

try {
    $result = $apiInstance->createTeam($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->createTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **params** | [**\Kleister\Model\Team**](../Model/Team.md)| The team data to create |

### Return type

[**\Kleister\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTeam

> \Kleister\Model\GeneralError deleteTeam($teamId)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTeamFromMod

> \Kleister\Model\GeneralError deleteTeamFromMod($teamId, $params)

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
$params = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to delete

try {
    $result = $apiInstance->deleteTeamFromMod($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to delete |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTeamFromPack

> \Kleister\Model\GeneralError deleteTeamFromPack($teamId, $params)

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
$params = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to delete

try {
    $result = $apiInstance->deleteTeamFromPack($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to delete |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteTeamFromUser

> \Kleister\Model\GeneralError deleteTeamFromUser($teamId, $params)

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
$params = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to delete

try {
    $result = $apiInstance->deleteTeamFromUser($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->deleteTeamFromUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to delete |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTeamMods

> \Kleister\Model\TeamMod[] listTeamMods($teamId)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTeamPacks

> \Kleister\Model\TeamPack[] listTeamPacks($teamId)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTeamUsers

> \Kleister\Model\TeamUser[] listTeamUsers($teamId)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTeams

> \Kleister\Model\Team[] listTeams()

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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Team[]**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitTeamMod

> \Kleister\Model\GeneralError permitTeamMod($teamId, $params)

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
$params = new \Kleister\Model\TeamModParams(); // \Kleister\Model\TeamModParams | The team mod data to update

try {
    $result = $apiInstance->permitTeamMod($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamMod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamModParams**](../Model/TeamModParams.md)| The team mod data to update |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitTeamPack

> \Kleister\Model\GeneralError permitTeamPack($teamId, $params)

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
$params = new \Kleister\Model\TeamPackParams(); // \Kleister\Model\TeamPackParams | The team pack data to update

try {
    $result = $apiInstance->permitTeamPack($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamPack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamPackParams**](../Model/TeamPackParams.md)| The team pack data to update |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## permitTeamUser

> \Kleister\Model\GeneralError permitTeamUser($teamId, $params)

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
$params = new \Kleister\Model\TeamUserParams(); // \Kleister\Model\TeamUserParams | The team user data to update

try {
    $result = $apiInstance->permitTeamUser($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->permitTeamUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\TeamUserParams**](../Model/TeamUserParams.md)| The team user data to update |

### Return type

[**\Kleister\Model\GeneralError**](../Model/GeneralError.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## showTeam

> \Kleister\Model\Team showTeam($teamId)

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
?>
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
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateTeam

> \Kleister\Model\Team updateTeam($teamId, $params)

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
$params = new \Kleister\Model\Team(); // \Kleister\Model\Team | The team data to update

try {
    $result = $apiInstance->updateTeam($teamId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->updateTeam: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **teamId** | **string**| A team UUID or slug |
 **params** | [**\Kleister\Model\Team**](../Model/Team.md)| The team data to update |

### Return type

[**\Kleister\Model\Team**](../Model/Team.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

