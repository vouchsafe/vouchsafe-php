<?php

namespace Vouchsafe\OpenAPI\Model;

class BankAccountDetailsApi
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
     * First name, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * Last name, if extracted. Otherwise null.
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * Bank name, if available. Otherwise null.
     *
     * @var string|null
     */
    protected $bankName;
    /**
     * Account type, if available. Otherwise null.
     *
     * @var string|null
     */
    protected $accountType;
    /**
     * Transaction summary and metadata, if available. Otherwise null.
     *
     * @var BankAccountDetailsApiTransactionData|null
     */
    protected $transactionData;
    /**
     * First name, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * First name, if extracted. Otherwise null.
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * Last name, if extracted. Otherwise null.
     *
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }
    /**
     * Last name, if extracted. Otherwise null.
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * Bank name, if available. Otherwise null.
     *
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Bank name, if available. Otherwise null.
     *
     * @param string|null $bankName
     *
     * @return self
     */
    public function setBankName(?string $bankName): self
    {
        $this->initialized['bankName'] = true;
        $this->bankName = $bankName;
        return $this;
    }
    /**
     * Account type, if available. Otherwise null.
     *
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }
    /**
     * Account type, if available. Otherwise null.
     *
     * @param string|null $accountType
     *
     * @return self
     */
    public function setAccountType(?string $accountType): self
    {
        $this->initialized['accountType'] = true;
        $this->accountType = $accountType;
        return $this;
    }
    /**
     * Transaction summary and metadata, if available. Otherwise null.
     *
     * @return BankAccountDetailsApiTransactionData|null
     */
    public function getTransactionData(): ?BankAccountDetailsApiTransactionData
    {
        return $this->transactionData;
    }
    /**
     * Transaction summary and metadata, if available. Otherwise null.
     *
     * @param BankAccountDetailsApiTransactionData|null $transactionData
     *
     * @return self
     */
    public function setTransactionData(?BankAccountDetailsApiTransactionData $transactionData): self
    {
        $this->initialized['transactionData'] = true;
        $this->transactionData = $transactionData;
        return $this;
    }
}