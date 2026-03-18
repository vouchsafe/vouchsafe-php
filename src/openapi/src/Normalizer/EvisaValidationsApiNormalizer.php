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
class EvisaValidationsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\EvisaValidationsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\EvisaValidationsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\EvisaValidationsApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('evisa_exists', $data)) {
            $object->setEvisaExists($this->denormalizer->denormalize($data['evisa_exists'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $object->setRequiredFieldsExtracted($this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('evisa_started', $data)) {
            $object->setEvisaStarted($this->denormalizer->denormalize($data['evisa_started'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('evisa_not_expired', $data)) {
            $object->setEvisaNotExpired($this->denormalizer->denormalize($data['evisa_not_expired'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('face_match', $data)) {
            $object->setFaceMatch($this->denormalizer->denormalize($data['face_match'], \Vouchsafe\OpenAPI\Model\EvisaValidationsApiFaceMatch::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['evisa_exists'] = $this->normalizer->normalize($data->getEvisaExists(), 'json', $context);
        $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        if ($data->isInitialized('evisaStarted') && null !== $data->getEvisaStarted()) {
            $dataArray['evisa_started'] = $this->normalizer->normalize($data->getEvisaStarted(), 'json', $context);
        }
        $dataArray['evisa_not_expired'] = $this->normalizer->normalize($data->getEvisaNotExpired(), 'json', $context);
        if ($data->isInitialized('faceMatch') && null !== $data->getFaceMatch()) {
            $dataArray['face_match'] = $this->normalizer->normalize($data->getFaceMatch(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\EvisaValidationsApi::class => false];
    }
}