# Vouchsafe PHP

The Vouchsafe PHP library provides convenient, typed access to the Vouchsafe API for applications written in PHP.

## Requirements

PHP 7.2.5 or better.

## Installation

```
composer require vouchsafe/vouchsafe-php
```

## Usage

The SDK needs a client ID and secret, which is available in the [Vouchsafe dashboard](https://app.vouchsafe.id). Replace the values below:

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Vouchsafe\VouchsafeClient;

$client = new VouchsafeClient([
  'client_id' => 'YOUR_CLIENT_ID',
  'client_secret' => 'YOUR_SANDBOX_SECRET',
]);

// Request a verification
$res = $client->requestVerification([
  'email' => 'foo@bar.com'
]);

echo $res->getId();
echo $res->getUrl();
```

### List verifications

```php
$list = $client->listVerifications(['status' => 'InProgress']);
```

### Get a specific verification

```php
$verification = $client->getVerification(['id' => 'abc123']);
```

### Sandbox mode

Use a sandbox rather than a live client secret to activate [sandbox mode](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work) on methods that support it.

### Re-authentication

The client will automatically cache your access token and insert it into every request, and fetch a new one upon expiry.

If a request fails with a 401 Unauthorised error, it will fetch a new access token and retry once before throwing an error.

### Use one client instance

For best performance, you should create one client per request/process.

The client caches the access token in memory for the life of that process.

Each time a new access token is requested using the same client credentials, it invalidates the old one.

Having multiple clients sharing the same credentials can lead to:

- over-writing each other's tokens
- unnecessary retries and re-authentications.

For high-concurrency use cases, you should store the access token in a shared key-value store instead.

### Handling errors

Wrapper methods throw `Vouchsafe\VouchsafeApiError` on non-2xx responses.

It includes the HTTP status code and the error body:

```php
try {
  $res = $client->getVerification(['id' => 'non-existent']);
} catch (\Vouchsafe\VouchsafeApiError $e) {
  echo $e->statusCode . ' ' . $e->getMessage();
}
```

## Development

**[See the contribution guidelines for this project](https://github.com/vouchsafe/vouchsafe-php/blob/main/CONTRIBUTING.md)**

Contributions including issues and pull requests are welcome.

To run the project locally, clone the repo and run:

```bash
composer install
make generate # regenerate the OpenAPI files from spec
```

## Further reading

- [Developer docs](https://help.vouchsafe.id/en/collections/12439003-developers)
- [Full API endpoint reference](https://app.vouchsafe.id/docs)
- [3-minute video guide](https://www.youtube.com/playlist?list=PLx6V6SSTMuF_ZNWBPnysvwmdIwboLViE8)
