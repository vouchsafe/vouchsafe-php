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
     * Last name that was checked against the credit bureau.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * First name that was checked against the credit bureau.
     *
     * @var string|null
     */
    protected $firstName;
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
    /**
     * Last name that was checked against the credit bureau.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Last name that was checked against the credit bureau.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * First name that was checked against the credit bureau.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * First name that was checked against the credit bureau.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
}