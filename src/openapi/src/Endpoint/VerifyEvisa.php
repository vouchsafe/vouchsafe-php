<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class VerifyEvisa extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
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
     * **Response summary:**
     * | HTTP Status | Meaning | Action |
     * |-------------|---------|--------|
     * | `200` | Verification completed | Check the `outcome` field (`pass`, `fail`, or `inconclusive`) |
     * | `422` | Share code locked out by GOV.UK | Retry with a new share code |
     * | `503` | Service temporarily unavailable | Retry with exponential backoff |
     *
     * **Billing:**
     * An API call is billable when the eVisa was found on GOV.UK, regardless of whether the verification
     * outcome is `pass`, `fail`, or `inconclusive`. If the `share_code` or `date_of_birth` is invalid and no eVisa can be
     * retrieved, the response will have `billable: false` and you will not be charged.
     * Error responses (`HTTP 422`, `HTTP 503`) are also not billable and return an Error response body.
     *
     * **Artefacts:**
     * On a successful response, artefacts are returned inline with pre-signed download URLs.
     * You have **30 minutes** to download them before the URLs expire.
     *
     *
     * **Sandbox testing:**
     * Use these share codes in [sandbox mode](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work) to test different outcomes:
     * - `PASS12345` - Returns a successful verification with "Pass" outcome
     * - `FAIL12345` - Returns a failed verification (e.g. expired status)
     * - `INC123456` - Returns an inconclusive verification (unrecognised indefinite immigration status)
     * - `ERROR1234` - Returns an error response
     * - `BADCODE12` - Returns a non-billable failed verification (e.g. invalid share code)
     * - `WRONGDOB1` - Returns a non-billable failed verification (e.g. wrong date of birth)
     * **Response fields by outcome:**
     * - `pass`: all fields for the sub-type will be populated.
     * - `fail`: `extracted_details` may be partially populated or empty depending on which validation step failed.
     * - `inconclusive`: all identity fields are populated but date-based validations could not be performed.
     *
     * **Inconclusive outcome (`ImmigrationStatus` only):**
     * Some immigration statuses are indefinite (i.e. they have no expiry date or start date on GOV.UK) but are not yet on our recognised list. In this case the eVisa is successfully retrieved and all identity details are returned, but the date validations (`evisa_started`, `evisa_not_expired`) cannot be performed. The response will have:
     * - `outcome: "inconclusive"`
     * - `evisa_started` and `evisa_not_expired` both with `status: "inconclusive"` and `failed_reasons: ["UNRECOGNISED_INDEFINITE_STATUS"]`
     * - `expiration_date: null` and `valid_from: null` in `extracted_details`
     *
     * **eVisa conditions:**
     * > This feature is experimental and only available for `RightToWork` eVisas.
     * The `evisa_conditions` object (within the `extracted_details` object) contains certain employment conditions extracted
     * verbatim from the eVisa text or `null` if that condition could not be extracted from the eVisa.
     *
     * Always check `extraction_success` before using the object:
     * - **`true`**: conditions were successfully extracted — each non-null value is a verbatim quote from the eVisa
     * - **`false`**: extraction could not be performed — manually review the conditions on the eVisa
     *
     * **Available fields:**
     *
     * - `max_weekly_hours` (string | null): verbatim phrase stating a limit on weekly working hours, or `null` if uncapped.
     *   Covers both primary job caps (e.g. student term-time limit) and additional part-time caps (e.g. sponsored workers).
     *
     * - `no_self_employment` (string | null): verbatim phrase prohibiting running a business or being self-employed,
     *   or `null` if no such prohibition is stated.
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