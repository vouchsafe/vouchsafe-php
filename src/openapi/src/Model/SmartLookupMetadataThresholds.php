<?php

namespace Vouchsafe\OpenAPI\Model;

class SmartLookupMetadataThresholds extends \ArrayObject
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
     * @var float
     */
    protected $onlineFootprint;
    /**
     * @var float
     */
    protected $aml;
    /**
     * @return float
     */
    public function getOnlineFootprint(): float
    {
        return $this->onlineFootprint;
    }
    /**
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
    /**
     * @return float
     */
    public function getAml(): float
    {
        return $this->aml;
    }
    /**
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
}