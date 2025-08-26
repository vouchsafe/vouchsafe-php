# Vouchsafe\VerificationsApi

All URIs are relative to https://app.vouchsafe.id/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getVerification()**](VerificationsApi.md#getVerification) | **GET** /verifications/{id} |  |
| [**listVerifications()**](VerificationsApi.md#listVerifications) | **GET** /verifications |  |
| [**requestVerification()**](VerificationsApi.md#requestVerification) | **POST** /verifications |  |


## `getVerification()`

```php
getVerification($id): \Vouchsafe\Model\Verification
```



Get a single verification by ID.  Returns the latest status and metadata for a verification you previously requested.  > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Vouchsafe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchsafe\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | The verification ID returned when you requested it.

try {
    $result = $apiInstance->getVerification($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->getVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| The verification ID returned when you requested it. | |

### Return type

[**\Vouchsafe\Model\Verification**](../Model/Verification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listVerifications()`

```php
listVerifications($status): \Vouchsafe\Model\Verification[]
```



List all verifications for your team.  This can be a long list, so filtering by status is recommended.  > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Vouchsafe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchsafe\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \Vouchsafe\Model\\Vouchsafe\Model\Status(); // \Vouchsafe\Model\Status | Optional status filter.

try {
    $result = $apiInstance->listVerifications($status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->listVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **status** | [**\Vouchsafe\Model\Status**](../Model/.md)| Optional status filter. | [optional] |

### Return type

[**\Vouchsafe\Model\Verification[]**](../Model/Verification.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestVerification()`

```php
requestVerification($request_verification_input): \Vouchsafe\Model\RequestVerificationResponse
```



Request a new verification.  Provide the user's email and the ID of one of your verification flows to send them through.  Vouchsafe will respond with:  - a URL to redirect to the user to - a unique ID for you to track the verification  If you have enabled \"On request creation\" emails in your flow, this also sends them an email.  You can optionally provide more information/claims about the user, like their name, date of birth and address. Any that are provided will be checked against evidence the user gives, and mismatches will be flagged.  > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Vouchsafe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchsafe\Api\VerificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_verification_input = new \Vouchsafe\Model\RequestVerificationInput(); // \Vouchsafe\Model\RequestVerificationInput

try {
    $result = $apiInstance->requestVerification($request_verification_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VerificationsApi->requestVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_verification_input** | [**\Vouchsafe\Model\RequestVerificationInput**](../Model/RequestVerificationInput.md)|  | |

### Return type

[**\Vouchsafe\Model\RequestVerificationResponse**](../Model/RequestVerificationResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
