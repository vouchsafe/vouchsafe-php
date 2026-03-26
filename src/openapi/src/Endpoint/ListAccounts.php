<?php

namespace Vouchsafe\OpenAPI\Endpoint;

class ListAccounts extends \Vouchsafe\OpenAPI\Runtime\Client\BaseEndpoint implements \Vouchsafe\OpenAPI\Runtime\Client\Endpoint
{
    /**
     * List monitored accounts.
     *
     * Returns accounts that have ongoing AML/sanctions monitoring enabled,
     * with summary info including current alert status.
     *
     * Use cursor-based pagination to iterate through results.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param array{
     *    "status"?: string, //Filter by alert status
     *    "cursor"?: string, //Cursor for pagination (ID of last item from previous page)
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
        return '/alerts/accounts';
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
        $optionsResolver->setDefined(['status', 'cursor']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('status', ['string']);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vouchsafe\OpenAPI\Exception\ListAccountsUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\ListAccountsForbiddenException
     *
     * @return null|\Vouchsafe\OpenAPI\Model\ListAlertAccountsResponse
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ListAlertAccountsResponse', 'json');
        }
        if (is_null($contentType) === false && (401 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListAccountsUnauthorizedException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos(strtolower($contentType), 'application/json') !== false)) {
            throw new \Vouchsafe\OpenAPI\Exception\ListAccountsForbiddenException($serializer->deserialize($body, 'Vouchsafe\OpenAPI\Model\ApiErrorResponse', 'json'), $response);
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['bearerAuth'];
    }
}