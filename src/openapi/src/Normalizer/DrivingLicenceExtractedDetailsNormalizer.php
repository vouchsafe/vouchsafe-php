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
class DrivingLicenceExtractedDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails();
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
        if (\array_key_exists('document_number', $data) && $data['document_number'] !== null) {
            $object->setDocumentNumber($data['document_number']);
        }
        elseif (\array_key_exists('document_number', $data) && $data['document_number'] === null) {
            $object->setDocumentNumber(null);
        }
        if (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] !== null) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        elseif (\array_key_exists('date_of_birth', $data) && $data['date_of_birth'] === null) {
            $object->setDateOfBirth(null);
        }
        if (\array_key_exists('expiration_date', $data) && $data['expiration_date'] !== null) {
            $object->setExpirationDate($data['expiration_date']);
        }
        elseif (\array_key_exists('expiration_date', $data) && $data['expiration_date'] === null) {
            $object->setExpirationDate(null);
        }
        if (\array_key_exists('issuing_authority', $data) && $data['issuing_authority'] !== null) {
            $object->setIssuingAuthority($data['issuing_authority']);
        }
        elseif (\array_key_exists('issuing_authority', $data) && $data['issuing_authority'] === null) {
            $object->setIssuingAuthority(null);
        }
        if (\array_key_exists('date_of_issue', $data) && $data['date_of_issue'] !== null) {
            $object->setDateOfIssue($data['date_of_issue']);
        }
        elseif (\array_key_exists('date_of_issue', $data) && $data['date_of_issue'] === null) {
            $object->setDateOfIssue(null);
        }
        if (\array_key_exists('issuing_country', $data) && $data['issuing_country'] !== null) {
            $object->setIssuingCountry($data['issuing_country']);
        }
        elseif (\array_key_exists('issuing_country', $data) && $data['issuing_country'] === null) {
            $object->setIssuingCountry(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['document_number'] = $data->getDocumentNumber();
        $dataArray['date_of_birth'] = $data->getDateOfBirth();
        $dataArray['expiration_date'] = $data->getExpirationDate();
        $dataArray['issuing_authority'] = $data->getIssuingAuthority();
        $dataArray['date_of_issue'] = $data->getDateOfIssue();
        $dataArray['issuing_country'] = $data->getIssuingCountry();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class => false];
    }
}