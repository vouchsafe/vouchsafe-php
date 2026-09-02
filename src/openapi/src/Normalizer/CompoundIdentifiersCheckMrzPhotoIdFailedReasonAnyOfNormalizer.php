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
class CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOfNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOf::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOf::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOf();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOfMetadata::class, 'json', $context));
            unset($data['metadata']);
        }
        if (\array_key_exists('failed_reasons', $data)) {
            $values = [];
            foreach ($data['failed_reasons'] as $value) {
                $value_1 = $value;
                if (is_string($value)) {
                    $value_1 = $value;
                } elseif (is_string($value)) {
                    $value_1 = $value;
                } elseif (is_string($value)) {
                    $value_1 = $value;
                } elseif (is_string($value)) {
                    $value_1 = $value;
                } elseif (is_string($value)) {
                    $value_1 = $value;
                }
                $values[] = $value_1;
            }
            $object->setFailedReasons($values);
            unset($data['failed_reasons']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_2;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('metadata') && null !== $data->getMetadata()) {
            $dataArray['metadata'] = $data->getMetadata() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getMetadata(), 'json', $context));
        }
        $values = [];
        foreach ($data->getFailedReasons() as $value) {
            $value_1 = $value;
            if (is_string($value)) {
                $value_1 = $value;
            } elseif (is_string($value)) {
                $value_1 = $value;
            } elseif (is_string($value)) {
                $value_1 = $value;
            } elseif (is_string($value)) {
                $value_1 = $value;
            } elseif (is_string($value)) {
                $value_1 = $value;
            }
            $values[] = $value_1;
        }
        $dataArray['failed_reasons'] = $values;
        $dataArray['status'] = $data->getStatus();
        foreach ($data->additionalPropertyEntries() as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOf::class => false];
    }
}