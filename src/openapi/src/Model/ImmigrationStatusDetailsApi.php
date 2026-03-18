<?php

namespace Vouchsafe\OpenAPI\Model;

class ImmigrationStatusDetailsApi
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
     * Share code used to check a person's immigration status (e.g., Settled, Skilled Worker, Youth Mobility Scheme).
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
     * Immigration status label (for example Settled, Skilled Worker), if record was found. Otherwise null.
     *
     * @var string|null
     */
    protected $immigrationStatus;
    /**
     * ISO 3166-1 alpha-3 nationality code (for example NGA), if record was found. Otherwise null.
     *
     * @var string|null
     */
    protected $nationality;
    /**
     * Expiry date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * Start date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @var string|null
     */
    protected $issueDate;
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
     * Share code used to check a person's immigration status (e.g., Settled, Skilled Worker, Youth Mobility Scheme).
     *
     * @return string|null
     */
    public function getShareCode(): ?string
    {
        return $this->shareCode;
    }
    /**
     * Share code used to check a person's immigration status (e.g., Settled, Skilled Worker, Youth Mobility Scheme).
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
     * Immigration status label (for example Settled, Skilled Worker), if record was found. Otherwise null.
     *
     * @return string|null
     */
    public function getImmigrationStatus(): ?string
    {
        return $this->immigrationStatus;
    }
    /**
     * Immigration status label (for example Settled, Skilled Worker), if record was found. Otherwise null.
     *
     * @param string|null $immigrationStatus
     *
     * @return self
     */
    public function setImmigrationStatus(?string $immigrationStatus): self
    {
        $this->initialized['immigrationStatus'] = true;
        $this->immigrationStatus = $immigrationStatus;
        return $this;
    }
    /**
     * ISO 3166-1 alpha-3 nationality code (for example NGA), if record was found. Otherwise null.
     *
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    /**
     * ISO 3166-1 alpha-3 nationality code (for example NGA), if record was found. Otherwise null.
     *
     * @param string|null $nationality
     *
     * @return self
     */
    public function setNationality(?string $nationality): self
    {
        $this->initialized['nationality'] = true;
        $this->nationality = $nationality;
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
     * Start date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Start date in yyyy-MM-dd, or null for indefinite statuses (for example Settled, ILR).
     *
     * @param string|null $issueDate
     *
     * @return self
     */
    public function setIssueDate(?string $issueDate): self
    {
        $this->initialized['issueDate'] = true;
        $this->issueDate = $issueDate;
        return $this;
    }
}