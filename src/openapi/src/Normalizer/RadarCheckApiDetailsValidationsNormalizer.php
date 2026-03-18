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
class RadarCheckApiDetailsValidationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidations::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidations::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('not_disposable_email', $data)) {
            $object->setNotDisposableEmail($this->denormalizer->denormalize($data['not_disposable_email'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
            unset($data['not_disposable_email']);
        }
        if (\array_key_exists('no_known_fraudster_match', $data)) {
            $object->setNoKnownFraudsterMatch($this->denormalizer->denormalize($data['no_known_fraudster_match'], \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch::class, 'json', $context));
            unset($data['no_known_fraudster_match']);
        }
        if (\array_key_exists('normal_velocity_detected', $data)) {
            $object->setNormalVelocityDetected($this->denormalizer->denormalize($data['normal_velocity_detected'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
            unset($data['normal_velocity_detected']);
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
        if ($data->isInitialized('notDisposableEmail') && null !== $data->getNotDisposableEmail()) {
            $dataArray['not_disposable_email'] = $this->normalizer->normalize($data->getNotDisposableEmail(), 'json', $context);
        }
        $dataArray['no_known_fraudster_match'] = $this->normalizer->normalize($data->getNoKnownFraudsterMatch(), 'json', $context);
        $dataArray['normal_velocity_detected'] = $this->normalizer->normalize($data->getNormalVelocityDetected(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidations::class => false];
    }
}