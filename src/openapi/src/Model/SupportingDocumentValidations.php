<?php

namespace Vouchsafe\OpenAPI\Model;

class SupportingDocumentValidations
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
     * @var RequiredFieldsExtractedResult
     */
    protected $requiredFieldsExtracted;
    /**
     * @var CategoryMatchResult
     */
    protected $categoryMatch;
    /**
     * @var DocumentAgeValidResult
     */
    protected $documentAgeValid;
    /**
     * @var DocumentCompleteAndLegibleResult
     */
    protected $documentCompleteAndLegible;
    /**
     * @var TamperingSignalsCheckResult
     */
    protected $tamperingSignalsCheck;
    /**
     * @return RequiredFieldsExtractedResult
     */
    public function getRequiredFieldsExtracted(): RequiredFieldsExtractedResult
    {
        return $this->requiredFieldsExtracted;
    }
    /**
     * @param RequiredFieldsExtractedResult $requiredFieldsExtracted
     *
     * @return self
     */
    public function setRequiredFieldsExtracted(RequiredFieldsExtractedResult $requiredFieldsExtracted): self
    {
        $this->initialized['requiredFieldsExtracted'] = true;
        $this->requiredFieldsExtracted = $requiredFieldsExtracted;
        return $this;
    }
    /**
     * @return CategoryMatchResult
     */
    public function getCategoryMatch(): CategoryMatchResult
    {
        return $this->categoryMatch;
    }
    /**
     * @param CategoryMatchResult $categoryMatch
     *
     * @return self
     */
    public function setCategoryMatch(CategoryMatchResult $categoryMatch): self
    {
        $this->initialized['categoryMatch'] = true;
        $this->categoryMatch = $categoryMatch;
        return $this;
    }
    /**
     * @return DocumentAgeValidResult
     */
    public function getDocumentAgeValid(): DocumentAgeValidResult
    {
        return $this->documentAgeValid;
    }
    /**
     * @param DocumentAgeValidResult $documentAgeValid
     *
     * @return self
     */
    public function setDocumentAgeValid(DocumentAgeValidResult $documentAgeValid): self
    {
        $this->initialized['documentAgeValid'] = true;
        $this->documentAgeValid = $documentAgeValid;
        return $this;
    }
    /**
     * @return DocumentCompleteAndLegibleResult
     */
    public function getDocumentCompleteAndLegible(): DocumentCompleteAndLegibleResult
    {
        return $this->documentCompleteAndLegible;
    }
    /**
     * @param DocumentCompleteAndLegibleResult $documentCompleteAndLegible
     *
     * @return self
     */
    public function setDocumentCompleteAndLegible(DocumentCompleteAndLegibleResult $documentCompleteAndLegible): self
    {
        $this->initialized['documentCompleteAndLegible'] = true;
        $this->documentCompleteAndLegible = $documentCompleteAndLegible;
        return $this;
    }
    /**
     * @return TamperingSignalsCheckResult
     */
    public function getTamperingSignalsCheck(): TamperingSignalsCheckResult
    {
        return $this->tamperingSignalsCheck;
    }
    /**
     * @param TamperingSignalsCheckResult $tamperingSignalsCheck
     *
     * @return self
     */
    public function setTamperingSignalsCheck(TamperingSignalsCheckResult $tamperingSignalsCheck): self
    {
        $this->initialized['tamperingSignalsCheck'] = true;
        $this->tamperingSignalsCheck = $tamperingSignalsCheck;
        return $this;
    }
}