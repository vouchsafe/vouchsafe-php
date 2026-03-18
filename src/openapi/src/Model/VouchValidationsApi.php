<?php

namespace Vouchsafe\OpenAPI\Model;

class VouchValidationsApi
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
     * @var ValidationOutcomeApi
     */
    protected $relationshipMinimumDurationMet;
    /**
     * @var ValidationOutcomeApi
     */
    protected $approvedProfessionalDomain;
    /**
     * @return ValidationOutcomeApi
     */
    public function getRelationshipMinimumDurationMet(): ValidationOutcomeApi
    {
        return $this->relationshipMinimumDurationMet;
    }
    /**
     * @param ValidationOutcomeApi $relationshipMinimumDurationMet
     *
     * @return self
     */
    public function setRelationshipMinimumDurationMet(ValidationOutcomeApi $relationshipMinimumDurationMet): self
    {
        $this->initialized['relationshipMinimumDurationMet'] = true;
        $this->relationshipMinimumDurationMet = $relationshipMinimumDurationMet;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getApprovedProfessionalDomain(): ValidationOutcomeApi
    {
        return $this->approvedProfessionalDomain;
    }
    /**
     * @param ValidationOutcomeApi $approvedProfessionalDomain
     *
     * @return self
     */
    public function setApprovedProfessionalDomain(ValidationOutcomeApi $approvedProfessionalDomain): self
    {
        $this->initialized['approvedProfessionalDomain'] = true;
        $this->approvedProfessionalDomain = $approvedProfessionalDomain;
        return $this;
    }
}