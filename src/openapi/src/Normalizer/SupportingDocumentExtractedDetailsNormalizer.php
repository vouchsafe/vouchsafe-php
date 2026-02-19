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
class SupportingDocumentExtractedDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails();
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
        if (\array_key_exists('document_date', $data) && $data['document_date'] !== null) {
            $object->setDocumentDate($data['document_date']);
        }
        elseif (\array_key_exists('document_date', $data) && $data['document_date'] === null) {
            $object->setDocumentDate(null);
        }
        if (\array_key_exists('document_category', $data) && $data['document_category'] !== null) {
            $object->setDocumentCategory($data['document_category']);
        }
        elseif (\array_key_exists('document_category', $data) && $data['document_category'] === null) {
            $object->setDocumentCategory(null);
        }
        if (\array_key_exists('unique_identifier', $data) && $data['unique_identifier'] !== null) {
            $object->setUniqueIdentifier($data['unique_identifier']);
        }
        elseif (\array_key_exists('unique_identifier', $data) && $data['unique_identifier'] === null) {
            $object->setUniqueIdentifier(null);
        }
        if (\array_key_exists('issuer', $data) && $data['issuer'] !== null) {
            $object->setIssuer($data['issuer']);
        }
        elseif (\array_key_exists('issuer', $data) && $data['issuer'] === null) {
            $object->setIssuer(null);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['first_line_of_address'] = $data->getFirstLineOfAddress();
        $dataArray['postcode'] = $data->getPostcode();
        $dataArray['document_date'] = $data->getDocumentDate();
        $dataArray['document_category'] = $data->getDocumentCategory();
        $dataArray['unique_identifier'] = $data->getUniqueIdentifier();
        $dataArray['issuer'] = $data->getIssuer();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class => false];
    }
}