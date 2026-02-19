<?php

namespace Vouchsafe\OpenAPI\Model;

class SmartLookupMetadata
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
     * The thresholds used for aml and onlineFootprint checks. Defaults to aml: 96, onlineFootprint: 50
     *
     * @var SmartLookupMetadataThresholds
     */
    protected $thresholds;
    /**
     * Construct a type with a set of properties K of type T
     *
     * @var RecordStringUnknown
     */
    protected $creditBureauVerification;
    /**
     * Construct a type with a set of properties K of type T
     *
     * @var RecordStringUnknown
     */
    protected $onlineFootprintVerification;
    /**
     * Construct a type with a set of properties K of type T
     *
     * @var RecordStringUnknown
     */
    protected $amlVerification;
    /**
     * The thresholds used for aml and onlineFootprint checks. Defaults to aml: 96, onlineFootprint: 50
     *
     * @return SmartLookupMetadataThresholds
     */
    public function getThresholds(): SmartLookupMetadataThresholds
    {
        return $this->thresholds;
    }
    /**
     * The thresholds used for aml and onlineFootprint checks. Defaults to aml: 96, onlineFootprint: 50
     *
     * @param SmartLookupMetadataThresholds $thresholds
     *
     * @return self
     */
    public function setThresholds(SmartLookupMetadataThresholds $thresholds): self
    {
        $this->initialized['thresholds'] = true;
        $this->thresholds = $thresholds;
        return $this;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @return RecordStringUnknown
     */
    public function getCreditBureauVerification(): RecordStringUnknown
    {
        return $this->creditBureauVerification;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordStringUnknown $creditBureauVerification
     *
     * @return self
     */
    public function setCreditBureauVerification(RecordStringUnknown $creditBureauVerification): self
    {
        $this->initialized['creditBureauVerification'] = true;
        $this->creditBureauVerification = $creditBureauVerification;
        return $this;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @return RecordStringUnknown
     */
    public function getOnlineFootprintVerification(): RecordStringUnknown
    {
        return $this->onlineFootprintVerification;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordStringUnknown $onlineFootprintVerification
     *
     * @return self
     */
    public function setOnlineFootprintVerification(RecordStringUnknown $onlineFootprintVerification): self
    {
        $this->initialized['onlineFootprintVerification'] = true;
        $this->onlineFootprintVerification = $onlineFootprintVerification;
        return $this;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @return RecordStringUnknown
     */
    public function getAmlVerification(): RecordStringUnknown
    {
        return $this->amlVerification;
    }
    /**
     * Construct a type with a set of properties K of type T
     *
     * @param RecordStringUnknown $amlVerification
     *
     * @return self
     */
    public function setAmlVerification(RecordStringUnknown $amlVerification): self
    {
        $this->initialized['amlVerification'] = true;
        $this->amlVerification = $amlVerification;
        return $this;
    }
}