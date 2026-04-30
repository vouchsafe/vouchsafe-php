<?php

namespace Vouchsafe\OpenAPI\Model;

class AmlMatchApiProperties extends \ArrayObject
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
     * Country of birth of the entity.
     *
     * @var mixed
     */
    protected $birthCountry;
    /**
     * Place of birth of the entity.
     *
     * @var mixed
     */
    protected $birthPlace;
    /**
     * Date of birth of the entity.
     *
     * @var string
     */
    protected $birthDate;
    /**
     * Known positions or roles held by the entity.
     *
     * @var mixed
     */
    protected $position;
    /**
     * Countries associated with the entity.
     *
     * @var mixed
     */
    protected $country;
    /**
     * Freeform notes associated with the entity.
     *
     * @var mixed
     */
    protected $notes;
    /**
     * Country of birth of the entity.
     *
     * @return mixed
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }
    /**
     * Country of birth of the entity.
     *
     * @param mixed $birthCountry
     *
     * @return self
     */
    public function setBirthCountry($birthCountry): self
    {
        $this->initialized['birthCountry'] = true;
        $this->birthCountry = $birthCountry;
        return $this;
    }
    /**
     * Place of birth of the entity.
     *
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }
    /**
     * Place of birth of the entity.
     *
     * @param mixed $birthPlace
     *
     * @return self
     */
    public function setBirthPlace($birthPlace): self
    {
        $this->initialized['birthPlace'] = true;
        $this->birthPlace = $birthPlace;
        return $this;
    }
    /**
     * Date of birth of the entity.
     *
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }
    /**
     * Date of birth of the entity.
     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(string $birthDate): self
    {
        $this->initialized['birthDate'] = true;
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * Known positions or roles held by the entity.
     *
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Known positions or roles held by the entity.
     *
     * @param mixed $position
     *
     * @return self
     */
    public function setPosition($position): self
    {
        $this->initialized['position'] = true;
        $this->position = $position;
        return $this;
    }
    /**
     * Countries associated with the entity.
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Countries associated with the entity.
     *
     * @param mixed $country
     *
     * @return self
     */
    public function setCountry($country): self
    {
        $this->initialized['country'] = true;
        $this->country = $country;
        return $this;
    }
    /**
     * Freeform notes associated with the entity.
     *
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Freeform notes associated with the entity.
     *
     * @param mixed $notes
     *
     * @return self
     */
    public function setNotes($notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
}