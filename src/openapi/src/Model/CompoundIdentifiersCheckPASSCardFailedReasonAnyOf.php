<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class CompoundIdentifiersCheckPASSCardFailedReasonAnyOf implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata
     */
    protected $metadata;
    /**
     * @var list<string>|list<string>|list<string>|list<string>|list<string>|list<string>
     */
    protected $failedReasons;
    /**
     * @var string
     */
    protected $status;
    /**
     * @return CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata
     */
    public function getMetadata(): CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata
    {
        return $this->metadata;
    }
    /**
     * @param CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata $metadata): self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * @return list<string>|list<string>|list<string>|list<string>|list<string>|list<string>
     */
    public function getFailedReasons(): array
    {
        return $this->failedReasons;
    }
    /**
     * @param list<string>|list<string>|list<string>|list<string>|list<string>|list<string> $failedReasons
     *
     * @return self
     */
    public function setFailedReasons(array $failedReasons): self
    {
        $this->initialized['failedReasons'] = true;
        $this->failedReasons = $failedReasons;
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
    public function definedProperties(): array
    {
        return ['metadata' => ['metadata', 'getMetadata', 'setMetadata'], 'failedReasons' => ['failed_reasons', 'getFailedReasons', 'setFailedReasons'], 'status' => ['status', 'getStatus', 'setStatus']];
    }
}