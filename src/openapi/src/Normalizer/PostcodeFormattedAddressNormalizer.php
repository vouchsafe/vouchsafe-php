<?php

namespace Vouchsafe\OpenAPI\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Vouchsafe\OpenAPI\Runtime\Normalizer\CheckArray;
use Vouchsafe\OpenAPI\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PostcodeFormattedAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\PostcodeFormattedAddress::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\PostcodeFormattedAddress::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\PostcodeFormattedAddress();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('residence_number', $data)) {
            $object->setResidenceNumber($data['residence_number']);
        }
        if (\array_key_exists('building_name', $data)) {
            $object->setBuildingName($data['building_name']);
        }
        if (\array_key_exists('street', $data)) {
            $object->setStreet($data['street']);
        }
        if (\array_key_exists('city', $data)) {
            $object->setCity($data['city']);
        }
        if (\array_key_exists('postcode', $data)) {
            $object->setPostcode($data['postcode']);
        }
        if (\array_key_exists('country', $data)) {
            $object->setCountry($data['country']);
        }
        if (\array_key_exists('region', $data)) {
            $object->setRegion($data['region']);
        }
        if (\array_key_exists('country_code', $data)) {
            $object->setCountryCode($data['country_code']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('residenceNumber') && null !== $data->getResidenceNumber()) {
            $dataArray['residence_number'] = $data->getResidenceNumber();
        }
        if ($data->isInitialized('buildingName') && null !== $data->getBuildingName()) {
            $dataArray['building_name'] = $data->getBuildingName();
        }
        if ($data->isInitialized('street') && null !== $data->getStreet()) {
            $dataArray['street'] = $data->getStreet();
        }
        if ($data->isInitialized('city') && null !== $data->getCity()) {
            $dataArray['city'] = $data->getCity();
        }
        $dataArray['postcode'] = $data->getPostcode();
        $dataArray['country'] = $data->getCountry();
        if ($data->isInitialized('region') && null !== $data->getRegion()) {
            $dataArray['region'] = $data->getRegion();
        }
        $dataArray['country_code'] = $data->getCountryCode();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\PostcodeFormattedAddress::class => false];
    }
}