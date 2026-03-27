<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class GetAccountDetail extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Get full account detail.
     *
     * Returns the account's personal details, all alerts, and matched entities.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The account ID (SmartLookup ID)
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [$this->id], '/alerts/accounts/{id}');
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
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailNotFoundException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\AlertAccountDetailResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\AlertAccountDetailResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetAccountDetailUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetAccountDetailForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetAccountDetailNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}