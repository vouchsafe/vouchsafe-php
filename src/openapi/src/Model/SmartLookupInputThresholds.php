<?php

namespace Vouchsafe\OpenAPI\Model;

class SmartLookupInputThresholds extends \ArrayObject
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
     * Minimum score required to pass AML check (0-100)
     *
     * @var float
     */
    protected $aml;
    /**
     * Minimum score required to pass online footprint check (0-100)
     *
     * @var float
     */
    protected $onlineFootprint;
    /**
     * Minimum score required to pass AML check (0-100)
     *
     * @return float
     */
    public function getAml(): float
    {
        return $this->aml;
    }
    /**
     * Minimum score required to pass AML check (0-100)
     *
     * @param float $aml
     *
     * @return self
     */
    public function setAml(float $aml): self
    {
        $this->initialized['aml'] = true;
        $this->aml = $aml;
        return $this;
    }
    /**
     * Minimum score required to pass online footprint check (0-100)
     *
     * @return float
     */
    public function getOnlineFootprint(): float
    {
        return $this->onlineFootprint;
    }
    /**
     * Minimum score required to pass online footprint check (0-100)
     *
     * @param float $onlineFootprint
     *
     * @return self
     */
    public function setOnlineFootprint(float $onlineFootprint): self
    {
        $this->initialized['onlineFootprint'] = true;
        $this->onlineFootprint = $onlineFootprint;
        return $this;
    }
}