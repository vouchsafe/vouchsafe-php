<?php

namespace Vouchsafe\OpenAPI\Model;

class Enrichments extends \ArrayObject
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
     * @var EnrichmentsAml|null
     */
    protected $aml;
    /**
     * @var EnrichmentsOnlineFootprint|null
     */
    protected $onlineFootprint;
    /**
     * @var EnrichmentsCreditBureau|null
     */
    protected $creditBureau;
    /**
     * @var EnrichmentsAddressVerification|null
     */
    protected $addressVerification;
    /**
     * @var EnrichmentsRadar|null
     */
    protected $radar;
    /**
     * @return EnrichmentsAml|null
     */
    public function getAml(): ?EnrichmentsAml
    {
        return $this->aml;
    }
    /**
     * @param EnrichmentsAml|null $aml
     *
     * @return self
     */
    public function setAml(?EnrichmentsAml $aml): self
    {
        $this->initialized['aml'] = true;
        $this->aml = $aml;
        return $this;
    }
    /**
     * @return EnrichmentsOnlineFootprint|null
     */
    public function getOnlineFootprint(): ?EnrichmentsOnlineFootprint
    {
        return $this->onlineFootprint;
    }
    /**
     * @param EnrichmentsOnlineFootprint|null $onlineFootprint
     *
     * @return self
     */
    public function setOnlineFootprint(?EnrichmentsOnlineFootprint $onlineFootprint): self
    {
        $this->initialized['onlineFootprint'] = true;
        $this->onlineFootprint = $onlineFootprint;
        return $this;
    }
    /**
     * @return EnrichmentsCreditBureau|null
     */
    public function getCreditBureau(): ?EnrichmentsCreditBureau
    {
        return $this->creditBureau;
    }
    /**
     * @param EnrichmentsCreditBureau|null $creditBureau
     *
     * @return self
     */
    public function setCreditBureau(?EnrichmentsCreditBureau $creditBureau): self
    {
        $this->initialized['creditBureau'] = true;
        $this->creditBureau = $creditBureau;
        return $this;
    }
    /**
     * @return EnrichmentsAddressVerification|null
     */
    public function getAddressVerification(): ?EnrichmentsAddressVerification
    {
        return $this->addressVerification;
    }
    /**
     * @param EnrichmentsAddressVerification|null $addressVerification
     *
     * @return self
     */
    public function setAddressVerification(?EnrichmentsAddressVerification $addressVerification): self
    {
        $this->initialized['addressVerification'] = true;
        $this->addressVerification = $addressVerification;
        return $this;
    }
    /**
     * @return EnrichmentsRadar|null
     */
    public function getRadar(): ?EnrichmentsRadar
    {
        return $this->radar;
    }
    /**
     * @param EnrichmentsRadar|null $radar
     *
     * @return self
     */
    public function setRadar(?EnrichmentsRadar $radar): self
    {
        $this->initialized['radar'] = true;
        $this->radar = $radar;
        return $this;
    }
}