<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class VerifySupportingDocumentsPostBody implements AdditionalPropertiesInterface
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
     * The document file (PDF, JPG, or PNG, max 10MB)
     *
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $document;
    /**
     * The type of document (e.g., BankStatement, UtilityBill)
     *
     * @var string
     */
    protected $subType;
    /**
     * Minimum document age in months (optional)
     *
     * @var string
     */
    protected $minimumDocumentLength;
    /**
     * The document file (PDF, JPG, or PNG, max 10MB)
     *
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getDocument()
    {
        return $this->document;
    }
    /**
     * The document file (PDF, JPG, or PNG, max 10MB)
     *
     * @param string|resource|\Psr\Http\Message\StreamInterface $document
     *
     * @return self
     */
    public function setDocument($document): self
    {
        $this->initialized['document'] = true;
        $this->document = $document;
        return $this;
    }
    /**
     * The type of document (e.g., BankStatement, UtilityBill)
     *
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    /**
     * The type of document (e.g., BankStatement, UtilityBill)
     *
     * @param string $subType
     *
     * @return self
     */
    public function setSubType(string $subType): self
    {
        $this->initialized['subType'] = true;
        $this->subType = $subType;
        return $this;
    }
    /**
     * Minimum document age in months (optional)
     *
     * @return string
     */
    public function getMinimumDocumentLength(): string
    {
        return $this->minimumDocumentLength;
    }
    /**
     * Minimum document age in months (optional)
     *
     * @param string $minimumDocumentLength
     *
     * @return self
     */
    public function setMinimumDocumentLength(string $minimumDocumentLength): self
    {
        $this->initialized['minimumDocumentLength'] = true;
        $this->minimumDocumentLength = $minimumDocumentLength;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['document' => ['document', 'getDocument', 'setDocument'], 'subType' => ['sub_type', 'getSubType', 'setSubType'], 'minimumDocumentLength' => ['minimum_document_length', 'getMinimumDocumentLength', 'setMinimumDocumentLength']];
    }
}