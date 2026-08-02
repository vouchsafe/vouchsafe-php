<?php

namespace Vouchsafe\OpenAPI\Model;

class CoverageItem
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
     * Machine-readable identifier for this item, which can be passed to other endpoints as a `sub_type` where supported.
     *
     * @var string|null
     */
    protected $id;
    /**
     * Display name, e.g. "Passport", "ConnectID"
     *
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $type;
    /**
     * Two-letter country codes this item is supported in, or an empty array if it's supported globally
     *
     * @var list<string>
     */
    protected $countryCodes;
    /**
     * Provider logo/icon URL, or null if none exists
     *
     * @var string|null
     */
    protected $image;
    /**
     * Machine-readable identifier for this item, which can be passed to other endpoints as a `sub_type` where supported.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Machine-readable identifier for this item, which can be passed to other endpoints as a `sub_type` where supported.
     *
     * @param string|null $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Display name, e.g. "Passport", "ConnectID"
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Display name, e.g. "Passport", "ConnectID"
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Two-letter country codes this item is supported in, or an empty array if it's supported globally
     *
     * @return list<string>
     */
    public function getCountryCodes(): array
    {
        return $this->countryCodes;
    }
    /**
     * Two-letter country codes this item is supported in, or an empty array if it's supported globally
     *
     * @param list<string> $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(array $countryCodes): self
    {
        $this->initialized['countryCodes'] = true;
        $this->countryCodes = $countryCodes;
        return $this;
    }
    /**
     * Provider logo/icon URL, or null if none exists
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }
    /**
     * Provider logo/icon URL, or null if none exists
     *
     * @param string|null $image
     *
     * @return self
     */
    public function setImage(?string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}