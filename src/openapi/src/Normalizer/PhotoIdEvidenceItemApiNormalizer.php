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
class PhotoIdEvidenceItemApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('step', $data)) {
            $object->setStep($data['step']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('evidence_type', $data)) {
            $object->setEvidenceType($data['evidence_type']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('artefacts', $data)) {
            $values = [];
            foreach ($data['artefacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\ArtefactApi::class, 'json', $context);
            }
            $object->setArtefacts($values);
        }
        if (\array_key_exists('extracted_details', $data)) {
            $value_1 = $data['extracted_details'];
            if (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\CitizenCardDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details']) and \array_key_exists('mrz_code', $data['extracted_details']) and \array_key_exists('icao_format', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\PassportDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\DrivingLicenceDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\YoungScotDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('smart_card_number', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\NecDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details']) and \array_key_exists('issuing_country', $data['extracted_details']) and \array_key_exists('icao_format', $data['extracted_details']) and \array_key_exists('mrz_code', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\NationalIdDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and \array_key_exists('first_name', $data['extracted_details']) and \array_key_exists('last_name', $data['extracted_details']) and \array_key_exists('date_of_birth', $data['extracted_details']) and \array_key_exists('document_number', $data['extracted_details']) and \array_key_exists('expiration_date', $data['extracted_details'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdDetailsApi::class, 'json', $context);
            }
            $object->setExtractedDetails($value_1);
        }
        if (\array_key_exists('validations', $data)) {
            $value_2 = $data['validations'];
            if (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('compound_identifiers_match', $data['validations']) and \array_key_exists('icao_format_valid', $data['validations']) and \array_key_exists('issuing_country_allowed', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\PassportValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('security_features_present', $data['validations']) and \array_key_exists('identifier_format_valid', $data['validations']) and \array_key_exists('not_sample_or_internal_use', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('compound_identifiers_match', $data['validations']) and \array_key_exists('icao_format_valid', $data['validations']) and \array_key_exists('issuing_country_allowed', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\NationalIdValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('matches_issuer_database', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\CitizenCardValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('security_features_present', $data['validations']) and \array_key_exists('identifier_format_valid', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\YoungScotValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('security_features_present', $data['validations']) and \array_key_exists('identifier_format_valid', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\NecValidationApi::class, 'json', $context);
            } elseif (is_array($data['validations']) and \array_key_exists('required_fields_extracted', $data['validations']) and \array_key_exists('document_borders_detected', $data['validations']) and \array_key_exists('security_features_present', $data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidationApi::class, 'json', $context);
            }
            $object->setValidations($value_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['step'] = $data->getStep();
        $dataArray['outcome'] = $data->getOutcome();
        $dataArray['evidence_type'] = $data->getEvidenceType();
        $dataArray['created_at'] = $data->getCreatedAt();
        $values = [];
        foreach ($data->getArtefacts() as $value) {
            $values[] = $value === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($value, 'json', $context));
        }
        $dataArray['artefacts'] = $values;
        $value_1 = $data->getExtractedDetails();
        if (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $data->getExtractedDetails() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getExtractedDetails(), 'json', $context));
        }
        $dataArray['extracted_details'] = $value_1;
        $value_2 = $data->getValidations();
        if (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        } elseif (is_object($data->getValidations())) {
            $value_2 = $data->getValidations() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getValidations(), 'json', $context));
        }
        $dataArray['validations'] = $value_2;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi::class => false];
    }
}