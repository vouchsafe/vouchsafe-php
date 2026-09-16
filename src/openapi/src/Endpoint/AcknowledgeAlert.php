<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class AcknowledgeAlert extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $alertId;
    /**
     * Marks an alert as acknowledged.
     *
     * The acknowledgement will be attributed to the name of the API key used to make the request.
     *
     * This action is idempotent. Calling it on an already-acknowledged alert
     * returns the original acknowledgement timestamp.
     *
     * The alert ID can be found in the webhook notification payload (`alertId`),
     * or by calling `GET /v1/alerts/accounts/{id}` and reading the `id` field
     * on an alert in the response.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://docs.vouchsafe.id/sandbox).
     * @param string $alertId The alert ID
     */
    public function __construct(string $alertId)
    {
        $this->alertId = $alertId;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{alertId}'], [rawurlencode($this->alertId)], '/alerts/{alertId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertNotFoundException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\AcknowledgeAlertResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\AcknowledgeAlertResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\AcknowledgeAlertNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}