<?php

namespace Vouchsafe\OpenAPI\Model;

class CreateDigitalIdSessionInput extends \ArrayObject
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
     * @var KnownClaims
     */
    protected $knownClaims;
    /**
     * @var string
     */
    protected $redirectUrl;
    /**
     * @var string
     */
    protected $flowId;
    /**
     * @return KnownClaims
     */
    public function getKnownClaims(): KnownClaims
    {
        return $this->knownClaims;
    }
    /**
     * @param KnownClaims $knownClaims
     *
     * @return self
     */
    public function setKnownClaims(KnownClaims $knownClaims): self
    {
        $this->initialized['knownClaims'] = true;
        $this->knownClaims = $knownClaims;
        return $this;
    }
    /**
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
    /**
     * @param string $redirectUrl
     *
     * @return self
     */
    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->initialized['redirectUrl'] = true;
        $this->redirectUrl = $redirectUrl;
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
}