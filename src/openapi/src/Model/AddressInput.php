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
     * The street number, with any flat or unit number in front, e.g. `"10"` or `"Flat 2, 10"`.
     * 
     * Required for the credit bureau check, unless `building_name` is provided.
     *
     * @var string
     */
    protected $residenceNumber;
    /**
     * The name of the building, e.g. `"Rose Cottage"` or `"Rose Court"`.
     * 
     * Required for the credit bureau check, unless `residence_number` is provided.
     *
     * @var string
     */
    protected $buildingName;
    /**
     * The street or road name. Optional, but leaving it out may lower match rates.
     *
     * @var string
     */
    protected $street;
    /**
     * The city or town. Required for CreditBureau.
     *
     * @var string
     */
    protected $city;
    /**
     * The postcode. Required for CreditBureau.
     *
     * @var string
     */
    protected $postcode;
    /**
     * The state, province or county. Optional.
     *
     * @var string
     */
    protected $region;
    /**
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`. Required for CreditBureau.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The street number, with any flat or unit number in front, e.g. `"10"` or `"Flat 2, 10"`.
     * 
     * Required for the credit bureau check, unless `building_name` is provided.
     *
     * @return string
     */
    public function getResidenceNumber(): string
    {
        return $this->residenceNumber;
    }
    /**
    * The street number, with any flat or unit number in front, e.g. `"10"` or `"Flat 2, 10"`.
    
    Required for the credit bureau check, unless `building_name` is provided.
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
     * The name of the building, e.g. `"Rose Cottage"` or `"Rose Court"`.
     * 
     * Required for the credit bureau check, unless `residence_number` is provided.
     *
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }
    /**
    * The name of the building, e.g. `"Rose Cottage"` or `"Rose Court"`.
    
    Required for the credit bureau check, unless `residence_number` is provided.
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
     * The street or road name. Optional, but leaving it out may lower match rates.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * The street or road name. Optional, but leaving it out may lower match rates.
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
     * The city or town. Required for CreditBureau.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * The city or town. Required for CreditBureau.
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
     * The postcode. Required for CreditBureau.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * The postcode. Required for CreditBureau.
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
     * The state, province or county. Optional.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The state, province or county. Optional.
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
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`. Required for CreditBureau.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`. Required for CreditBureau.
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