<?php

namespace Vouchsafe\OpenAPI\Model;

class ValidationOutcomeApi
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
     * @var string
     */
    protected $status;
    /**
     * A short, machine-readable code for why the check failed, such as `EXPIRY_DATE_PASSED`.
     *
     * @var string
     */
    protected $failedReason;
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * A short, machine-readable code for why the check failed, such as `EXPIRY_DATE_PASSED`.
     *
     * @return string
     */
    public function getFailedReason(): string
    {
        return $this->failedReason;
    }
    /**
     * A short, machine-readable code for why the check failed, such as `EXPIRY_DATE_PASSED`.
     *
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
}