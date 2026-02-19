<?php

namespace Vouchsafe\OpenAPI\Model;

class ImmigrationStatusInput
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
     * @var ImmigrationStatusInputPayload
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
     * @return ImmigrationStatusInputPayload
     */
    public function getPayload(): ImmigrationStatusInputPayload
    {
        return $this->payload;
    }
    /**
     * @param ImmigrationStatusInputPayload $payload
     *
     * @return self
     */
    public function setPayload(ImmigrationStatusInputPayload $payload): self
    {
        $this->initialized['payload'] = true;
        $this->payload = $payload;
        return $this;
    }
}