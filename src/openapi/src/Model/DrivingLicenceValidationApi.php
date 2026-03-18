<?php

namespace Vouchsafe\OpenAPI\Model;

class DrivingLicenceValidationApi
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
     * Whether the correct document dimensions were detected (with score).
     *
     * @var DrivingLicenceValidationApiDocumentBordersDetected
     */
    protected $documentBordersDetected;
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @var DrivingLicenceValidationApiFaceMatch
     */
    protected $faceMatch;
    /**
     * @var ValidationOutcomeApi
     */
    protected $datesOfBirthConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $namesConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeOver18;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeBiometricsDissimilar;
    /**
     * @var ValidationOutcomeApi
     */
    protected $securityFeaturesPresent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $identifierFormatValid;
    /**
     * @var ValidationOutcomeApi
     */
    protected $notSampleOrInternalUse;
    /**
     * @var ValidationOutcomeApi
     */
    protected $hasNotExpired;
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
     * Whether the correct document dimensions were detected (with score).
     *
     * @return DrivingLicenceValidationApiDocumentBordersDetected
     */
    public function getDocumentBordersDetected(): DrivingLicenceValidationApiDocumentBordersDetected
    {
        return $this->documentBordersDetected;
    }
    /**
     * Whether the correct document dimensions were detected (with score).
     *
     * @param DrivingLicenceValidationApiDocumentBordersDetected $documentBordersDetected
     *
     * @return self
     */
    public function setDocumentBordersDetected(DrivingLicenceValidationApiDocumentBordersDetected $documentBordersDetected): self
    {
        $this->initialized['documentBordersDetected'] = true;
        $this->documentBordersDetected = $documentBordersDetected;
        return $this;
    }
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @return DrivingLicenceValidationApiFaceMatch
     */
    public function getFaceMatch(): DrivingLicenceValidationApiFaceMatch
    {
        return $this->faceMatch;
    }
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @param DrivingLicenceValidationApiFaceMatch $faceMatch
     *
     * @return self
     */
    public function setFaceMatch(DrivingLicenceValidationApiFaceMatch $faceMatch): self
    {
        $this->initialized['faceMatch'] = true;
        $this->faceMatch = $faceMatch;
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
    public function getRefereeOver18(): ValidationOutcomeApi
    {
        return $this->refereeOver18;
    }
    /**
     * @param ValidationOutcomeApi $refereeOver18
     *
     * @return self
     */
    public function setRefereeOver18(ValidationOutcomeApi $refereeOver18): self
    {
        $this->initialized['refereeOver18'] = true;
        $this->refereeOver18 = $refereeOver18;
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
    public function getSecurityFeaturesPresent(): ValidationOutcomeApi
    {
        return $this->securityFeaturesPresent;
    }
    /**
     * @param ValidationOutcomeApi $securityFeaturesPresent
     *
     * @return self
     */
    public function setSecurityFeaturesPresent(ValidationOutcomeApi $securityFeaturesPresent): self
    {
        $this->initialized['securityFeaturesPresent'] = true;
        $this->securityFeaturesPresent = $securityFeaturesPresent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getIdentifierFormatValid(): ValidationOutcomeApi
    {
        return $this->identifierFormatValid;
    }
    /**
     * @param ValidationOutcomeApi $identifierFormatValid
     *
     * @return self
     */
    public function setIdentifierFormatValid(ValidationOutcomeApi $identifierFormatValid): self
    {
        $this->initialized['identifierFormatValid'] = true;
        $this->identifierFormatValid = $identifierFormatValid;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getNotSampleOrInternalUse(): ValidationOutcomeApi
    {
        return $this->notSampleOrInternalUse;
    }
    /**
     * @param ValidationOutcomeApi $notSampleOrInternalUse
     *
     * @return self
     */
    public function setNotSampleOrInternalUse(ValidationOutcomeApi $notSampleOrInternalUse): self
    {
        $this->initialized['notSampleOrInternalUse'] = true;
        $this->notSampleOrInternalUse = $notSampleOrInternalUse;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getHasNotExpired(): ValidationOutcomeApi
    {
        return $this->hasNotExpired;
    }
    /**
     * @param ValidationOutcomeApi $hasNotExpired
     *
     * @return self
     */
    public function setHasNotExpired(ValidationOutcomeApi $hasNotExpired): self
    {
        $this->initialized['hasNotExpired'] = true;
        $this->hasNotExpired = $hasNotExpired;
        return $this;
    }
}