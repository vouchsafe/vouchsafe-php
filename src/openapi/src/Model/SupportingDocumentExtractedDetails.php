<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentExtractedDetails
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
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * @var string|null
     */
    protected $postcode;
    /**
     * @var string|null
     */
    protected $documentDate;
    /**
     * @var string|null
     */
    protected $documentCategory;
    /**
     * @var string|null
     */
    protected $uniqueIdentifier;
    /**
     * @var string|null
     */
    protected $issuer;
    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
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
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
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
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
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
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
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
     * @return string|null
     */
    public function getDocumentDate(): ?string
    {
        return $this->documentDate;
    }
    /**
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
     * @return string|null
     */
    public function getDocumentCategory(): ?string
    {
        return $this->documentCategory;
    }
    /**
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
     * @return string|null
     */
    public function getUniqueIdentifier(): ?string
    {
        return $this->uniqueIdentifier;
    }
    /**
     * @param string|null $uniqueIdentifier
     *
     * @return self
     */
    public function setUniqueIdentifier(?string $uniqueIdentifier): self
    {
        $this->initialized['uniqueIdentifier'] = true;
        $this->uniqueIdentifier = $uniqueIdentifier;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getIssuer(): ?string
    {
        return $this->issuer;
    }
    /**
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