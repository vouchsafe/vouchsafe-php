<?php

namespace Vouchsafe\OpenAPI\Model;

class ApiErrorResponse
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var float
     */
    protected $statusCode;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var mixed
     */
    protected $errorDetail;
    /**
     * @var string
     */
    protected $failedReason;
    /**
     * @var string
     */
    protected $errorCode;
    /**
     * @var float
     */
    protected $retryAfterSeconds;
    /**
     * @return float
     */
    public function getStatusCode(): float
    {
        return $this->statusCode;
    }
    /**
     * @param float $statusCode
     *
     * @return self
     */
    public function setStatusCode(float $statusCode): self
    {
        $this->initialized['statusCode'] = true;
        $this->statusCode = $statusCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }
    /**
     * @param mixed $errorDetail
     *
     * @return self
     */
    public function setErrorDetail($errorDetail): self
    {
        $this->initialized['errorDetail'] = true;
        $this->errorDetail = $errorDetail;
        return $this;
    }
    /**
     * @return string
     */
    public function getFailedReason(): string
    {
        return $this->failedReason;
    }
    /**
     * @param string $failedReason
     *
     * @return self
     */
    public function setFailedReason(string $failedReason): self
    {
        $this->initialized['failedReason'] = true;
        $this->failedReason = $failedReason;
        return $this;
    }
    /**
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
    /**
     * @param string $errorCode
     *
     * @return self
     */
    public function setErrorCode(string $errorCode): self
    {
        $this->initialized['errorCode'] = true;
        $this->errorCode = $errorCode;
        return $this;
    }
    /**
     * @return float
     */
    public function getRetryAfterSeconds(): float
    {
        return $this->retryAfterSeconds;
    }
    /**
     * @param float $retryAfterSeconds
     *
     * @return self
     */
    public function setRetryAfterSeconds(float $retryAfterSeconds): self
    {
        $this->initialized['retryAfterSeconds'] = true;
        $this->retryAfterSeconds = $retryAfterSeconds;
        return $this;
    }
}