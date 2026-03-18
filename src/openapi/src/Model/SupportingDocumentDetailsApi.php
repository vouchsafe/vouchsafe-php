<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentDetailsApi
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
     * Date of birth, if birth certificate was used.
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
     * What the uploaded document was categorised as.
     *
     * @var string|null
     */
    protected $documentCategory;
    /**
     * The date of the document.
     *
     * @var string|null
     */
    protected $documentDate;
    /**
     * The issuer of the document.
     *
     * @var string|null
     */
    protected $issuer;
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
     * Date of birth, if birth certificate was used.
     *
     * @return string|null
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }
    /**
     * Date of birth, if birth certificate was used.
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
     * What the uploaded document was categorised as.
     *
     * @return string|null
     */
    public function getDocumentCategory(): ?string
    {
        return $this->documentCategory;
    }
    /**
     * What the uploaded document was categorised as.
     *
     * @param string|null $documentCategory
     *
     * @return self
     */
    public function setDocumentCategory(?string $documentCategory): self
    {
        $this->initialized['documentCategory'] = true;
        $this->documentCategory = $documentCategory;
        return $this;
    }
    /**
     * The date of the document.
     *
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
     * The date of the document.
     *
     * @param string|null $documentDate
     *
     * @return self
     */
    public function setDocumentDate(?string $documentDate): self
    {
        $this->initialized['documentDate'] = true;
        $this->documentDate = $documentDate;
        return $this;
    }
    /**
     * The issuer of the document.
     *
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
     * The issuer of the document.
     *
     * @param string|null $issuer
     *
     * @return self
     */
    public function setIssuer(?string $issuer): self
    {
        $this->initialized['issuer'] = true;
        $this->issuer = $issuer;
        return $this;
    }
}