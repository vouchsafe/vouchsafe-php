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
     * @var mixed
     */
    protected $birthCountry;
    /**
     * @var mixed
     */
    protected $birthPlace;
    /**
     * @var string
     */
    protected $birthDate;
    /**
     * @var mixed
     */
    protected $position;
    /**
     * @var mixed
     */
    protected $country;
    /**
     * @var mixed
     */
    protected $notes;
    /**
     * @return mixed
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }
    /**
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
     * @return mixed
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }
    /**
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
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }
    /**
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
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
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
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
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
     * @return mixed
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
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