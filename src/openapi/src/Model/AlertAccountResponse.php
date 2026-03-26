<?php

namespace Vouchsafe\OpenAPI\Model;

class AlertAccountResponse
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
    protected $alertsEnabledAt;
    /**
     * @var string|null
     */
    protected $lastScreenedAt;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string|null
     */
    protected $riskType;
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
    public function getAlertsEnabledAt(): ?string
    {
        return $this->alertsEnabledAt;
    }
    /**
     * @param string|null $alertsEnabledAt
     *
     * @return self
     */
    public function setAlertsEnabledAt(?string $alertsEnabledAt): self
    {
        $this->initialized['alertsEnabledAt'] = true;
        $this->alertsEnabledAt = $alertsEnabledAt;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getLastScreenedAt(): ?string
    {
        return $this->lastScreenedAt;
    }
    /**
     * @param string|null $lastScreenedAt
     *
     * @return self
     */
    public function setLastScreenedAt(?string $lastScreenedAt): self
    {
        $this->initialized['lastScreenedAt'] = true;
        $this->lastScreenedAt = $lastScreenedAt;
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
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getRiskType(): ?string
    {
        return $this->riskType;
    }
    /**
     * @param string|null $riskType
     *
     * @return self
     */
    public function setRiskType(?string $riskType): self
    {
        $this->initialized['riskType'] = true;
        $this->riskType = $riskType;
        return $this;
    }
}