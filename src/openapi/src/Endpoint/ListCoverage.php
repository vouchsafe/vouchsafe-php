<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class ListCoverage extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * Get the digital ID schemes, photo IDs, supporting documents and trusted data sources Vouchsafe covers, optionally filtered by country and/or type.
     *
     * Each item is listed once, with every jurisdiction it applies to in `country_codes`. Items that apply everywhere (e.g. passports, or supporting documents which aren't restricted by country) have an empty `country_codes` array.
     *
     * DIGITAL_ID includes Trinsic's full provider catalog, not just the providers Vouchsafe has a working verification flow for — `id` is `null` for anything that can't be submitted anywhere today.
     * @param array{
     *    "country_code"?: string, //Two-letter country code (ISO 3166-1 alpha-2) to filter by, e.g. `GB`. Case insensitive. Omit to see worldwide coverage.
     *    "type"?: string, //Evidence type to filter by. Omit to return all types.
     * } $queryParameters
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Vouchsafe\OpenAPI\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/coverage';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['country_code', 'type']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('country_code', ['string']);
        $optionsResolver->addAllowedTypes('type', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\ListCoverageBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\ListCoverageUnauthorizedException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\CoverageItem[]
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\CoverageItem[]', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListCoverageBadRequestException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListCoverageUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}