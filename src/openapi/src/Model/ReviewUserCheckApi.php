<?php

namespace Vouchsafe\OpenAPI\Model;

class ReviewUserCheckApi
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
     * A referee vouch of the user’s claims (in progress or confirmed).
     *
     * @var string
     */
    protected $step;
    /**
     * @var string
     */
    protected $outcome;
    /**
     * Claims being verified by the referee.
     * All claims "pass" when they accept and proceed, or "fail" when they reject.
     * Otherwise undefined while they have not made a choice yet.
     *
     * @var ReviewUserCheckApiValidations
     */
    protected $validations;
    /**
     * A referee vouch of the user’s claims (in progress or confirmed).
     *
     * @return string
     */
    public function getStep(): string
    {
        return $this->step;
    }
    /**
     * A referee vouch of the user’s claims (in progress or confirmed).
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
     * Claims being verified by the referee.
     * All claims "pass" when they accept and proceed, or "fail" when they reject.
     * Otherwise undefined while they have not made a choice yet.
     *
     * @return ReviewUserCheckApiValidations
     */
    public function getValidations(): ReviewUserCheckApiValidations
    {
        return $this->validations;
    }
    /**
    * Claims being verified by the referee.
    All claims "pass" when they accept and proceed, or "fail" when they reject.
    Otherwise undefined while they have not made a choice yet.
    *
    * @param ReviewUserCheckApiValidations $validations
    *
    * @return self
    */
    public function setValidations(ReviewUserCheckApiValidations $validations): self
    {
        $this->initialized['validations'] = true;
        $this->validations = $validations;
        return $this;
    }
}