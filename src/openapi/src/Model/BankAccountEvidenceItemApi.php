<?php

namespace Vouchsafe\OpenAPI\Model;

class BankAccountEvidenceItemApi
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
     * A submitted bank account evidence.
     *
     * @var string
     */
    protected $step;
    /**
     * The overall outcome of the bank account submission.
     *
     * @var string
     */
    protected $outcome;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * ISO 8601 timestamp for when this evidence attempt was started.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * @var BankAccountDetailsApi
     */
    protected $extractedDetails;
    /**
     * @var BankAccountValidationsApi
     */
    protected $validations;
    /**
     * A submitted bank account evidence.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A submitted bank account evidence.
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
     * The overall outcome of the bank account submission.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * The overall outcome of the bank account submission.
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
     * ISO 8601 timestamp for when this evidence attempt was started.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * ISO 8601 timestamp for when this evidence attempt was started.
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
     * @return BankAccountDetailsApi
     */
    public function getExtractedDetails(): BankAccountDetailsApi
    {
        return $this->extractedDetails;
    }
    /**
     * @param BankAccountDetailsApi $extractedDetails
     *
     * @return self
     */
    public function setExtractedDetails(BankAccountDetailsApi $extractedDetails): self
    {
        $this->initialized['extractedDetails'] = true;
        $this->extractedDetails = $extractedDetails;
        return $this;
    }
    /**
     * @return BankAccountValidationsApi
     */
    public function getValidations(): BankAccountValidationsApi
    {
        return $this->validations;
    }
    /**
     * @param BankAccountValidationsApi $validations
     *
     * @return self
     */
    public function setValidations(BankAccountValidationsApi $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}