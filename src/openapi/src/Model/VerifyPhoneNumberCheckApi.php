<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifyPhoneNumberCheckApi
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
     * A phone number verification (in progress or confirmed), if configured.
     *
     * @var string
     */
    protected $step;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * Validations performed on the phone number.
     *
     * @var VerifyPhoneNumberCheckApiValidations
     */
    protected $validations;
    /**
     * A phone number verification (in progress or confirmed), if configured.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A phone number verification (in progress or confirmed), if configured.
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
     * @return string
     */
    public function getOutcome(): string
    {
        return $this->outcome;
    }
    /**
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
     * Validations performed on the phone number.
     *
     * @return VerifyPhoneNumberCheckApiValidations
     */
    public function getValidations(): VerifyPhoneNumberCheckApiValidations
    {
        return $this->validations;
    }
    /**
     * Validations performed on the phone number.
     *
     * @param VerifyPhoneNumberCheckApiValidations $validations
     *
     * @return self
     */
    public function setValidations(VerifyPhoneNumberCheckApiValidations $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}