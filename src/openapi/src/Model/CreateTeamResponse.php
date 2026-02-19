<?php

namespace Vouchsafe\OpenAPI\Model;

class CreateTeamResponse
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
     * Unique identifier for the created team
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the team.
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
     * ISO 8601 timestamp of team creation
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Production API credentials for this team
     *
     * @var CreateTeamResponseCredentials
     */
    protected $credentials;
    /**
     * Unique identifier for the created team
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the created team
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
     * The name of the team.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the team.
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
     * ISO 8601 timestamp of team creation
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * ISO 8601 timestamp of team creation
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
     * Production API credentials for this team
     *
     * @return CreateTeamResponseCredentials
     */
    public function getCredentials(): CreateTeamResponseCredentials
    {
        return $this->credentials;
    }
    /**
     * Production API credentials for this team
     *
     * @param CreateTeamResponseCredentials $credentials
     *
     * @return self
     */
    public function setCredentials(CreateTeamResponseCredentials $credentials): self
    {
        $this->initialized['credentials'] = true;
        $this->credentials = $credentials;
        return $this;
    }
}