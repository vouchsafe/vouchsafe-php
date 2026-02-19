<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class RequestVerification extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * Request a new verification.
     *
     * Provide the user's email and the ID of one of your verification flows to send them through.
     *
     * Vouchsafe will respond with:
     *
     * - a URL to redirect to the user to
     * - a unique ID for you to track the verification
     *
     * If you have enabled "On request creation" emails in your flow, this also sends them an email.
     *
     * You can optionally provide more information/claims about the user, like their name, date of birth and address. Any that are provided will be checked against evidence the user gives.
     *
     * If you do provide additional information about your user, you should let them know the information you are expecting them to verify. This helps prevent users getting stuck when the evidence they have does not match what you have provided.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\RequestVerificationInput $requestBody
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\RequestVerificationInput $requestBody)
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
        return '/verifications';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\RequestVerificationInput) {
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
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationForbiddenException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\RequestVerificationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\RequestVerificationResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\RequestVerificationBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\RequestVerificationUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\RequestVerificationForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}