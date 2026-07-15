<?php

namespace Vouchsafe\OpenAPI\Model;

class Address
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
     * House or flat number, e.g. "10" or "Flat 1".
     *
     * @var string
     */
    protected $residenceNumber;
    /**
     * House or building name, e.g. "Rose Cottage".
     *
     * @var string
     */
    protected $buildingName;
    /**
     * @var string
     */
    protected $street;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $postcode;
    /**
     * @var string
     */
    protected $country;
    /**
     * State, province, or county.
     *
     * @var string
     */
    protected $region;
    /**
     * ISO 3166-1 alpha-2 country code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * House or flat number, e.g. "10" or "Flat 1".
     *
     * @return string
     */
    public function getResidenceNumber(): string
    {
        return $this->residenceNumber;
    }
    /**
     * House or flat number, e.g. "10" or "Flat 1".
     *
     * @param string $residenceNumber
     *
     * @return self
     */
    public function setResidenceNumber(string $residenceNumber): self
    {
        $this->initialized['residenceNumber'] = true;
        $this->residenceNumber = $residenceNumber;
        return $this;
    }
    /**
     * House or building name, e.g. "Rose Cottage".
     *
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }
    /**
     * House or building name, e.g. "Rose Cottage".
     *
     * @param string $buildingName
     *
     * @return self
     */
    public function setBuildingName(string $buildingName): self
    {
        $this->initialized['buildingName'] = true;
        $this->buildingName = $buildingName;
        return $this;
    }
    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * @param string $street
     *
     * @return self
     */
    public function setStreet(string $street): self
    {
        $this->initialized['street'] = true;
        $this->street = $street;
        return $this;
    }
    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city): self
    {
        $this->initialized['city'] = true;
        $this->city = $city;
        return $this;
    }
    /**
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * State, province, or county.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * State, province, or county.
     *
     * @param string $region
     *
     * @return self
     */
    public function setRegion(string $region): self
    {
        $this->initialized['region'] = true;
        $this->region = $region;
        return $this;
    }
    /**
     * ISO 3166-1 alpha-2 country code.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * ISO 3166-1 alpha-2 country code.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
}