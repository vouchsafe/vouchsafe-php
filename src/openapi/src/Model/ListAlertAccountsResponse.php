<?php

namespace Vouchsafe\OpenAPI\Model;

class ListAlertAccountsResponse
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
     * @var list<AlertAccountResponse>
     */
    protected $accounts;
    /**
     * @var string|null
     */
    protected $nextCursor;
    /**
     * @return list<AlertAccountResponse>
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }
    /**
     * @param list<AlertAccountResponse> $accounts
     *
     * @return self
     */
    public function setAccounts(array $accounts): self
    {
        $this->initialized['accounts'] = true;
        $this->accounts = $accounts;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNextCursor(): ?string
    {
        return $this->nextCursor;
    }
    /**
     * @param string|null $nextCursor
     *
     * @return self
     */
    public function setNextCursor(?string $nextCursor): self
    {
        $this->initialized['nextCursor'] = true;
        $this->nextCursor = $nextCursor;
        return $this;
    }
}