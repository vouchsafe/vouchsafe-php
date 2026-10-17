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
     * Unique identifier for the matched entity.
     *
     * @var string
     */
    protected $id;
    /**
     * Display name of the matched entity.
     *
     * @var string
     */
    protected $caption;
    /**
     * Similarity score for this match.
     *
     * @var float
     */
    protected $score;
    /**
     * ISO 8601 date when the entity was first seen in the sanctions list.
     *
     * @var string
     */
    protected $firstSeen;
    /**
     * ISO 8601 date when the entity was last seen in the sanctions list.
     *
     * @var string
     */
    protected $lastSeen;
    /**
     * @var AmlMatchApiProperties
     */
    protected $properties;
    /**
     * Unique identifier for the matched entity.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Unique identifier for the matched entity.
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
     * Display name of the matched entity.
     *
     * @return string
     */
    public function getCaption(): string
    {
        return $this->caption;
    }
    /**
     * Display name of the matched entity.
     *
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
     * Similarity score for this match.
     *
     * @return float
     */
    public function getScore(): float
    {
        return $this->score;
    }
    /**
     * Similarity score for this match.
     *
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
     * ISO 8601 date when the entity was first seen in the sanctions list.
     *
     * @return string
     */
    public function getFirstSeen(): string
    {
        return $this->firstSeen;
    }
    /**
     * ISO 8601 date when the entity was first seen in the sanctions list.
     *
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
     * ISO 8601 date when the entity was last seen in the sanctions list.
     *
     * @return string
     */
    public function getLastSeen(): string
    {
        return $this->lastSeen;
    }
    /**
     * ISO 8601 date when the entity was last seen in the sanctions list.
     *
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