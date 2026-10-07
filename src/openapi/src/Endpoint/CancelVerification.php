<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class CancelVerification extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Cancel an in progress verification.
     *
     * Only verifications with a status of `InProgress` can be cancelled. Any other status returns a `409`.
     *
     * Once cancelled, requesting a verification for the same email and flow creates a new verification.
     *
     * In sandbox mode, you can call this endpoint to see the response for each sandbox verification account. The request does not persist any changes, so the sample verification retains its original status.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://docs.vouchsafe.id/sandbox).
     * @param string $id The verification ID returned when you requested it.
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{id}'], [rawurlencode($this->id)], '/verifications/{id}/cancel');
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
     * @throws \Vouchsafe\OpenAPI\Exception\CancelVerificationUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\CancelVerificationNotFoundException
     * @throws \Vouchsafe\OpenAPI\Exception\CancelVerificationConflictException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\GetVerificationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\GetVerificationResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CancelVerificationUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CancelVerificationNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (409 === $status && stripos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\CancelVerificationConflictException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}