<?php

namespace Vouchsafe\OpenAPI\Model;

class Flow
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
     * The ID of the flow, useful when requesting verifications
     *
     * @var string
     */
    protected $id;
    /**
     * The human-readable name of the flow
     *
     * @var string
     */
    protected $name;
    /**
     * When the flow was last modified, formatted as an ISO 8601 string
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * When the flow was created, formatted as an ISO 8601 string
     *
     * @var string
     */
    protected $createdAt;
    /**
     * When the flow was archived, formatted as an ISO 8601 string. Defaults to null if the flow is active
     *
     * @var string|null
     */
    protected $archivedAt;
    /**
     * How many tokens the flow uses per completed verification. [What are tokens?](https://help.vouchsafe.id/en/articles/11075413-what-are-tokens)
     *
     * @var float
     */
    protected $tokensPerVerification;
    /**
     * The ID of the flow, useful when requesting verifications
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the flow, useful when requesting verifications
     *
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
     * The human-readable name of the flow
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The human-readable name of the flow
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * When the flow was last modified, formatted as an ISO 8601 string
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * When the flow was last modified, formatted as an ISO 8601 string
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * When the flow was created, formatted as an ISO 8601 string
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When the flow was created, formatted as an ISO 8601 string
     *
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
     * When the flow was archived, formatted as an ISO 8601 string. Defaults to null if the flow is active
     *
     * @return string|null
     */
    public function getArchivedAt(): ?string
    {
        return $this->archivedAt;
    }
    /**
     * When the flow was archived, formatted as an ISO 8601 string. Defaults to null if the flow is active
     *
     * @param string|null $archivedAt
     *
     * @return self
     */
    public function setArchivedAt(?string $archivedAt): self
    {
        $this->initialized['archivedAt'] = true;
        $this->archivedAt = $archivedAt;
        return $this;
    }
    /**
     * How many tokens the flow uses per completed verification. [What are tokens?](https://help.vouchsafe.id/en/articles/11075413-what-are-tokens)
     *
     * @return float
     */
    public function getTokensPerVerification(): float
    {
        return $this->tokensPerVerification;
    }
    /**
     * How many tokens the flow uses per completed verification. [What are tokens?](https://help.vouchsafe.id/en/articles/11075413-what-are-tokens)
     *
     * @param float $tokensPerVerification
     *
     * @return self
     */
    public function setTokensPerVerification(float $tokensPerVerification): self
    {
        $this->initialized['tokensPerVerification'] = true;
        $this->tokensPerVerification = $tokensPerVerification;
        return $this;
    }
}