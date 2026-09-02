<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class AmlMatchApiProperties implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
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
     * @var string|list<string>
     */
    protected $birthCountry;
    /**
     * Place of birth of the entity.
     *
     * @var string|list<string>
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
     * @var string|list<string>
     */
    protected $position;
    /**
     * Countries associated with the entity.
     *
     * @var string|list<string>
     */
    protected $country;
    /**
     * Freeform notes associated with the entity.
     *
     * @var string|list<string>
     */
    protected $notes;
    /**
     * Country of birth of the entity.
     *
     * @return string|list<string>
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }
    /**
     * Country of birth of the entity.
     *
     * @param string|list<string> $birthCountry
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
     * @return string|list<string>
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }
    /**
     * Place of birth of the entity.
     *
     * @param string|list<string> $birthPlace
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
     * @return string|list<string>
     */
    public function getPosition()
    {
        return $this->position;
    }
    /**
     * Known positions or roles held by the entity.
     *
     * @param string|list<string> $position
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
     * @return string|list<string>
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * Countries associated with the entity.
     *
     * @param string|list<string> $country
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
     * @return string|list<string>
     */
    public function getNotes()
    {
        return $this->notes;
    }
    /**
     * Freeform notes associated with the entity.
     *
     * @param string|list<string> $notes
     *
     * @return self
     */
    public function setNotes($notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['birthCountry' => ['birth_country', 'getBirthCountry', 'setBirthCountry'], 'birthPlace' => ['birth_place', 'getBirthPlace', 'setBirthPlace'], 'birthDate' => ['birth_date', 'getBirthDate', 'setBirthDate'], 'position' => ['position', 'getPosition', 'setPosition'], 'country' => ['country', 'getCountry', 'setCountry'], 'notes' => ['notes', 'getNotes', 'setNotes']];
    }
}