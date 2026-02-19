<?php

namespace Vouchsafe\OpenAPI\Exception;

class RequestVerificationForbiddenException extends ForbiddenException
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
        parent::__construct('Your trial has expired. Please upgrade to a paid plan to continue using Vouchsafe.');
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