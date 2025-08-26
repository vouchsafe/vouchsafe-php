<?php
// Compatible with PHP 7.2.5+ (no typed properties, no arrow functions)
namespace Vouchsafe;

use DateTimeImmutable;
use Vouchsafe\OpenAPI\Configuration;
use Vouchsafe\OpenAPI\ApiException;
use Vouchsafe\OpenAPI\Api\AuthenticationApi;
use Vouchsafe\OpenAPI\Api\VerificationsApi;
use Vouchsafe\OpenAPI\Api\SmartLookupsApi;
use Vouchsafe\OpenAPI\Model\AuthenticateInput;

final class VouchsafeApiError extends \RuntimeException
{
  /** @var int */
  public $statusCode;
  /** @var mixed */
  public $responseBody;

  /**
   * @param int $statusCode
   * @param mixed $responseBody
   * @param string $message
   */
  public function __construct($statusCode, $responseBody, $message)
  {
    parent::__construct($message, (int)$statusCode);
    $this->statusCode = (int)$statusCode;
    $this->responseBody = $responseBody;
  }
}

final class VouchsafeClient
{
  /** @var string */
  private $clientId;
  /** @var string */
  private $clientSecret;
  /** @var string */
  private $basePath = 'https://app.vouchsafe.id/api/v1';

  /** @var Configuration */
  private $config;

  /** @var AuthenticationApi */
  private $authenticationApi;
  /** @var VerificationsApi */
  private $verificationsApi;
  /** @var SmartLookupsApi */
  private $smartLookupsApi;

  /** @var string|null */
  private $token = null;
  /** @var DateTimeImmutable|null */
  private $tokenExpiry = null;

  /**
   * @param array $opts ['client_id' => string, 'client_secret' => string]
   */
  public function __construct(array $opts)
  {
    $this->clientId     = isset($opts['client_id']) ? (string)$opts['client_id'] : '';
    $this->clientSecret = isset($opts['client_secret']) ? (string)$opts['client_secret'] : '';
    if ($this->clientId === '' || $this->clientSecret === '') {
      throw new \InvalidArgumentException('client_id and client_secret are required');
    }

    $this->config = Configuration::getDefaultConfiguration()->setHost($this->basePath);

    $this->authenticationApi = new AuthenticationApi(null, $this->config);
    $this->verificationsApi  = new VerificationsApi(null, $this->config);
    $this->smartLookupsApi   = new SmartLookupsApi(null, $this->config);
  }

  /** Ensure we have a valid bearer token on the config. @return string */
  private function ensureAccessToken()
  {
    $now = new DateTimeImmutable('now');
    $buffer = 300; // 5 minutes

    if ($this->token && $this->tokenExpiry && $now->getTimestamp() < $this->tokenExpiry->getTimestamp() - $buffer) {
      return $this->token;
    }

    $body = new AuthenticateInput([
      'client_id'     => $this->clientId,
      'client_secret' => $this->clientSecret,
    ]);

    $resp = $this->authenticationApi->authenticate($body);

    $accessToken = method_exists($resp, 'getAccessToken') ? $resp->getAccessToken() : (is_array($resp) ? ($resp['access_token'] ?? null) : null);
    $expiresAt   = method_exists($resp, 'getExpiresAt') ? $resp->getExpiresAt() : (is_array($resp) ? ($resp['expires_at'] ?? null) : null);

    if (!$accessToken || !$expiresAt) {
      throw new \RuntimeException('Authentication response missing access_token or expires_at');
    }

    $this->token = (string)$accessToken;
    $this->tokenExpiry = new DateTimeImmutable((string)$expiresAt);

    $this->config->setAccessToken($this->token);
    return $this->token;
  }

  /** Execute callable with auth + one 401 retry; normalize errors. */
  private function withErrorHandling($fn)
  {
    try {
      $this->ensureAccessToken();
      return $fn();
    } catch (ApiException $e) {
      if ($e->getCode() === 401) {
        // force refresh once
        $this->token = null;
        $this->tokenExpiry = null;
        $this->ensureAccessToken();
        return $fn();
      }

      $body = $e->getResponseBody();
      $msg  = (is_object($body) && isset($body->message)) ? (string)$body->message
        : (is_string($body) ? $body : $e->getMessage());

      throw new VouchsafeApiError((int)$e->getCode(), $body, $msg);
    }
  }

  /** High-level methods (Node parity) */

  public function getVerification(array $args)
  {
    $id = isset($args['id']) ? (string)$args['id'] : '';
    return $this->withErrorHandling(function () use ($id) {
      return $this->verificationsApi->getVerification($id);
    });
  }

  public function listVerifications(array $args = [])
  {
    $status = isset($args['status']) ? $args['status'] : null;
    return $this->withErrorHandling(function () use ($status) {
      return $this->verificationsApi->listVerifications($status);
    });
  }

  public function requestVerification(array $input)
  {
    // If your generated method expects a model wrapper, wrap here:
    // $body = new \Vouchsafe\OpenAPI\Model\RequestVerificationInput($input);
    return $this->withErrorHandling(function () use ($input) {
      return $this->verificationsApi->requestVerification($input);
    });
  }

  public function performSmartLookup(array $input)
  {
    return $this->withErrorHandling(function () use ($input) {
      return $this->smartLookupsApi->performSmartLookup($input);
    });
  }

  public function searchPostcode(array $args)
  {
    $postcode = isset($args['postcode']) ? (string)$args['postcode'] : '';
    return $this->withErrorHandling(function () use ($postcode) {
      return $this->smartLookupsApi->searchPostcode($postcode);
    });
  }
}
