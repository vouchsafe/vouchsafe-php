<?php

namespace Vouchsafe\OpenAPI\Model;

class AddressInput
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
     * Residence/building number, e.g. "10" or "Flat 1". Required (or `building_name`) for CreditBureau.
     *
     * @var string
     */
    protected $residenceNumber;
    /**
     * Building name, e.g. "Rose Cottage". Required (or `residence_number`) for CreditBureau.
     *
     * @var string
     */
    protected $buildingName;
    /**
     * Street / road name. Required for CreditBureau.
     *
     * @var string
     */
    protected $street;
    /**
     * City / town. Required for CreditBureau.
     *
     * @var string
     */
    protected $city;
    /**
     * Postcode. Required for CreditBureau.
     *
     * @var string
     */
    protected $postcode;
    /**
     * State, province, or county. Optional.
     *
     * @var string
     */
    protected $region;
    /**
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required for CreditBureau.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Residence/building number, e.g. "10" or "Flat 1". Required (or `building_name`) for CreditBureau.
     *
     * @return string
     */
    public function getResidenceNumber(): string
    {
        return $this->residenceNumber;
    }
    /**
     * Residence/building number, e.g. "10" or "Flat 1". Required (or `building_name`) for CreditBureau.
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
     * Building name, e.g. "Rose Cottage". Required (or `residence_number`) for CreditBureau.
     *
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }
    /**
     * Building name, e.g. "Rose Cottage". Required (or `residence_number`) for CreditBureau.
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
     * Street / road name. Required for CreditBureau.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street / road name. Required for CreditBureau.
     *
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
     * City / town. Required for CreditBureau.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City / town. Required for CreditBureau.
     *
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
     * Postcode. Required for CreditBureau.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Postcode. Required for CreditBureau.
     *
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
     * State, province, or county. Optional.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * State, province, or county. Optional.
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
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required for CreditBureau.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required for CreditBureau.
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