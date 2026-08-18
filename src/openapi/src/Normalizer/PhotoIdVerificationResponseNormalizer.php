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
class PhotoIdVerificationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (\array_key_exists('verification_method', $data)) {
            $object->setVerificationMethod($data['verification_method']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('evidence_type', $data)) {
            $object->setEvidenceType($data['evidence_type']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('extracted_details', $data)) {
            $value = $data['extracted_details'];
            if (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('date_of_issue', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details']) and \array_key_exists('icao_format', $data['extracted_details']) and \array_key_exists('mrz_code', $data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\PassportExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details']) and \array_key_exists('icao_format', $data['extracted_details']) and \array_key_exists('mrz_code', $data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\NationalIdExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuing_authority', $data['extracted_details']) and \array_key_exists('date_of_issue', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuer', $data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\PASSCardExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdExtractedDetails::class, 'json', $context);
            }
            $object->setExtractedDetails($value);
        }
        if (\array_key_exists('validations', $data)) {
            $value_1 = $data['validations'];
            if (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('compound_identifiers_match', $data['validations']) and \array_key_exists('has_not_expired', $data['validations']) and \array_key_exists('not_specimen', $data['validations']) and \array_key_exists('not_screenshot', $data['validations']) and \array_key_exists('document_dimensions_matched', $data['validations']) and \array_key_exists('document_contains_face', $data['validations']) and \array_key_exists('icao_format_valid', $data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\PassportValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('compound_identifiers_match', $data['validations']) and \array_key_exists('has_not_expired', $data['validations']) and \array_key_exists('not_specimen', $data['validations']) and \array_key_exists('not_screenshot', $data['validations']) and \array_key_exists('document_dimensions_matched', $data['validations']) and \array_key_exists('document_contains_face', $data['validations']) and \array_key_exists('icao_format_valid', $data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\NationalIdValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('has_not_expired', $data['validations']) and \array_key_exists('not_specimen', $data['validations']) and \array_key_exists('not_screenshot', $data['validations']) and \array_key_exists('document_dimensions_matched', $data['validations']) and \array_key_exists('document_features_present', $data['validations']) and \array_key_exists('document_contains_face', $data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\DrivingLicenceValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('compound_identifiers_match', $data['validations']) and \array_key_exists('identifier_format_valid', $data['validations']) and \array_key_exists('not_specimen', $data['validations']) and \array_key_exists('not_screenshot', $data['validations']) and \array_key_exists('document_dimensions_matched', $data['validations']) and \array_key_exists('document_contains_face', $data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\PASSCardValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('not_specimen', $data['validations']) and \array_key_exists('not_screenshot', $data['validations']) and \array_key_exists('document_dimensions_matched', $data['validations']) and \array_key_exists('document_contains_face', $data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class, 'json', $context);
            }
            $object->setValidations($value_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['verification_method'] = $data->getVerificationMethod();
        $dataArray['billable'] = $data->getBillable();
        $dataArray['evidence_type'] = $data->getEvidenceType();
        $dataArray['outcome'] = $data->getOutcome();
        $value = $data->getExtractedDetails();
        if (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        }
        $dataArray['extracted_details'] = $value;
        $value_1 = $data->getValidations();
        if (is_object($data->getValidations())) {
            $value_1 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        } elseif (is_object($data->getValidations())) {
            $value_1 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        } elseif (is_object($data->getValidations())) {
            $value_1 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        } elseif (is_object($data->getValidations())) {
            $value_1 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        } elseif (is_object($data->getValidations())) {
            $value_1 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        }
        $dataArray['validations'] = $value_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse::class => false];
    }
}