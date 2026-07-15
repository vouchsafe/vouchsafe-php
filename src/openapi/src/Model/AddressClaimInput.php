<?php

namespace Vouchsafe\OpenAPI\Model;

class AddressClaimInput
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
     * Residence/building number, e.g. "10" or "Flat 1". Required unless `building_name` is provided.
     *
     * @var string
     */
    protected $residenceNumber;
    /**
     * Building name, e.g. "Rose Cottage". Required unless `residence_number` is provided.
     *
     * @var string
     */
    protected $buildingName;
    /**
     * Street / road name. Optional — some addresses have no street.
     *
     * @var string
     */
    protected $street;
    /**
     * City / town. Required.
     *
     * @var string
     */
    protected $city;
    /**
     * Postcode. Optional — not all countries use postcodes. Must be a valid postcode when provided.
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
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * Residence/building number, e.g. "10" or "Flat 1". Required unless `building_name` is provided.
     *
     * @return string
     */
    public function getResidenceNumber(): string
    {
        return $this->residenceNumber;
    }
    /**
     * Residence/building number, e.g. "10" or "Flat 1". Required unless `building_name` is provided.
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
     * Building name, e.g. "Rose Cottage". Required unless `residence_number` is provided.
     *
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }
    /**
     * Building name, e.g. "Rose Cottage". Required unless `residence_number` is provided.
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
     * Street / road name. Optional — some addresses have no street.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * Street / road name. Optional — some addresses have no street.
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
     * City / town. Required.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * City / town. Required.
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
     * Postcode. Optional — not all countries use postcodes. Must be a valid postcode when provided.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * Postcode. Optional — not all countries use postcodes. Must be a valid postcode when provided.
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
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * ISO 3166-1 alpha-2 country code, e.g. "GB". Required.
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