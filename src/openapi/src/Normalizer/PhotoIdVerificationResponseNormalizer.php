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
        if (\array_key_exists('evidence_type', $data)) {
            $object->setEvidenceType($data['evidence_type']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('extracted_details', $data)) {
            $value = $data['extracted_details'];
            if (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['document_number']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issuing_country']) and isset($data['extracted_details']['icao_format']) and isset($data['extracted_details']['mrz_code'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\PassportExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['document_number']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issuing_country']) and isset($data['extracted_details']['icao_format']) and isset($data['extracted_details']['mrz_code'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\NationalIdExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['document_number']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issuing_authority']) and isset($data['extracted_details']['date_of_issue']) and isset($data['extracted_details']['issuing_country'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['document_number']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issuer'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\PASSCardExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['document_number'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdExtractedDetails::class, 'json', $context);
            }
            $object->setExtractedDetails($value);
        }
        if (\array_key_exists('validations', $data)) {
            $value_1 = $data['validations'];
            if (is_array($data['validations']) and isset($data['validations']['required_fields_extracted']) and isset($data['validations']['compound_identifiers_match']) and isset($data['validations']['has_not_expired']) and isset($data['validations']['not_specimen']) and isset($data['validations']['not_screenshot']) and isset($data['validations']['document_dimensions_matched']) and isset($data['validations']['document_contains_face']) and isset($data['validations']['icao_format_valid'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\PassportValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and isset($data['validations']['required_fields_extracted']) and isset($data['validations']['compound_identifiers_match']) and isset($data['validations']['has_not_expired']) and isset($data['validations']['not_specimen']) and isset($data['validations']['not_screenshot']) and isset($data['validations']['document_dimensions_matched']) and isset($data['validations']['document_contains_face']) and isset($data['validations']['icao_format_valid'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\NationalIdValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and isset($data['validations']['required_fields_extracted']) and isset($data['validations']['has_not_expired']) and isset($data['validations']['not_specimen']) and isset($data['validations']['not_screenshot']) and isset($data['validations']['document_dimensions_matched']) and isset($data['validations']['document_features_present']) and isset($data['validations']['document_contains_face'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\DrivingLicenceValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and isset($data['validations']['required_fields_extracted']) and isset($data['validations']['compound_identifiers_match']) and isset($data['validations']['identifier_format_valid']) and isset($data['validations']['not_specimen']) and isset($data['validations']['not_screenshot']) and isset($data['validations']['document_dimensions_matched']) and isset($data['validations']['document_contains_face'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\PASSCardValidation::class, 'json', $context);
            } elseif (is_array($data['validations']) and isset($data['validations']['required_fields_extracted']) and isset($data['validations']['not_specimen']) and isset($data['validations']['not_screenshot']) and isset($data['validations']['document_dimensions_matched']) and isset($data['validations']['document_contains_face'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class, 'json', $context);
            }
            $object->setValidations($value_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
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