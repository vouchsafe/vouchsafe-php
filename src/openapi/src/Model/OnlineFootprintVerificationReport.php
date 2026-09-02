<?php

namespace Vouchsafe\OpenAPI\Model;

class OnlineFootprintVerificationReport
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
     * @var OnlineFootprintChecksAnyOf
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
     * @return OnlineFootprintChecksAnyOf
     */
    public function getChecks()
    {
        return $this->checks;
    }
    /**
     * @param OnlineFootprintChecksAnyOf $checks
     *
     * @return self
     */
    public function setChecks($checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
}