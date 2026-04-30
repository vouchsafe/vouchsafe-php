<?php

namespace Vouchsafe\OpenAPI\Model;

class StepAddressSupportingDocumentApi
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
     * Proof of address step — only present for v2 verifications.
     *
     * @var string
     */
    protected $step;
    /**
     * Overall outcome of the address verification.
     *
     * @var string
     */
    protected $outcome;
    /**
     * ISO 8601 timestamp for when this evidence attempt was started.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The method used to verify address.
     *
     * @var string
     */
    protected $method;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * Files captured or uploaded for this evidence item.
     *
     * @var list<ArtefactApi>
     */
    protected $artefacts;
    /**
     * @var SupportingDocumentDetailsApi
     */
    protected $extractedDetails;
    /**
     * @var SupportingDocumentValidationsApi
     */
    protected $validations;
    /**
     * Proof of address step — only present for v2 verifications.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * Proof of address step — only present for v2 verifications.
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
     * Overall outcome of the address verification.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * Overall outcome of the address verification.
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
     * The method used to verify address.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * The method used to verify address.
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
     * Files captured or uploaded for this evidence item.
     *
     * @return list<ArtefactApi>
     */
    public function getArtefacts(): array
    {
        return $this->artefacts;
    }
    /**
     * Files captured or uploaded for this evidence item.
     *
     * @param list<ArtefactApi> $artefacts
     *
     * @return self
     */
    public function setArtefacts(array $artefacts): self
    {
        $this->initialized['artefacts'] = true;
        $this->artefacts = $artefacts;
        return $this;
    }
    /**
     * @return SupportingDocumentDetailsApi
     */
    public function getExtractedDetails(): SupportingDocumentDetailsApi
    {
        return $this->extractedDetails;
    }
    /**
     * @param SupportingDocumentDetailsApi $extractedDetails
     *
     * @return self
     */
    public function setExtractedDetails(SupportingDocumentDetailsApi $extractedDetails): self
    {
        $this->initialized['extractedDetails'] = true;
        $this->extractedDetails = $extractedDetails;
        return $this;
    }
    /**
     * @return SupportingDocumentValidationsApi
     */
    public function getValidations(): SupportingDocumentValidationsApi
    {
        return $this->validations;
    }
    /**
     * @param SupportingDocumentValidationsApi $validations
     *
     * @return self
     */
    public function setValidations(SupportingDocumentValidationsApi $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}