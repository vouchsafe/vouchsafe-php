<?php

namespace Vouchsafe\OpenAPI\Model;

class DigitalIdValidationsApi
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
     * @var ValidationOutcomeApi
     */
    protected $namesConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $hasNotExpired;
    /**
     * @var ValidationOutcomeApi
     */
    protected $evisaExists;
    /**
     * @var ValidationOutcomeApi
     */
    protected $requiredFieldsExtracted;
    /**
     * @var ValidationOutcomeApi
     */
    protected $evisaStarted;
    /**
     * @var ValidationOutcomeApi
     */
    protected $evisaNotExpired;
    /**
     * @return ValidationOutcomeApi
     */
    public function getNamesConsistent(): ValidationOutcomeApi
    {
        return $this->namesConsistent;
    }
    /**
     * @param ValidationOutcomeApi $namesConsistent
     *
     * @return self
     */
    public function setNamesConsistent(ValidationOutcomeApi $namesConsistent): self
    {
        $this->initialized['namesConsistent'] = true;
        $this->namesConsistent = $namesConsistent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getHasNotExpired(): ValidationOutcomeApi
    {
        return $this->hasNotExpired;
    }
    /**
     * @param ValidationOutcomeApi $hasNotExpired
     *
     * @return self
     */
    public function setHasNotExpired(ValidationOutcomeApi $hasNotExpired): self
    {
        $this->initialized['hasNotExpired'] = true;
        $this->hasNotExpired = $hasNotExpired;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getEvisaExists(): ValidationOutcomeApi
    {
        return $this->evisaExists;
    }
    /**
     * @param ValidationOutcomeApi $evisaExists
     *
     * @return self
     */
    public function setEvisaExists(ValidationOutcomeApi $evisaExists): self
    {
        $this->initialized['evisaExists'] = true;
        $this->evisaExists = $evisaExists;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getRequiredFieldsExtracted(): ValidationOutcomeApi
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param ValidationOutcomeApi $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted(ValidationOutcomeApi $requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getEvisaStarted(): ValidationOutcomeApi
    {
        return $this->evisaStarted;
    }
    /**
     * @param ValidationOutcomeApi $evisaStarted
     *
     * @return self
     */
    public function setEvisaStarted(ValidationOutcomeApi $evisaStarted): self
    {
        $this->initialized['evisaStarted'] = true;
        $this->evisaStarted = $evisaStarted;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getEvisaNotExpired(): ValidationOutcomeApi
    {
        return $this->evisaNotExpired;
    }
    /**
     * @param ValidationOutcomeApi $evisaNotExpired
     *
     * @return self
     */
    public function setEvisaNotExpired(ValidationOutcomeApi $evisaNotExpired): self
    {
        $this->initialized['evisaNotExpired'] = true;
        $this->evisaNotExpired = $evisaNotExpired;
        return $this;
    }
}