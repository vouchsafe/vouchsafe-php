<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class PerformAdverseMediaCheck extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This is a new endpoint. The interface or behaviour may change without notice.
     * </div>
     *
     * Screen an individual against recent news coverage for adverse or negative reporting.
     *
     * Each article returned by the search is scored from 0–100 for the severity of its content by our AI screening model. Articles at or above the threshold are returned as `strong_matches` and cause the overall `status` to be `FAIL`.
     *
     * All articles found are also returned in `all_results` for audit purposes, including those that scored below the threshold.
     *
     * Providing a `location` is strongly recommended: it significantly improves search precision and reduces false positives for common names.
     * @param \Vouchsafe\OpenAPI\Model\AdverseMediaInput $requestBody
     */
    public function __construct(\Vouchsafe\OpenAPI\Model\AdverseMediaInput $requestBody)
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
        return '/adverse-media';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vouchsafe\OpenAPI\Model\AdverseMediaInput) {
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
     * @throws \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckUnauthorizedException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\AdverseMediaResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\AdverseMediaResponse', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}