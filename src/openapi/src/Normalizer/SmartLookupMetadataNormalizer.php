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
class SmartLookupMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\SmartLookupMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('thresholds', $data)) {
            $object->setThresholds($this->denormalizer->denormalize($data['thresholds'], \Vouchsafe\OpenAPI\Model\SmartLookupMetadataThresholds::class, 'json', $context));
        }
        if (\array_key_exists('creditBureauVerification', $data)) {
            $object->setCreditBureauVerification($this->denormalizer->denormalize($data['creditBureauVerification'], \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class, 'json', $context));
        }
        if (\array_key_exists('onlineFootprintVerification', $data)) {
            $object->setOnlineFootprintVerification($this->denormalizer->denormalize($data['onlineFootprintVerification'], \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class, 'json', $context));
        }
        if (\array_key_exists('amlVerification', $data)) {
            $object->setAmlVerification($this->denormalizer->denormalize($data['amlVerification'], \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['thresholds'] = $this->normalizer->normalize($data->getThresholds(), 'json', $context);
        if ($data->isInitialized('creditBureauVerification') && null !== $data->getCreditBureauVerification()) {
            $dataArray['creditBureauVerification'] = $this->normalizer->normalize($data->getCreditBureauVerification(), 'json', $context);
        }
        if ($data->isInitialized('onlineFootprintVerification') && null !== $data->getOnlineFootprintVerification()) {
            $dataArray['onlineFootprintVerification'] = $this->normalizer->normalize($data->getOnlineFootprintVerification(), 'json', $context);
        }
        if ($data->isInitialized('amlVerification') && null !== $data->getAmlVerification()) {
            $dataArray['amlVerification'] = $this->normalizer->normalize($data->getAmlVerification(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class => false];
    }
}