<?php

namespace Vouchsafe\OpenAPI\Model;

class ImmigrationStatusEvisaValidations
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
     * @var ImmigrationStatusEvisaStartedResult
     */
    protected $evisaStarted;
    /**
     * @var ImmigrationStatusEvisaNotExpiredResult
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
     * @return ImmigrationStatusEvisaStartedResult
     */
    public function getEvisaStarted(): ImmigrationStatusEvisaStartedResult
    {
        return $this->evisaStarted;
    }
    /**
     * @param ImmigrationStatusEvisaStartedResult $evisaStarted
     *
     * @return self
     */
    public function setEvisaStarted(ImmigrationStatusEvisaStartedResult $evisaStarted): self
    {
        $this->initialized['evisaStarted'] = true;
        $this->evisaStarted = $evisaStarted;
        return $this;
    }
    /**
     * @return ImmigrationStatusEvisaNotExpiredResult
     */
    public function getEvisaNotExpired(): ImmigrationStatusEvisaNotExpiredResult
    {
        return $this->evisaNotExpired;
    }
    /**
     * @param ImmigrationStatusEvisaNotExpiredResult $evisaNotExpired
     *
     * @return self
     */
    public function setEvisaNotExpired(ImmigrationStatusEvisaNotExpiredResult $evisaNotExpired): self
    {
        $this->initialized['evisaNotExpired'] = true;
        $this->evisaNotExpired = $evisaNotExpired;
        return $this;
    }
}