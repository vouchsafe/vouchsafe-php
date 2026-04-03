<?php

namespace Vouchsafe\OpenAPI\Model;

class DrivingLicenceExtractedDetails
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
     * Extracted first name, or null if unavailable.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Extracted last name, or null if unavailable.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Extracted card or document number, or null if unavailable.
     *
     * @var string|null
     */
    protected $documentNumber;
    /**
     * Extracted date of birth (YYYY-MM-DD), or null if unavailable.
     *
     * @var string|null
     */
    protected $dateOfBirth;
    /**
     * Extracted expiry date (YYYY-MM-DD), or null if unavailable.
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * Issuing authority (e.g. "DVLA"), or null if unavailable.
     *
     * @var string|null
     */
    protected $issuingAuthority;
    /**
     * Date the licence was issued (YYYY-MM-DD), or null if unavailable.
     *
     * @var string|null
     */
    protected $dateOfIssue;
    /**
     * Issuing country code, or null if unavailable.
     *
     * @var string|null
     */
    protected $issuingCountry;
    /**
     * Extracted first name, or null if unavailable.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Extracted first name, or null if unavailable.
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
     * Extracted last name, or null if unavailable.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Extracted last name, or null if unavailable.
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
     * Extracted card or document number, or null if unavailable.
     *
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }
    /**
     * Extracted card or document number, or null if unavailable.
     *
     * @param string|null $documentNumber
     *
     * @return self
     */
    public function setDocumentNumber(?string $documentNumber): self
    {
        $this->initialized['documentNumber'] = true;
        $this->documentNumber = $documentNumber;
        return $this;
    }
    /**
     * Extracted date of birth (YYYY-MM-DD), or null if unavailable.
     *
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * Extracted date of birth (YYYY-MM-DD), or null if unavailable.
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
     * Extracted expiry date (YYYY-MM-DD), or null if unavailable.
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Extracted expiry date (YYYY-MM-DD), or null if unavailable.
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
     * Issuing authority (e.g. "DVLA"), or null if unavailable.
     *
     * @return string|null
     */
    public function getIssuingAuthority(): ?string
    {
        return $this->issuingAuthority;
    }
    /**
     * Issuing authority (e.g. "DVLA"), or null if unavailable.
     *
     * @param string|null $issuingAuthority
     *
     * @return self
     */
    public function setIssuingAuthority(?string $issuingAuthority): self
    {
        $this->initialized['issuingAuthority'] = true;
        $this->issuingAuthority = $issuingAuthority;
        return $this;
    }
    /**
     * Date the licence was issued (YYYY-MM-DD), or null if unavailable.
     *
     * @return string|null
     */
    public function getDateOfIssue(): ?string
    {
        return $this->dateOfIssue;
    }
    /**
     * Date the licence was issued (YYYY-MM-DD), or null if unavailable.
     *
     * @param string|null $dateOfIssue
     *
     * @return self
     */
    public function setDateOfIssue(?string $dateOfIssue): self
    {
        $this->initialized['dateOfIssue'] = true;
        $this->dateOfIssue = $dateOfIssue;
        return $this;
    }
    /**
     * Issuing country code, or null if unavailable.
     *
     * @return string|null
     */
    public function getIssuingCountry(): ?string
    {
        return $this->issuingCountry;
    }
    /**
     * Issuing country code, or null if unavailable.
     *
     * @param string|null $issuingCountry
     *
     * @return self
     */
    public function setIssuingCountry(?string $issuingCountry): self
    {
        $this->initialized['issuingCountry'] = true;
        $this->issuingCountry = $issuingCountry;
        return $this;
    }
}