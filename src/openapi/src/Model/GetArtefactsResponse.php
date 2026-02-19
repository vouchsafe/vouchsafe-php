<?php

namespace Vouchsafe\OpenAPI\Model;

class GetArtefactsResponse
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
     * The requested artefact key
     *
     * @var string
     */
    protected $artefactKey;
    /**
     * Time-limited pre-signed URL to download the file
     *
     * @var string
     */
    protected $downloadUrl;
    /**
     * Expiry time of the download URL (ISO 8601 UTC)
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * Number of seconds until the download URL expires
     *
     * @var float
     */
    protected $expiresInSeconds;
    /**
     * The requested artefact key
     *
     * @return string
     */
    public function getArtefactKey(): string
    {
        return $this->artefactKey;
    }
    /**
     * The requested artefact key
     *
     * @param string $artefactKey
     *
     * @return self
     */
    public function setArtefactKey(string $artefactKey): self
    {
        $this->initialized['artefactKey'] = true;
        $this->artefactKey = $artefactKey;
        return $this;
    }
    /**
     * Time-limited pre-signed URL to download the file
     *
     * @return string
     */
    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }
    /**
     * Time-limited pre-signed URL to download the file
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
     * Expiry time of the download URL (ISO 8601 UTC)
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
     * Expiry time of the download URL (ISO 8601 UTC)
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
     * Number of seconds until the download URL expires
     *
     * @return float
     */
    public function getExpiresInSeconds(): float
    {
        return $this->expiresInSeconds;
    }
    /**
     * Number of seconds until the download URL expires
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