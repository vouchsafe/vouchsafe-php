<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class CreateSession extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental:</strong> This feature is brand new. <a href="https://vouchsafe.id/contact">Contact us</a> to set it up.
     * </div>
     *
     * Create a new Digital ID verification session.
     *
     * This endpoint initiates a new identity verification session using Digital ID providers.
     * The session will generate a unique URL that can be used to start the verification flow.
     *
     * You can optionally provide known claims about the user (e.g., their email, name, date of birth)
     * to pre-populate the verification form and improve the user experience.
     *
     * The session will expire after a set period if not completed.
     * @param \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput $requestBody
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/digital-id/sessions';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\CreateSessionBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\CreateSessionUnauthorizedException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CreateSessionBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CreateSessionUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}