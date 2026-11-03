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
     * Proof of address.
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
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * How the user proved their address.
     *
     * @var string
     */
    protected $method;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * The files collected, such as document images. Download each one using its `key`.
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
     * Proof of address.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * Proof of address.
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
     * How the user proved their address.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * How the user proved their address.
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
     * The files collected, such as document images. Download each one using its `key`.
     *
     * @return list<ArtefactApi>
     */
    public function getArtefacts(): array
    {
        return $this->artefacts;
    }
    /**
     * The files collected, such as document images. Download each one using its `key`.
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