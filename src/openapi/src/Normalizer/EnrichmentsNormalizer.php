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
class EnrichmentsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\Enrichments::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\Enrichments::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\Enrichments();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('aml', $data) && $data['aml'] !== null) {
            $object->setAml($this->denormalizer->denormalize($data['aml'], \Vouchsafe\OpenAPI\Model\EnrichmentsAml::class, 'json', $context));
            unset($data['aml']);
        }
        elseif (\array_key_exists('aml', $data) && $data['aml'] === null) {
            $object->setAml(null);
        }
        if (\array_key_exists('online_footprint', $data) && $data['online_footprint'] !== null) {
            $object->setOnlineFootprint($this->denormalizer->denormalize($data['online_footprint'], \Vouchsafe\OpenAPI\Model\EnrichmentsOnlineFootprint::class, 'json', $context));
            unset($data['online_footprint']);
        }
        elseif (\array_key_exists('online_footprint', $data) && $data['online_footprint'] === null) {
            $object->setOnlineFootprint(null);
        }
        if (\array_key_exists('credit_bureau', $data) && $data['credit_bureau'] !== null) {
            $object->setCreditBureau($this->denormalizer->denormalize($data['credit_bureau'], \Vouchsafe\OpenAPI\Model\EnrichmentsCreditBureau::class, 'json', $context));
            unset($data['credit_bureau']);
        }
        elseif (\array_key_exists('credit_bureau', $data) && $data['credit_bureau'] === null) {
            $object->setCreditBureau(null);
        }
        if (\array_key_exists('address_verification', $data) && $data['address_verification'] !== null) {
            $object->setAddressVerification($this->denormalizer->denormalize($data['address_verification'], \Vouchsafe\OpenAPI\Model\EnrichmentsAddressVerification::class, 'json', $context));
            unset($data['address_verification']);
        }
        elseif (\array_key_exists('address_verification', $data) && $data['address_verification'] === null) {
            $object->setAddressVerification(null);
        }
        if (\array_key_exists('radar', $data) && $data['radar'] !== null) {
            $object->setRadar($this->denormalizer->denormalize($data['radar'], \Vouchsafe\OpenAPI\Model\EnrichmentsRadar::class, 'json', $context));
            unset($data['radar']);
        }
        elseif (\array_key_exists('radar', $data) && $data['radar'] === null) {
            $object->setRadar(null);
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
        $dataArray['aml'] = $this->normalizer->normalize($data->getAml(), 'json', $context);
        $dataArray['online_footprint'] = $this->normalizer->normalize($data->getOnlineFootprint(), 'json', $context);
        $dataArray['credit_bureau'] = $this->normalizer->normalize($data->getCreditBureau(), 'json', $context);
        $dataArray['address_verification'] = $this->normalizer->normalize($data->getAddressVerification(), 'json', $context);
        $dataArray['radar'] = $this->normalizer->normalize($data->getRadar(), 'json', $context);
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\Enrichments::class => false];
    }
}