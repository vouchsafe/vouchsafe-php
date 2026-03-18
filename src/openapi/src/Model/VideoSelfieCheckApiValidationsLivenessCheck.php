<?php

namespace Vouchsafe\OpenAPI\Model;

class VideoSelfieCheckApiValidationsLivenessCheck extends \ArrayObject
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
     * Liveness score, or null if unavailable.
     *
     * @var float|null
     */
    protected $score;
    /**
     * Whether the liveness check passed or failed.
     *
     * @var string
     */
    protected $status;
    /**
     * Liveness score, or null if unavailable.
     *
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
     * Liveness score, or null if unavailable.
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
     * Whether the liveness check passed or failed.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Whether the liveness check passed or failed.
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