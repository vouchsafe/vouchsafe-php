<?php

namespace Vouchsafe\OpenAPI\Model;

class GetSmartLookupResponse
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
    protected $id;
    /**
     * @var string
     */
    protected $teamId;
    /**
     * @var list<string>
     */
    protected $checks;
    /**
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * @var string|null
     */
    protected $postcode;
    /**
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var string
     */
    protected $email;
    /**
     * @var string
     */
    protected $phone;
    /**
     * @var CreditBureauVerificationReport
     */
    protected $creditBureauVerificationReport;
    /**
     * @var OnlineFootprintVerificationReport
     */
    protected $onlineFootprintVerificationReport;
    /**
     * @var AmlVerificationReport
     */
    protected $amlVerificationReport;
    /**
     * @var SmartLookupMetadata
     */
    protected $metadata;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getTeamId(): string
    {
        return $this->teamId;
    }
    /**
     * @param string $teamId
     *
     * @return self
     */
    public function setTeamId(string $teamId): self
    {
        $this->initialized['teamId'] = true;
        $this->teamId = $teamId;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getChecks(): array
    {
        return $this->checks;
    }
    /**
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
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * @param string|null $firstLineOfAddress
     *
     * @return self
     */
    public function setFirstLineOfAddress(?string $firstLineOfAddress): self
    {
        $this->initialized['firstLineOfAddress'] = true;
        $this->firstLineOfAddress = $firstLineOfAddress;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
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
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }
    /**
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
     * @return CreditBureauVerificationReport
     */
    public function getCreditBureauVerificationReport(): CreditBureauVerificationReport
    {
        return $this->creditBureauVerificationReport;
    }
    /**
     * @param CreditBureauVerificationReport $creditBureauVerificationReport
     *
     * @return self
     */
    public function setCreditBureauVerificationReport(CreditBureauVerificationReport $creditBureauVerificationReport): self
    {
        $this->initialized['creditBureauVerificationReport'] = true;
        $this->creditBureauVerificationReport = $creditBureauVerificationReport;
        return $this;
    }
    /**
     * @return OnlineFootprintVerificationReport
     */
    public function getOnlineFootprintVerificationReport(): OnlineFootprintVerificationReport
    {
        return $this->onlineFootprintVerificationReport;
    }
    /**
     * @param OnlineFootprintVerificationReport $onlineFootprintVerificationReport
     *
     * @return self
     */
    public function setOnlineFootprintVerificationReport(OnlineFootprintVerificationReport $onlineFootprintVerificationReport): self
    {
        $this->initialized['onlineFootprintVerificationReport'] = true;
        $this->onlineFootprintVerificationReport = $onlineFootprintVerificationReport;
        return $this;
    }
    /**
     * @return AmlVerificationReport
     */
    public function getAmlVerificationReport(): AmlVerificationReport
    {
        return $this->amlVerificationReport;
    }
    /**
     * @param AmlVerificationReport $amlVerificationReport
     *
     * @return self
     */
    public function setAmlVerificationReport(AmlVerificationReport $amlVerificationReport): self
    {
        $this->initialized['amlVerificationReport'] = true;
        $this->amlVerificationReport = $amlVerificationReport;
        return $this;
    }
    /**
     * @return SmartLookupMetadata
     */
    public function getMetadata(): SmartLookupMetadata
    {
        return $this->metadata;
    }
    /**
     * @param SmartLookupMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(SmartLookupMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}