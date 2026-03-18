<?php

namespace Vouchsafe\OpenAPI\Model;

class VideoSelfieCheckApiValidationsRefereeDissimilarityCheck extends \ArrayObject
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
     * Dissimilarity score, or null if unavailable.
     *
     * @var float|null
     */
    protected $score;
    /**
     * Whether the dissimilarity check passed or failed.
     *
     * @var string
     */
    protected $status;
    /**
     * Dissimilarity score, or null if unavailable.
     *
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
     * Dissimilarity score, or null if unavailable.
     *
     * @param float|null $score
     *
     * @return self
     */
    public function setScore(?float $score): self
    {
        $this->initialized['score'] = true;
        $this->score = $score;
        return $this;
    }
    /**
     * Whether the dissimilarity check passed or failed.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Whether the dissimilarity check passed or failed.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}