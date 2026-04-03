<?php

namespace Vouchsafe\OpenAPI\Model;

class DrivingLicenceValidation
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
     * @var Pass|FailDrivingLicenceFailedReason
     */
    protected $requiredFieldsExtracted;
    /**
     * @var Pass|FailDrivingLicenceFailedReason
     */
    protected $hasNotExpired;
    /**
     * @var Pass|FailSpecimenErrorCode
     */
    protected $notSpecimen;
    /**
     * @var Pass|FailTamperingErrorCode
     */
    protected $notScreenshot;
    /**
     * @var mixed
     */
    protected $documentDimensionsMatched;
    /**
     * @var Pass|FailDrivingLicenceFailedReason
     */
    protected $documentFeaturesPresent;
    /**
     * @var Pass|FailDocumentFaceErrorCode
     */
    protected $documentContainsFace;
    /**
     * @var mixed
     */
    protected $faceMatch;
    /**
     * @return Pass|FailDrivingLicenceFailedReason
     */
    public function getRequiredFieldsExtracted()
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param Pass|FailDrivingLicenceFailedReason $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted($requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return Pass|FailDrivingLicenceFailedReason
     */
    public function getHasNotExpired()
    {
        return $this->hasNotExpired;
    }
    /**
     * @param Pass|FailDrivingLicenceFailedReason $hasNotExpired
     *
     * @return self
     */
    public function setHasNotExpired($hasNotExpired): self
    {
        $this->initialized['hasNotExpired'] = true;
        $this->hasNotExpired = $hasNotExpired;
        return $this;
    }
    /**
     * @return Pass|FailSpecimenErrorCode
     */
    public function getNotSpecimen()
    {
        return $this->notSpecimen;
    }
    /**
     * @param Pass|FailSpecimenErrorCode $notSpecimen
     *
     * @return self
     */
    public function setNotSpecimen($notSpecimen): self
    {
        $this->initialized['notSpecimen'] = true;
        $this->notSpecimen = $notSpecimen;
        return $this;
    }
    /**
     * @return Pass|FailTamperingErrorCode
     */
    public function getNotScreenshot()
    {
        return $this->notScreenshot;
    }
    /**
     * @param Pass|FailTamperingErrorCode $notScreenshot
     *
     * @return self
     */
    public function setNotScreenshot($notScreenshot): self
    {
        $this->initialized['notScreenshot'] = true;
        $this->notScreenshot = $notScreenshot;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getDocumentDimensionsMatched()
    {
        return $this->documentDimensionsMatched;
    }
    /**
     * @param mixed $documentDimensionsMatched
     *
     * @return self
     */
    public function setDocumentDimensionsMatched($documentDimensionsMatched): self
    {
        $this->initialized['documentDimensionsMatched'] = true;
        $this->documentDimensionsMatched = $documentDimensionsMatched;
        return $this;
    }
    /**
     * @return Pass|FailDrivingLicenceFailedReason
     */
    public function getDocumentFeaturesPresent()
    {
        return $this->documentFeaturesPresent;
    }
    /**
     * @param Pass|FailDrivingLicenceFailedReason $documentFeaturesPresent
     *
     * @return self
     */
    public function setDocumentFeaturesPresent($documentFeaturesPresent): self
    {
        $this->initialized['documentFeaturesPresent'] = true;
        $this->documentFeaturesPresent = $documentFeaturesPresent;
        return $this;
    }
    /**
     * @return Pass|FailDocumentFaceErrorCode
     */
    public function getDocumentContainsFace()
    {
        return $this->documentContainsFace;
    }
    /**
     * @param Pass|FailDocumentFaceErrorCode $documentContainsFace
     *
     * @return self
     */
    public function setDocumentContainsFace($documentContainsFace): self
    {
        $this->initialized['documentContainsFace'] = true;
        $this->documentContainsFace = $documentContainsFace;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getFaceMatch()
    {
        return $this->faceMatch;
    }
    /**
     * @param mixed $faceMatch
     *
     * @return self
     */
    public function setFaceMatch($faceMatch): self
    {
        $this->initialized['faceMatch'] = true;
        $this->faceMatch = $faceMatch;
        return $this;
    }
}