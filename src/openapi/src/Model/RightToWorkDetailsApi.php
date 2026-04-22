<?php

namespace Vouchsafe\OpenAPI\Model;

class RightToWorkDetailsApi
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
     * First name, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Last name, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Date of birth, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $dateOfBirth;
    /**
     * Share code used to check a person's right to work in the UK.
     *
     * @var string|null
     */
    protected $shareCode;
    /**
     * GOV.UK reference number for the check, if evisa record was found. Otherwise null.
     *
     * @var string|null
     */
    protected $referenceNumber;
    /**
     * Expiry date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * @var EvisaConditionsSuccessApi|EvisaConditionsFailedApi
     */
    protected $evisaConditions;
    /**
     * First name, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * First name, if extracted. Otherwise null.
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
    /**
     * Last name, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Last name, if extracted. Otherwise null.
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
     * Date of birth, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * Date of birth, if extracted. Otherwise null.
     *
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
     * Share code used to check a person's right to work in the UK.
     *
     * @return string|null
     */
    public function getShareCode(): ?string
    {
        return $this->shareCode;
    }
    /**
     * Share code used to check a person's right to work in the UK.
     *
     * @param string|null $shareCode
     *
     * @return self
     */
    public function setShareCode(?string $shareCode): self
    {
        $this->initialized['shareCode'] = true;
        $this->shareCode = $shareCode;
        return $this;
    }
    /**
     * GOV.UK reference number for the check, if evisa record was found. Otherwise null.
     *
     * @return string|null
     */
    public function getReferenceNumber(): ?string
    {
        return $this->referenceNumber;
    }
    /**
     * GOV.UK reference number for the check, if evisa record was found. Otherwise null.
     *
     * @param string|null $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * Expiry date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Expiry date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
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
     * @return EvisaConditionsSuccessApi|EvisaConditionsFailedApi
     */
    public function getEvisaConditions()
    {
        return $this->evisaConditions;
    }
    /**
     * @param EvisaConditionsSuccessApi|EvisaConditionsFailedApi $evisaConditions
     *
     * @return self
     */
    public function setEvisaConditions($evisaConditions): self
    {
        $this->initialized['evisaConditions'] = true;
        $this->evisaConditions = $evisaConditions;
        return $this;
    }
}