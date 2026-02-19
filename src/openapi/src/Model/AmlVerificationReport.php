<?php

namespace Vouchsafe\OpenAPI\Model;

class AmlVerificationReport
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
     * @var RecordAmlVerificationChecksCheckResult
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
     * @return RecordAmlVerificationChecksCheckResult
     */
    public function getChecks(): RecordAmlVerificationChecksCheckResult
    {
        return $this->checks;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordAmlVerificationChecksCheckResult $checks
     *
     * @return self
     */
    public function setChecks(RecordAmlVerificationChecksCheckResult $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
}