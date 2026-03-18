<?php

namespace Vouchsafe\OpenAPI\Model;

class UnfamiliarPhotoIdValidationApi
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
     * @var UnfamiliarPhotoIdValidationApiDocumentBordersDetected
     */
    protected $documentBordersDetected;
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @var UnfamiliarPhotoIdValidationApiFaceMatch
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
     * @return UnfamiliarPhotoIdValidationApiDocumentBordersDetected
     */
    public function getDocumentBordersDetected(): UnfamiliarPhotoIdValidationApiDocumentBordersDetected
    {
        return $this->documentBordersDetected;
    }
    /**
     * Whether the correct document dimensions were detected (with score).
     *
     * @param UnfamiliarPhotoIdValidationApiDocumentBordersDetected $documentBordersDetected
     *
     * @return self
     */
    public function setDocumentBordersDetected(UnfamiliarPhotoIdValidationApiDocumentBordersDetected $documentBordersDetected): self
    {
        $this->initialized['documentBordersDetected'] = true;
        $this->documentBordersDetected = $documentBordersDetected;
        return $this;
    }
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @return UnfamiliarPhotoIdValidationApiFaceMatch
     */
    public function getFaceMatch(): UnfamiliarPhotoIdValidationApiFaceMatch
    {
        return $this->faceMatch;
    }
    /**
     * Whether the photo ID face matches the video selfie (with score).
     *
     * @param UnfamiliarPhotoIdValidationApiFaceMatch $faceMatch
     *
     * @return self
     */
    public function setFaceMatch(UnfamiliarPhotoIdValidationApiFaceMatch $faceMatch): self
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