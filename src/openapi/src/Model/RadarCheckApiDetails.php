<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class RadarCheckApiDetails implements AdditionalPropertiesInterface
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
     * @var RadarCheckApiDetailsValidations
     */
    protected $validations;
    /**
     * @return RadarCheckApiDetailsValidations
     */
    public function getValidations(): RadarCheckApiDetailsValidations
    {
        return $this->validations;
    }
    /**
     * @param RadarCheckApiDetailsValidations $validations
     *
     * @return self
     */
    public function setValidations(RadarCheckApiDetailsValidations $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['validations' => ['validations', 'getValidations', 'setValidations']];
    }
}