<?php

namespace Vouchsafe\OpenAPI\Model;

class GetVerificationResponse
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
     * Unique ID for tracking a verification session over time.
     *
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $status;
    /**
     * When it was originally requested or begun.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * When the user will stop getting reminders.
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * The originally supplied email address.
     *
     * @var string|null
     */
    protected $email;
    /**
     * Where to send the user upon success. If null, the verification flow default will be used.
     *
     * @var string|null
     */
    protected $redirectUrl;
    /**
     * The verification flow it belongs to. For v2 referee cases, this is not present.
     *
     * @var string
     */
    protected $workflowId;
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID Provided at request time.
     *
     * @var string|null
     */
    protected $externalId;
    /**
     * @var string
     */
    protected $identityProfile;
    /**
     * @var ClaimDetails
     */
    protected $claimDetails;
    /**
     * The evidence collected and validated.
     *
     * @var list<VideoSelfieCheckApi>|list<VerifyEmailCheckApi>|list<VerifyPhoneNumberCheckApi>|list<ReviewUserCheckApi>|list<PhotoIdEvidenceItemApi>|list<SupportingDocumentEvidenceItemApi>|list<BankAccountEvidenceItemApi>|list<EvisaEvidenceItemApi>|list<RefereeEvidenceItemApi>|list<StepIdentityDigitalIdApi>|list<StepIdentityPhotoIdApi>|list<StepIdentityVouchApi>|list<StepAddressDigitalIdApi>|list<StepAddressCreditReferenceAgencyApi>|list<StepAddressSupportingDocumentApi>
     */
    protected $checks;
    /**
     * The enrichments performed on the verification.
     *
     * @var list<AmlCheckApi>|list<OfaCheckApi>|list<RadarCheckApi>
     */
    protected $enrichments;
    /**
     * Unique ID for tracking a verification session over time.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique ID for tracking a verification session over time.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * When it was originally requested or begun.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When it was originally requested or begun.
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
     * When the user will stop getting reminders.
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     * When the user will stop getting reminders.
     *
     * @param string $expiresAt
     *
     * @return self
     */
    public function setExpiresAt(string $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
    /**
     * The originally supplied email address.
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * The originally supplied email address.
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * Where to send the user upon success. If null, the verification flow default will be used.
     *
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }
    /**
     * Where to send the user upon success. If null, the verification flow default will be used.
     *
     * @param string|null $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(?string $redirectUrl): self
    {
        $this->initialized['redirectUrl'] = true;
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * The verification flow it belongs to. For v2 referee cases, this is not present.
     *
     * @return string
     */
    public function getWorkflowId(): string
    {
        return $this->workflowId;
    }
    /**
     * The verification flow it belongs to. For v2 referee cases, this is not present.
     *
     * @param string $workflowId
     *
     * @return self
     */
    public function setWorkflowId(string $workflowId): self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID Provided at request time.
     *
     * @return string|null
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID Provided at request time.
     *
     * @param string|null $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * @return string
     */
    public function getIdentityProfile(): string
    {
        return $this->identityProfile;
    }
    /**
     * @param string $identityProfile
     *
     * @return self
     */
    public function setIdentityProfile(string $identityProfile): self
    {
        $this->initialized['identityProfile'] = true;
        $this->identityProfile = $identityProfile;
        return $this;
    }
    /**
     * @return ClaimDetails
     */
    public function getClaimDetails(): ClaimDetails
    {
        return $this->claimDetails;
    }
    /**
     * @param ClaimDetails $claimDetails
     *
     * @return self
     */
    public function setClaimDetails(ClaimDetails $claimDetails): self
    {
        $this->initialized['claimDetails'] = true;
        $this->claimDetails = $claimDetails;
        return $this;
    }
    /**
     * The evidence collected and validated.
     *
     * @return list<VideoSelfieCheckApi>|list<VerifyEmailCheckApi>|list<VerifyPhoneNumberCheckApi>|list<ReviewUserCheckApi>|list<PhotoIdEvidenceItemApi>|list<SupportingDocumentEvidenceItemApi>|list<BankAccountEvidenceItemApi>|list<EvisaEvidenceItemApi>|list<RefereeEvidenceItemApi>|list<StepIdentityDigitalIdApi>|list<StepIdentityPhotoIdApi>|list<StepIdentityVouchApi>|list<StepAddressDigitalIdApi>|list<StepAddressCreditReferenceAgencyApi>|list<StepAddressSupportingDocumentApi>
     */
    public function getChecks(): array
    {
        return $this->checks;
    }
    /**
     * The evidence collected and validated.
     *
     * @param list<VideoSelfieCheckApi>|list<VerifyEmailCheckApi>|list<VerifyPhoneNumberCheckApi>|list<ReviewUserCheckApi>|list<PhotoIdEvidenceItemApi>|list<SupportingDocumentEvidenceItemApi>|list<BankAccountEvidenceItemApi>|list<EvisaEvidenceItemApi>|list<RefereeEvidenceItemApi>|list<StepIdentityDigitalIdApi>|list<StepIdentityPhotoIdApi>|list<StepIdentityVouchApi>|list<StepAddressDigitalIdApi>|list<StepAddressCreditReferenceAgencyApi>|list<StepAddressSupportingDocumentApi> $checks
     *
     * @return self
     */
    public function setChecks(array $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
    /**
     * The enrichments performed on the verification.
     *
     * @return list<AmlCheckApi>|list<OfaCheckApi>|list<RadarCheckApi>
     */
    public function getEnrichments(): array
    {
        return $this->enrichments;
    }
    /**
     * The enrichments performed on the verification.
     *
     * @param list<AmlCheckApi>|list<OfaCheckApi>|list<RadarCheckApi> $enrichments
     *
     * @return self
     */
    public function setEnrichments(array $enrichments): self
    {
        $this->initialized['enrichments'] = true;
        $this->enrichments = $enrichments;
        return $this;
    }
}