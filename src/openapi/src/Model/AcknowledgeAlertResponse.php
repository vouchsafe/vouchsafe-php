<?php

namespace Vouchsafe\OpenAPI\Model;

class AcknowledgeAlertResponse
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
     * @var bool
     */
    protected $success;
    /**
     * @var string
     */
    protected $acknowledgedAt;
    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }
    /**
     * @param bool $success
     *
     * @return self
     */
    public function setSuccess(bool $success): self
    {
        $this->initialized['success'] = true;
        $this->success = $success;
        return $this;
    }
    /**
     * @return string
     */
    public function getAcknowledgedAt(): string
    {
        return $this->acknowledgedAt;
    }
    /**
     * @param string $acknowledgedAt
     *
     * @return self
     */
    public function setAcknowledgedAt(string $acknowledgedAt): self
    {
        $this->initialized['acknowledgedAt'] = true;
        $this->acknowledgedAt = $acknowledgedAt;
        return $this;
    }
}