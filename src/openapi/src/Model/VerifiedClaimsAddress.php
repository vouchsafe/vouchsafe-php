<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifiedClaimsAddress extends \ArrayObject
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
     * @var string
     */
    protected $fullAddress;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $city;
    /**
     * @var string
     */
    protected $line2;
    /**
     * @var string
     */
    protected $line1;
    /**
     * @return string
     */
    public function getFullAddress(): string
    {
        return $this->fullAddress;
    }
    /**
     * @param string $fullAddress
     *
     * @return self
     */
    public function setFullAddress(string $fullAddress): self
    {
        $this->initialized['fullAddress'] = true;
        $this->fullAddress = $fullAddress;
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
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }
    /**
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->initialized['postalCode'] = true;
        $this->postalCode = $postalCode;
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
    public function getLine2(): string
    {
        return $this->line2;
    }
    /**
     * @param string $line2
     *
     * @return self
     */
    public function setLine2(string $line2): self
    {
        $this->initialized['line2'] = true;
        $this->line2 = $line2;
        return $this;
    }
    /**
     * @return string
     */
    public function getLine1(): string
    {
        return $this->line1;
    }
    /**
     * @param string $line1
     *
     * @return self
     */
    public function setLine1(string $line1): self
    {
        $this->initialized['line1'] = true;
        $this->line1 = $line1;
        return $this;
    }
}