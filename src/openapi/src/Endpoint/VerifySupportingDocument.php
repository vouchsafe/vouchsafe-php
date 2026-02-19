<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class VerifySupportingDocument extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Extract and validate a supporting document.
     *
     * This endpoint accepts a document file (PDF, JPG, or PNG) and extracts personal identity information and address details.
     *
     * **Request format:** This endpoint accepts `multipart/form-data` with:
     * - `document` - The document file (PDF, JPG, or PNG, max 10MB)
     * - `sub_type` (required) - The type of document (e.g., `BankStatement`, `UtilityBill`). See "Supported document types" below.
     * - `minimum_document_length` (optional) - Minimum document age in months. Documents older than this will fail the `document_age_valid` check.
     *
     * **Supported document types (`sub_type`):**
     * - `Payslip` - Employment payslips
     * - `PensionAnnualStatement` - Pension statements
     * - `BenefitsLetter` - Government benefits letters
     * - `HMPPSLetter` - Probation service letters
     * - `NHSLetter` - NHS correspondence
     * - `BankStatement` - Bank account statements
     * - `CreditCardStatement` - Credit card statements
     * - `MortgageStatement` - Mortgage statements
     * - `UtilityBill` - Gas, electricity, water bills
     * - `MobilePhoneBill` - Mobile phone bills
     *
     * **Validations performed:**
     * - `required_fields_extracted` - Key identity fields were successfully extracted. These are: `first_name`, `last_name`, `first_line_of_address` and `postcode`
     * - `category_match` - Document matches the specified sub_type
     * - `document_age_valid` - Document is within acceptable age range (only if `minimum_document_length` provided)
     * - `document_complete_and_legible` - Document is complete and readable
     * - `tampering_signals_check` - No signs of document tampering detected
     *
     * Sandbox testing:
     * In sandbox mode, the endpoint returns a mock "pass" response with sandbox values. No actual document processing occurs.
     *
     * > **Request behaviour:** This is a synchronous endpoint. Processing typically takes 5-15 seconds
     * > depending on document complexity.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody $requestBody
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody $requestBody)
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
        return '/verify/supporting-documents';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody) {
            $bodyBuilder = new \Http\Message\MultipartStream\MultipartStreamBuilder($streamFactory);
            $formParameters = $serializer->normalize($this->body, 'json');
            foreach ($formParameters as $key => $value) {
                $value = is_int($value) ? (string) $value : $value;
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
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentServiceUnavailableException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnprocessableEntityException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (503 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentServiceUnavailableException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}