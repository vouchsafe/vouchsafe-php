<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class VerifyEvisa extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Verify a person's UK eVisa using their Home Office share code.
     *
     * This endpoint allows you to verify a person's `immigration status`, `right to work`, or `right to rent` eVisa
     * by providing their share code and date of birth. The share code is obtained by
     * the individual from the UK Home Office online service.
     *
     * **Supported verification types:**
     * - `ImmigrationStatus` - Check a person's immigration status (e.g., Settled, Skilled Worker, Youth Mobility Scheme)
     * - `RightToWork` - Check a person's right to work in the UK
     * - `RightToRent` - Check a person's right to rent property in the UK
     *
     * > **Request behaviour:** This is a synchronous endpoint. It can take up to 20 seconds.
     *
     * **Response fields by sub-type:**
     * The response fields directly reflect the information available on a particular eVisa sub-type.
     * On a `pass` outcome, all fields for the sub-type will be populated. On a `fail` outcome, `extracted_details` may be partially populated or empty depending on which validation step failed.
     *
     * **Response summary:**
     * | HTTP Status | Meaning | Action |
     * |-------------|---------|--------|
     * | `200` | Verification completed | Check the `outcome` field to determine if the verification was successful |
     * | `422` | Share code locked out by GOV.UK | Retry with a new share code |
     * | `503` | Service temporarily unavailable | Retry with exponential backoff |
     *
     * **Billing:**
     * An API call is billable when the eVisa was found on GOV.UK, regardless of whether the verification
     * outcome is `pass` or `fail`. If the `share_code` or `date_of_birth` is invalid and no eVisa can be
     * retrieved, the response will have `billable: false` and you will not be charged.
     * Error responses (`HTTP 422`, `HTTP 503`) are also not billable and return an Error response body.
     *
     * **Artefacts:**
     * On a successful response, artefacts are returned inline with pre-signed download URLs.
     * You have **30 minutes** to download them before the URLs expire.
     *
     *
     * **Sandbox testing:**
     * Use these share codes in sandbox mode to test different outcomes:
     * - `PASS12345` - Returns a successful verification with "Pass" outcome
     * - `FAIL12345` - Returns a failed verification (e.g. expired status)
     * - `ERROR1234` - Returns an error response
     * - `BADCODE12` - Returns a non-billable failed verification (e.g. invalid share code)
     * - `WRONGDOB1` - Returns a non-billable failed verification (e.g. wrong date of birth)
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param mixed $requestBody
     */
    public function __construct($requestBody)
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
        return '/verify/evisa';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if (isset($this->body)) {
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
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaServiceUnavailableException
     *
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return json_decode($body);
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyEvisaBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyEvisaForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnprocessableEntityException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyEvisaServiceUnavailableException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}