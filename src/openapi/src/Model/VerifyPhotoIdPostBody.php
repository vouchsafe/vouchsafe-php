<?php

namespace Vouchsafe\OpenAPI\Model;

use Vouchsafe\OpenAPI\Runtime\AdditionalAndPatternProperties;
use Vouchsafe\OpenAPI\Runtime\AdditionalPropertiesInterface;
class VerifyPhotoIdPostBody implements AdditionalPropertiesInterface
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
     * @var string
     */
    protected $subType;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $front;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
     */
    protected $back;
    /**
     * @var string
     */
    protected $countryCode;
    /**
     * @var string|resource|\Psr\Http\Message\StreamInterface
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
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getFront()
    {
        return $this->front;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $front
     *
     * @return self
     */
    public function setFront($front): self
    {
        $this->initialized['front'] = true;
        $this->front = $front;
        return $this;
    }
    /**
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getBack()
    {
        return $this->back;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $back
     *
     * @return self
     */
    public function setBack($back): self
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
     * @return string|resource|\Psr\Http\Message\StreamInterface
     */
    public function getFaceScan()
    {
        return $this->faceScan;
    }
    /**
     * @param string|resource|\Psr\Http\Message\StreamInterface $faceScan
     *
     * @return self
     */
    public function setFaceScan($faceScan): self
    {
        $this->initialized['faceScan'] = true;
        $this->faceScan = $faceScan;
        return $this;
    }
    public function definedProperties(): array
    {
        return ['subType' => ['sub_type', 'getSubType', 'setSubType'], 'front' => ['front', 'getFront', 'setFront'], 'back' => ['back', 'getBack', 'setBack'], 'countryCode' => ['country_code', 'getCountryCode', 'setCountryCode'], 'faceScan' => ['face_scan', 'getFaceScan', 'setFaceScan']];
    }
}