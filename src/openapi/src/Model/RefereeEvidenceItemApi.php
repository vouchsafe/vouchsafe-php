<?php

namespace Vouchsafe\OpenAPI\Model;

class RefereeEvidenceItemApi
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
     * A submitted vouch evidence.
     *
     * @var string
     */
    protected $step;
    /**
     * The overall outcome of the referee verification.
     *
     * @var string
     */
    protected $outcome;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * ISO 8601 timestamp for when the vouch request was sent to the referee.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * @var VouchDetailsApi
     */
    protected $extractedDetails;
    /**
     * @var VouchValidationsApi
     */
    protected $validations;
    /**
     * A submitted vouch evidence.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A submitted vouch evidence.
     *
     * @param string $step
     *
     * @return self
     */
    public function setStep(string $step): self
    {
        $this->initialized['step'] = true;
        $this->step = $step;
        return $this;
    }
    /**
     * The overall outcome of the referee verification.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * The overall outcome of the referee verification.
     *
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
     * @return string
     */
    public function getEvidenceType(): string
    {
        return $this->evidenceType;
    }
    /**
     * @param string $evidenceType
     *
     * @return self
     */
    public function setEvidenceType(string $evidenceType): self
    {
        $this->initialized['evidenceType'] = true;
        $this->evidenceType = $evidenceType;
        return $this;
    }
    /**
     * ISO 8601 timestamp for when the vouch request was sent to the referee.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * ISO 8601 timestamp for when the vouch request was sent to the referee.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return VouchDetailsApi
     */
    public function getExtractedDetails(): VouchDetailsApi
    {
        return $this->extractedDetails;
    }
    /**
     * @param VouchDetailsApi $extractedDetails
     *
     * @return self
     */
    public function setExtractedDetails(VouchDetailsApi $extractedDetails): self
    {
        $this->initialized['extractedDetails'] = true;
        $this->extractedDetails = $extractedDetails;
        return $this;
    }
    /**
     * @return VouchValidationsApi
     */
    public function getValidations(): VouchValidationsApi
    {
        return $this->validations;
    }
    /**
     * @param VouchValidationsApi $validations
     *
     * @return self
     */
    public function setValidations(VouchValidationsApi $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}