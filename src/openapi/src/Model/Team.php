<?php

namespace Vouchsafe\OpenAPI\Model;

class Team
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
     * The client ID of the team, as shown in the dashboard
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the team
     *
     * @var string
     */
    protected $name;
    /**
     * The public name of the team, shown in end-user facing screens and communications. If set, overrides the name.
     *
     * @var string
     */
    protected $publicName;
    /**
     * Which plan is the team on?
     *
     * @var string
     */
    protected $plan;
    /**
     * Path to the team's logo image
     *
     * @var string
     */
    protected $logoUrl;
    /**
     * When the team's details were last changed, formatted as an ISO 8601 string
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * When the team was created, formatted as an ISO 8601 string
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The client ID of the team, as shown in the dashboard
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The client ID of the team, as shown in the dashboard
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
     * The name of the team
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the team
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
     * The public name of the team, shown in end-user facing screens and communications. If set, overrides the name.
     *
     * @return string
     */
    public function getPublicName(): string
    {
        return $this->publicName;
    }
    /**
     * The public name of the team, shown in end-user facing screens and communications. If set, overrides the name.
     *
     * @param string $publicName
     *
     * @return self
     */
    public function setPublicName(string $publicName): self
    {
        $this->initialized['publicName'] = true;
        $this->publicName = $publicName;
        return $this;
    }
    /**
     * Which plan is the team on?
     *
     * @return string
     */
    public function getPlan(): string
    {
        return $this->plan;
    }
    /**
     * Which plan is the team on?
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(string $plan): self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
        return $this;
    }
    /**
     * Path to the team's logo image
     *
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
    /**
     * Path to the team's logo image
     *
     * @param string $logoUrl
     *
     * @return self
     */
    public function setLogoUrl(string $logoUrl): self
    {
        $this->initialized['logoUrl'] = true;
        $this->logoUrl = $logoUrl;
        return $this;
    }
    /**
     * When the team's details were last changed, formatted as an ISO 8601 string
     *
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }
    /**
     * When the team's details were last changed, formatted as an ISO 8601 string
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
     * When the team was created, formatted as an ISO 8601 string
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When the team was created, formatted as an ISO 8601 string
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
}