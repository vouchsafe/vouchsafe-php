<?php

namespace Vouchsafe\OpenAPI\Model;

class OfaCheckApiDetails extends \ArrayObject
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
     * @var OfaCheckApiDetailsSignals
     */
    protected $signals;
    /**
     * Footprint score for the supplied contact detail, or null if unavailable.
     *
     * @var float|null
     */
    protected $score;
    /**
     * The minimum score required to pass the footprint check.
     *
     * @var float|null
     */
    protected $threshold;
    /**
     * @return OfaCheckApiDetailsSignals
     */
    public function getSignals(): OfaCheckApiDetailsSignals
    {
        return $this->signals;
    }
    /**
     * @param OfaCheckApiDetailsSignals $signals
     *
     * @return self
     */
    public function setSignals(OfaCheckApiDetailsSignals $signals): self
    {
        $this->initialized['signals'] = true;
        $this->signals = $signals;
        return $this;
    }
    /**
     * Footprint score for the supplied contact detail, or null if unavailable.
     *
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
     * Footprint score for the supplied contact detail, or null if unavailable.
     *
     * @param float|null $score
     *
     * @return self
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * The minimum score required to pass the footprint check.
     *
     * @return float|null
     */
    public function getThreshold(): ?float
    {
        return $this->threshold;
    }
    /**
     * The minimum score required to pass the footprint check.
     *
     * @param float|null $threshold
     *
     * @return self
     */
    public function setThreshold(?float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
}