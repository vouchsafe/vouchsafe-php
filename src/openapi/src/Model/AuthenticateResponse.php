<?php

namespace Vouchsafe\OpenAPI\Model;

class AuthenticateResponse
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
    protected $accessToken;
    /**
     * @var string
     */
    protected $expiresAt;
    /**
     * Seconds until the token expires.
     *
     * @var int
     */
    protected $expiresIn;
    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }
    /**
     * @param string $accessToken
     *
     * @return self
     */
    public function setAccessToken(string $accessToken): self
    {
        $this->initialized['accessToken'] = true;
        $this->accessToken = $accessToken;
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
     * Seconds until the token expires.
     *
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }
    /**
     * Seconds until the token expires.
     *
     * @param int $expiresIn
     *
     * @return self
     */
    public function setExpiresIn(int $expiresIn): self
    {
        $this->initialized['expiresIn'] = true;
        $this->expiresIn = $expiresIn;
        return $this;
    }
}