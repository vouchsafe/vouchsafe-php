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
class RightToWorkExtractedDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\RightToWorkExtractedDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\RightToWorkExtractedDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\RightToWorkExtractedDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('first_name', $data)) {
            $object->setFirstName($data['first_name']);
        }
        if (\array_key_exists('last_name', $data)) {
            $object->setLastName($data['last_name']);
        }
        if (\array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        if (\array_key_exists('share_code', $data)) {
            $object->setShareCode($data['share_code']);
        }
        if (\array_key_exists('reference_number', $data)) {
            $object->setReferenceNumber($data['reference_number']);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        }
        elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('evisa_conditions', $data)) {
            $value = $data['evisa_conditions'];
            if (is_array($data['evisa_conditions']) and (isset($data['evisa_conditions']['extraction_success']) and $data['evisa_conditions']['extraction_success'] == '1') and isset($data['evisa_conditions']['max_weekly_hours']) and isset($data['evisa_conditions']['no_self_employment'])) {
                $value = $this->denormalizer->denormalize($data['evisa_conditions'], \Vouchsafe\OpenAPI\Model\EvisaConditionsSuccess::class, 'json', $context);
            } elseif (is_array($data['evisa_conditions']) and (isset($data['evisa_conditions']['extraction_success']) and $data['evisa_conditions']['extraction_success'] == '')) {
                $value = $this->denormalizer->denormalize($data['evisa_conditions'], \Vouchsafe\OpenAPI\Model\EvisaConditionsFailed::class, 'json', $context);
            }
            $object->setEvisaConditions($value);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('firstName') && null !== $data->getFirstName()) {
            $dataArray['first_name'] = $data->getFirstName();
        }
        if ($data->isInitialized('lastName') && null !== $data->getLastName()) {
            $dataArray['last_name'] = $data->getLastName();
        }
        if ($data->isInitialized('dateOfBirth') && null !== $data->getDateOfBirth()) {
            $dataArray['date_of_birth'] = $data->getDateOfBirth();
        }
        if ($data->isInitialized('shareCode') && null !== $data->getShareCode()) {
            $dataArray['share_code'] = $data->getShareCode();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['reference_number'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('expirationDate')) {
            $dataArray['expiration_date'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('evisaConditions') && null !== $data->getEvisaConditions()) {
            $value = $data->getEvisaConditions();
            if (is_object($data->getEvisaConditions())) {
                $value = $this->normalizer->normalize($data->getEvisaConditions(), 'json', $context);
            } elseif (is_object($data->getEvisaConditions())) {
                $value = $this->normalizer->normalize($data->getEvisaConditions(), 'json', $context);
            }
            $dataArray['evisa_conditions'] = $value;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\RightToWorkExtractedDetails::class => false];
    }
}