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
     * Single-line addresses.
     *
     * @var list<string>
     */
    protected $addresses;
    /**
     * Structured addresses. Feed straight into POST /smart-lookups.
     *
     * @var list<PostcodeFormattedAddress>
     */
    protected $addressesFormatted;
    /**
     * Single-line addresses.
     *
     * @return list<string>
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }
    /**
     * Single-line addresses.
     *
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
    /**
     * Structured addresses. Feed straight into POST /smart-lookups.
     *
     * @return list<PostcodeFormattedAddress>
     */
    public function getAddressesFormatted(): array
    {
        return $this->addressesFormatted;
    }
    /**
     * Structured addresses. Feed straight into POST /smart-lookups.
     *
     * @param list<PostcodeFormattedAddress> $addressesFormatted
     *
     * @return self
     */
    public function setAddressesFormatted(array $addressesFormatted): self
    {
        $this->initialized['addressesFormatted'] = true;
        $this->addressesFormatted = $addressesFormatted;
        return $this;
    }
}