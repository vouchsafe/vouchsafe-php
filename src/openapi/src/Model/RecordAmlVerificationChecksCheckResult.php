<?php

namespace Vouchsafe\OpenAPI\Model;

class RecordAmlVerificationChecksCheckResult extends \ArrayObject
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
     * @var CheckResult
     */
    protected $aMLSANCTIONSCHECK;
    /**
     * @return CheckResult
     */
    public function getAMLSANCTIONSCHECK(): CheckResult
    {
        return $this->aMLSANCTIONSCHECK;
    }
    /**
     * @param CheckResult $aMLSANCTIONSCHECK
     *
     * @return self
     */
    public function setAMLSANCTIONSCHECK(CheckResult $aMLSANCTIONSCHECK): self
    {
        $this->initialized['aMLSANCTIONSCHECK'] = true;
        $this->aMLSANCTIONSCHECK = $aMLSANCTIONSCHECK;
        return $this;
    }
}