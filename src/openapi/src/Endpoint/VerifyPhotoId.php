<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class VerifyPhotoId extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * This endpoint extracts details from a photo ID, validates the fields, and optionally matches the document photo to a face scan.
     *
     * You provide:
     * - `sub_type` (required) - must be one of:
     *    - `Passport`
     *    - `NationalId` (MRZ-enabled IDs only)
     *    - `DrivingLicence` (GB and EU countries)
     *    - `PASSCard` (including Citizencard and Young Scot)
     *    - `UnfamiliarPhotoId`
     * - `front` (required) - the front of the photo ID document.
     * - `back` (`NationalId` only) - the back of the photo ID document.
     * - `country_code` (`DrivingLicence` only) - the issuing country as an ISO 3166-1 alpha-2 (e.g. `GB`, `DE`, `FR`).
     * - `face_scan` (optional) - a face image to compare with the photo on the document.
     *
     * > **File requirements:** Max 10MB per file; JPEG or PNG only.
     *
     * > **Sandbox testing:** In sandbox mode, the endpoint returns a mock “pass” response. It echoes back your reference values. It does not process the document.
     * @param \Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody $requestBody
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody $requestBody)
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
        return '/verify/photo-id';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
                if (is_array($value)) {
                    $value = $serializer->serialize($value, 'json');
                }
                $bodyBuilder->addResource($key, $value);
            }
            return [['Content-Type' => ['multipart/form-data; boundary="' . ($bodyBuilder->getBoundary() . '"')]], $bodyBuilder->build()];
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
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdNotImplementedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdServiceUnavailableException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnprocessableEntityException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (501 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdNotImplementedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdServiceUnavailableException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}