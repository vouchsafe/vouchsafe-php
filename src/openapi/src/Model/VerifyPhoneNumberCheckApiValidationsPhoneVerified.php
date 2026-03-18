<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifyPhoneNumberCheckApiValidationsPhoneVerified extends \ArrayObject
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
     * ISO 8601 timestamp for when the phone number was verified.
     *
     * @var string
     */
    protected $verifiedAt;
    /**
     * @var string
     */
    protected $status;
    /**
     * ISO 8601 timestamp for when the phone number was verified.
     *
     * @return string
     */
    public function getVerifiedAt(): string
    {
        return $this->verifiedAt;
    }
    /**
     * ISO 8601 timestamp for when the phone number was verified.
     *
     * @param string $verifiedAt
     *
     * @return self
     */
    public function setVerifiedAt(string $verifiedAt): self
    {
        $this->initialized['verifiedAt'] = true;
        $this->verifiedAt = $verifiedAt;
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
}