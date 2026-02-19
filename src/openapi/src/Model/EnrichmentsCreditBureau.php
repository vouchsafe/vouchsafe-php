<?php

namespace Vouchsafe\OpenAPI\Model;

class EnrichmentsCreditBureau extends \ArrayObject
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
     * Construct a type with a set of properties K of type T
     *
     * @var RecordStringEnrichmentCheckResult
     */
    protected $checks;
    /**
     * @var string
     */
    protected $state;
    /**
     * Construct a type with a set of properties K of type T
     *
     * @return RecordStringEnrichmentCheckResult
     */
    public function getChecks(): RecordStringEnrichmentCheckResult
    {
        return $this->checks;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordStringEnrichmentCheckResult $checks
     *
     * @return self
     */
    public function setChecks(RecordStringEnrichmentCheckResult $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
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
}