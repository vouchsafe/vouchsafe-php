<?php

namespace Vouchsafe\OpenAPI\Model;

class ToggleAlertsInput
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
     * @var bool
     */
    protected $alertsEnabled;
    /**
     * @return bool
     */
    public function getAlertsEnabled(): bool
    {
        return $this->alertsEnabled;
    }
    /**
     * @param bool $alertsEnabled
     *
     * @return self
     */
    public function setAlertsEnabled(bool $alertsEnabled): self
    {
        $this->initialized['alertsEnabled'] = true;
        $this->alertsEnabled = $alertsEnabled;
        return $this;
    }
}