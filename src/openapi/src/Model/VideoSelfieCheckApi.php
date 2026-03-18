<?php

namespace Vouchsafe\OpenAPI\Model;

class VideoSelfieCheckApi
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
     * A video selfie submission (in progress or submitted).
     *
     * @var string
     */
    protected $step;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * Total number of video selfie attempts.
     *
     * @var float
     */
    protected $totalAttempts;
    /**
     * Files captured or uploaded for this evidence item.
     *
     * @var list<ArtefactApi>
     */
    protected $artefacts;
    /**
     * Validations performed on the video selfie and their results.
     *
     * @var VideoSelfieCheckApiValidations
     */
    protected $validations;
    /**
     * A video selfie submission (in progress or submitted).
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A video selfie submission (in progress or submitted).
     *
     * @param string $step
     *
     * @return self
     */
    public function setStep(string $step): self
    {
        $this->initialized['step'] = true;
        $this->step = $step;
        return $this;
    }
    /**
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * @param string $outcome
     *
     * @return self
     */
    public function setOutcome(string $outcome): self
    {
        $this->initialized['outcome'] = true;
        $this->outcome = $outcome;
        return $this;
    }
    /**
     * Total number of video selfie attempts.
     *
     * @return float
     */
    public function getTotalAttempts(): float
    {
        return $this->totalAttempts;
    }
    /**
     * Total number of video selfie attempts.
     *
     * @param float $totalAttempts
     *
     * @return self
     */
    public function setTotalAttempts(float $totalAttempts): self
    {
        $this->initialized['totalAttempts'] = true;
        $this->totalAttempts = $totalAttempts;
        return $this;
    }
    /**
     * Files captured or uploaded for this evidence item.
     *
     * @return list<ArtefactApi>
     */
    public function getArtefacts(): array
    {
        return $this->artefacts;
    }
    /**
     * Files captured or uploaded for this evidence item.
     *
     * @param list<ArtefactApi> $artefacts
     *
     * @return self
     */
    public function setArtefacts(array $artefacts): self
    {
        $this->initialized['artefacts'] = true;
        $this->artefacts = $artefacts;
        return $this;
    }
    /**
     * Validations performed on the video selfie and their results.
     *
     * @return VideoSelfieCheckApiValidations
     */
    public function getValidations(): VideoSelfieCheckApiValidations
    {
        return $this->validations;
    }
    /**
     * Validations performed on the video selfie and their results.
     *
     * @param VideoSelfieCheckApiValidations $validations
     *
     * @return self
     */
    public function setValidations(VideoSelfieCheckApiValidations $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}