<?php

namespace Vouchsafe\OpenAPI\Model;

class VideoSelfieCheckApiValidations extends \ArrayObject
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
     * Whether the face matches previously submitted evidence.
     * Only present in v2 verifications.
     *
     * @var VideoSelfieCheckApiValidationsFaceMatch
     */
    protected $faceMatch;
    /**
     * @var VideoSelfieCheckApiValidationsRefereeDissimilarityCheck
     */
    protected $refereeDissimilarityCheck;
    /**
     * @var VideoSelfieCheckApiValidationsLivenessCheck
     */
    protected $livenessCheck;
    /**
     * Whether the face matches previously submitted evidence.
     * Only present in v2 verifications.
     *
     * @return VideoSelfieCheckApiValidationsFaceMatch
     */
    public function getFaceMatch(): VideoSelfieCheckApiValidationsFaceMatch
    {
        return $this->faceMatch;
    }
    /**
    * Whether the face matches previously submitted evidence.
    Only present in v2 verifications.
    *
    * @param VideoSelfieCheckApiValidationsFaceMatch $faceMatch
    *
    * @return self
    */
    public function setFaceMatch(VideoSelfieCheckApiValidationsFaceMatch $faceMatch): self
    {
        $this->initialized['faceMatch'] = true;
        $this->faceMatch = $faceMatch;
        return $this;
    }
    /**
     * @return VideoSelfieCheckApiValidationsRefereeDissimilarityCheck
     */
    public function getRefereeDissimilarityCheck(): VideoSelfieCheckApiValidationsRefereeDissimilarityCheck
    {
        return $this->refereeDissimilarityCheck;
    }
    /**
     * @param VideoSelfieCheckApiValidationsRefereeDissimilarityCheck $refereeDissimilarityCheck
     *
     * @return self
     */
    public function setRefereeDissimilarityCheck(VideoSelfieCheckApiValidationsRefereeDissimilarityCheck $refereeDissimilarityCheck): self
    {
        $this->initialized['refereeDissimilarityCheck'] = true;
        $this->refereeDissimilarityCheck = $refereeDissimilarityCheck;
        return $this;
    }
    /**
     * @return VideoSelfieCheckApiValidationsLivenessCheck
     */
    public function getLivenessCheck(): VideoSelfieCheckApiValidationsLivenessCheck
    {
        return $this->livenessCheck;
    }
    /**
     * @param VideoSelfieCheckApiValidationsLivenessCheck $livenessCheck
     *
     * @return self
     */
    public function setLivenessCheck(VideoSelfieCheckApiValidationsLivenessCheck $livenessCheck): self
    {
        $this->initialized['livenessCheck'] = true;
        $this->livenessCheck = $livenessCheck;
        return $this;
    }
}