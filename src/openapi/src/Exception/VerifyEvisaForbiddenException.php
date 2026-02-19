<?php

namespace Vouchsafe\OpenAPI\Exception;

class VerifyEvisaForbiddenException extends ForbiddenException
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
        parent::__construct('Trial expired or feature not available on your plan');
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