<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class OnlineFootprintChecksAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var CheckResult
     */
    protected $eMAILSCORE;
    /**
     * @var CheckResult
     */
    protected $pHONESCORE;
    /**
     * @return CheckResult
     */
    public function getEMAILSCORE(): CheckResult
    {
        return $this->eMAILSCORE;
    }
    /**
     * @param CheckResult $eMAILSCORE
     *
     * @return self
     */
    public function setEMAILSCORE(CheckResult $eMAILSCORE): self
    {
        $this->initialized['eMAILSCORE'] = true;
        $this->eMAILSCORE = $eMAILSCORE;
        return $this;
    }
    /**
     * @return CheckResult
     */
    public function getPHONESCORE(): CheckResult
    {
        return $this->pHONESCORE;
    }
    /**
     * @param CheckResult $pHONESCORE
     *
     * @return self
     */
    public function setPHONESCORE(CheckResult $pHONESCORE): self
    {
        $this->initialized['pHONESCORE'] = true;
        $this->pHONESCORE = $pHONESCORE;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['eMAILSCORE' => ['EMAIL_SCORE', 'getEMAILSCORE', 'setEMAILSCORE'], 'pHONESCORE' => ['PHONE_SCORE', 'getPHONESCORE', 'setPHONESCORE']];
    }
}