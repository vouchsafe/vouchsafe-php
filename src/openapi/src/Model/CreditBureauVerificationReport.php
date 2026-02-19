<?php

namespace Vouchsafe\OpenAPI\Model;

class CreditBureauVerificationReport
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
     * @var RecordCreditBureauVerificationChecksCheckResult
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
     * @return RecordCreditBureauVerificationChecksCheckResult
     */
    public function getChecks(): RecordCreditBureauVerificationChecksCheckResult
    {
        return $this->checks;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordCreditBureauVerificationChecksCheckResult $checks
     *
     * @return self
     */
    public function setChecks(RecordCreditBureauVerificationChecksCheckResult $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
}