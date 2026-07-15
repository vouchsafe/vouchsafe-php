<?php

namespace Vouchsafe\OpenAPI\Model;

class ClaimDetails extends \ArrayObject
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
     * @var string|null
     */
    protected $email;
    /**
     * @var string|null
     */
    protected $phoneNumber;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $dateOfBirth;
    /**
     * Structured address, or `null` for verifications with only the flat address fields.
     *
     * @var ClaimDetailsAddress|null
     */
    protected $address;
    /**
     * To be deprecated. Use `address` instead.
     *
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * To be deprecated. Use `address` instead.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**
     * @param string|null $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(?string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
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
    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
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
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * @param string|null $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Structured address, or `null` for verifications with only the flat address fields.
     *
     * @return ClaimDetailsAddress|null
     */
    public function getAddress(): ?ClaimDetailsAddress
    {
        return $this->address;
    }
    /**
     * Structured address, or `null` for verifications with only the flat address fields.
     *
     * @param ClaimDetailsAddress|null $address
     *
     * @return self
     */
    public function setAddress(?ClaimDetailsAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * To be deprecated. Use `address` instead.
     *
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * To be deprecated. Use `address` instead.
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
     * To be deprecated. Use `address` instead.
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * To be deprecated. Use `address` instead.
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
}