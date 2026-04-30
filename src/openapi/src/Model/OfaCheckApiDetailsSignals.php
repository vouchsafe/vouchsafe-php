<?php

namespace Vouchsafe\OpenAPI\Model;

class OfaCheckApiDetailsSignals extends \ArrayObject
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
     * Signals that contributed negatively to the footprint score.
     *
     * @var list<string>
     */
    protected $negative;
    /**
     * Signals that contributed positively to the footprint score.
     *
     * @var list<string>
     */
    protected $positive;
    /**
     * Signals that contributed negatively to the footprint score.
     *
     * @return list<string>
     */
    public function getNegative(): array
    {
        return $this->negative;
    }
    /**
     * Signals that contributed negatively to the footprint score.
     *
     * @param list<string> $negative
     *
     * @return self
     */
    public function setNegative(array $negative): self
    {
        $this->initialized['negative'] = true;
        $this->negative = $negative;
        return $this;
    }
    /**
     * Signals that contributed positively to the footprint score.
     *
     * @return list<string>
     */
    public function getPositive(): array
    {
        return $this->positive;
    }
    /**
     * Signals that contributed positively to the footprint score.
     *
     * @param list<string> $positive
     *
     * @return self
     */
    public function setPositive(array $positive): self
    {
        $this->initialized['positive'] = true;
        $this->positive = $positive;
        return $this;
    }
}