<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifiedClaims extends \ArrayObject
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
     * @var VerifiedClaimsDocument
     */
    protected $document;
    /**
     * @var VerifiedClaimsAddress
     */
    protected $address;
    /**
     * @var string
     */
    protected $nationality;
    /**
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $fullName;
    /**
     * @var string
     */
    protected $familyName;
    /**
     * @var string
     */
    protected $givenName;
    /**
     * @return VerifiedClaimsDocument
     */
    public function getDocument(): VerifiedClaimsDocument
    {
        return $this->document;
    }
    /**
     * @param VerifiedClaimsDocument $document
     *
     * @return self
     */
    public function setDocument(VerifiedClaimsDocument $document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * @return VerifiedClaimsAddress
     */
    public function getAddress(): VerifiedClaimsAddress
    {
        return $this->address;
    }
    /**
     * @param VerifiedClaimsAddress $address
     *
     * @return self
     */
    public function setAddress(VerifiedClaimsAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }
    /**
     * @param string $nationality
     *
     * @return self
     */
    public function setNationality(string $nationality): self
    {
        $this->initialized['nationality'] = true;
        $this->nationality = $nationality;
        return $this;
    }
    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->initialized['phoneNumber'] = true;
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }
    /**
     * @param string $fullName
     *
     * @return self
     */
    public function setFullName(string $fullName): self
    {
        $this->initialized['fullName'] = true;
        $this->fullName = $fullName;
        return $this;
    }
    /**
     * @return string
     */
    public function getFamilyName(): string
    {
        return $this->familyName;
    }
    /**
     * @param string $familyName
     *
     * @return self
     */
    public function setFamilyName(string $familyName): self
    {
        $this->initialized['familyName'] = true;
        $this->familyName = $familyName;
        return $this;
    }
    /**
     * @return string
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }
    /**
     * @param string $givenName
     *
     * @return self
     */
    public function setGivenName(string $givenName): self
    {
        $this->initialized['givenName'] = true;
        $this->givenName = $givenName;
        return $this;
    }
}