<?php

namespace Vouchsafe\OpenAPI\Model;

class PostcodeResponse
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
     * @var list<string>
     */
    protected $addresses;
    /**
     * @return list<string>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * @param list<string> $addresses
     *
     * @return self
     */
    public function setAddresses(array $addresses): self
    {
        $this->initialized['addresses'] = true;
        $this->addresses = $addresses;
        return $this;
    }
}