<?php
require __DIR__ . '/vendor/autoload.php';

use Vouchsafe\Api\VerificationsApi;
use Vouchsafe\Configuration;

$config = Configuration::getDefaultConfiguration()
  ->setHost('https://app.vouchsafe.id');

$api = new VerificationsApi(null, $config);

echo "Client generated successfully!\n";
