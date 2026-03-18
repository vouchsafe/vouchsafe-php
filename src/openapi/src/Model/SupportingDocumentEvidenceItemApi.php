<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentEvidenceItemApi
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
     * A submitted supporting document evidence.
     * Note: If the verification flow requires multiple documents,
     * each submission is returned as its own evidence item in the checks array.
     *
     * @var string
     */
    protected $step;
    /**
     * The overall outcome of the document submission.
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
     * A submitted supporting document evidence.
     * Note: If the verification flow requires multiple documents,
     * each submission is returned as its own evidence item in the checks array.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
    * A submitted supporting document evidence.
    Note: If the verification flow requires multiple documents,
    each submission is returned as its own evidence item in the checks array.
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
     * The overall outcome of the document submission.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * The overall outcome of the document submission.
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