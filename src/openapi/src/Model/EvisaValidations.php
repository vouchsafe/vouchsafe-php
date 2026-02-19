<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaValidations
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
     * @var EvisaExistsResult
     */
    protected $evisaExists;
    /**
     * @var EvisaRequiredFieldsExtractedResult
     */
    protected $requiredFieldsExtracted;
    /**
     * @var EvisaStartedResult
     */
    protected $evisaStarted;
    /**
     * @var EvisaNotExpiredResult
     */
    protected $evisaNotExpired;
    /**
     * @return EvisaExistsResult
     */
    public function getEvisaExists(): EvisaExistsResult
    {
        return $this->evisaExists;
    }
    /**
     * @param EvisaExistsResult $evisaExists
     *
     * @return self
     */
    public function setEvisaExists(EvisaExistsResult $evisaExists): self
    {
        $this->initialized['evisaExists'] = true;
        $this->evisaExists = $evisaExists;
        return $this;
    }
    /**
     * @return EvisaRequiredFieldsExtractedResult
     */
    public function getRequiredFieldsExtracted(): EvisaRequiredFieldsExtractedResult
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param EvisaRequiredFieldsExtractedResult $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted(EvisaRequiredFieldsExtractedResult $requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return EvisaStartedResult
     */
    public function getEvisaStarted(): EvisaStartedResult
    {
        return $this->evisaStarted;
    }
    /**
     * @param EvisaStartedResult $evisaStarted
     *
     * @return self
     */
    public function setEvisaStarted(EvisaStartedResult $evisaStarted): self
    {
        $this->initialized['evisaStarted'] = true;
        $this->evisaStarted = $evisaStarted;
        return $this;
    }
    /**
     * @return EvisaNotExpiredResult
     */
    public function getEvisaNotExpired(): EvisaNotExpiredResult
    {
        return $this->evisaNotExpired;
    }
    /**
     * @param EvisaNotExpiredResult $evisaNotExpired
     *
     * @return self
     */
    public function setEvisaNotExpired(EvisaNotExpiredResult $evisaNotExpired): self
    {
        $this->initialized['evisaNotExpired'] = true;
        $this->evisaNotExpired = $evisaNotExpired;
        return $this;
    }
}