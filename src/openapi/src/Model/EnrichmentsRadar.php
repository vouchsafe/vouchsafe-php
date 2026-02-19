<?php

namespace Vouchsafe\OpenAPI\Model;

class EnrichmentsRadar extends \ArrayObject
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
    protected $reasons;
    /**
     * @var string
     */
    protected $riskLevel;
    /**
     * @return list<string>
     */
    public function getReasons(): array
    {
        return $this->reasons;
    }
    /**
     * @param list<string> $reasons
     *
     * @return self
     */
    public function setReasons(array $reasons): self
    {
        $this->initialized['reasons'] = true;
        $this->reasons = $reasons;
        return $this;
    }
    /**
     * @return string
     */
    public function getRiskLevel(): string
    {
        return $this->riskLevel;
    }
    /**
     * @param string $riskLevel
     *
     * @return self
     */
    public function setRiskLevel(string $riskLevel): self
    {
        $this->initialized['riskLevel'] = true;
        $this->riskLevel = $riskLevel;
        return $this;
    }
}