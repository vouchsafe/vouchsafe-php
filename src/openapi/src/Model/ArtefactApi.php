<?php

namespace Vouchsafe\OpenAPI\Model;

class ArtefactApi
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
    protected $role;
    /**
     * @var string
     */
    protected $key;
    /**
     * The file's media type, for artefacts uploaded as a document.
     *
     * @var string
     */
    protected $mimeType;
    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }
    /**
     * @param string $key
     *
     * @return self
     */
    public function setKey(string $key): self
    {
        $this->initialized['key'] = true;
        $this->key = $key;
        return $this;
    }
    /**
     * The file's media type, for artefacts uploaded as a document.
     *
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }
    /**
     * The file's media type, for artefacts uploaded as a document.
     *
     * @param string $mimeType
     *
     * @return self
     */
    public function setMimeType(string $mimeType): self
    {
        $this->initialized['mimeType'] = true;
        $this->mimeType = $mimeType;
        return $this;
    }
}