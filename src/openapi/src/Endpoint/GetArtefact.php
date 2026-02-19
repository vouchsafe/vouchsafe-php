<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class GetArtefact extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $artefact_key;
    /**
     * Get an artefact download link.
     *
     * For security reasons, other endpoints (e.g. `GET /verifications/{id}`) may return only an `artefact_key`.
     * Use this endpoint to exchange that key for a **time-limited pre-signed URL** that can be used
     * to download the file.
     *
     * Vouchsafe will respond with:
     * - the requested `artefact_key`
     * - a `download_url` (pre-signed and time-limited)
     * - an `expires_at` timestamp (ISO 8601, UTC)
     *
     * **Note:** The `download_url` will stop working after `expires_at`.
     * If it expires, request a new URL using this endpoint.
     * @param string $artefactKey
     */
    public function __construct(string $artefactKey)
    {
        $this->artefact_key = $artefactKey;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{artefact_key}'], [$this->artefact_key], '/artefacts/{artefact_key}');
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
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactNotFoundException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\GetArtefactsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\GetArtefactsResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetArtefactBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetArtefactUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetArtefactNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}