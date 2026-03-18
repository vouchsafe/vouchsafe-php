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
     * @var list<AmlMatchApi>
     */
    protected $matches;
    /**
     * @return list<AmlMatchApi>
     */
    public function getMatches(): array
    {
        return $this->matches;
    }
    /**
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
}