# Vouchsafe\SmartLookupsApi

All URIs are relative to https://app.vouchsafe.id/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**performSmartLookup()**](SmartLookupsApi.md#performSmartLookup) | **POST** /smart-lookups |  |
| [**searchPostcode()**](SmartLookupsApi.md#searchPostcode) | **GET** /smart-lookups/postcode |  |


## `performSmartLookup()`

```php
performSmartLookup($smart_lookup_input): \Vouchsafe\Model\GetSmartLookupResponse
```



> This feature is currently experimental, so the only supported check is `Address` via the electoral roll. Other checks coming soon.  Run quick [background checks](https://help.vouchsafe.id/en/articles/11075009-how-background-checks-work) on a user's details.  Provide the user's details and the check or checks to run and receive the report.  First line of address should be taken from the results returned by the [`GET /postcode` endpoint](https://localhost:3000/docs/operations/SearchPostcode).  > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Vouchsafe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchsafe\Api\SmartLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smart_lookup_input = new \Vouchsafe\Model\SmartLookupInput(); // \Vouchsafe\Model\SmartLookupInput

try {
    $result = $apiInstance->performSmartLookup($smart_lookup_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartLookupsApi->performSmartLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **smart_lookup_input** | [**\Vouchsafe\Model\SmartLookupInput**](../Model/SmartLookupInput.md)|  | |

### Return type

[**\Vouchsafe\Model\GetSmartLookupResponse**](../Model/GetSmartLookupResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchPostcode()`

```php
searchPostcode($postcode): \Vouchsafe\Model\PostcodeResponse
```



Look up all addresses for a given UK postcode in the Post Office Address File.  Useful for guaranteeing that a user's address is recognised before onboarding.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer (JWT) authorization: bearerAuth
$config = Vouchsafe\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Vouchsafe\Api\SmartLookupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postcode = 'postcode_example'; // string | UK postcode to search for. Example: `SW1A 2AA` Can be with or without space. Case insensitive.

try {
    $result = $apiInstance->searchPostcode($postcode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartLookupsApi->searchPostcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postcode** | **string**| UK postcode to search for. Example: &#x60;SW1A 2AA&#x60; Can be with or without space. Case insensitive. | |

### Return type

[**\Vouchsafe\Model\PostcodeResponse**](../Model/PostcodeResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
