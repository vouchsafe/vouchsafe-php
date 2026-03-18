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
class AmlMatchApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\AmlMatchApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\AmlMatchApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\AmlMatchApi();
        if (\array_key_exists('score', $data) && \is_int($data['score'])) {
            $data['score'] = (double) $data['score'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('caption', $data)) {
            $object->setCaption($data['caption']);
        }
        if (\array_key_exists('score', $data)) {
            $object->setScore($data['score']);
        }
        if (\array_key_exists('first_seen', $data)) {
            $object->setFirstSeen($data['first_seen']);
        }
        if (\array_key_exists('last_seen', $data)) {
            $object->setLastSeen($data['last_seen']);
        }
        if (\array_key_exists('properties', $data)) {
            $object->setProperties($this->denormalizer->denormalize($data['properties'], \Vouchsafe\OpenAPI\Model\AmlMatchApiProperties::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['caption'] = $data->getCaption();
        $dataArray['score'] = $data->getScore();
        if ($data->isInitialized('firstSeen') && null !== $data->getFirstSeen()) {
            $dataArray['first_seen'] = $data->getFirstSeen();
        }
        if ($data->isInitialized('lastSeen') && null !== $data->getLastSeen()) {
            $dataArray['last_seen'] = $data->getLastSeen();
        }
        $dataArray['properties'] = $this->normalizer->normalize($data->getProperties(), 'json', $context);
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\AmlMatchApi::class => false];
    }
}