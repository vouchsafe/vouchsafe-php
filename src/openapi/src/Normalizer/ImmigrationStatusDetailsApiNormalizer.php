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
class ImmigrationStatusDetailsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        if (\array_key_exists('immigration_status', $data) && $data['immigration_status'] !== null) {
            $object->setImmigrationStatus($data['immigration_status']);
        }
        elseif (\array_key_exists('immigration_status', $data) && $data['immigration_status'] === null) {
            $object->setImmigrationStatus(null);
        }
        if (\array_key_exists('nationality', $data) && $data['nationality'] !== null) {
            $object->setNationality($data['nationality']);
        }
        elseif (\array_key_exists('nationality', $data) && $data['nationality'] === null) {
            $object->setNationality(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        }
        elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('issue_date', $data) && $data['issue_date'] !== null) {
            $object->setIssueDate($data['issue_date']);
        }
        elseif (\array_key_exists('issue_date', $data) && $data['issue_date'] === null) {
            $object->setIssueDate(null);
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
        $dataArray['immigration_status'] = $data->getImmigrationStatus();
        $dataArray['nationality'] = $data->getNationality();
        $dataArray['expiration_date'] = $data->getExpirationDate();
        $dataArray['issue_date'] = $data->getIssueDate();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi::class => false];
    }
}