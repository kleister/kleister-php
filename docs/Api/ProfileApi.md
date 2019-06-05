# Kleister\ProfileApi

All URIs are relative to *http://try.kleister.tech/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**showProfile**](ProfileApi.md#showProfile) | **GET** /profile/self | Retrieve an unlimited auth token
[**tokenProfile**](ProfileApi.md#tokenProfile) | **GET** /profile/token | Retrieve an unlimited auth token
[**updateProfile**](ProfileApi.md#updateProfile) | **PUT** /profile/self | Retrieve an unlimited auth token



## showProfile

> \Kleister\Model\Profile showProfile()

Retrieve an unlimited auth token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->showProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->showProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## tokenProfile

> \Kleister\Model\AuthToken tokenProfile()

Retrieve an unlimited auth token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tokenProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->tokenProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Kleister\Model\AuthToken**](../Model/AuthToken.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateProfile

> \Kleister\Model\Profile updateProfile($params)

Retrieve an unlimited auth token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Kleister\Api\ProfileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$params = new \Kleister\Model\Profile(); // \Kleister\Model\Profile | The profile data to update

try {
    $result = $apiInstance->updateProfile($params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProfileApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **params** | [**\Kleister\Model\Profile**](../Model/Profile.md)| The profile data to update |

### Return type

[**\Kleister\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

