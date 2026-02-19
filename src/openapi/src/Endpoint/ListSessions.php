<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class ListSessions extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental:</strong> This feature is brand new. <a href="https://vouchsafe.id/contact">Contact us</a> to set it up.
     * </div>
     *
     * List Digital ID verification sessions.
     *
     * Retrieve a list of Digital ID verification sessions for your team.
     * You can filter sessions by flow, status, provider, or creation date.
     *
     * Each session includes verified claims and enrichments (Radar risk assessment and smart lookup results)
     * when available. The `enrichments` field will be `null` for sessions that haven't completed.
     *
     * Use pagination parameters (`limit` and `offset`) to page through large result sets.
     * @param array{
     *    "flow_id"?: string, //Filter by flow ID
     *    "status"?: string, //Filter by session status
     *    "provider_id"?: string, //Filter by provider ID
     *    "limit"?: float, //Maximum number of sessions to return
     *    "offset"?: float, //Number of sessions to skip (for pagination)
     *    "created_after"?: string, //Filter sessions created after this date (ISO 8601 format)
     *    "created_before"?: string, //Filter sessions created before this date (ISO 8601 format)
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/digital-id/sessions';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['flow_id', 'status', 'provider_id', 'limit', 'offset', 'created_after', 'created_before']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('flow_id', ['string']);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('provider_id', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['float']);
        $optionsResolver->addAllowedTypes('offset', ['float']);
        $optionsResolver->addAllowedTypes('created_after', ['string']);
        $optionsResolver->addAllowedTypes('created_before', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\ListSessionsBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\ListSessionsUnauthorizedException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\DigitalIdSession[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\DigitalIdSession[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListSessionsBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListSessionsUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}