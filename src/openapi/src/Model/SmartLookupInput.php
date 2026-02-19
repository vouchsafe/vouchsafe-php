<?php

namespace Vouchsafe\OpenAPI\Model;

class SmartLookupInput
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
     * (required) — Given name(s)
     *
     * @var string
     */
    protected $firstName;
    /**
     * (required) — Family name
     *
     * @var string
     */
    protected $lastName;
    /**
     * (required)
     *
     * @var list<string>
     */
    protected $checks;
    /**
     * (conditionally required) - Required when checks includes CreditBureau; otherwise optional. Should be taken from GET /postcode endpoint
     *
     * @var string
     */
    protected $firstLineOfAddress;
    /**
     * (conditionally required) - Postcode used in GET /postcode. Required when checks includes CreditBureau; otherwise optional.
     *
     * @var string
     */
    protected $postcode;
    /**
     * (conditionally required) — Email address. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @var string
     */
    protected $email;
    /**
     * (conditionally required) — Phone number. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @var string
     */
    protected $phone;
    /**
     * (conditionally required) — Required when checks includes CreditBureau or AML; otherwise optional. Format as YYYY-MM-DD or ISO 8601
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * (conditionally required) — Used to set a threshold for OnlineFootprint and AML checks, otherwise defaulting to 50 and 96 for OnlineFootprint and AML respectively
     *
     * @var SmartLookupInputThresholds
     */
    protected $thresholds;
    /**
     * (required) — Given name(s)
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * (required) — Given name(s)
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
     * (required) — Family name
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * (required) — Family name
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
     * (required)
     *
     * @return list<string>
     */
    public function getChecks(): array
    {
        return $this->checks;
    }
    /**
     * (required)
     *
     * @param list<string> $checks
     *
     * @return self
     */
    public function setChecks(array $checks): self
    {
        $this->initialized['checks'] = true;
        $this->checks = $checks;
        return $this;
    }
    /**
     * (conditionally required) - Required when checks includes CreditBureau; otherwise optional. Should be taken from GET /postcode endpoint
     *
     * @return string
     */
    public function getFirstLineOfAddress(): string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * (conditionally required) - Required when checks includes CreditBureau; otherwise optional. Should be taken from GET /postcode endpoint
     *
     * @param string $firstLineOfAddress
     *
     * @return self
     */
    public function setFirstLineOfAddress(string $firstLineOfAddress): self
    {
        $this->initialized['firstLineOfAddress'] = true;
        $this->firstLineOfAddress = $firstLineOfAddress;
        return $this;
    }
    /**
     * (conditionally required) - Postcode used in GET /postcode. Required when checks includes CreditBureau; otherwise optional.
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * (conditionally required) - Postcode used in GET /postcode. Required when checks includes CreditBureau; otherwise optional.
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
     * (conditionally required) — Email address. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * (conditionally required) — Email address. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * (conditionally required) — Phone number. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
     * (conditionally required) — Phone number. Either email or phone is required when checks includes OnlineFootprint; otherwise optional.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->initialized['phone'] = true;
        $this->phone = $phone;
        return $this;
    }
    /**
     * (conditionally required) — Required when checks includes CreditBureau or AML; otherwise optional. Format as YYYY-MM-DD or ISO 8601
     *
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
     * (conditionally required) — Required when checks includes CreditBureau or AML; otherwise optional. Format as YYYY-MM-DD or ISO 8601
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
     * (conditionally required) — Used to set a threshold for OnlineFootprint and AML checks, otherwise defaulting to 50 and 96 for OnlineFootprint and AML respectively
     *
     * @return SmartLookupInputThresholds
     */
    public function getThresholds(): SmartLookupInputThresholds
    {
        return $this->thresholds;
    }
    /**
     * (conditionally required) — Used to set a threshold for OnlineFootprint and AML checks, otherwise defaulting to 50 and 96 for OnlineFootprint and AML respectively
     *
     * @param SmartLookupInputThresholds $thresholds
     *
     * @return self
     */
    public function setThresholds(SmartLookupInputThresholds $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;
        return $this;
    }
}