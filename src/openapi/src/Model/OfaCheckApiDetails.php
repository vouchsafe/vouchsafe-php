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
     * @var float|null
     */
    protected $score;
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
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
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
}