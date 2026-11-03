<?php

namespace Vouchsafe\OpenAPI\Model;

class StepIdentityPhotoIdApi
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
     * The files collected, such as document images. Download each one using its `key`.
     *
     * @var list<ArtefactApi>
     */
    protected $artefacts;
    /**
     * @var CitizenCardDetailsApi|PassportDetailsApi|DrivingLicenceDetailsApi|YoungScotDetailsApi|NecDetailsApi|NationalIdDetailsApi|UnfamiliarPhotoIdDetailsApi
     */
    protected $extractedDetails;
    /**
     * Each check run on the document, and whether it passed. Empty while `outcome` is `in_progress`.
     *
     * @var RecordStringNever
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
     * @return CitizenCardDetailsApi|PassportDetailsApi|DrivingLicenceDetailsApi|YoungScotDetailsApi|NecDetailsApi|NationalIdDetailsApi|UnfamiliarPhotoIdDetailsApi
     */
    public function getExtractedDetails()
    {
        return $this->extractedDetails;
    }
    /**
     * @param CitizenCardDetailsApi|PassportDetailsApi|DrivingLicenceDetailsApi|YoungScotDetailsApi|NecDetailsApi|NationalIdDetailsApi|UnfamiliarPhotoIdDetailsApi $extractedDetails
     *
     * @return self
     */
    public function setExtractedDetails($extractedDetails): self
    {
        $this->initialized['extractedDetails'] = true;
        $this->extractedDetails = $extractedDetails;
        return $this;
    }
    /**
     * Each check run on the document, and whether it passed. Empty while `outcome` is `in_progress`.
     *
     * @return RecordStringNever
     */
    public function getValidations(): RecordStringNever
    {
        return $this->validations;
    }
    /**
     * Each check run on the document, and whether it passed. Empty while `outcome` is `in_progress`.
     *
     * @param RecordStringNever $validations
     *
     * @return self
     */
    public function setValidations(RecordStringNever $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}