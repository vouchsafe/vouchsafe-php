<?php

namespace Vouchsafe\OpenAPI\Model;

class VerifyPhotoIdPostBody extends \ArrayObject
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
     * @var string
     */
    protected $subType;
    /**
     * @var string
     */
    protected $front;
    /**
     * @var string
     */
    protected $back;
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string
     */
    protected $faceScan;
    /**
     * @return string
     */
    public function getSubType(): string
    {
        return $this->subType;
    }
    /**
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
     * @return string
     */
    public function getFront(): string
    {
        return $this->front;
    }
    /**
     * @param string $front
     *
     * @return self
     */
    public function setFront(string $front): self
    {
        $this->initialized['front'] = true;
        $this->front = $front;
        return $this;
    }
    /**
     * @return string
     */
    public function getBack(): string
    {
        return $this->back;
    }
    /**
     * @param string $back
     *
     * @return self
     */
    public function setBack(string $back): self
    {
        $this->initialized['back'] = true;
        $this->back = $back;
        return $this;
    }
    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    /**
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->initialized['countryCode'] = true;
        $this->countryCode = $countryCode;
        return $this;
    }
    /**
     * @return string
     */
    public function getFaceScan(): string
    {
        return $this->faceScan;
    }
    /**
     * @param string $faceScan
     *
     * @return self
     */
    public function setFaceScan(string $faceScan): self
    {
        $this->initialized['faceScan'] = true;
        $this->faceScan = $faceScan;
        return $this;
    }
}