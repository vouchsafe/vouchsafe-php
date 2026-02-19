<?php

namespace Vouchsafe\OpenAPI\Model;

class RequestVerificationInput
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
     * The user's email address
     *
     * @var string
     */
    protected $email;
    /**
     * The user's first name, if you have it
     *
     * @var string
     */
    protected $firstName;
    /**
     * The user's last name, if you have it
     *
     * @var string
     */
    protected $lastName;
    /**
     * The user's street address, if you have it
     *
     * @var string
     */
    protected $streetAddress;
    /**
     * The user's postcode, if you have it
     *
     * @var string
     */
    protected $postcode;
    /**
     * The user's date of birth, if you have it. Format as YYYY-MM-DD or ISO 8601
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * Which verification flow to use.
     * 
     * Get the flow ID from the URL of the builder page.
     * 
     * For example: `/admin/teams/abc123/builder/[workflow_id]`
     * 
     * If not provided, the last published flow is used instead.
     *
     * @var string
     */
    protected $workflowId;
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID
     *
     * @var string
     */
    protected $externalId;
    /**
     * A generic or unique URL to send the user back to upon success.
     * 
     * If not provided, the verification flow default will be used.
     *
     * @var string
     */
    protected $redirectUrl;
    /**
     * When will the verification session expire and the user cease getting reminders?
     * 
     * If not provided, the verification flow default will be used.
     *
     * @var string
     */
    protected $expiresAt;
    /**
     * The user's email address
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * The user's email address
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * The user's first name, if you have it
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }
    /**
     * The user's first name, if you have it
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * The user's last name, if you have it
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * The user's last name, if you have it
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * The user's street address, if you have it
     *
     * @return string
     */
    public function getStreetAddress(): string
    {
        return $this->streetAddress;
    }
    /**
     * The user's street address, if you have it
     *
     * @param string $streetAddress
     *
     * @return self
     */
    public function setStreetAddress(string $streetAddress): self
    {
        $this->initialized['streetAddress'] = true;
        $this->streetAddress = $streetAddress;
        return $this;
    }
    /**
     * The user's postcode, if you have it
     *
     * @return string
     */
    public function getPostcode(): string
    {
        return $this->postcode;
    }
    /**
     * The user's postcode, if you have it
     *
     * @param string $postcode
     *
     * @return self
     */
    public function setPostcode(string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * The user's date of birth, if you have it. Format as YYYY-MM-DD or ISO 8601
     *
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }
    /**
     * The user's date of birth, if you have it. Format as YYYY-MM-DD or ISO 8601
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(string $dateOfBirth): self
    {
        $this->initialized['dateOfBirth'] = true;
        $this->dateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Which verification flow to use.
     * 
     * Get the flow ID from the URL of the builder page.
     * 
     * For example: `/admin/teams/abc123/builder/[workflow_id]`
     * 
     * If not provided, the last published flow is used instead.
     *
     * @return string
     */
    public function getWorkflowId(): string
    {
        return $this->workflowId;
    }
    /**
    * Which verification flow to use.
    
    Get the flow ID from the URL of the builder page.
    
    For example: `/admin/teams/abc123/builder/[workflow_id]`
    
    If not provided, the last published flow is used instead.
    *
    * @param string $workflowId
    *
    * @return self
    */
    public function setWorkflowId(string $workflowId): self
    {
        $this->initialized['workflowId'] = true;
        $this->workflowId = $workflowId;
        return $this;
    }
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID
     *
     * @return string
     */
    public function getExternalId(): string
    {
        return $this->externalId;
    }
    /**
     * An identifier from your own systems, to avoid needing to store Vouchsafe's own ID
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(string $externalId): self
    {
        $this->initialized['externalId'] = true;
        $this->externalId = $externalId;
        return $this;
    }
    /**
     * A generic or unique URL to send the user back to upon success.
     * 
     * If not provided, the verification flow default will be used.
     *
     * @return string
     */
    public function getRedirectUrl(): string
    {
        return $this->redirectUrl;
    }
    /**
    * A generic or unique URL to send the user back to upon success.
    
    If not provided, the verification flow default will be used.
    *
    * @param string $redirectUrl
    *
    * @return self
    */
    public function setRedirectUrl(string $redirectUrl): self
    {
        $this->initialized['redirectUrl'] = true;
        $this->redirectUrl = $redirectUrl;
        return $this;
    }
    /**
     * When will the verification session expire and the user cease getting reminders?
     * 
     * If not provided, the verification flow default will be used.
     *
     * @return string
     */
    public function getExpiresAt(): string
    {
        return $this->expiresAt;
    }
    /**
    * When will the verification session expire and the user cease getting reminders?
    
    If not provided, the verification flow default will be used.
    *
    * @param string $expiresAt
    *
    * @return self
    */
    public function setExpiresAt(string $expiresAt): self
    {
        $this->initialized['expiresAt'] = true;
        $this->expiresAt = $expiresAt;
        return $this;
    }
}