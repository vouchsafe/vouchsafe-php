<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class GetVerification extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    protected $id;
    /**
     * Get a single verification by ID.
     *
     * Returns the latest status, claim details and results for a verification you previously requested.
     *
     * Vouchsafe will respond with:
     *
     * - the verification status and timestamps
     * - the identity claim details (e.g. name, email, phone number)
     * - the list of checks performed (e.g. liveness, photo ID, email verification) including outcomes and validations
     * - results of any background checks (e.g. radar, online footprint analysis, aml sanctions)
     *
     * #### Downloading files (artefacts)
     *
     * Some checks may include an `artefacts` array (for example: face scan or document images).
     * For security reasons, the verification response only contains an `artefact key` — not the file itself.
     *
     * To download an artefact, use:
     *
     * - `GET /artefacts/{artefact_key}`
     *
     * This returns a **time-limited pre-signed URL** which can be used to download the file.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The verification ID returned when you requested it.
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
        return str_replace(['{id}'], [$this->id], '/verifications/{id}');
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
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationNotFoundException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\GetVerificationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\GetVerificationResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetVerificationBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetVerificationUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\GetVerificationNotFoundException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}