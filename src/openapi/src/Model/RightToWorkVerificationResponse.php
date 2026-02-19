<?php

namespace Vouchsafe\OpenAPI\Model;

class RightToWorkVerificationResponse
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
     * @var string
     */
    protected $verificationMethod;
    /**
     * @var string
     */
    protected $evidenceType;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * Whether this API call is billable. `true` when the eVisa was found on GOV.UK, `false` when the share code or date of birth was invalid.
     *
     * @var bool
     */
    protected $billable;
    /**
     * @var object|RecordStringNever
     */
    protected $extractedDetails;
    /**
     * @var list<EvisaArtefact>
     */
    protected $artefacts;
    /**
     * @var EvisaValidations|RecordStringNever
     */
    protected $validations;
    /**
     * @return string
     */
    public function getVerificationMethod(): string
    {
        return $this->verificationMethod;
    }
    /**
     * @param string $verificationMethod
     *
     * @return self
     */
    public function setVerificationMethod(string $verificationMethod): self
    {
        $this->initialized['verificationMethod'] = true;
        $this->verificationMethod = $verificationMethod;
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
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
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
     * Whether this API call is billable. `true` when the eVisa was found on GOV.UK, `false` when the share code or date of birth was invalid.
     *
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }
    /**
     * Whether this API call is billable. `true` when the eVisa was found on GOV.UK, `false` when the share code or date of birth was invalid.
     *
     * @param bool $billable
     *
     * @return self
     */
    public function setBillable(bool $billable): self
    {
        $this->initialized['billable'] = true;
        $this->billable = $billable;
        return $this;
    }
    /**
     * @return object|RecordStringNever
     */
    public function getExtractedDetails()
    {
        return $this->extractedDetails;
    }
    /**
     * @param object|RecordStringNever $extractedDetails
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
     * @return list<EvisaArtefact>
     */
    public function getArtefacts(): array
    {
        return $this->artefacts;
    }
    /**
     * @param list<EvisaArtefact> $artefacts
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
     * @return EvisaValidations|RecordStringNever
     */
    public function getValidations()
    {
        return $this->validations;
    }
    /**
     * @param EvisaValidations|RecordStringNever $validations
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