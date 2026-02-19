<?php

namespace Vouchsafe\OpenAPI\Model;

class DocumentCompleteAndLegibleResult
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
     * @var list<string>
     */
    protected $failedReasons;
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
     * @return list<string>
     */
    public function getFailedReasons(): array
    {
        return $this->failedReasons;
    }
    /**
     * @param list<string> $failedReasons
     *
     * @return self
     */
    public function setFailedReasons(array $failedReasons): self
    {
        $this->initialized['failedReasons'] = true;
        $this->failedReasons = $failedReasons;
        return $this;
    }
}