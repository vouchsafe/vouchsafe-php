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
     * @var list<string>
     */
    protected $negative;
    /**
     * @var list<string>
     */
    protected $positive;
    /**
     * @return list<string>
     */
    public function getNegative(): array
    {
        return $this->negative;
    }
    /**
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
     * @return list<string>
     */
    public function getPositive(): array
    {
        return $this->positive;
    }
    /**
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