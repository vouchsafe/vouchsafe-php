<?php

namespace Vouchsafe\OpenAPI\Model;

class BankAccountValidationsApi
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
     * @var ValidationOutcomeApi
     */
    protected $requiredFieldsExtracted;
    /**
     * @var ValidationOutcomeApi
     */
    protected $hasRecentTransactions;
    /**
     * @var ValidationOutcomeApi
     */
    protected $nonZeroBalance;
    /**
     * @var ValidationOutcomeApi
     */
    protected $namesConsistent;
    /**
     * @var ValidationOutcomeApi
     */
    protected $refereeBiometricsDissimilar;
    /**
     * @return ValidationOutcomeApi
     */
    public function getRequiredFieldsExtracted(): ValidationOutcomeApi
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param ValidationOutcomeApi $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted(ValidationOutcomeApi $requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getHasRecentTransactions(): ValidationOutcomeApi
    {
        return $this->hasRecentTransactions;
    }
    /**
     * @param ValidationOutcomeApi $hasRecentTransactions
     *
     * @return self
     */
    public function setHasRecentTransactions(ValidationOutcomeApi $hasRecentTransactions): self
    {
        $this->initialized['hasRecentTransactions'] = true;
        $this->hasRecentTransactions = $hasRecentTransactions;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getNonZeroBalance(): ValidationOutcomeApi
    {
        return $this->nonZeroBalance;
    }
    /**
     * @param ValidationOutcomeApi $nonZeroBalance
     *
     * @return self
     */
    public function setNonZeroBalance(ValidationOutcomeApi $nonZeroBalance): self
    {
        $this->initialized['nonZeroBalance'] = true;
        $this->nonZeroBalance = $nonZeroBalance;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getNamesConsistent(): ValidationOutcomeApi
    {
        return $this->namesConsistent;
    }
    /**
     * @param ValidationOutcomeApi $namesConsistent
     *
     * @return self
     */
    public function setNamesConsistent(ValidationOutcomeApi $namesConsistent): self
    {
        $this->initialized['namesConsistent'] = true;
        $this->namesConsistent = $namesConsistent;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getRefereeBiometricsDissimilar(): ValidationOutcomeApi
    {
        return $this->refereeBiometricsDissimilar;
    }
    /**
     * @param ValidationOutcomeApi $refereeBiometricsDissimilar
     *
     * @return self
     */
    public function setRefereeBiometricsDissimilar(ValidationOutcomeApi $refereeBiometricsDissimilar): self
    {
        $this->initialized['refereeBiometricsDissimilar'] = true;
        $this->refereeBiometricsDissimilar = $refereeBiometricsDissimilar;
        return $this;
    }
}