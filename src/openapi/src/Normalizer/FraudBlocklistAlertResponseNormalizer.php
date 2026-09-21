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
class FraudBlocklistAlertResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\FraudBlocklistAlertResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\FraudBlocklistAlertResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\FraudBlocklistAlertResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('acknowledged_at', $data) && $data['acknowledged_at'] !== null) {
            $object->setAcknowledgedAt($data['acknowledged_at']);
        }
        elseif (\array_key_exists('acknowledged_at', $data) && $data['acknowledged_at'] === null) {
            $object->setAcknowledgedAt(null);
        }
        if (\array_key_exists('source', $data)) {
            $object->setSource($data['source']);
        }
        if (\array_key_exists('matched_on', $data)) {
            $values = [];
            foreach ($data['matched_on'] as $value) {
                $values[] = $value;
            }
            $object->setMatchedOn($values);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['created_at'] = $data->getCreatedAt();
        $dataArray['acknowledged_at'] = $data->getAcknowledgedAt();
        $dataArray['source'] = $data->getSource();
        $values = [];
        foreach ($data->getMatchedOn() as $value) {
            $values[] = $value;
        }
        $dataArray['matched_on'] = $values;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\FraudBlocklistAlertResponse::class => false];
    }
}