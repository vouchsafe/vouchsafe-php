<?php

namespace Vouchsafe\OpenAPI\Model;

class NationalIdDetailsApi
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
     * Document number, if extracted. Otherwise null.
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
     * Issuing country code, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $issuingCountry;
    /**
     * ICAO MRZ format, if detected. Otherwise null.
     *
     * @var string|null
     */
    protected $icaoFormat;
    /**
     * Raw MRZ string, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $mrzCode;
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
     * Document number, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }
    /**
     * Document number, if extracted. Otherwise null.
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
    /**
     * ICAO MRZ format, if detected. Otherwise null.
     *
     * @return string|null
     */
    public function getIcaoFormat(): ?string
    {
        return $this->icaoFormat;
    }
    /**
     * ICAO MRZ format, if detected. Otherwise null.
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
     * Raw MRZ string, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getMrzCode(): ?string
    {
        return $this->mrzCode;
    }
    /**
     * Raw MRZ string, if extracted. Otherwise null.
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