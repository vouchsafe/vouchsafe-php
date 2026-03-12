<?php

namespace Vouchsafe\OpenAPI\Model;

class RecordNfdVerificationChecksCheckResult extends \ArrayObject
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
    protected $nFDSEARCH;
    /**
     * @return CheckResult
     */
    public function getNFDSEARCH(): CheckResult
    {
        return $this->nFDSEARCH;
    }
    /**
     * @param CheckResult $nFDSEARCH
     *
     * @return self
     */
    public function setNFDSEARCH(CheckResult $nFDSEARCH): self
    {
        $this->initialized['nFDSEARCH'] = true;
        $this->nFDSEARCH = $nFDSEARCH;
        return $this;
    }
}