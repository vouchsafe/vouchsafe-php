<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class ReviewUserCheckApiValidations implements AdditionalPropertiesInterface
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
     * @var ValidationOutcomeApi
     */
    protected $refereeConfirmedPhoto;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeConfirmedDateOfBirth;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeConfirmedName;
    /**
     * @return ValidationOutcomeApi
     */
    public function getRefereeConfirmedPhoto(): ValidationOutcomeApi
    {
        return $this->refereeConfirmedPhoto;
    }
    /**
     * @param ValidationOutcomeApi $refereeConfirmedPhoto
     *
     * @return self
     */
    public function setRefereeConfirmedPhoto(ValidationOutcomeApi $refereeConfirmedPhoto): self
    {
        $this->initialized['refereeConfirmedPhoto'] = true;
        $this->refereeConfirmedPhoto = $refereeConfirmedPhoto;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getRefereeConfirmedDateOfBirth(): ValidationOutcomeApi
    {
        return $this->refereeConfirmedDateOfBirth;
    }
    /**
     * @param ValidationOutcomeApi $refereeConfirmedDateOfBirth
     *
     * @return self
     */
    public function setRefereeConfirmedDateOfBirth(ValidationOutcomeApi $refereeConfirmedDateOfBirth): self
    {
        $this->initialized['refereeConfirmedDateOfBirth'] = true;
        $this->refereeConfirmedDateOfBirth = $refereeConfirmedDateOfBirth;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getRefereeConfirmedName(): ValidationOutcomeApi
    {
        return $this->refereeConfirmedName;
    }
    /**
     * @param ValidationOutcomeApi $refereeConfirmedName
     *
     * @return self
     */
    public function setRefereeConfirmedName(ValidationOutcomeApi $refereeConfirmedName): self
    {
        $this->initialized['refereeConfirmedName'] = true;
        $this->refereeConfirmedName = $refereeConfirmedName;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['refereeConfirmedPhoto' => ['referee_confirmed_photo', 'getRefereeConfirmedPhoto', 'setRefereeConfirmedPhoto'], 'refereeConfirmedDateOfBirth' => ['referee_confirmed_date_of_birth', 'getRefereeConfirmedDateOfBirth', 'setRefereeConfirmedDateOfBirth'], 'refereeConfirmedName' => ['referee_confirmed_name', 'getRefereeConfirmedName', 'setRefereeConfirmedName']];
    }
}