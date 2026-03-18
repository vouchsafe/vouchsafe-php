<?php

namespace Vouchsafe\OpenAPI\Model;

class AmlMatchApi
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
    protected $caption;
    /**
     * @var float
     */
    protected $score;
    /**
     * @var string
     */
    protected $firstSeen;
    /**
     * @var string
     */
    protected $lastSeen;
    /**
     * @var AmlMatchApiProperties
     */
    protected $properties;
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
    public function getCaption(): string
    {
        return $this->caption;
    }
    /**
     * @param string $caption
     *
     * @return self
     */
    public function setCaption(string $caption): self
    {
        $this->initialized['caption'] = true;
        $this->caption = $caption;
        return $this;
    }
    /**
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * @param float $score
     *
     * @return self
     */
    public function setScore(float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * @return string
     */
    public function getFirstSeen(): string
    {
        return $this->firstSeen;
    }
    /**
     * @param string $firstSeen
     *
     * @return self
     */
    public function setFirstSeen(string $firstSeen): self
    {
        $this->initialized['firstSeen'] = true;
        $this->firstSeen = $firstSeen;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastSeen(): string
    {
        return $this->lastSeen;
    }
    /**
     * @param string $lastSeen
     *
     * @return self
     */
    public function setLastSeen(string $lastSeen): self
    {
        $this->initialized['lastSeen'] = true;
        $this->lastSeen = $lastSeen;
        return $this;
    }
    /**
     * @return AmlMatchApiProperties
     */
    public function getProperties(): AmlMatchApiProperties
    {
        return $this->properties;
    }
    /**
     * @param AmlMatchApiProperties $properties
     *
     * @return self
     */
    public function setProperties(AmlMatchApiProperties $properties): self
    {
        $this->initialized['properties'] = true;
        $this->properties = $properties;
        return $this;
    }
}