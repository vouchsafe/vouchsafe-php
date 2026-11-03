<?php

namespace Vouchsafe\OpenAPI\Model;

class StepIdentityVouchApi
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
     * Proof of identity.
     *
     * @var string
     */
    protected $step;
    /**
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Overall outcome of the evidence submission.
     *
     * @var string
     */
    protected $outcome;
    /**
     * How the user proved their identity.
     *
     * @var string
     */
    protected $method;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * @var VouchDetailsApi
     */
    protected $extractedDetails;
    /**
     * @var VouchValidationsApi
     */
    protected $validations;
    /**
     * Proof of identity.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * Proof of identity.
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
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When the user provided this evidence, in ISO 8601 format.
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
     * Overall outcome of the evidence submission.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * Overall outcome of the evidence submission.
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
     * How the user proved their identity.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * How the user proved their identity.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
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