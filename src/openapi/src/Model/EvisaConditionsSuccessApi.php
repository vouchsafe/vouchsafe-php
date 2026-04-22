<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaConditionsSuccessApi
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
     * @var bool
     */
    protected $extractionSuccess;
    /**
     * @var string|null
     */
    protected $maxWeeklyHours;
    /**
     * @var string|null
     */
    protected $noSelfEmployment;
    /**
     * @return bool
     */
    public function getExtractionSuccess(): bool
    {
        return $this->extractionSuccess;
    }
    /**
     * @param bool $extractionSuccess
     *
     * @return self
     */
    public function setExtractionSuccess(bool $extractionSuccess): self
    {
        $this->initialized['extractionSuccess'] = true;
        $this->extractionSuccess = $extractionSuccess;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getMaxWeeklyHours(): ?string
    {
        return $this->maxWeeklyHours;
    }
    /**
     * @param string|null $maxWeeklyHours
     *
     * @return self
     */
    public function setMaxWeeklyHours(?string $maxWeeklyHours): self
    {
        $this->initialized['maxWeeklyHours'] = true;
        $this->maxWeeklyHours = $maxWeeklyHours;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNoSelfEmployment(): ?string
    {
        return $this->noSelfEmployment;
    }
    /**
     * @param string|null $noSelfEmployment
     *
     * @return self
     */
    public function setNoSelfEmployment(?string $noSelfEmployment): self
    {
        $this->initialized['noSelfEmployment'] = true;
        $this->noSelfEmployment = $noSelfEmployment;
        return $this;
    }
}