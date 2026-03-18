<?php

namespace Vouchsafe\OpenAPI\Model;

class PhotoIdEvidenceItemApi
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
     * A submitted Photo ID evidence.
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
     * @var CitizenCardDetailsApi|PassportDetailsApi|DrivingLicenceDetailsApi|YoungScotDetailsApi|NecDetailsApi|NationalIdDetailsApi|UnfamiliarPhotoIdDetailsApi
     */
    protected $extractedDetails;
    /**
     * @var PassportValidationApi|DrivingLicenceValidationApi|NationalIdValidationApi|CitizenCardValidationApi|YoungScotValidationApi|NecValidationApi|UnfamiliarPhotoIdValidationApi
     */
    protected $validations;
    /**
     * A submitted Photo ID evidence.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A submitted Photo ID evidence.
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
     * @return PassportValidationApi|DrivingLicenceValidationApi|NationalIdValidationApi|CitizenCardValidationApi|YoungScotValidationApi|NecValidationApi|UnfamiliarPhotoIdValidationApi
     */
    public function getValidations()
    {
        return $this->validations;
    }
    /**
     * @param PassportValidationApi|DrivingLicenceValidationApi|NationalIdValidationApi|CitizenCardValidationApi|YoungScotValidationApi|NecValidationApi|UnfamiliarPhotoIdValidationApi $validations
     *
     * @return self
     */
    public function setValidations($validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}