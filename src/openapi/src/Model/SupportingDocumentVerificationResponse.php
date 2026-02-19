<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentVerificationResponse
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
     * @var bool
     */
    protected $billable;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * @var SupportingDocumentExtractedDetails|RecordStringNever
     */
    protected $extractedDetails;
    /**
     * @var SupportingDocumentValidations|RecordStringNever
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
     * @return bool
     */
    public function getBillable(): bool
    {
        return $this->billable;
    }
    /**
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
     * @return SupportingDocumentExtractedDetails|RecordStringNever
     */
    public function getExtractedDetails()
    {
        return $this->extractedDetails;
    }
    /**
     * @param SupportingDocumentExtractedDetails|RecordStringNever $extractedDetails
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
     * @return SupportingDocumentValidations|RecordStringNever
     */
    public function getValidations()
    {
        return $this->validations;
    }
    /**
     * @param SupportingDocumentValidations|RecordStringNever $validations
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