<?php

namespace Vouchsafe\OpenAPI\Model;

class StepAddressCreditReferenceAgencyApi
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
     * Proof of address.
     *
     * @var string
     */
    protected $step;
    /**
     * Overall outcome of the address verification.
     *
     * @var string
     */
    protected $outcome;
    /**
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @var string
     */
    protected $createdAt;
    /**
     * How the user proved their address.
     *
     * @var string
     */
    protected $method;
    /**
     * The name and address checked with the official records.
     *
     * @var StepAddressCreditReferenceAgencyApiExtractedDetails
     */
    protected $extractedDetails;
    /**
     * Proof of address.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * Proof of address.
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
     * Overall outcome of the address verification.
     *
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
     * Overall outcome of the address verification.
     *
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
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }
    /**
     * When the user provided this evidence, in ISO 8601 format.
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * How the user proved their address.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * How the user proved their address.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
    /**
     * The name and address checked with the official records.
     *
     * @return StepAddressCreditReferenceAgencyApiExtractedDetails
     */
    public function getExtractedDetails(): StepAddressCreditReferenceAgencyApiExtractedDetails
    {
        return $this->extractedDetails;
    }
    /**
     * The name and address checked with the official records.
     *
     * @param StepAddressCreditReferenceAgencyApiExtractedDetails $extractedDetails
     *
     * @return self
     */
    public function setExtractedDetails(StepAddressCreditReferenceAgencyApiExtractedDetails $extractedDetails): self
    {
        $this->initialized['extractedDetails'] = true;
        $this->extractedDetails = $extractedDetails;
        return $this;
    }
}