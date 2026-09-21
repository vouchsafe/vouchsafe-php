<?php

namespace Vouchsafe\OpenAPI\Model;

class FraudBlocklistAlertResponse
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
    protected $createdAt;
    /**
     * @var string|null
     */
    protected $acknowledgedAt;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var list<string>
     */
    protected $matchedOn;
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
     * @return string|null
     */
    public function getAcknowledgedAt(): ?string
    {
        return $this->acknowledgedAt;
    }
    /**
     * @param string|null $acknowledgedAt
     *
     * @return self
     */
    public function setAcknowledgedAt(?string $acknowledgedAt): self
    {
        $this->initialized['acknowledgedAt'] = true;
        $this->acknowledgedAt = $acknowledgedAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }
    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self
    {
        $this->initialized['source'] = true;
        $this->source = $source;
        return $this;
    }
    /**
     * @return list<string>
     */
    public function getMatchedOn(): array
    {
        return $this->matchedOn;
    }
    /**
     * @param list<string> $matchedOn
     *
     * @return self
     */
    public function setMatchedOn(array $matchedOn): self
    {
        $this->initialized['matchedOn'] = true;
        $this->matchedOn = $matchedOn;
        return $this;
    }
}