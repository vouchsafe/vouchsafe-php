<?php

namespace Vouchsafe\OpenAPI\Model;

class DigitalIdExtractedDetailsApi
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
     * Date of birth (YYYY-MM-DD), if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $dateOfBirth;
    /**
     * First line of address, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * Postcode, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $postcode;
    /**
     * Structured address, if available.
     *
     * @var DigitalIdExtractedDetailsApiAddress|null
     */
    protected $address;
    /**
     * Phone number, if provided by the provider.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * Nationality, if provided by the provider.
     *
     * @var string
     */
    protected $nationality;
    /**
     * Document number, if provided by the provider.
     *
     * @var string
     */
    protected $documentNumber;
    /**
     * Document type (for example IdCard), if provided by the provider.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Document issue date (YYYY-MM-DD), if provided by the provider.
     *
     * @var string
     */
    protected $issueDate;
    /**
     * Document expiration date (YYYY-MM-DD), if provided by the provider.
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * Issuing country, if provided by the provider.
     *
     * @var string
     */
    protected $issuingCountry;
    /**
     * Immigration status, if provided by the provider (eVisa flows).
     *
     * @var string
     */
    protected $immigrationStatus;
    /**
     * UK Home Office share code. Only present for eVisa flows.
     *
     * @var string
     */
    protected $shareCode;
    /**
     * GOV.UK reference number for the check. Only present for eVisa flows.
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * Start date (YYYY-MM-DD) of the immigration permission. Only present for ImmigrationStatus and RightToRent eVisa flows.
     *
     * @var string
     */
    protected $validFrom;
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
     * Date of birth (YYYY-MM-DD), if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * Date of birth (YYYY-MM-DD), if extracted. Otherwise null.
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
     * First line of address, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * First line of address, if extracted. Otherwise null.
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
     * Postcode, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * Postcode, if extracted. Otherwise null.
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
     * Structured address, if available.
     *
     * @return DigitalIdExtractedDetailsApiAddress|null
     */
    public function getAddress(): ?DigitalIdExtractedDetailsApiAddress
    {
        return $this->address;
    }
    /**
     * Structured address, if available.
     *
     * @param DigitalIdExtractedDetailsApiAddress|null $address
     *
     * @return self
     */
    public function setAddress(?DigitalIdExtractedDetailsApiAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Phone number, if provided by the provider.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    /**
     * Phone number, if provided by the provider.
     *
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
     * Nationality, if provided by the provider.
     *
     * @return string
     */
    public function getNationality(): string
    {
        return $this->nationality;
    }
    /**
     * Nationality, if provided by the provider.
     *
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
     * Document number, if provided by the provider.
     *
     * @return string
     */
    public function getDocumentNumber(): string
    {
        return $this->documentNumber;
    }
    /**
     * Document number, if provided by the provider.
     *
     * @param string $documentNumber
     *
     * @return self
     */
    public function setDocumentNumber(string $documentNumber): self
    {
        $this->initialized['documentNumber'] = true;
        $this->documentNumber = $documentNumber;
        return $this;
    }
    /**
     * Document type (for example IdCard), if provided by the provider.
     *
     * @return string
     */
    public function getDocumentType(): string
    {
        return $this->documentType;
    }
    /**
     * Document type (for example IdCard), if provided by the provider.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(string $documentType): self
    {
        $this->initialized['documentType'] = true;
        $this->documentType = $documentType;
        return $this;
    }
    /**
     * Document issue date (YYYY-MM-DD), if provided by the provider.
     *
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }
    /**
     * Document issue date (YYYY-MM-DD), if provided by the provider.
     *
     * @param string $issueDate
     *
     * @return self
     */
    public function setIssueDate(string $issueDate): self
    {
        $this->initialized['issueDate'] = true;
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * Document expiration date (YYYY-MM-DD), if provided by the provider.
     *
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * Document expiration date (YYYY-MM-DD), if provided by the provider.
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * Issuing country, if provided by the provider.
     *
     * @return string
     */
    public function getIssuingCountry(): string
    {
        return $this->issuingCountry;
    }
    /**
     * Issuing country, if provided by the provider.
     *
     * @param string $issuingCountry
     *
     * @return self
     */
    public function setIssuingCountry(string $issuingCountry): self
    {
        $this->initialized['issuingCountry'] = true;
        $this->issuingCountry = $issuingCountry;
        return $this;
    }
    /**
     * Immigration status, if provided by the provider (eVisa flows).
     *
     * @return string
     */
    public function getImmigrationStatus(): string
    {
        return $this->immigrationStatus;
    }
    /**
     * Immigration status, if provided by the provider (eVisa flows).
     *
     * @param string $immigrationStatus
     *
     * @return self
     */
    public function setImmigrationStatus(string $immigrationStatus): self
    {
        $this->initialized['immigrationStatus'] = true;
        $this->immigrationStatus = $immigrationStatus;
        return $this;
    }
    /**
     * UK Home Office share code. Only present for eVisa flows.
     *
     * @return string
     */
    public function getShareCode(): string
    {
        return $this->shareCode;
    }
    /**
     * UK Home Office share code. Only present for eVisa flows.
     *
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
     * GOV.UK reference number for the check. Only present for eVisa flows.
     *
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * GOV.UK reference number for the check. Only present for eVisa flows.
     *
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
     * Start date (YYYY-MM-DD) of the immigration permission. Only present for ImmigrationStatus and RightToRent eVisa flows.
     *
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }
    /**
     * Start date (YYYY-MM-DD) of the immigration permission. Only present for ImmigrationStatus and RightToRent eVisa flows.
     *
     * @param string $validFrom
     *
     * @return self
     */
    public function setValidFrom(string $validFrom): self
    {
        $this->initialized['validFrom'] = true;
        $this->validFrom = $validFrom;
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