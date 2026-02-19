<?php

namespace Vouchsafe\OpenAPI\Model;

class RightToRentInputPayload extends \ArrayObject
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
     * Role of the person requesting the verification
     *
     * @var string
     */
    protected $role;
    /**
     * Name of the company or agency requesting the verification
     *
     * @var string
     */
    protected $companyName;
    /**
     * Date of birth in YYYY-MM-DD or ISO 8601 format
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * The 9-character share code from the UK Home Office
     *
     * @var string
     */
    protected $shareCode;
    /**
     * Role of the person requesting the verification
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * Role of the person requesting the verification
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Name of the company or agency requesting the verification
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Name of the company or agency requesting the verification
     *
     * @param string $companyName
     *
     * @return self
     */
    public function setCompanyName(string $companyName): self
    {
        $this->initialized['companyName'] = true;
        $this->companyName = $companyName;
        return $this;
    }
    /**
     * Date of birth in YYYY-MM-DD or ISO 8601 format
     *
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
     * Date of birth in YYYY-MM-DD or ISO 8601 format
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
     * The 9-character share code from the UK Home Office
     *
     * @return string
     */
    public function getShareCode(): string
    {
        return $this->shareCode;
    }
    /**
     * The 9-character share code from the UK Home Office
     *
     * @param string $shareCode
     *
     * @return self
     */
    public function setShareCode(string $shareCode): self
    {
        $this->initialized['shareCode'] = true;
        $this->shareCode = $shareCode;
        return $this;
    }
}