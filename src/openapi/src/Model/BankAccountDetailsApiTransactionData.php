<?php

namespace Vouchsafe\OpenAPI\Model;

class BankAccountDetailsApiTransactionData extends \ArrayObject
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
     * @var float
     */
    protected $count;
    /**
     * @var string
     */
    protected $lastDate;
    /**
     * @var string
     */
    protected $earliestDate;
    /**
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }
    /**
     * @param float $count
     *
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return string
     */
    public function getLastDate(): string
    {
        return $this->lastDate;
    }
    /**
     * @param string $lastDate
     *
     * @return self
     */
    public function setLastDate(string $lastDate): self
    {
        $this->initialized['lastDate'] = true;
        $this->lastDate = $lastDate;
        return $this;
    }
    /**
     * @return string
     */
    public function getEarliestDate(): string
    {
        return $this->earliestDate;
    }
    /**
     * @param string $earliestDate
     *
     * @return self
     */
    public function setEarliestDate(string $earliestDate): self
    {
        $this->initialized['earliestDate'] = true;
        $this->earliestDate = $earliestDate;
        return $this;
    }
}