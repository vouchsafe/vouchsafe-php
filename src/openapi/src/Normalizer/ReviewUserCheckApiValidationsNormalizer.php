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
class ReviewUserCheckApiValidationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\ReviewUserCheckApiValidations::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\ReviewUserCheckApiValidations::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\ReviewUserCheckApiValidations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('referee_confirmed_photo', $data)) {
            $object->setRefereeConfirmedPhoto($this->denormalizer->denormalize($data['referee_confirmed_photo'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
            unset($data['referee_confirmed_photo']);
        }
        if (\array_key_exists('referee_confirmed_date_of_birth', $data)) {
            $object->setRefereeConfirmedDateOfBirth($this->denormalizer->denormalize($data['referee_confirmed_date_of_birth'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
            unset($data['referee_confirmed_date_of_birth']);
        }
        if (\array_key_exists('referee_confirmed_name', $data)) {
            $object->setRefereeConfirmedName($this->denormalizer->denormalize($data['referee_confirmed_name'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
            unset($data['referee_confirmed_name']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('refereeConfirmedPhoto') && null !== $data->getRefereeConfirmedPhoto()) {
            $dataArray['referee_confirmed_photo'] = $this->normalizer->normalize($data->getRefereeConfirmedPhoto(), 'json', $context);
        }
        if ($data->isInitialized('refereeConfirmedDateOfBirth') && null !== $data->getRefereeConfirmedDateOfBirth()) {
            $dataArray['referee_confirmed_date_of_birth'] = $this->normalizer->normalize($data->getRefereeConfirmedDateOfBirth(), 'json', $context);
        }
        if ($data->isInitialized('refereeConfirmedName') && null !== $data->getRefereeConfirmedName()) {
            $dataArray['referee_confirmed_name'] = $this->normalizer->normalize($data->getRefereeConfirmedName(), 'json', $context);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\ReviewUserCheckApiValidations::class => false];
    }
}