<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class CreateTeam extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * Create a new team (Partners only).
     *
     * Creates a new team with the specified configuration and admin users.
     *
     * Vouchsafe will respond with:
     *
     * - a unique team ID for tracking
     * - the team name and public-facing name
     * - client credentials to authenticate team API requests
     * - creation timestamp (ISO 8601 format)
     *
     * The provided admin emails will be granted administrative access to manage the team's settings and workflows.
     *
     * **Note:** This endpoint requires a valid partner token in the `X-Partner-Token` header.
     * @param \Vouchsafe\OpenAPI\Model\CreateTeamInput $requestBody
     * @param array{
     *    "X-Partner-Token": string,
     * } $headerParameters
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\CreateTeamInput $requestBody, array $headerParameters = [])
    {
        $this->body = $requestBody;
        $this->headerParameters = $headerParameters;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/team';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\CreateTeamInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getHeadersOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['X-Partner-Token']);
        $optionsResolver->setRequired(['X-Partner-Token']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('X-Partner-Token', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\CreateTeamBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\CreateTeamUnauthorizedException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\CreateTeamResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\CreateTeamResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CreateTeamBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CreateTeamUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return [];
    }
}