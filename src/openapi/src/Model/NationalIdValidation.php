<?php

namespace Vouchsafe\OpenAPI\Model;

class NationalIdValidation
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
     * @var Pass|FailMrzPhotoIdFailedReason
     */
    protected $requiredFieldsExtracted;
    /**
     * @var mixed
     */
    protected $compoundIdentifiersMatch;
    /**
     * @var Pass|FailMrzPhotoIdFailedReason
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
     * @var Pass|FailDocumentFaceErrorCode
     */
    protected $documentContainsFace;
    /**
     * @var mixed
     */
    protected $faceMatch;
    /**
     * @var Pass|FailFailedReasonMRZNOTTD1OrFailedReasonINCOMPLETEMRZDATA
     */
    protected $icaoFormatValid;
    /**
     * @return Pass|FailMrzPhotoIdFailedReason
     */
    public function getRequiredFieldsExtracted()
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param Pass|FailMrzPhotoIdFailedReason $requiredFieldsExtracted
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
     * @return mixed
     */
    public function getCompoundIdentifiersMatch()
    {
        return $this->compoundIdentifiersMatch;
    }
    /**
     * @param mixed $compoundIdentifiersMatch
     *
     * @return self
     */
    public function setCompoundIdentifiersMatch($compoundIdentifiersMatch): self
    {
        $this->initialized['compoundIdentifiersMatch'] = true;
        $this->compoundIdentifiersMatch = $compoundIdentifiersMatch;
        return $this;
    }
    /**
     * @return Pass|FailMrzPhotoIdFailedReason
     */
    public function getHasNotExpired()
    {
        return $this->hasNotExpired;
    }
    /**
     * @param Pass|FailMrzPhotoIdFailedReason $hasNotExpired
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
    /**
     * @return Pass|FailFailedReasonMRZNOTTD1OrFailedReasonINCOMPLETEMRZDATA
     */
    public function getIcaoFormatValid()
    {
        return $this->icaoFormatValid;
    }
    /**
     * @param Pass|FailFailedReasonMRZNOTTD1OrFailedReasonINCOMPLETEMRZDATA $icaoFormatValid
     *
     * @return self
     */
    public function setIcaoFormatValid($icaoFormatValid): self
    {
        $this->initialized['icaoFormatValid'] = true;
        $this->icaoFormatValid = $icaoFormatValid;
        return $this;
    }
}