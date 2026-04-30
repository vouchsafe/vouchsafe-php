<?php

namespace Vouchsafe\OpenAPI\Model;

class RadarCheckApiDetailsValidationsNoKnownFraudsterMatch extends \ArrayObject
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
     * Aggregated risk level derived from matched flags, or null if no flags matched.
     *
     * @var string|null
     */
    protected $risk;
    /**
     * Human-readable descriptions for each matched flag.
     *
     * @var list<string>
     */
    protected $messages;
    /**
     * Fraudster flags that were matched. Empty when the check passed.
     *
     * @var list<string>
     */
    protected $flags;
    /**
     * @var string
     */
    protected $status;
    /**
     * Aggregated risk level derived from matched flags, or null if no flags matched.
     *
     * @return string|null
     */
    public function getRisk(): ?string
    {
        return $this->risk;
    }
    /**
     * Aggregated risk level derived from matched flags, or null if no flags matched.
     *
     * @param string|null $risk
     *
     * @return self
     */
    public function setRisk(?string $risk): self
    {
        $this->initialized['risk'] = true;
        $this->risk = $risk;
        return $this;
    }
    /**
     * Human-readable descriptions for each matched flag.
     *
     * @return list<string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
     * Human-readable descriptions for each matched flag.
     *
     * @param list<string> $messages
     *
     * @return self
     */
    public function setMessages(array $messages): self
    {
        $this->initialized['messages'] = true;
        $this->messages = $messages;
        return $this;
    }
    /**
     * Fraudster flags that were matched. Empty when the check passed.
     *
     * @return list<string>
     */
    public function getFlags(): array
    {
        return $this->flags;
    }
    /**
     * Fraudster flags that were matched. Empty when the check passed.
     *
     * @param list<string> $flags
     *
     * @return self
     */
    public function setFlags(array $flags): self
    {
        $this->initialized['flags'] = true;
        $this->flags = $flags;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}