<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifyPhoneNumberCheckApiValidations extends \ArrayObject
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
     * Present only when the phone number has been verified.
     * Otherwise undefined.
     *
     * @var VerifyPhoneNumberCheckApiValidationsPhoneVerified
     */
    protected $phoneVerified;
    /**
     * Present only when the phone number has been verified.
     * Otherwise undefined.
     *
     * @return VerifyPhoneNumberCheckApiValidationsPhoneVerified
     */
    public function getPhoneVerified(): VerifyPhoneNumberCheckApiValidationsPhoneVerified
    {
        return $this->phoneVerified;
    }
    /**
    * Present only when the phone number has been verified.
    Otherwise undefined.
    *
    * @param VerifyPhoneNumberCheckApiValidationsPhoneVerified $phoneVerified
    *
    * @return self
    */
    public function setPhoneVerified(VerifyPhoneNumberCheckApiValidationsPhoneVerified $phoneVerified): self
    {
        $this->initialized['phoneVerified'] = true;
        $this->phoneVerified = $phoneVerified;
        return $this;
    }
}