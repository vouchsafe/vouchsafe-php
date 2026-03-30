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
class RadarCheckApiDetailsValidationsNoKnownFraudsterMatchNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('risk', $data) && $data['risk'] !== null) {
            $object->setRisk($data['risk']);
            unset($data['risk']);
        }
        elseif (\array_key_exists('risk', $data) && $data['risk'] === null) {
            $object->setRisk(null);
        }
        if (\array_key_exists('messages', $data)) {
            $values = [];
            foreach ($data['messages'] as $value) {
                $values[] = $value;
            }
            $object->setMessages($values);
            unset($data['messages']);
        }
        if (\array_key_exists('flags', $data)) {
            $values_1 = [];
            foreach ($data['flags'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFlags($values_1);
            unset($data['flags']);
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
        $dataArray['risk'] = $data->getRisk();
        $values = [];
        foreach ($data->getMessages() as $value) {
            $values[] = $value;
        }
        $dataArray['messages'] = $values;
        $values_1 = [];
        foreach ($data->getFlags() as $value_1) {
            $values_1[] = $value_1;
        }
        $dataArray['flags'] = $values_1;
        $dataArray['status'] = $data->getStatus();
        foreach ($data as $key => $value_2) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_2;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch::class => false];
    }
}