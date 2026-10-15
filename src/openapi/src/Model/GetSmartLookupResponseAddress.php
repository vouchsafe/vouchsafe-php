<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class GetSmartLookupResponseAddress implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var string
     */
    protected $residenceNumber;
    /**
     * The name of the building, e.g. `"Rose Cottage"` or `"Rose Court"`.
     *
     * @var string
     */
    protected $buildingName;
    /**
     * The street or road name.
     *
     * @var string
     */
    protected $street;
    /**
     * The city or town.
     *
     * @var string
     */
    protected $city;
    /**
     * The postcode.
     *
     * @var string
     */
    protected $postcode;
    /**
     * The country name, e.g. `"United Kingdom"`.
     *
     * @var string
     */
    protected $country;
    /**
     * The state, province or county.
     *
     * @var string
     */
    protected $region;
    /**
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * The street number, with any flat or unit number in front, e.g. `"10"` or `"Flat 2, 10"`.
     *
     * @return string
     */
    public function getResidenceNumber(): string
    {
        return $this->residenceNumber;
    }
    /**
     * The street number, with any flat or unit number in front, e.g. `"10"` or `"Flat 2, 10"`.
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
     * @return string
     */
    public function getBuildingName(): string
    {
        return $this->buildingName;
    }
    /**
     * The name of the building, e.g. `"Rose Cottage"` or `"Rose Court"`.
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
     * The street or road name.
     *
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }
    /**
     * The street or road name.
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
     * The city or town.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }
    /**
     * The city or town.
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
     * The postcode.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * The postcode.
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
     * The country name, e.g. `"United Kingdom"`.
     *
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
    /**
     * The country name, e.g. `"United Kingdom"`.
     *
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
     * The state, province or county.
     *
     * @return string
     */
    public function getRegion(): string
    {
        return $this->region;
    }
    /**
     * The state, province or county.
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
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`.
     *
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * The two-letter ISO 3166-1 alpha-2 country code, e.g. `"GB"`.
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
    public function definedProperties(): array
    {
        return ['residenceNumber' => ['residence_number', 'getResidenceNumber', 'setResidenceNumber'], 'buildingName' => ['building_name', 'getBuildingName', 'setBuildingName'], 'street' => ['street', 'getStreet', 'setStreet'], 'city' => ['city', 'getCity', 'setCity'], 'postcode' => ['postcode', 'getPostcode', 'setPostcode'], 'country' => ['country', 'getCountry', 'setCountry'], 'region' => ['region', 'getRegion', 'setRegion'], 'countryCode' => ['country_code', 'getCountryCode', 'setCountryCode']];
    }
}