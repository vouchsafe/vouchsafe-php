<?php

namespace Vouchsafe\OpenAPI\Model;

class StepAddressCreditReferenceAgencyApiExtractedDetails extends \ArrayObject
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
     * Source of the address information.
     *
     * @var string|null
     */
    protected $addressSource;
    /**
     * Postcode of the address.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * First line of the address.
     *
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * Source of the address information.
     *
     * @return string|null
     */
    public function getAddressSource(): ?string
    {
        return $this->addressSource;
    }
    /**
     * Source of the address information.
     *
     * @param string|null $addressSource
     *
     * @return self
     */
    public function setAddressSource(?string $addressSource): self
    {
        $this->initialized['addressSource'] = true;
        $this->addressSource = $addressSource;
        return $this;
    }
    /**
     * Postcode of the address.
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Postcode of the address.
     *
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * First line of the address.
     *
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * First line of the address.
     *
     * @param string|null $firstLineOfAddress
     *
     * @return self
     */
    public function setFirstLineOfAddress(?string $firstLineOfAddress): self
    {
        $this->initialized['firstLineOfAddress'] = true;
        $this->firstLineOfAddress = $firstLineOfAddress;
        return $this;
    }
}