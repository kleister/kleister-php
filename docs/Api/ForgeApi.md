# Kleister\ForgeApi

All URIs are relative to *http://try.kleister.tech/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendForgeToBuild**](ForgeApi.md#appendForgeToBuild) | **POST** /forge/{forge_id}/builds | Assign a build to a Forge version
[**deleteForgeFromBuild**](ForgeApi.md#deleteForgeFromBuild) | **DELETE** /forge/{forge_id}/builds | Unlink a build from a Forge version
[**listForgeBuilds**](ForgeApi.md#listForgeBuilds) | **GET** /forge/{forge_id}/builds | Fetch the builds assigned to a Forge version
[**listForges**](ForgeApi.md#listForges) | **GET** /forge | Fetch the available Forge versions
[**searchForges**](ForgeApi.md#searchForges) | **GET** /forge/{forge_id} | Search for available Forge versions
[**updateForge**](ForgeApi.md#updateForge) | **PUT** /forge | Update the available Forge versions



## appendForgeToBuild

> \Kleister\Model\Build[] appendForgeToBuild($forgeId, $params)

Assign a build to a Forge version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgeId = 'forgeId_example'; // string | A forge UUID or slug
$params = new \Kleister\Model\ForgeBuildParams(); // \Kleister\Model\ForgeBuildParams | The build data to append

try {
    $result = $apiInstance->appendForgeToBuild($forgeId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->appendForgeToBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgeId** | **string**| A forge UUID or slug |
 **params** | [**\Kleister\Model\ForgeBuildParams**](../Model/ForgeBuildParams.md)| The build data to append |

### Return type

[**\Kleister\Model\Build[]**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteForgeFromBuild

> \Kleister\Model\Build[] deleteForgeFromBuild($forgeId, $params)

Unlink a build from a Forge version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgeId = 'forgeId_example'; // string | A forge UUID or slug
$params = new \Kleister\Model\ForgeBuildParams(); // \Kleister\Model\ForgeBuildParams | The build data to unlink

try {
    $result = $apiInstance->deleteForgeFromBuild($forgeId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->deleteForgeFromBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgeId** | **string**| A forge UUID or slug |
 **params** | [**\Kleister\Model\ForgeBuildParams**](../Model/ForgeBuildParams.md)| The build data to unlink |

### Return type

[**\Kleister\Model\Build[]**](../Model/Build.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listForgeBuilds

> \Kleister\Model\Build[] listForgeBuilds($forgeId)

Fetch the builds assigned to a Forge version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgeId = 'forgeId_example'; // string | A forge UUID or slug

try {
    $result = $apiInstance->listForgeBuilds($forgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->listForgeBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgeId** | **string**| A forge UUID or slug |

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


## listForges

> \Kleister\Model\Forge[] listForges()

Fetch the available Forge versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listForges();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->listForges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Forge[]**](../Model/Forge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchForges

> \Kleister\Model\Forge[] searchForges($forgeId)

Search for available Forge versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$forgeId = 'forgeId_example'; // string | A search token to search Forge versions

try {
    $result = $apiInstance->searchForges($forgeId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->searchForges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **forgeId** | **string**| A search token to search Forge versions |

### Return type

[**\Kleister\Model\Forge[]**](../Model/Forge.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateForge

> \Kleister\Model\GeneralError updateForge()

Update the available Forge versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ForgeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->updateForge();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForgeApi->updateForge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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

