<?php

namespace Vouchsafe\OpenAPI\Exception;

class SearchPostcodeBadRequestException extends BadRequestException
{
    /**
     * @var \Vouchsafe\OpenAPI\Model\ApiErrorResponse
     */
    private $apiErrorResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vouchsafe\OpenAPI\Model\ApiErrorResponse $apiErrorResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Malformed or non-existent postcode');
        $this->apiErrorResponse = $apiErrorResponse;
        $this->response = $response;
    }
    public function getApiErrorResponse(): \Vouchsafe\OpenAPI\Model\ApiErrorResponse
    {
        return $this->apiErrorResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}