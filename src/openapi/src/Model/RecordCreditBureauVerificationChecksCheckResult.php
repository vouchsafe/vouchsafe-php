<?php

namespace Vouchsafe\OpenAPI\Model;

class RecordCreditBureauVerificationChecksCheckResult extends \ArrayObject
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
    protected $iDENTITYMATCH;
    /**
     * @var CheckResult
     */
    protected $rESIDENCYMATCH;
    /**
     * @return CheckResult
     */
    public function getIDENTITYMATCH(): CheckResult
    {
        return $this->iDENTITYMATCH;
    }
    /**
     * @param CheckResult $iDENTITYMATCH
     *
     * @return self
     */
    public function setIDENTITYMATCH(CheckResult $iDENTITYMATCH): self
    {
        $this->initialized['iDENTITYMATCH'] = true;
        $this->iDENTITYMATCH = $iDENTITYMATCH;
        return $this;
    }
    /**
     * @return CheckResult
     */
    public function getRESIDENCYMATCH(): CheckResult
    {
        return $this->rESIDENCYMATCH;
    }
    /**
     * @param CheckResult $rESIDENCYMATCH
     *
     * @return self
     */
    public function setRESIDENCYMATCH(CheckResult $rESIDENCYMATCH): self
    {
        $this->initialized['rESIDENCYMATCH'] = true;
        $this->rESIDENCYMATCH = $rESIDENCYMATCH;
        return $this;
    }
}