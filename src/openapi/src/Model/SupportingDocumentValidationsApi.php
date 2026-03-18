<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentValidationsApi
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
    protected $requiredFieldsExtracted;
    /**
     * @var ValidationOutcomeApi
     */
    protected $categoryMatch;
    /**
     * @var ValidationOutcomeApi
     */
    protected $documentAgeValid;
    /**
     * @var ValidationOutcomeApi
     */
    protected $documentUnique;
    /**
     * @var ValidationOutcomeApi
     */
    protected $dateFieldsValid;
    /**
     * @var ValidationOutcomeApi
     */
    protected $namesConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $addressesConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $datesOfBirthConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeBiometricsDissimilar;
    /**
     * @var ValidationOutcomeApi
     */
    protected $documentCompleteAndLegible;
    /**
     * @var ValidationOutcomeApi
     */
    protected $tamperingSignalsCheck;
    /**
     * @return ValidationOutcomeApi
     */
    public function getRequiredFieldsExtracted(): ValidationOutcomeApi
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param ValidationOutcomeApi $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted(ValidationOutcomeApi $requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getCategoryMatch(): ValidationOutcomeApi
    {
        return $this->categoryMatch;
    }
    /**
     * @param ValidationOutcomeApi $categoryMatch
     *
     * @return self
     */
    public function setCategoryMatch(ValidationOutcomeApi $categoryMatch): self
    {
        $this->initialized['categoryMatch'] = true;
        $this->categoryMatch = $categoryMatch;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getDocumentAgeValid(): ValidationOutcomeApi
    {
        return $this->documentAgeValid;
    }
    /**
     * @param ValidationOutcomeApi $documentAgeValid
     *
     * @return self
     */
    public function setDocumentAgeValid(ValidationOutcomeApi $documentAgeValid): self
    {
        $this->initialized['documentAgeValid'] = true;
        $this->documentAgeValid = $documentAgeValid;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getDocumentUnique(): ValidationOutcomeApi
    {
        return $this->documentUnique;
    }
    /**
     * @param ValidationOutcomeApi $documentUnique
     *
     * @return self
     */
    public function setDocumentUnique(ValidationOutcomeApi $documentUnique): self
    {
        $this->initialized['documentUnique'] = true;
        $this->documentUnique = $documentUnique;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getDateFieldsValid(): ValidationOutcomeApi
    {
        return $this->dateFieldsValid;
    }
    /**
     * @param ValidationOutcomeApi $dateFieldsValid
     *
     * @return self
     */
    public function setDateFieldsValid(ValidationOutcomeApi $dateFieldsValid): self
    {
        $this->initialized['dateFieldsValid'] = true;
        $this->dateFieldsValid = $dateFieldsValid;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getNamesConsistent(): ValidationOutcomeApi
    {
        return $this->namesConsistent;
    }
    /**
     * @param ValidationOutcomeApi $namesConsistent
     *
     * @return self
     */
    public function setNamesConsistent(ValidationOutcomeApi $namesConsistent): self
    {
        $this->initialized['namesConsistent'] = true;
        $this->namesConsistent = $namesConsistent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getAddressesConsistent(): ValidationOutcomeApi
    {
        return $this->addressesConsistent;
    }
    /**
     * @param ValidationOutcomeApi $addressesConsistent
     *
     * @return self
     */
    public function setAddressesConsistent(ValidationOutcomeApi $addressesConsistent): self
    {
        $this->initialized['addressesConsistent'] = true;
        $this->addressesConsistent = $addressesConsistent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getDatesOfBirthConsistent(): ValidationOutcomeApi
    {
        return $this->datesOfBirthConsistent;
    }
    /**
     * @param ValidationOutcomeApi $datesOfBirthConsistent
     *
     * @return self
     */
    public function setDatesOfBirthConsistent(ValidationOutcomeApi $datesOfBirthConsistent): self
    {
        $this->initialized['datesOfBirthConsistent'] = true;
        $this->datesOfBirthConsistent = $datesOfBirthConsistent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getRefereeBiometricsDissimilar(): ValidationOutcomeApi
    {
        return $this->refereeBiometricsDissimilar;
    }
    /**
     * @param ValidationOutcomeApi $refereeBiometricsDissimilar
     *
     * @return self
     */
    public function setRefereeBiometricsDissimilar(ValidationOutcomeApi $refereeBiometricsDissimilar): self
    {
        $this->initialized['refereeBiometricsDissimilar'] = true;
        $this->refereeBiometricsDissimilar = $refereeBiometricsDissimilar;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getDocumentCompleteAndLegible(): ValidationOutcomeApi
    {
        return $this->documentCompleteAndLegible;
    }
    /**
     * @param ValidationOutcomeApi $documentCompleteAndLegible
     *
     * @return self
     */
    public function setDocumentCompleteAndLegible(ValidationOutcomeApi $documentCompleteAndLegible): self
    {
        $this->initialized['documentCompleteAndLegible'] = true;
        $this->documentCompleteAndLegible = $documentCompleteAndLegible;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getTamperingSignalsCheck(): ValidationOutcomeApi
    {
        return $this->tamperingSignalsCheck;
    }
    /**
     * @param ValidationOutcomeApi $tamperingSignalsCheck
     *
     * @return self
     */
    public function setTamperingSignalsCheck(ValidationOutcomeApi $tamperingSignalsCheck): self
    {
        $this->initialized['tamperingSignalsCheck'] = true;
        $this->tamperingSignalsCheck = $tamperingSignalsCheck;
        return $this;
    }
}