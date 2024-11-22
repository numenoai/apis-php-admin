# OpenAPIClient-php

### Admin API

These are the admin APIs, not meant to be used by anyone but Numeno
administration tools or the backend of the Numeno dashboard.

For more information, please visit [https://numeno.ai/](https://numeno.ai/).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKey('X-Numeno-Admin-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = NumenoAdmin\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Numeno-Admin-Key', 'Bearer');


$apiInstance = new NumenoAdmin\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_new = new \NumenoAdmin\Model\UserNew(); // \NumenoAdmin\Model\UserNew

try {
    $result = $apiInstance->createUser($user_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createUser: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.numeno.ai/admin*

| Class        | Method                                                    | HTTP request                     | Description                         |
| ------------ | --------------------------------------------------------- | -------------------------------- | ----------------------------------- |
| _DefaultApi_ | [**createUser**](docs/Api/DefaultApi.md#createuser)       | **POST** /v1/users               | Create a new user                   |
| _DefaultApi_ | [**createUserKey**](docs/Api/DefaultApi.md#createuserkey) | **POST** /v1/keys                | Create a new key for a user         |
| _DefaultApi_ | [**deleteUser**](docs/Api/DefaultApi.md#deleteuser)       | **DELETE** /v1/users/{idOrWebId} | Delete a user                       |
| _DefaultApi_ | [**deleteUserKey**](docs/Api/DefaultApi.md#deleteuserkey) | **DELETE** /v1/keys/{key}        | Delete a key                        |
| _DefaultApi_ | [**getKey**](docs/Api/DefaultApi.md#getkey)               | **GET** /v1/keys/{key}           | Get information about a key         |
| _DefaultApi_ | [**getKeys**](docs/Api/DefaultApi.md#getkeys)             | **GET** /v1/keys                 | Get all keys, optionally for a user |
| _DefaultApi_ | [**getUser**](docs/Api/DefaultApi.md#getuser)             | **GET** /v1/users/{idOrWebId}    | Get information about a user        |
| _DefaultApi_ | [**getUsers**](docs/Api/DefaultApi.md#getusers)           | **GET** /v1/users                | Get all users                       |
| _DefaultApi_ | [**healthCheck**](docs/Api/DefaultApi.md#healthcheck)     | **GET** /health                  | Check the health of the API         |
| _DefaultApi_ | [**updateUser**](docs/Api/DefaultApi.md#updateuser)       | **PUT** /v1/users/{idOrWebId}    | Update a user                       |
| _DefaultApi_ | [**updateUserKey**](docs/Api/DefaultApi.md#updateuserkey) | **PUT** /v1/keys/{key}           | Update a key                        |

## Models

- [ErrorDetail](docs/Model/ErrorDetail.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [HealthCheck](docs/Model/HealthCheck.md)
- [KeyInfo](docs/Model/KeyInfo.md)
- [KeyInfoFull](docs/Model/KeyInfoFull.md)
- [KeyNew](docs/Model/KeyNew.md)
- [KeyUpdate](docs/Model/KeyUpdate.md)
- [Keys](docs/Model/Keys.md)
- [UserInfo](docs/Model/UserInfo.md)
- [UserNew](docs/Model/UserNew.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [Users](docs/Model/Users.md)

## Authorization

Authentication schemes defined for the API:

### ApiKeyAuth

- **Type**: API key
- **API key parameter name**: X-Numeno-Admin-Key
- **Location**: HTTP header

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@numeno.ai

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
  - Package version: `0.0.2`
  - Generator version: `7.9.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`