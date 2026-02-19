<?php

namespace Vouchsafe\OpenAPI\Model;

class CreateTeamInput
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
     * Path to the team's logo image.
     *
     * @var string
     */
    protected $logoUrl;
    /**
     * Email addresses of users to add as team administrators.
     *
     * @var list<string>
     */
    protected $teamAdminEmails;
    /**
     * @var string
     */
    protected $flowTemplate;
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
     * Path to the team's logo image.
     *
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
    /**
     * Path to the team's logo image.
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
     * Email addresses of users to add as team administrators.
     *
     * @return list<string>
     */
    public function getTeamAdminEmails(): array
    {
        return $this->teamAdminEmails;
    }
    /**
     * Email addresses of users to add as team administrators.
     *
     * @param list<string> $teamAdminEmails
     *
     * @return self
     */
    public function setTeamAdminEmails(array $teamAdminEmails): self
    {
        $this->initialized['teamAdminEmails'] = true;
        $this->teamAdminEmails = $teamAdminEmails;
        return $this;
    }
    /**
     * @return string
     */
    public function getFlowTemplate(): string
    {
        return $this->flowTemplate;
    }
    /**
     * @param string $flowTemplate
     *
     * @return self
     */
    public function setFlowTemplate(string $flowTemplate): self
    {
        $this->initialized['flowTemplate'] = true;
        $this->flowTemplate = $flowTemplate;
        return $this;
    }
}