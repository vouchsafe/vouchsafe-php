<?php

namespace Vouchsafe\OpenAPI\Model;

class RightToWorkInput
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
     * The type of eVisa verification to perform
     *
     * @var string
     */
    protected $subType;
    /**
     * @var RightToWorkInputPayload
     */
    protected $payload;
    /**
     * The type of eVisa verification to perform
     *
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    /**
     * The type of eVisa verification to perform
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType): self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
    /**
     * @return RightToWorkInputPayload
     */
    public function getPayload(): RightToWorkInputPayload
    {
        return $this->payload;
    }
    /**
     * @param RightToWorkInputPayload $payload
     *
     * @return self
     */
    public function setPayload(RightToWorkInputPayload $payload): self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
}