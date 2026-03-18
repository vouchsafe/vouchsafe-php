<?php

namespace Vouchsafe\OpenAPI\Model;

class RadarCheckApiDetails extends \ArrayObject
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
}