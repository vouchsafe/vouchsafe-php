<?php

namespace Vouchsafe\OpenAPI\Model;

class AdverseMediaResponse
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
     * Whether the check passed or failed
     *
     * @var string
     */
    protected $status;
    /**
     * The threshold used for this check
     *
     * @var float
     */
    protected $threshold;
    /**
     * Articles that scored at or above the threshold
     *
     * @var list<AdverseMediaArticle>
     */
    protected $strongMatches;
    /**
     * All articles found, including weak matches, for audit purposes
     *
     * @var list<AdverseMediaArticle>
     */
    protected $allResults;
    /**
     * Whether the check passed or failed
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Whether the check passed or failed
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
    /**
     * The threshold used for this check
     *
     * @return float
     */
    public function getThreshold(): float
    {
        return $this->threshold;
    }
    /**
     * The threshold used for this check
     *
     * @param float $threshold
     *
     * @return self
     */
    public function setThreshold(float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * Articles that scored at or above the threshold
     *
     * @return list<AdverseMediaArticle>
     */
    public function getStrongMatches(): array
    {
        return $this->strongMatches;
    }
    /**
     * Articles that scored at or above the threshold
     *
     * @param list<AdverseMediaArticle> $strongMatches
     *
     * @return self
     */
    public function setStrongMatches(array $strongMatches): self
    {
        $this->initialized['strongMatches'] = true;
        $this->strongMatches = $strongMatches;
        return $this;
    }
    /**
     * All articles found, including weak matches, for audit purposes
     *
     * @return list<AdverseMediaArticle>
     */
    public function getAllResults(): array
    {
        return $this->allResults;
    }
    /**
     * All articles found, including weak matches, for audit purposes
     *
     * @param list<AdverseMediaArticle> $allResults
     *
     * @return self
     */
    public function setAllResults(array $allResults): self
    {
        $this->initialized['allResults'] = true;
        $this->allResults = $allResults;
        return $this;
    }
}