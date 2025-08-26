<?php
require __DIR__ . '/vendor/autoload.php';

use Vouchsafe\VouchsafeClient;

$client = new VouchsafeClient([
  'client_id' => 'cmdg311tj0007kx5e2t9r88vz',
  'client_secret' => 'sandbox-6b20b53f-a7d9-4acb-8a74-e56c775f3d48',
]);

$foo = $client->listVerifications();

// Request a verification (adjust fields to match your spec)
$res = $client->requestVerification([
  'email' => 'foo@bar.com'
]);

echo $res->getId();
echo $res->getUrl();
