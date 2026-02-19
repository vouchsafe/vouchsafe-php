<?php

namespace Vouchsafe\OpenAPI\Model;

class DigitalIdSession extends \ArrayObject
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
     * @var DigitalIdSessionEnrichments|null
     */
    protected $enrichments;
    /**
     * @var DigitalIdSessionVerifiedClaims|null
     */
    protected $verifiedClaims;
    /**
     * @var DigitalIdSessionKnownClaims|null
     */
    protected $knownClaims;
    /**
     * @var string|null
     */
    protected $providerId;
    /**
     * @var string
     */
    protected $flowId;
    /**
     * @var string|null
     */
    protected $redirectUrl;
    /**
     * @var string
     */
    protected $expiresAt;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $id;
    /**
     * @return DigitalIdSessionEnrichments|null
     */
    public function getEnrichments(): ?DigitalIdSessionEnrichments
    {
        return $this->enrichments;
    }
    /**
     * @param DigitalIdSessionEnrichments|null $enrichments
     *
     * @return self
     */
    public function setEnrichments(?DigitalIdSessionEnrichments $enrichments): self
    {
        $this->initialized['enrichments'] = true;
        $this->enrichments = $enrichments;
        return $this;
    }
    /**
     * @return DigitalIdSessionVerifiedClaims|null
     */
    public function getVerifiedClaims(): ?DigitalIdSessionVerifiedClaims
    {
        return $this->verifiedClaims;
    }
    /**
     * @param DigitalIdSessionVerifiedClaims|null $verifiedClaims
     *
     * @return self
     */
    public function setVerifiedClaims(?DigitalIdSessionVerifiedClaims $verifiedClaims): self
    {
        $this->initialized['verifiedClaims'] = true;
        $this->verifiedClaims = $verifiedClaims;
        return $this;
    }
    /**
     * @return DigitalIdSessionKnownClaims|null
     */
    public function getKnownClaims(): ?DigitalIdSessionKnownClaims
    {
        return $this->knownClaims;
    }
    /**
     * @param DigitalIdSessionKnownClaims|null $knownClaims
     *
     * @return self
     */
    public function setKnownClaims(?DigitalIdSessionKnownClaims $knownClaims): self
    {
        $this->initialized['knownClaims'] = true;
        $this->knownClaims = $knownClaims;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getProviderId(): ?string
    {
        return $this->providerId;
    }
    /**
     * @param string|null $providerId
     *
     * @return self
     */
    public function setProviderId(?string $providerId): self
    {
        $this->initialized['providerId'] = true;
        $this->providerId = $providerId;
        return $this;
    }
    /**
     * @return string
     */
    public function getFlowId(): string
    {
        return $this->flowId;
    }
    /**
     * @param string $flowId
     *
     * @return self
     */
    public function setFlowId(string $flowId): self
    {
        $this->initialized['flowId'] = true;
        $this->flowId = $flowId;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRedirectUrl(): ?string
    {
        return $this->redirectUrl;
    }
    /**
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
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
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
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
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
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
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
}