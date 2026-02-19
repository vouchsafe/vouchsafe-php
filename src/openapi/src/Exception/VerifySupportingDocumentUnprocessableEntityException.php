<?php

namespace Vouchsafe\OpenAPI\Exception;

class VerifySupportingDocumentUnprocessableEntityException extends UnprocessableEntityException
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
        parent::__construct('Unprocessable entity - empty file or file size exceeds limit');
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