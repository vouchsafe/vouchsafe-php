# Vouchsafe PHP

The Vouchsafe Node library provides convenient, typed access to the Vouchsafe API for applications written in server-side JavaScript.

## Requirements

PHP 7 or better.

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

## Further reading

- [Developer docs](https://help.vouchsafe.id/en/collections/12439003-developers)
- [Full API endpoint reference](https://app.vouchsafe.id/docs)
- [3-minute video guide](https://www.youtube.com/playlist?list=PLx6V6SSTMuF_ZNWBPnysvwmdIwboLViE8)
