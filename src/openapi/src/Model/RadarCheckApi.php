<?php

namespace Vouchsafe\OpenAPI\Model;

class RadarCheckApi
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
    protected $check;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * @var RadarCheckApiDetails
     */
    protected $details;
    /**
     * @return string
     */
    public function getCheck(): string
    {
        return $this->check;
    }
    /**
     * @param string $check
     *
     * @return self
     */
    public function setCheck(string $check): self
    {
        $this->initialized['check'] = true;
        $this->check = $check;
        return $this;
    }
    /**
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * @param string $outcome
     *
     * @return self
     */
    public function setOutcome(string $outcome): self
    {
        $this->initialized['outcome'] = true;
        $this->outcome = $outcome;
        return $this;
    }
    /**
     * @return RadarCheckApiDetails
     */
    public function getDetails(): RadarCheckApiDetails
    {
        return $this->details;
    }
    /**
     * @param RadarCheckApiDetails $details
     *
     * @return self
     */
    public function setDetails(RadarCheckApiDetails $details): self
    {
        $this->initialized['details'] = true;
        $this->details = $details;
        return $this;
    }
}