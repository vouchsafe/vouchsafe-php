# Vouchsafe

## Usage

```php
<?php
require __DIR__ . '/vendor/autoload.php';

use Vouchsafe\VouchsafeClient;

$client = new VouchsafeClient([
  'client_id' => 'YOUR_CLIENT_ID',
  'client_secret' => 'YOUR_SANDBOX_SECRET',
]);

$foo = $client->listVerifications();

// Request a verification
$res = $client->requestVerification([
  'email' => 'foo@bar.com'
]);

echo $res->getId();
echo $res->getUrl();
```
