<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class GetSession extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental:</strong> This feature is brand new. <a href="https://vouchsafe.id/contact">Contact us</a> to set it up.
     * </div>
     *
     * Get a Digital ID verification session by ID.
     *
     * Retrieve details of a specific Digital ID verification session.
     * Returns the session status, verified claims, enrichments (including Radar risk assessment
     * and smart lookup results), and other session metadata.
     *
     * The `enrichments` field will be `null` until the session reaches `completed` status.
     *
     * Returns a 404 error if the session does not exist or does not belong to your team.
     * @param string $id The unique identifier of the session
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
        return str_replace(['{id}'], [$this->id], '/digital-id/sessions/{id}');
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
     * @throws \Vouchsafe\OpenAPI\Exception\GetSessionUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetSessionNotFoundException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\DigitalIdSession
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\DigitalIdSession', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetSessionUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetSessionNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}