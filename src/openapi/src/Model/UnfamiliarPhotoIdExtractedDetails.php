<?php

namespace Vouchsafe\OpenAPI\Model;

class UnfamiliarPhotoIdExtractedDetails
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
     * Extracted date of birth (YYYY-MM-DD), or undefined if not available.
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * Extracted expiry date (YYYY-MM-DD), or undefined if not available.
     *
     * @var string
     */
    protected $expirationDate;
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
     * Extracted date of birth (YYYY-MM-DD), or undefined if not available.
     *
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
     * Extracted date of birth (YYYY-MM-DD), or undefined if not available.
     *
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
     * Extracted expiry date (YYYY-MM-DD), or undefined if not available.
     *
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * Extracted expiry date (YYYY-MM-DD), or undefined if not available.
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
}