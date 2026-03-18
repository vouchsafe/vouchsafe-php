<?php

namespace Vouchsafe\OpenAPI\Model;

class DrivingLicenceDetailsApi
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
     * Licence number, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $documentNumber;
    /**
     * Expiry date, if present and extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $expirationDate;
    /**
     * Issue date, if present and extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $issueDate;
    /**
     * Issuing country code, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $issuingCountry;
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
     * Licence number, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }
    /**
     * Licence number, if extracted. Otherwise null.
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
     * Expiry date, if present and extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }
    /**
     * Expiry date, if present and extracted. Otherwise null.
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
     * Issue date, if present and extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Issue date, if present and extracted. Otherwise null.
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
    /**
     * Issuing country code, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getIssuingCountry(): ?string
    {
        return $this->issuingCountry;
    }
    /**
     * Issuing country code, if extracted. Otherwise null.
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