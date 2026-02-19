<?php

namespace Vouchsafe\OpenAPI\Model;

class ImmigrationStatusInputPayload extends \ArrayObject
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
     * Reason for the verification (max 50 characters)
     *
     * @var string
     */
    protected $reason;
    /**
     * Job title of the person being verified
     *
     * @var string
     */
    protected $jobTitle;
    /**
     * Name of the company requesting the verification
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
     * Reason for the verification (max 50 characters)
     *
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }
    /**
     * Reason for the verification (max 50 characters)
     *
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->initialized['reason'] = true;
        $this->reason = $reason;
        return $this;
    }
    /**
     * Job title of the person being verified
     *
     * @return string
     */
    public function getJobTitle(): string
    {
        return $this->jobTitle;
    }
    /**
     * Job title of the person being verified
     *
     * @param string $jobTitle
     *
     * @return self
     */
    public function setJobTitle(string $jobTitle): self
    {
        $this->initialized['jobTitle'] = true;
        $this->jobTitle = $jobTitle;
        return $this;
    }
    /**
     * Name of the company requesting the verification
     *
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }
    /**
     * Name of the company requesting the verification
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