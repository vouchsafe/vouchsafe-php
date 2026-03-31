<?php

namespace Vouchsafe\OpenAPI\Model;

class AdverseMediaInput
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
     * Given name
     *
     * @var string
     */
    protected $firstName;
    /**
     * Middle name(s), space-separated. Including middle names improves search precision.
     *
     * @var string
     */
    protected $middleNames;
    /**
     * Family name
     *
     * @var string
     */
    protected $lastName;
    /**
     * City, county, or country. Strongly recommended: including a location significantly improves
     * search precision and reduces false positives for common names.
     *
     * @var string
     */
    protected $location;
    /**
     * Adversity score threshold (0–100). Articles scoring at or above this value are
     * treated as strong matches and will cause the check to fail. Defaults to 70.
     *
     * @var float
     */
    protected $threshold;
    /**
     * Given name
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * Given name
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Middle name(s), space-separated. Including middle names improves search precision.
     *
     * @return string
     */
    public function getMiddleNames(): string
    {
        return $this->middleNames;
    }
    /**
     * Middle name(s), space-separated. Including middle names improves search precision.
     *
     * @param string $middleNames
     *
     * @return self
     */
    public function setMiddleNames(string $middleNames): self
    {
        $this->initialized['middleNames'] = true;
        $this->middleNames = $middleNames;
        return $this;
    }
    /**
     * Family name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * Family name
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * City, county, or country. Strongly recommended: including a location significantly improves
     * search precision and reduces false positives for common names.
     *
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }
    /**
    * City, county, or country. Strongly recommended: including a location significantly improves
    search precision and reduces false positives for common names.
    *
    * @param string $location
    *
    * @return self
    */
    public function setLocation(string $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * Adversity score threshold (0–100). Articles scoring at or above this value are
     * treated as strong matches and will cause the check to fail. Defaults to 70.
     *
     * @return float
     */
    public function getThreshold(): float
    {
        return $this->threshold;
    }
    /**
    * Adversity score threshold (0–100). Articles scoring at or above this value are
    treated as strong matches and will cause the check to fail. Defaults to 70.
    *
    * @param float $threshold
    *
    * @return self
    */
    public function setThreshold(float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
}