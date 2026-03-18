<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifyEmailCheckApi
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
     * An email verification (in progress or confirmed), if enabled.
     *
     * @var string
     */
    protected $step;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * Validations performed on the email address.
     *
     * @var VerifyEmailCheckApiValidations
     */
    protected $validations;
    /**
     * An email verification (in progress or confirmed), if enabled.
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * An email verification (in progress or confirmed), if enabled.
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
     * Validations performed on the email address.
     *
     * @return VerifyEmailCheckApiValidations
     */
    public function getValidations(): VerifyEmailCheckApiValidations
    {
        return $this->validations;
    }
    /**
     * Validations performed on the email address.
     *
     * @param VerifyEmailCheckApiValidations $validations
     *
     * @return self
     */
    public function setValidations(VerifyEmailCheckApiValidations $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}