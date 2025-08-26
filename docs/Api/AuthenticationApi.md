# Vouchsafe\AuthenticationApi

All URIs are relative to https://app.vouchsafe.id/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**authenticate()**](AuthenticationApi.md#authenticate) | **POST** /authenticate |  |


## `authenticate()`

```php
authenticate($authenticate_input): \Vouchsafe\Model\AuthenticateResponse
```



Get the access token, needed for all other API requests.  You will need your client ID and secret from the **API Integration** tab of the Vouchsafe dashboard.  Each access token is valid for 24 hours, after which you will need to re-authenticate.  Once you have an access token, pass it in future requests as a [Bearer token](https://workos.com/blog/understanding-bearer-tokens) in an `Authorization` header.  Use an [SDK or library](https://help.vouchsafe.id/en/articles/12026847-vouchsafe-sdks-and-libraries) to simplify handling tokens  > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Vouchsafe\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticate_input = new \Vouchsafe\Model\AuthenticateInput(); // \Vouchsafe\Model\AuthenticateInput

try {
    $result = $apiInstance->authenticate($authenticate_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authenticate_input** | [**\Vouchsafe\Model\AuthenticateInput**](../Model/AuthenticateInput.md)|  | |

### Return type

[**\Vouchsafe\Model\AuthenticateResponse**](../Model/AuthenticateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
