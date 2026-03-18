<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaValidationsApi
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
     * Whether the eVisa photo matches the video selfie (with score).
     *
     * @var EvisaValidationsApiFaceMatch
     */
    protected $faceMatch;
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
    /**
     * Whether the eVisa photo matches the video selfie (with score).
     *
     * @return EvisaValidationsApiFaceMatch
     */
    public function getFaceMatch(): EvisaValidationsApiFaceMatch
    {
        return $this->faceMatch;
    }
    /**
     * Whether the eVisa photo matches the video selfie (with score).
     *
     * @param EvisaValidationsApiFaceMatch $faceMatch
     *
     * @return self
     */
    public function setFaceMatch(EvisaValidationsApiFaceMatch $faceMatch): self
    {
        $this->initialized['faceMatch'] = true;
        $this->faceMatch = $faceMatch;
        return $this;
    }
}