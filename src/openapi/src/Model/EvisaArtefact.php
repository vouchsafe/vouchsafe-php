<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaArtefact
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
    protected $role;
    /**
     * Pre-signed download URL. Expires after `expires_in_seconds`.
     *
     * @var string
     */
    protected $downloadUrl;
    /**
     * ISO 8601 timestamp when the download URL expires.
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * Time in seconds until the download URL expires (1800 seconds / 30 minutes).
     *
     * @var float
     */
    protected $expiresInSeconds;
    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Pre-signed download URL. Expires after `expires_in_seconds`.
     *
     * @return string
     */
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }
    /**
     * Pre-signed download URL. Expires after `expires_in_seconds`.
     *
     * @param string $downloadUrl
     *
     * @return self
     */
    public function setDownloadUrl(string $downloadUrl): self
    {
        $this->initialized['downloadUrl'] = true;
        $this->downloadUrl = $downloadUrl;
        return $this;
    }
    /**
     * ISO 8601 timestamp when the download URL expires.
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     * ISO 8601 timestamp when the download URL expires.
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
     * Time in seconds until the download URL expires (1800 seconds / 30 minutes).
     *
     * @return float
     */
    public function getExpiresInSeconds(): float
    {
        return $this->expiresInSeconds;
    }
    /**
     * Time in seconds until the download URL expires (1800 seconds / 30 minutes).
     *
     * @param float $expiresInSeconds
     *
     * @return self
     */
    public function setExpiresInSeconds(float $expiresInSeconds): self
    {
        $this->initialized['expiresInSeconds'] = true;
        $this->expiresInSeconds = $expiresInSeconds;
        return $this;
    }
}