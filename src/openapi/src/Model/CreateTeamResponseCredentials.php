<?php

namespace Vouchsafe\OpenAPI\Model;

class CreateTeamResponseCredentials extends \ArrayObject
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
     * Client secret for API authentication
     *
     * @var string
     */
    protected $clientSecret;
    /**
     * Client ID for API authentication
     *
     * @var string
     */
    protected $clientId;
    /**
     * @var string
     */
    protected $environment;
    /**
     * Name of the API key
     *
     * @var string
     */
    protected $name;
    /**
     * Client secret for API authentication
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }
    /**
     * Client secret for API authentication
     *
     * @param string $clientSecret
     *
     * @return self
     */
    public function setClientSecret(string $clientSecret): self
    {
        $this->initialized['clientSecret'] = true;
        $this->clientSecret = $clientSecret;
        return $this;
    }
    /**
     * Client ID for API authentication
     *
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }
    /**
     * Client ID for API authentication
     *
     * @param string $clientId
     *
     * @return self
     */
    public function setClientId(string $clientId): self
    {
        $this->initialized['clientId'] = true;
        $this->clientId = $clientId;
        return $this;
    }
    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }
    /**
     * @param string $environment
     *
     * @return self
     */
    public function setEnvironment(string $environment): self
    {
        $this->initialized['environment'] = true;
        $this->environment = $environment;
        return $this;
    }
    /**
     * Name of the API key
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the API key
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
}