<?php

namespace Vouchsafe\OpenAPI\Model;

class StepAddressDigitalIdApiExtractedDetails extends \ArrayObject
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
     * Structured address, or null for legacy records with only inline fields.
     *
     * @var StepAddressDigitalIdApiExtractedDetailsAddress|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $postcode;
    /**
     * @var string|null
     */
    protected $firstLineOfAddress;
    /**
     * Structured address, or null for legacy records with only inline fields.
     *
     * @return StepAddressDigitalIdApiExtractedDetailsAddress|null
     */
    public function getAddress(): ?StepAddressDigitalIdApiExtractedDetailsAddress
    {
        return $this->address;
    }
    /**
     * Structured address, or null for legacy records with only inline fields.
     *
     * @param StepAddressDigitalIdApiExtractedDetailsAddress|null $address
     *
     * @return self
     */
    public function setAddress(?StepAddressDigitalIdApiExtractedDetailsAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPostcode(): ?string
    {
        return $this->postcode;
    }
    /**
     * @param string|null $postcode
     *
     * @return self
     */
    public function setPostcode(?string $postcode): self
    {
        $this->initialized['postcode'] = true;
        $this->postcode = $postcode;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getFirstLineOfAddress(): ?string
    {
        return $this->firstLineOfAddress;
    }
    /**
     * @param string|null $firstLineOfAddress
     *
     * @return self
     */
    public function setFirstLineOfAddress(?string $firstLineOfAddress): self
    {
        $this->initialized['firstLineOfAddress'] = true;
        $this->firstLineOfAddress = $firstLineOfAddress;
        return $this;
    }
}