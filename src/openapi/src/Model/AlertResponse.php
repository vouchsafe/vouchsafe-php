<?php

namespace Vouchsafe\OpenAPI\Model;

class AlertResponse
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
     * @var list<AlertMatchResponse>
     */
    protected $matches;
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
     * @return list<AlertMatchResponse>
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
    /**
     * @param list<AlertMatchResponse> $matches
     *
     * @return self
     */
    public function setMatches(array $matches): self
    {
        $this->initialized['matches'] = true;
        $this->matches = $matches;
        return $this;
    }
}