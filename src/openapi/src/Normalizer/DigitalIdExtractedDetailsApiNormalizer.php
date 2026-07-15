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
class DigitalIdExtractedDetailsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApi();
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
        if (\array_key_exists('first_line_of_address', $data) && $data['first_line_of_address'] !== null) {
            $object->setFirstLineOfAddress($data['first_line_of_address']);
        }
        elseif (\array_key_exists('first_line_of_address', $data) && $data['first_line_of_address'] === null) {
            $object->setFirstLineOfAddress(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        }
        elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApiAddress::class, 'json', $context));
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('phone_number', $data)) {
            $object->setPhoneNumber($data['phone_number']);
        }
        if (\array_key_exists('nationality', $data)) {
            $object->setNationality($data['nationality']);
        }
        if (\array_key_exists('document_number', $data)) {
            $object->setDocumentNumber($data['document_number']);
        }
        if (\array_key_exists('document_type', $data)) {
            $object->setDocumentType($data['document_type']);
        }
        if (\array_key_exists('issue_date', $data)) {
            $object->setIssueDate($data['issue_date']);
        }
        if (\array_key_exists('expiration_date', $data)) {
            $object->setExpirationDate($data['expiration_date']);
        }
        if (\array_key_exists('issuing_country', $data)) {
            $object->setIssuingCountry($data['issuing_country']);
        }
        if (\array_key_exists('immigration_status', $data)) {
            $object->setImmigrationStatus($data['immigration_status']);
        }
        if (\array_key_exists('share_code', $data)) {
            $object->setShareCode($data['share_code']);
        }
        if (\array_key_exists('reference_number', $data)) {
            $object->setReferenceNumber($data['reference_number']);
        }
        if (\array_key_exists('valid_from', $data)) {
            $object->setValidFrom($data['valid_from']);
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
        $dataArray['first_line_of_address'] = $data->getFirstLineOfAddress();
        $dataArray['postcode'] = $data->getPostcode();
        if ($data->isInitialized('address')) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phone_number'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('nationality') && null !== $data->getNationality()) {
            $dataArray['nationality'] = $data->getNationality();
        }
        if ($data->isInitialized('documentNumber') && null !== $data->getDocumentNumber()) {
            $dataArray['document_number'] = $data->getDocumentNumber();
        }
        if ($data->isInitialized('documentType') && null !== $data->getDocumentType()) {
            $dataArray['document_type'] = $data->getDocumentType();
        }
        if ($data->isInitialized('issueDate') && null !== $data->getIssueDate()) {
            $dataArray['issue_date'] = $data->getIssueDate();
        }
        if ($data->isInitialized('expirationDate') && null !== $data->getExpirationDate()) {
            $dataArray['expiration_date'] = $data->getExpirationDate();
        }
        if ($data->isInitialized('issuingCountry') && null !== $data->getIssuingCountry()) {
            $dataArray['issuing_country'] = $data->getIssuingCountry();
        }
        if ($data->isInitialized('immigrationStatus') && null !== $data->getImmigrationStatus()) {
            $dataArray['immigration_status'] = $data->getImmigrationStatus();
        }
        if ($data->isInitialized('shareCode') && null !== $data->getShareCode()) {
            $dataArray['share_code'] = $data->getShareCode();
        }
        if ($data->isInitialized('referenceNumber') && null !== $data->getReferenceNumber()) {
            $dataArray['reference_number'] = $data->getReferenceNumber();
        }
        if ($data->isInitialized('validFrom') && null !== $data->getValidFrom()) {
            $dataArray['valid_from'] = $data->getValidFrom();
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
        return [\Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApi::class => false];
    }
}