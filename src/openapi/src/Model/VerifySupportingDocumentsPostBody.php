<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifySupportingDocumentsPostBody extends \ArrayObject
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
     * The document file (PDF, JPG, or PNG, max 10MB)
     *
     * @var string
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
     * @return string
     */
    public function getDocument(): string
    {
        return $this->document;
    }
    /**
     * The document file (PDF, JPG, or PNG, max 10MB)
     *
     * @param string $document
     *
     * @return self
     */
    public function setDocument(string $document): self
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
}