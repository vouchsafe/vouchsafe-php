<?php

namespace Vouchsafe\OpenAPI\Model;

class VouchDetailsApi
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
     * The referee verification ID. Results can be retrieved from the GetVerification endpoint.
     *
     * @var string
     */
    protected $refereeVerificationId;
    /**
     * Relationship to the user when a personal referee is used.
     *
     * @var string|null
     */
    protected $relationship;
    /**
     * The referee's organisation when a professional referee is used.
     *
     * @var string|null
     */
    protected $organisation;
    /**
     * The referee verification ID. Results can be retrieved from the GetVerification endpoint.
     *
     * @return string
     */
    public function getRefereeVerificationId(): string
    {
        return $this->refereeVerificationId;
    }
    /**
     * The referee verification ID. Results can be retrieved from the GetVerification endpoint.
     *
     * @param string $refereeVerificationId
     *
     * @return self
     */
    public function setRefereeVerificationId(string $refereeVerificationId): self
    {
        $this->initialized['refereeVerificationId'] = true;
        $this->refereeVerificationId = $refereeVerificationId;
        return $this;
    }
    /**
     * Relationship to the user when a personal referee is used.
     *
     * @return string|null
     */
    public function getRelationship(): ?string
    {
        return $this->relationship;
    }
    /**
     * Relationship to the user when a personal referee is used.
     *
     * @param string|null $relationship
     *
     * @return self
     */
    public function setRelationship(?string $relationship): self
    {
        $this->initialized['relationship'] = true;
        $this->relationship = $relationship;
        return $this;
    }
    /**
     * The referee's organisation when a professional referee is used.
     *
     * @return string|null
     */
    public function getOrganisation(): ?string
    {
        return $this->organisation;
    }
    /**
     * The referee's organisation when a professional referee is used.
     *
     * @param string|null $organisation
     *
     * @return self
     */
    public function setOrganisation(?string $organisation): self
    {
        $this->initialized['organisation'] = true;
        $this->organisation = $organisation;
        return $this;
    }
}