<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var mixed
     */
    protected $mismatches;
    /**
     * @return mixed
     */
    public function getMismatches()
    {
        return $this->mismatches;
    }
    /**
     * @param mixed $mismatches
     *
     * @return self
     */
    public function setMismatches($mismatches): self
    {
        $this->initialized['mismatches'] = true;
        $this->mismatches = $mismatches;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['mismatches' => ['mismatches', 'getMismatches', 'setMismatches']];
    }
}