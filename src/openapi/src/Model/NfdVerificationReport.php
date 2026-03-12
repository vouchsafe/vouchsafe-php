<?php

namespace Vouchsafe\OpenAPI\Model;

class NfdVerificationReport
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
    protected $state;
    /**
     * Construct a type with a set of properties K of type T
     *
     * @var RecordNfdVerificationChecksCheckResult
     */
    protected $checks;
    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @return RecordNfdVerificationChecksCheckResult
     */
    public function getChecks(): RecordNfdVerificationChecksCheckResult
    {
        return $this->checks;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordNfdVerificationChecksCheckResult $checks
     *
     * @return self
     */
    public function setChecks(RecordNfdVerificationChecksCheckResult $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
}