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
class RightToWorkDetailsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] !== null) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        elseif (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] === null) {
            $object->setDateOfBirth(null);
        }
        if (\array_key_exists('share_code', $data) && $data['share_code'] !== null) {
            $object->setShareCode($data['share_code']);
        }
        elseif (\array_key_exists('share_code', $data) && $data['share_code'] === null) {
            $object->setShareCode(null);
        }
        if (\array_key_exists('reference_number', $data) && $data['reference_number'] !== null) {
            $object->setReferenceNumber($data['reference_number']);
        }
        elseif (\array_key_exists('reference_number', $data) && $data['reference_number'] === null) {
            $object->setReferenceNumber(null);
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
                $value = $this->denormalizer->denormalize($data['evisa_conditions'], \Vouchsafe\OpenAPI\Model\EvisaConditionsSuccessApi::class, 'json', $context);
            } elseif (is_array($data['evisa_conditions']) and (isset($data['evisa_conditions']['extraction_success']) and $data['evisa_conditions']['extraction_success'] == '')) {
                $value = $this->denormalizer->denormalize($data['evisa_conditions'], \Vouchsafe\OpenAPI\Model\EvisaConditionsFailedApi::class, 'json', $context);
            }
            $object->setEvisaConditions($value);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['date_of_birth'] = $data->getDateOfBirth();
        $dataArray['share_code'] = $data->getShareCode();
        $dataArray['reference_number'] = $data->getReferenceNumber();
        $dataArray['expiration_date'] = $data->getExpirationDate();
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
        return [\Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi::class => false];
    }
}