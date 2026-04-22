<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaConditionsFailedApi
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
}