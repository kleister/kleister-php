# Kleister\MinecraftApi

All URIs are relative to *http://http:/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appendMinecraftToBuild**](MinecraftApi.md#appendMinecraftToBuild) | **POST** /minecraft/{minecraft_id}/builds | Assign a build to a Minecraft version
[**deleteMinecraftFromBuild**](MinecraftApi.md#deleteMinecraftFromBuild) | **DELETE** /minecraft/{minecraft_id}/builds | Unlink a build from a Minecraft version
[**listMinecraftBuilds**](MinecraftApi.md#listMinecraftBuilds) | **GET** /minecraft/{minecraft_id}/builds | Fetch the builds assigned to a Minecraft version
[**listMinecrafts**](MinecraftApi.md#listMinecrafts) | **GET** /minecraft | Fetch the available Minecraft versions
[**searchMinecrafts**](MinecraftApi.md#searchMinecrafts) | **GET** /minecraft/{minecraft_id} | Search for available Minecraft versions
[**updateMinecraft**](MinecraftApi.md#updateMinecraft) | **PUT** /minecraft | Update the available Minecraft versions



## appendMinecraftToBuild

> \Kleister\Model\Build[] appendMinecraftToBuild($minecraftId, $params)

Assign a build to a Minecraft version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$minecraftId = 'minecraftId_example'; // string | A minecraft UUID or slug
$params = new \Kleister\Model\MinecraftBuildParams(); // \Kleister\Model\MinecraftBuildParams | The build data to append

try {
    $result = $apiInstance->appendMinecraftToBuild($minecraftId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->appendMinecraftToBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minecraftId** | **string**| A minecraft UUID or slug |
 **params** | [**\Kleister\Model\MinecraftBuildParams**](../Model/MinecraftBuildParams.md)| The build data to append |

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


## deleteMinecraftFromBuild

> \Kleister\Model\Build[] deleteMinecraftFromBuild($minecraftId, $params)

Unlink a build from a Minecraft version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$minecraftId = 'minecraftId_example'; // string | A minecraft UUID or slug
$params = new \Kleister\Model\MinecraftBuildParams(); // \Kleister\Model\MinecraftBuildParams | The build data to unlink

try {
    $result = $apiInstance->deleteMinecraftFromBuild($minecraftId, $params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->deleteMinecraftFromBuild: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minecraftId** | **string**| A minecraft UUID or slug |
 **params** | [**\Kleister\Model\MinecraftBuildParams**](../Model/MinecraftBuildParams.md)| The build data to unlink |

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


## listMinecraftBuilds

> \Kleister\Model\Build[] listMinecraftBuilds($minecraftId)

Fetch the builds assigned to a Minecraft version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$minecraftId = 'minecraftId_example'; // string | A minecraft UUID or slug

try {
    $result = $apiInstance->listMinecraftBuilds($minecraftId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->listMinecraftBuilds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minecraftId** | **string**| A minecraft UUID or slug |

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


## listMinecrafts

> \Kleister\Model\Minecraft[] listMinecrafts()

Fetch the available Minecraft versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMinecrafts();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->listMinecrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Minecraft[]**](../Model/Minecraft.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## searchMinecrafts

> \Kleister\Model\Minecraft[] searchMinecrafts($minecraftId)

Search for available Minecraft versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$minecraftId = 'minecraftId_example'; // string | A search token to search Minecraft versions

try {
    $result = $apiInstance->searchMinecrafts($minecraftId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->searchMinecrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minecraftId** | **string**| A search token to search Minecraft versions |

### Return type

[**\Kleister\Model\Minecraft[]**](../Model/Minecraft.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateMinecraft

> object updateMinecraft()

Update the available Minecraft versions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\MinecraftApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->updateMinecraft();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MinecraftApi->updateMinecraft: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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

