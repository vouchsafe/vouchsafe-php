<?php

namespace Vouchsafe\OpenAPI\Model;

class EvisaValidationsApiFaceMatch extends \ArrayObject
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
     * @var float|null
     */
    protected $score;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return float|null
     */
    public function getScore(): ?float
    {
        return $this->score;
    }
    /**
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
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
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