<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifiedClaimsDocument extends \ArrayObject
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
    protected $issuingCountry;
    /**
     * @var string
     */
    protected $expirationDate;
    /**
     * @var string
     */
    protected $issueDate;
    /**
     * @var string
     */
    protected $number;
    /**
     * @var string
     */
    protected $type;
    /**
     * @return string
     */
    public function getIssuingCountry(): string
    {
        return $this->issuingCountry;
    }
    /**
     * @param string $issuingCountry
     *
     * @return self
     */
    public function setIssuingCountry(string $issuingCountry): self
    {
        $this->initialized['issuingCountry'] = true;
        $this->issuingCountry = $issuingCountry;
        return $this;
    }
    /**
     * @return string
     */
    public function getExpirationDate(): string
    {
        return $this->expirationDate;
    }
    /**
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(string $expirationDate): self
    {
        $this->initialized['expirationDate'] = true;
        $this->expirationDate = $expirationDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }
    /**
     * @param string $issueDate
     *
     * @return self
     */
    public function setIssueDate(string $issueDate): self
    {
        $this->initialized['issueDate'] = true;
        $this->issueDate = $issueDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
    /**
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->initialized['number'] = true;
        $this->number = $number;
        return $this;
    }
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}