<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class VerifyEmailCheckApiValidations implements AdditionalPropertiesInterface
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
     * Present only when the email address has been verified.
     * Otherwise undefined.
     *
     * @var VerifyEmailCheckApiValidationsEmailVerified
     */
    protected $emailVerified;
    /**
     * Present only when the email address has been verified.
     * Otherwise undefined.
     *
     * @return VerifyEmailCheckApiValidationsEmailVerified
     */
    public function getEmailVerified(): VerifyEmailCheckApiValidationsEmailVerified
    {
        return $this->emailVerified;
    }
    /**
    * Present only when the email address has been verified.
    Otherwise undefined.
    *
    * @param VerifyEmailCheckApiValidationsEmailVerified $emailVerified
    *
    * @return self
    */
    public function setEmailVerified(VerifyEmailCheckApiValidationsEmailVerified $emailVerified): self
    {
        $this->initialized['emailVerified'] = true;
        $this->emailVerified = $emailVerified;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['emailVerified' => ['email_verified', 'getEmailVerified', 'setEmailVerified']];
    }
}