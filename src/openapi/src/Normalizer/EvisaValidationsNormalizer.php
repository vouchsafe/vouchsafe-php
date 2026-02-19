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
class EvisaValidationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\EvisaValidations::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\EvisaValidations::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\EvisaValidations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('evisa_exists', $data)) {
            $object->setEvisaExists($this->denormalizer->denormalize($data['evisa_exists'], \Vouchsafe\OpenAPI\Model\EvisaExistsResult::class, 'json', $context));
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $object->setRequiredFieldsExtracted($this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\EvisaRequiredFieldsExtractedResult::class, 'json', $context));
        }
        if (\array_key_exists('evisa_started', $data)) {
            $object->setEvisaStarted($this->denormalizer->denormalize($data['evisa_started'], \Vouchsafe\OpenAPI\Model\EvisaStartedResult::class, 'json', $context));
        }
        if (\array_key_exists('evisa_not_expired', $data)) {
            $object->setEvisaNotExpired($this->denormalizer->denormalize($data['evisa_not_expired'], \Vouchsafe\OpenAPI\Model\EvisaNotExpiredResult::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('evisaExists') && null !== $data->getEvisaExists()) {
            $dataArray['evisa_exists'] = $this->normalizer->normalize($data->getEvisaExists(), 'json', $context);
        }
        if ($data->isInitialized('requiredFieldsExtracted') && null !== $data->getRequiredFieldsExtracted()) {
            $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        }
        if ($data->isInitialized('evisaStarted') && null !== $data->getEvisaStarted()) {
            $dataArray['evisa_started'] = $this->normalizer->normalize($data->getEvisaStarted(), 'json', $context);
        }
        if ($data->isInitialized('evisaNotExpired') && null !== $data->getEvisaNotExpired()) {
            $dataArray['evisa_not_expired'] = $this->normalizer->normalize($data->getEvisaNotExpired(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\EvisaValidations::class => false];
    }
}