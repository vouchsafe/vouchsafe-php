<?php

namespace Vouchsafe\OpenAPI\Model;

class NationalIdExtractedDetails
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
     * Issuing country as an ISO 3166-1 alpha-3 code (e.g. "GBR"), or null if unavailable.
     *
     * @var string|null
     */
    protected $issuingCountry;
    /**
     * ICAO document format (e.g. "TD1"), or null if unavailable.
     *
     * @var string|null
     */
    protected $icaoFormat;
    /**
     * Raw MRZ string extracted from the document, or null if unavailable.
     *
     * @var string|null
     */
    protected $mrzCode;
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
     * Issuing country as an ISO 3166-1 alpha-3 code (e.g. "GBR"), or null if unavailable.
     *
     * @return string|null
     */
    public function getIssuingCountry(): ?string
    {
        return $this->issuingCountry;
    }
    /**
     * Issuing country as an ISO 3166-1 alpha-3 code (e.g. "GBR"), or null if unavailable.
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
    /**
     * ICAO document format (e.g. "TD1"), or null if unavailable.
     *
     * @return string|null
     */
    public function getIcaoFormat(): ?string
    {
        return $this->icaoFormat;
    }
    /**
     * ICAO document format (e.g. "TD1"), or null if unavailable.
     *
     * @param string|null $icaoFormat
     *
     * @return self
     */
    public function setIcaoFormat(?string $icaoFormat): self
    {
        $this->initialized['icaoFormat'] = true;
        $this->icaoFormat = $icaoFormat;
        return $this;
    }
    /**
     * Raw MRZ string extracted from the document, or null if unavailable.
     *
     * @return string|null
     */
    public function getMrzCode(): ?string
    {
        return $this->mrzCode;
    }
    /**
     * Raw MRZ string extracted from the document, or null if unavailable.
     *
     * @param string|null $mrzCode
     *
     * @return self
     */
    public function setMrzCode(?string $mrzCode): self
    {
        $this->initialized['mrzCode'] = true;
        $this->mrzCode = $mrzCode;
        return $this;
    }
}