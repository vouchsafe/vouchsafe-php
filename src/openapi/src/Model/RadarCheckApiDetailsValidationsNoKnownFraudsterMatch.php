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
     * @var string|null
     */
    protected $risk;
    /**
     * @var list<string>
     */
    protected $messages;
    /**
     * @var list<string>
     */
    protected $flags;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return string|null
     */
    public function getRisk(): ?string
    {
        return $this->risk;
    }
    /**
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
     * @return list<string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }
    /**
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
     * @return list<string>
     */
    public function getFlags(): array
    {
        return $this->flags;
    }
    /**
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