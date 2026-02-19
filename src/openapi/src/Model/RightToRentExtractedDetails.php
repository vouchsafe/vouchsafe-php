<?php

namespace Vouchsafe\OpenAPI\Model;

class RightToRentExtractedDetails
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
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $lastName;
    /**
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $shareCode;
    /**
     * @var string
     */
    protected $referenceNumber;
    /**
     * Expiration date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * Start date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
     * Only returned for `ImmigrationStatus` and `RightToRent` sub-types — not returned for `RightToWork`.
     *
     * @var string|null
     */
    protected $validFrom;
    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
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
    public function getShareCode(): string
    {
        return $this->shareCode;
    }
    /**
     * @param string $shareCode
     *
     * @return self
     */
    public function setShareCode(string $shareCode): self
    {
        $this->initialized['shareCode'] = true;
        $this->shareCode = $shareCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Expiration date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Expiration date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
     *
     * @param string|null $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Start date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
     * Only returned for `ImmigrationStatus` and `RightToRent` sub-types — not returned for `RightToWork`.
     *
     * @return string|null
     */
    public function getValidFrom(): ?string
    {
        return $this->validFrom;
    }
    /**
    * Start date in `yyyy-MM-dd` format, or `null` for indefinite statuses (e.g. Settled, ILR).
    Only returned for `ImmigrationStatus` and `RightToRent` sub-types — not returned for `RightToWork`.
    *
    * @param string|null $validFrom
    *
    * @return self
    */
    public function setValidFrom(?string $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
        return $this;
    }
}