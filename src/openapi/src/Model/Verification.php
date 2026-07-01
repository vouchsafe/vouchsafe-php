<?php

namespace Vouchsafe\OpenAPI\Model;

class Verification
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
     * When the personal data for this verification was erased to fulfil a GDPR erasure request, or `null`
     * if it has not been erased. The status and timestamps are retained, but personal data fields
     * (`claim_details`, check `extracted_details`, artefacts and enrichments) will be empty once erased.
     *
     * @var string|null
     */
    protected $erasedAt;
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
     * The verification flow it belongs to.
     *
     * @var string|null
     */
    protected $flowId;
    /**
     * To be deprecated - Use flow_id instead.
     *
     * @var string|null
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
     * When the personal data for this verification was erased to fulfil a GDPR erasure request, or `null`
     * if it has not been erased. The status and timestamps are retained, but personal data fields
     * (`claim_details`, check `extracted_details`, artefacts and enrichments) will be empty once erased.
     *
     * @return string|null
     */
    public function getErasedAt(): ?string
    {
        return $this->erasedAt;
    }
    /**
    * When the personal data for this verification was erased to fulfil a GDPR erasure request, or `null`
    if it has not been erased. The status and timestamps are retained, but personal data fields
    (`claim_details`, check `extracted_details`, artefacts and enrichments) will be empty once erased.
    *
    * @param string|null $erasedAt
    *
    * @return self
    */
    public function setErasedAt(?string $erasedAt): self
    {
        $this->initialized['erasedAt'] = true;
        $this->erasedAt = $erasedAt;
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
     * The verification flow it belongs to.
     *
     * @return string|null
     */
    public function getFlowId(): ?string
    {
        return $this->flowId;
    }
    /**
     * The verification flow it belongs to.
     *
     * @param string|null $flowId
     *
     * @return self
     */
    public function setFlowId(?string $flowId): self
    {
        $this->initialized['flowId'] = true;
        $this->flowId = $flowId;
        return $this;
    }
    /**
     * To be deprecated - Use flow_id instead.
     *
     * @return string|null
     */
    public function getWorkflowId(): ?string
    {
        return $this->workflowId;
    }
    /**
     * To be deprecated - Use flow_id instead.
     *
     * @param string|null $workflowId
     *
     * @return self
     */
    public function setWorkflowId(?string $workflowId): self
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
}