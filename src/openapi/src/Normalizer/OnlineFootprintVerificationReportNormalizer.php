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
class OnlineFootprintVerificationReportNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('state', $data)) {
            $object->setState($data['state']);
        }
        if (\array_key_exists('checks', $data)) {
            $value = $data['checks'];
            if (is_array($data['checks']) and \array_key_exists('EMAIL_SCORE', $data['checks'])) {
                $value = $this->denormalizer->denormalize($data['checks'], \Vouchsafe\OpenAPI\Model\OnlineFootprintChecksAnyOf::class, 'json', $context);
            } elseif (is_array($data['checks']) and \array_key_exists('PHONE_SCORE', $data['checks'])) {
                $value = $this->denormalizer->denormalize($data['checks'], \Vouchsafe\OpenAPI\Model\OnlineFootprintChecksAnyOf::class, 'json', $context);
            }
            $object->setChecks($value);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['state'] = $data->getState();
        $value = $data->getChecks();
        if (is_object($data->getChecks())) {
            $value = $data->getChecks() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getChecks(), 'json', $context));
        } elseif (is_object($data->getChecks())) {
            $value = $data->getChecks() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getChecks(), 'json', $context));
        }
        $dataArray['checks'] = $value;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class => false];
    }
}