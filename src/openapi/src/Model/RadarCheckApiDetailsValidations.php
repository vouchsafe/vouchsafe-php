<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class RadarCheckApiDetailsValidations implements AdditionalPropertiesInterface
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
     * @var ValidationOutcomeApi
     */
    protected $notDisposableEmail;
    /**
     * Whether the identity matches any known fraudster records.
     *
     * @var RadarCheckApiDetailsValidationsNoKnownFraudsterMatch
     */
    protected $noKnownFraudsterMatch;
    /**
     * @var ValidationOutcomeApi
     */
    protected $normalVelocityDetected;
    /**
     * @return ValidationOutcomeApi
     */
    public function getNotDisposableEmail(): ValidationOutcomeApi
    {
        return $this->notDisposableEmail;
    }
    /**
     * @param ValidationOutcomeApi $notDisposableEmail
     *
     * @return self
     */
    public function setNotDisposableEmail(ValidationOutcomeApi $notDisposableEmail): self
    {
        $this->initialized['notDisposableEmail'] = true;
        $this->notDisposableEmail = $notDisposableEmail;
        return $this;
    }
    /**
     * Whether the identity matches any known fraudster records.
     *
     * @return RadarCheckApiDetailsValidationsNoKnownFraudsterMatch
     */
    public function getNoKnownFraudsterMatch(): RadarCheckApiDetailsValidationsNoKnownFraudsterMatch
    {
        return $this->noKnownFraudsterMatch;
    }
    /**
     * Whether the identity matches any known fraudster records.
     *
     * @param RadarCheckApiDetailsValidationsNoKnownFraudsterMatch $noKnownFraudsterMatch
     *
     * @return self
     */
    public function setNoKnownFraudsterMatch(RadarCheckApiDetailsValidationsNoKnownFraudsterMatch $noKnownFraudsterMatch): self
    {
        $this->initialized['noKnownFraudsterMatch'] = true;
        $this->noKnownFraudsterMatch = $noKnownFraudsterMatch;
        return $this;
    }
    /**
     * @return ValidationOutcomeApi
     */
    public function getNormalVelocityDetected(): ValidationOutcomeApi
    {
        return $this->normalVelocityDetected;
    }
    /**
     * @param ValidationOutcomeApi $normalVelocityDetected
     *
     * @return self
     */
    public function setNormalVelocityDetected(ValidationOutcomeApi $normalVelocityDetected): self
    {
        $this->initialized['normalVelocityDetected'] = true;
        $this->normalVelocityDetected = $normalVelocityDetected;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['notDisposableEmail' => ['not_disposable_email', 'getNotDisposableEmail', 'setNotDisposableEmail'], 'noKnownFraudsterMatch' => ['no_known_fraudster_match', 'getNoKnownFraudsterMatch', 'setNoKnownFraudsterMatch'], 'normalVelocityDetected' => ['normal_velocity_detected', 'getNormalVelocityDetected', 'setNormalVelocityDetected']];
    }
}