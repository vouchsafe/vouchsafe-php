<?php
namespace Vouchsafe;

use DateTimeImmutable;

// Jane generated
use Vouchsafe\OpenAPI\Client as OpenApiClient;
use Vouchsafe\OpenAPI\Model\AuthenticateInput;

// Jane exceptions (specific per-endpoint)
use Vouchsafe\OpenAPI\Exception\AuthenticateUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\GetVerificationUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\ListVerificationsUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\RequestVerificationUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\PerformSmartLookupUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\SearchPostcodeUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\GetFlowUnauthorizedException;
use Vouchsafe\OpenAPI\Exception\ListFlowsUnauthorizedException;

final class VouchsafeApiError extends \RuntimeException
{
  /** @var int */
  public $statusCode;
  /** @var mixed */
  public $responseBody;

  public function __construct($statusCode, $responseBody, $message)
  {
    parent::__construct($message, (int) $statusCode);
    $this->statusCode = (int) $statusCode;
    $this->responseBody = $responseBody;
  }
}

final class VouchsafeClient
{
  private $clientId;
  private $clientSecret;
  private $baseUri = 'https://app.vouchsafe.id/api/v1';

  /** @var string|null */
  private $token = null;
  /** @var DateTimeImmutable|null */
  private $tokenExpiry = null;

  public function __construct(array $opts)
  {
    $this->clientId     = isset($opts['client_id']) ? (string) $opts['client_id'] : '';
    $this->clientSecret = isset($opts['client_secret']) ? (string) $opts['client_secret'] : '';

    if ($this->clientId === '' || $this->clientSecret === '') {
      throw new \InvalidArgumentException('client_id and client_secret are required');
    }
  }

  private function ensureAccessToken()
  {
    $now = new \DateTimeImmutable('now');
    $buffer = 300;

    if ($this->token && $this->tokenExpiry && $now->getTimestamp() < $this->tokenExpiry->getTimestamp() - $buffer) {
      return $this->token;
    }

    $clientNoAuth = OpenApiClientFactory::make($this->baseUri, null);

    $body = (new \Vouchsafe\OpenAPI\Model\AuthenticateInput())
      ->setClientId($this->clientId)
      ->setClientSecret($this->clientSecret);

    $response = $clientNoAuth->authenticate($body, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);

    $status = $response->getStatusCode();
    $raw    = (string) $response->getBody();
    $json   = json_decode($raw, true);

    if ($status < 200 || $status >= 300) {
      throw new VouchsafeApiError($status, $json, $json['message'] ?? 'Authentication failed');
    }

    $accessToken = $json['access_token'] ?? null;
    $expiresAt   = $json['expires_at'] ?? null;

    if (!$accessToken || !$expiresAt) {
      throw new \RuntimeException('Authentication response missing access_token or expires_at');
    }

    $this->token       = (string) $accessToken;
    $this->tokenExpiry = new \DateTimeImmutable((string) $expiresAt);

    return $this->token;
  }

  private function withErrorHandling($fn)
  {
    try {
      $this->ensureAccessToken();
      return $fn();
    } catch (\Throwable $e) {
      if ($this->isUnauthorizedException($e)) {
        $this->token = null;
        $this->tokenExpiry = null;
        $this->ensureAccessToken();
        return $fn();
      }

      $status = method_exists($e, 'getResponse') && $e->getResponse()
        ? (int) $e->getResponse()->getStatusCode()
        : ((int) $e->getCode() ?: 500);

      $body = method_exists($e, 'getError') ? $e->getError() : null;

      throw new VouchsafeApiError($status, $body, $e->getMessage());
    }
  }

  private function isUnauthorizedException($e)
  {
    return $e instanceof AuthenticateUnauthorizedException
      || $e instanceof GetVerificationUnauthorizedException
      || $e instanceof ListVerificationsUnauthorizedException
      || $e instanceof RequestVerificationUnauthorizedException
      || $e instanceof PerformSmartLookupUnauthorizedException
      || $e instanceof SearchPostcodeUnauthorizedException
      || $e instanceof GetFlowUnauthorizedException
      || $e instanceof ListFlowsUnauthorizedException;
  }

  private function authedClient()
  {
    return OpenApiClientFactory::make($this->baseUri, $this->token);
  }

  private function decodeResponse($response)
  {
    $raw = (string) $response->getBody();
    return json_decode($raw, true);
  }

  /**
   * Populate a Jane model from a camelCase input array.
   * Calls set{Key}() for each key present in $input.
   * For nested arrays, pass a $nestedModels map of key => class.
   */
  private function hydrateModel($model, array $input, array $nestedModels = [])
  {
    foreach ($input as $key => $value) {
      // Convert snake_case key to camelCase (keys only, values untouched)
      $camelKey = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));

      if (isset($nestedModels[$camelKey]) && is_array($value)) {
        $nestedClass = $nestedModels[$camelKey];
        $value = $this->hydrateModel(new $nestedClass(), $value);
      }
      $setter = 'set' . ucfirst($camelKey);
      if (method_exists($model, $setter)) {
        $model->$setter($value);
      }
    }
    return $model;
  }

  // PUBLIC API

  public function getVerification(array $args)
  {
    $id = isset($args['id']) ? (string) $args['id'] : '';
    return $this->withErrorHandling(function () use ($id) {
      $response = $this->authedClient()->getVerification($id, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function listVerifications(array $args = [])
  {
    $queryParameters = isset($args['status']) ? ['status' => $args['status']] : [];
    return $this->withErrorHandling(function () use ($queryParameters) {
      $response = $this->authedClient()->listVerifications($queryParameters, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function requestVerification(array $input)
  {
    return $this->withErrorHandling(function () use ($input) {
      $body = $this->hydrateModel(new \Vouchsafe\OpenAPI\Model\RequestVerificationInput(), $input);
      $response = $this->authedClient()->requestVerification($body, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function performSmartLookup(array $input)
  {
    return $this->withErrorHandling(function () use ($input) {
      $body = $this->hydrateModel(
        new \Vouchsafe\OpenAPI\Model\SmartLookupInput(),
        $input,
        ['thresholds' => \Vouchsafe\OpenAPI\Model\SmartLookupInputThresholds::class]
      );
      $response = $this->authedClient()->performSmartLookup($body, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function searchPostcode(array $args)
  {
    $postcode = isset($args['postcode']) ? (string) $args['postcode'] : '';
    return $this->withErrorHandling(function () use ($postcode) {
      $response = $this->authedClient()->searchPostcode(['postcode' => $postcode], \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function getFlow(array $args)
  {
    $id = isset($args['id']) ? (string) $args['id'] : '';
    return $this->withErrorHandling(function () use ($id) {
      $response = $this->authedClient()->getFlow($id, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function listFlows()
  {
    return $this->withErrorHandling(function () {
      $response = $this->authedClient()->listFlows(\Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function getArtefact(array $args)
  {
    $artefactKey = isset($args['artefact_key']) ? (string) $args['artefact_key'] : '';
    return $this->withErrorHandling(function () use ($artefactKey) {
      $response = $this->authedClient()->getArtefact($artefactKey, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  /**
   * Verify a UK eVisa using a Home Office share code.
   *
   * Supported subTypes: ImmigrationStatus, RightToWork, RightToRent
   *
   * Example:
   * $client->verifyEvisa([
   *   'subType' => 'ImmigrationStatus',
   *   'payload' => [
   *     'reason'      => 'Education or training',
   *     'jobTitle'    => 'Software Engineer',
   *     'companyName' => 'Acme Ltd',
   *     'dateOfBirth' => '1996-01-01',
   *     'shareCode'   => 'PASS12345',
   *   ]
   * ]);
   */
 public function verifyEvisa(array $input)
  {
    return $this->withErrorHandling(function () use ($input) {
      $subType = $input['sub_type'] ?? $input['subType'] ?? '';

      $payloadClassMap = [
        'ImmigrationStatus' => \Vouchsafe\OpenAPI\Model\ImmigrationStatusInputPayload::class,
        'RightToWork'       => \Vouchsafe\OpenAPI\Model\RightToWorkInputPayload::class,
        'RightToRent'       => \Vouchsafe\OpenAPI\Model\RightToRentInputPayload::class,
      ];

      $bodyClassMap = [
        'ImmigrationStatus' => \Vouchsafe\OpenAPI\Model\ImmigrationStatusInput::class,
        'RightToWork'       => \Vouchsafe\OpenAPI\Model\RightToWorkInput::class,
        'RightToRent'       => \Vouchsafe\OpenAPI\Model\RightToRentInput::class,
      ];

      if (!isset($bodyClassMap[$subType])) {
        throw new \InvalidArgumentException("Unknown eVisa subType: $subType");
      }

      $body = $this->hydrateModel(
        new $bodyClassMap[$subType](),
        $input,
        ['payload' => $payloadClassMap[$subType]]
      );

      $response = $this->authedClient()->verifyEvisa($body, \Vouchsafe\OpenAPI\Client::FETCH_RESPONSE);
      return $this->decodeResponse($response);
    });
  }

  public function verifySupportingDocument(array $input)
  {
      return $this->withErrorHandling(function () use ($input) {
          $filePath = $input['filePath'] ?? null;

          if (!$filePath || !file_exists($filePath)) {
              throw new \InvalidArgumentException('filePath is required and must exist');
          }

          $multipart = [
              [
                  'name'     => 'document',
                  'contents' => fopen($filePath, 'r'),
                  'filename' => basename($filePath),
              ],
              [
                  'name'     => 'sub_type',
                  'contents' => $input['sub_type'] ?? $input['subType'] ?? '',
              ],
          ];

          if (isset($input['minimum_document_length']) || isset($input['minimumDocumentLength'])) {
              $multipart[] = [
                  'name'     => 'minimum_document_length',
                  'contents' => (string) ($input['minimum_document_length'] ?? $input['minimumDocumentLength']),
              ];
          }

          $httpClient = new \GuzzleHttp\Client(['verify' => false]);
          $response = $httpClient->post($this->baseUri . '/verify/supporting-documents', [
              'headers'   => ['Authorization' => 'Bearer ' . $this->token],
              'multipart' => $multipart,
          ]);

          return json_decode((string) $response->getBody(), true);
      });
  }
}
