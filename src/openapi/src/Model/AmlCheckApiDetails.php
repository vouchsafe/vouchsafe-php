<?php

namespace Vouchsafe\OpenAPI\Model;

class AmlCheckApiDetails extends \ArrayObject
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
     * Sanctions list matches found. Empty when the check passed.
     *
     * @var list<AmlMatchApi>
     */
    protected $matches;
    /**
     * The score threshold above which a match is considered a hit.
     *
     * @var float|null
     */
    protected $threshold;
    /**
     * Sanctions list matches found. Empty when the check passed.
     *
     * @return list<AmlMatchApi>
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
    /**
     * Sanctions list matches found. Empty when the check passed.
     *
     * @param list<AmlMatchApi> $matches
     *
     * @return self
     */
    public function setMatches(array $matches): self
    {
        $this->initialized['matches'] = true;
        $this->matches = $matches;
        return $this;
    }
    /**
     * The score threshold above which a match is considered a hit.
     *
     * @return float|null
     */
    public function getThreshold(): ?float
    {
        return $this->threshold;
    }
    /**
     * The score threshold above which a match is considered a hit.
     *
     * @param float|null $threshold
     *
     * @return self
     */
    public function setThreshold(?float $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
}