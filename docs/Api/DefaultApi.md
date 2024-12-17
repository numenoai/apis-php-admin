# NumenoAdmin\DefaultApi

All URIs are relative to https://api.numeno.ai/admin, except if the operation defines another base path.

| Method                                         | HTTP request              | Description                                  |
| ---------------------------------------------- | ------------------------- | -------------------------------------------- |
| [**createKey()**](DefaultApi.md#createKey)     | **POST** /v1/keys         | Create a new Key for your organization       |
| [**deleteKey()**](DefaultApi.md#deleteKey)     | **DELETE** /v1/keys/{key} | Delete a Key                                 |
| [**getKey()**](DefaultApi.md#getKey)           | **GET** /v1/keys/{key}    | Get detailed info about a Key                |
| [**getKeys()**](DefaultApi.md#getKeys)         | **GET** /v1/keys          | Get a list of all Keys for your organization |
| [**getScopes()**](DefaultApi.md#getScopes)     | **GET** /v1/scopes        | Get the Scopes for this API                  |
| [**healthCheck()**](DefaultApi.md#healthCheck) | **GET** /health           | Check the health of the API                  |
| [**updateKey()**](DefaultApi.md#updateKey)     | **PUT** /v1/keys/{key}    | Update a Key                                 |

## `createKey()`

```php
createKey($key_new): \NumenoAdmin\Model\KeyInfoFull
```

Create a new Key for your organization

Create a new Key and give it access to one or more Scopes from the various Numeno APIs. Scopes are expressed as a string of the form `api:resource:action`: - `art-rec:feeds:read` - can read any Feed (eg. `GET` `/feeds`, `/feeds/:id`, `/feeds/:id/streams`, etc.) - `art-rec:feeds:write` - can write (and read) any Feed - `art-rec:feeds:*` - can perform any action on Feeds - `art-rec:*:read` - can read any resource on `art-rec` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key_new = new \NumenoAdmin\Model\KeyNew(); // \NumenoAdmin\Model\KeyNew

try {
    $result = $apiInstance->createKey($key_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name        | Type                                                | Description | Notes      |
| ----------- | --------------------------------------------------- | ----------- | ---------- |
| **key_new** | [**\NumenoAdmin\Model\KeyNew**](../Model/KeyNew.md) |             | [optional] |

### Return type

[**\NumenoAdmin\Model\KeyInfoFull**](../Model/KeyInfoFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteKey()`

```php
deleteKey($key)
```

Delete a Key

Permanently delete a specific API Key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string

try {
    $apiInstance->deleteKey($key);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name    | Type       | Description | Notes |
| ------- | ---------- | ----------- | ----- |
| **key** | **string** |             |       |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKey()`

```php
getKey($key): \NumenoAdmin\Model\KeyInfoFull
```

Get detailed info about a Key

Call this endpoint to get information about Key, inculding when it was created, last updated, and the set of Scopes it has access to. Scopes are expressed as a string of the form `api:resource:action`: - `art-rec:feeds:read` - can read any Feed (eg. `GET` `/feeds`, `/feeds/:id`, `/feeds/:id/streams`, etc.) - `art-rec:feeds:write` - can write (and read) any Feed - `art-rec:feeds:*` - can perform any action on Feeds - `art-rec:*:read` - can read any resource on `art-rec` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string

try {
    $result = $apiInstance->getKey($key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name    | Type       | Description | Notes |
| ------- | ---------- | ----------- | ----- |
| **key** | **string** |             |       |

### Return type

[**\NumenoAdmin\Model\KeyInfoFull**](../Model/KeyInfoFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKeys()`

```php
getKeys($cursor, $limit): \NumenoAdmin\Model\KeyInfoList
```

Get a list of all Keys for your organization

This endpoint returns a list of all Keys your organization has created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cursor = 'cursor_example'; // string | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning.
$limit = 100; // int | Number of Keys to return per page.

try {
    $result = $apiInstance->getKeys($cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name       | Type       | Description                                                                                                                   | Notes                       |
| ---------- | ---------- | ----------------------------------------------------------------------------------------------------------------------------- | --------------------------- |
| **cursor** | **string** | Cursor for paginating results, obtained from the previous response. Omit or pass an empty string to start from the beginning. | [optional]                  |
| **limit**  | **int**    | Number of Keys to return per page.                                                                                            | [optional] [default to 100] |

### Return type

[**\NumenoAdmin\Model\KeyInfoList**](../Model/KeyInfoList.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScopes()`

```php
getScopes(): \NumenoAdmin\Model\Scopes
```

Get the Scopes for this API

Get a list of all the Scopes supported by the Numeno Admin API. Scopes are used to let API Keys access only certain parts of the API. Scopes are expressed as a string of the form `api:resource:action`: - `admin:keys:read` - can read any Key (eg. `GET` `/keys`, `/keys/:id`, etc.) - `admin:keys:write` - can write (and read) any Key - `admin:keys:*` - can perform any action on Keys - `admin:*:read` - can read any resource on `admin` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoAdmin\Model\Scopes**](../Model/Scopes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `healthCheck()`

```php
healthCheck(): \NumenoAdmin\Model\HealthCheck
```

Check the health of the API

A health check endpoint. Returns a code indicating the health of the Admin service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->healthCheck();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->healthCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NumenoAdmin\Model\HealthCheck**](../Model/HealthCheck.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateKey()`

```php
updateKey($key, $key_update): \NumenoAdmin\Model\KeyInfoFull
```

Update a Key

Update the set of Scopes a the specified Key has access to. Scopes are expressed as a string of the form `api:resource:action`: - `art-rec:feeds:read` - can read any Feed (eg. `GET` `/feeds`, `/feeds/:id`, `/feeds/:id/streams`, etc.) - `art-rec:feeds:write` - can write (and read) any Feed - `art-rec:feeds:*` - can perform any action on Feeds - `art-rec:*:read` - can read any resource on `art-rec` - `*:*:*` - can do everything

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 'key_example'; // string
$key_update = new \NumenoAdmin\Model\KeyUpdate(); // \NumenoAdmin\Model\KeyUpdate

try {
    $result = $apiInstance->updateKey($key, $key_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name           | Type                                                      | Description | Notes |
| -------------- | --------------------------------------------------------- | ----------- | ----- |
| **key**        | **string**                                                |             |       |
| **key_update** | [**\NumenoAdmin\Model\KeyUpdate**](../Model/KeyUpdate.md) |             |       |

### Return type

[**\NumenoAdmin\Model\KeyInfoFull**](../Model/KeyInfoFull.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
