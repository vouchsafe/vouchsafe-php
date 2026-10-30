<?php

namespace Vouchsafe\OpenAPI\Model;

class CertifiedDetails
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
    protected $checkType;
    /**
     * Whether the configured identity profile has been met: "met", "pending", "not_met", or "review" (trial account, for evaluation purposes only).
     *
     * @var string
     */
    protected $identityProfileState;
    /**
     * Whether the check was conducted in accordance with the relevant Supplementary Code.
     *
     * @var bool
     */
    protected $supplementaryCodeCompliant;
    /**
     * The version of the UK DVS trust framework Vouchsafe was certified against at the time of the check.
     *
     * @var string
     */
    protected $trustFrameworkVersion;
    /**
     * Whether the identity verification step has been completed.
     *
     * @var bool
     */
    protected $identityVerified;
    /**
     * When the identity check was carried out. Only present when identity_verified is true.
     *
     * @var string
     */
    protected $dateOfIdentityCheck;
    /**
     * Whether the address was verified. Only present for DBS verifications.
     *
     * @var bool
     */
    protected $addressVerified;
    /**
     * When the address check used for this compliance assessment was carried out. Only present when address_verified is true.
     *
     * @var string
     */
    protected $dateOfAddressCheck;
    /**
     * The entity that checked the evidence.
     *
     * @var string
     */
    protected $evidenceCheckedBy;
    /**
     * Whether Vouchsafe was registered to the UK digital identity services register at the time of the check.
     *
     * @var bool
     */
    protected $registrationConfirmed;
    /**
     * Vouchsafe's entry on the UK digital identity services register.
     *
     * @var string
     */
    protected $registrationEntry;
    /**
     * @return string
     */
    public function getCheckType(): string
    {
        return $this->checkType;
    }
    /**
     * @param string $checkType
     *
     * @return self
     */
    public function setCheckType(string $checkType): self
    {
        $this->initialized['checkType'] = true;
        $this->checkType = $checkType;
        return $this;
    }
    /**
     * Whether the configured identity profile has been met: "met", "pending", "not_met", or "review" (trial account, for evaluation purposes only).
     *
     * @return string
     */
    public function getIdentityProfileState(): string
    {
        return $this->identityProfileState;
    }
    /**
     * Whether the configured identity profile has been met: "met", "pending", "not_met", or "review" (trial account, for evaluation purposes only).
     *
     * @param string $identityProfileState
     *
     * @return self
     */
    public function setIdentityProfileState(string $identityProfileState): self
    {
        $this->initialized['identityProfileState'] = true;
        $this->identityProfileState = $identityProfileState;
        return $this;
    }
    /**
     * Whether the check was conducted in accordance with the relevant Supplementary Code.
     *
     * @return bool
     */
    public function getSupplementaryCodeCompliant(): bool
    {
        return $this->supplementaryCodeCompliant;
    }
    /**
     * Whether the check was conducted in accordance with the relevant Supplementary Code.
     *
     * @param bool $supplementaryCodeCompliant
     *
     * @return self
     */
    public function setSupplementaryCodeCompliant(bool $supplementaryCodeCompliant): self
    {
        $this->initialized['supplementaryCodeCompliant'] = true;
        $this->supplementaryCodeCompliant = $supplementaryCodeCompliant;
        return $this;
    }
    /**
     * The version of the UK DVS trust framework Vouchsafe was certified against at the time of the check.
     *
     * @return string
     */
    public function getTrustFrameworkVersion(): string
    {
        return $this->trustFrameworkVersion;
    }
    /**
     * The version of the UK DVS trust framework Vouchsafe was certified against at the time of the check.
     *
     * @param string $trustFrameworkVersion
     *
     * @return self
     */
    public function setTrustFrameworkVersion(string $trustFrameworkVersion): self
    {
        $this->initialized['trustFrameworkVersion'] = true;
        $this->trustFrameworkVersion = $trustFrameworkVersion;
        return $this;
    }
    /**
     * Whether the identity verification step has been completed.
     *
     * @return bool
     */
    public function getIdentityVerified(): bool
    {
        return $this->identityVerified;
    }
    /**
     * Whether the identity verification step has been completed.
     *
     * @param bool $identityVerified
     *
     * @return self
     */
    public function setIdentityVerified(bool $identityVerified): self
    {
        $this->initialized['identityVerified'] = true;
        $this->identityVerified = $identityVerified;
        return $this;
    }
    /**
     * When the identity check was carried out. Only present when identity_verified is true.
     *
     * @return string
     */
    public function getDateOfIdentityCheck(): string
    {
        return $this->dateOfIdentityCheck;
    }
    /**
     * When the identity check was carried out. Only present when identity_verified is true.
     *
     * @param string $dateOfIdentityCheck
     *
     * @return self
     */
    public function setDateOfIdentityCheck(string $dateOfIdentityCheck): self
    {
        $this->initialized['dateOfIdentityCheck'] = true;
        $this->dateOfIdentityCheck = $dateOfIdentityCheck;
        return $this;
    }
    /**
     * Whether the address was verified. Only present for DBS verifications.
     *
     * @return bool
     */
    public function getAddressVerified(): bool
    {
        return $this->addressVerified;
    }
    /**
     * Whether the address was verified. Only present for DBS verifications.
     *
     * @param bool $addressVerified
     *
     * @return self
     */
    public function setAddressVerified(bool $addressVerified): self
    {
        $this->initialized['addressVerified'] = true;
        $this->addressVerified = $addressVerified;
        return $this;
    }
    /**
     * When the address check used for this compliance assessment was carried out. Only present when address_verified is true.
     *
     * @return string
     */
    public function getDateOfAddressCheck(): string
    {
        return $this->dateOfAddressCheck;
    }
    /**
     * When the address check used for this compliance assessment was carried out. Only present when address_verified is true.
     *
     * @param string $dateOfAddressCheck
     *
     * @return self
     */
    public function setDateOfAddressCheck(string $dateOfAddressCheck): self
    {
        $this->initialized['dateOfAddressCheck'] = true;
        $this->dateOfAddressCheck = $dateOfAddressCheck;
        return $this;
    }
    /**
     * The entity that checked the evidence.
     *
     * @return string
     */
    public function getEvidenceCheckedBy(): string
    {
        return $this->evidenceCheckedBy;
    }
    /**
     * The entity that checked the evidence.
     *
     * @param string $evidenceCheckedBy
     *
     * @return self
     */
    public function setEvidenceCheckedBy(string $evidenceCheckedBy): self
    {
        $this->initialized['evidenceCheckedBy'] = true;
        $this->evidenceCheckedBy = $evidenceCheckedBy;
        return $this;
    }
    /**
     * Whether Vouchsafe was registered to the UK digital identity services register at the time of the check.
     *
     * @return bool
     */
    public function getRegistrationConfirmed(): bool
    {
        return $this->registrationConfirmed;
    }
    /**
     * Whether Vouchsafe was registered to the UK digital identity services register at the time of the check.
     *
     * @param bool $registrationConfirmed
     *
     * @return self
     */
    public function setRegistrationConfirmed(bool $registrationConfirmed): self
    {
        $this->initialized['registrationConfirmed'] = true;
        $this->registrationConfirmed = $registrationConfirmed;
        return $this;
    }
    /**
     * Vouchsafe's entry on the UK digital identity services register.
     *
     * @return string
     */
    public function getRegistrationEntry(): string
    {
        return $this->registrationEntry;
    }
    /**
     * Vouchsafe's entry on the UK digital identity services register.
     *
     * @param string $registrationEntry
     *
     * @return self
     */
    public function setRegistrationEntry(string $registrationEntry): self
    {
        $this->initialized['registrationEntry'] = true;
        $this->registrationEntry = $registrationEntry;
        return $this;
    }
}