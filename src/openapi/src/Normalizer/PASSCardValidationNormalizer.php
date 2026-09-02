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
class PASSCardValidationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\PASSCardValidation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\PASSCardValidation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\PASSCardValidation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('matches_issuer_database', $data)) {
            $value = $data['matches_issuer_database'];
            if (is_array($data['matches_issuer_database']) and (\array_key_exists('status', $data['matches_issuer_database']) and $data['matches_issuer_database']['status'] == 'pass')) {
                $value = $this->denormalizer->denormalize($data['matches_issuer_database'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['matches_issuer_database']) and (\array_key_exists('status', $data['matches_issuer_database']) and $data['matches_issuer_database']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['matches_issuer_database'])) {
                $value = $this->denormalizer->denormalize($data['matches_issuer_database'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setMatchesIssuerDatabase($value);
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $value_1 = $data['required_fields_extracted'];
            if (is_array($data['required_fields_extracted']) and (\array_key_exists('status', $data['required_fields_extracted']) and $data['required_fields_extracted']['status'] == 'pass')) {
                $value_1 = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['required_fields_extracted']) and (\array_key_exists('status', $data['required_fields_extracted']) and $data['required_fields_extracted']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['required_fields_extracted'])) {
                $value_1 = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setRequiredFieldsExtracted($value_1);
        }
        if (\array_key_exists('compound_identifiers_match', $data)) {
            $value_2 = $data['compound_identifiers_match'];
            if (is_array($data['compound_identifiers_match']) and (\array_key_exists('status', $data['compound_identifiers_match']) and $data['compound_identifiers_match']['status'] == 'pass')) {
                $value_2 = $this->denormalizer->denormalize($data['compound_identifiers_match'], \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckPASSCardFailedReasonAnyOf::class, 'json', $context);
            } elseif (is_array($data['compound_identifiers_match']) and \array_key_exists('failed_reasons', $data['compound_identifiers_match']) and (\array_key_exists('status', $data['compound_identifiers_match']) and $data['compound_identifiers_match']['status'] == 'fail')) {
                $value_2 = $this->denormalizer->denormalize($data['compound_identifiers_match'], \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckPASSCardFailedReasonAnyOf::class, 'json', $context);
            }
            $object->setCompoundIdentifiersMatch($value_2);
        }
        if (\array_key_exists('identifier_format_valid', $data)) {
            $value_3 = $data['identifier_format_valid'];
            if (is_array($data['identifier_format_valid']) and (\array_key_exists('status', $data['identifier_format_valid']) and $data['identifier_format_valid']['status'] == 'pass')) {
                $value_3 = $this->denormalizer->denormalize($data['identifier_format_valid'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['identifier_format_valid']) and (\array_key_exists('status', $data['identifier_format_valid']) and $data['identifier_format_valid']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['identifier_format_valid'])) {
                $value_3 = $this->denormalizer->denormalize($data['identifier_format_valid'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setIdentifierFormatValid($value_3);
        }
        if (\array_key_exists('has_not_expired', $data)) {
            $value_4 = $data['has_not_expired'];
            if (is_array($data['has_not_expired']) and (\array_key_exists('status', $data['has_not_expired']) and $data['has_not_expired']['status'] == 'pass')) {
                $value_4 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['has_not_expired']) and (\array_key_exists('status', $data['has_not_expired']) and $data['has_not_expired']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['has_not_expired'])) {
                $value_4 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setHasNotExpired($value_4);
        }
        if (\array_key_exists('not_specimen', $data)) {
            $value_5 = $data['not_specimen'];
            if (is_array($data['not_specimen']) and (\array_key_exists('status', $data['not_specimen']) and $data['not_specimen']['status'] == 'pass')) {
                $value_5 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_specimen']) and (\array_key_exists('status', $data['not_specimen']) and $data['not_specimen']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['not_specimen'])) {
                $value_5 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\FailSpecimenErrorCode::class, 'json', $context);
            }
            $object->setNotSpecimen($value_5);
        }
        if (\array_key_exists('not_screenshot', $data)) {
            $value_6 = $data['not_screenshot'];
            if (is_array($data['not_screenshot']) and (\array_key_exists('status', $data['not_screenshot']) and $data['not_screenshot']['status'] == 'pass')) {
                $value_6 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_screenshot']) and (\array_key_exists('status', $data['not_screenshot']) and $data['not_screenshot']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['not_screenshot'])) {
                $value_6 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\FailTamperingErrorCode::class, 'json', $context);
            }
            $object->setNotScreenshot($value_6);
        }
        if (\array_key_exists('document_dimensions_matched', $data)) {
            $value_7 = $data['document_dimensions_matched'];
            if (is_array($data['document_dimensions_matched']) and \array_key_exists('score', $data['document_dimensions_matched']) and (\array_key_exists('status', $data['document_dimensions_matched']) and $data['document_dimensions_matched']['status'] == 'pass')) {
                $value_7 = $this->denormalizer->denormalize($data['document_dimensions_matched'], \Vouchsafe\OpenAPI\Model\ScoreCheckDocumentDimensionsErrorCodeAnyOf::class, 'json', $context);
            } elseif (is_array($data['document_dimensions_matched']) and \array_key_exists('failed_reasons', $data['document_dimensions_matched']) and \array_key_exists('score', $data['document_dimensions_matched']) and (\array_key_exists('status', $data['document_dimensions_matched']) and $data['document_dimensions_matched']['status'] == 'fail')) {
                $value_7 = $this->denormalizer->denormalize($data['document_dimensions_matched'], \Vouchsafe\OpenAPI\Model\ScoreCheckDocumentDimensionsErrorCodeAnyOf::class, 'json', $context);
            }
            $object->setDocumentDimensionsMatched($value_7);
        }
        if (\array_key_exists('document_contains_face', $data)) {
            $value_8 = $data['document_contains_face'];
            if (is_array($data['document_contains_face']) and (\array_key_exists('status', $data['document_contains_face']) and $data['document_contains_face']['status'] == 'pass')) {
                $value_8 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['document_contains_face']) and (\array_key_exists('status', $data['document_contains_face']) and $data['document_contains_face']['status'] == 'fail') and \array_key_exists('failed_reasons', $data['document_contains_face'])) {
                $value_8 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\FailDocumentFaceErrorCode::class, 'json', $context);
            }
            $object->setDocumentContainsFace($value_8);
        }
        if (\array_key_exists('face_match', $data)) {
            $value_9 = $data['face_match'];
            if (is_array($data['face_match']) and \array_key_exists('score', $data['face_match']) and (\array_key_exists('status', $data['face_match']) and $data['face_match']['status'] == 'pass')) {
                $value_9 = $this->denormalizer->denormalize($data['face_match'], \Vouchsafe\OpenAPI\Model\ScoreCheckFaceMatchErrorCodeAnyOf::class, 'json', $context);
            } elseif (is_array($data['face_match']) and \array_key_exists('failed_reasons', $data['face_match']) and \array_key_exists('score', $data['face_match']) and (\array_key_exists('status', $data['face_match']) and $data['face_match']['status'] == 'fail')) {
                $value_9 = $this->denormalizer->denormalize($data['face_match'], \Vouchsafe\OpenAPI\Model\ScoreCheckFaceMatchErrorCodeAnyOf::class, 'json', $context);
            }
            $object->setFaceMatch($value_9);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matchesIssuerDatabase') && null !== $data->getMatchesIssuerDatabase()) {
            $value = $data->getMatchesIssuerDatabase();
            if (is_object($data->getMatchesIssuerDatabase())) {
                $value = $data->getMatchesIssuerDatabase() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getMatchesIssuerDatabase(), 'json', $context));
            } elseif (is_object($data->getMatchesIssuerDatabase())) {
                $value = $data->getMatchesIssuerDatabase() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getMatchesIssuerDatabase(), 'json', $context));
            }
            $dataArray['matches_issuer_database'] = $value;
        }
        $value_1 = $data->getRequiredFieldsExtracted();
        if (is_object($data->getRequiredFieldsExtracted())) {
            $value_1 = $data->getRequiredFieldsExtracted() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context));
        } elseif (is_object($data->getRequiredFieldsExtracted())) {
            $value_1 = $data->getRequiredFieldsExtracted() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context));
        }
        $dataArray['required_fields_extracted'] = $value_1;
        $value_2 = $data->getCompoundIdentifiersMatch();
        if (is_object($data->getCompoundIdentifiersMatch())) {
            $value_2 = $data->getCompoundIdentifiersMatch() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getCompoundIdentifiersMatch(), 'json', $context));
        } elseif (is_object($data->getCompoundIdentifiersMatch())) {
            $value_2 = $data->getCompoundIdentifiersMatch() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getCompoundIdentifiersMatch(), 'json', $context));
        }
        $dataArray['compound_identifiers_match'] = $value_2;
        $value_3 = $data->getIdentifierFormatValid();
        if (is_object($data->getIdentifierFormatValid())) {
            $value_3 = $data->getIdentifierFormatValid() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getIdentifierFormatValid(), 'json', $context));
        } elseif (is_object($data->getIdentifierFormatValid())) {
            $value_3 = $data->getIdentifierFormatValid() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getIdentifierFormatValid(), 'json', $context));
        }
        $dataArray['identifier_format_valid'] = $value_3;
        if ($data->isInitialized('hasNotExpired') && null !== $data->getHasNotExpired()) {
            $value_4 = $data->getHasNotExpired();
            if (is_object($data->getHasNotExpired())) {
                $value_4 = $data->getHasNotExpired() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getHasNotExpired(), 'json', $context));
            } elseif (is_object($data->getHasNotExpired())) {
                $value_4 = $data->getHasNotExpired() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getHasNotExpired(), 'json', $context));
            }
            $dataArray['has_not_expired'] = $value_4;
        }
        $value_5 = $data->getNotSpecimen();
        if (is_object($data->getNotSpecimen())) {
            $value_5 = $data->getNotSpecimen() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getNotSpecimen(), 'json', $context));
        } elseif (is_object($data->getNotSpecimen())) {
            $value_5 = $data->getNotSpecimen() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getNotSpecimen(), 'json', $context));
        }
        $dataArray['not_specimen'] = $value_5;
        $value_6 = $data->getNotScreenshot();
        if (is_object($data->getNotScreenshot())) {
            $value_6 = $data->getNotScreenshot() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getNotScreenshot(), 'json', $context));
        } elseif (is_object($data->getNotScreenshot())) {
            $value_6 = $data->getNotScreenshot() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getNotScreenshot(), 'json', $context));
        }
        $dataArray['not_screenshot'] = $value_6;
        $value_7 = $data->getDocumentDimensionsMatched();
        if (is_object($data->getDocumentDimensionsMatched())) {
            $value_7 = $data->getDocumentDimensionsMatched() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getDocumentDimensionsMatched(), 'json', $context));
        } elseif (is_object($data->getDocumentDimensionsMatched())) {
            $value_7 = $data->getDocumentDimensionsMatched() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getDocumentDimensionsMatched(), 'json', $context));
        }
        $dataArray['document_dimensions_matched'] = $value_7;
        $value_8 = $data->getDocumentContainsFace();
        if (is_object($data->getDocumentContainsFace())) {
            $value_8 = $data->getDocumentContainsFace() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context));
        } elseif (is_object($data->getDocumentContainsFace())) {
            $value_8 = $data->getDocumentContainsFace() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context));
        }
        $dataArray['document_contains_face'] = $value_8;
        if ($data->isInitialized('faceMatch') && null !== $data->getFaceMatch()) {
            $value_9 = $data->getFaceMatch();
            if (is_object($data->getFaceMatch())) {
                $value_9 = $data->getFaceMatch() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getFaceMatch(), 'json', $context));
            } elseif (is_object($data->getFaceMatch())) {
                $value_9 = $data->getFaceMatch() === null ? null : new \Vouchsafe\OpenAPI\Runtime\JsonObject($this->normalizer->normalize($data->getFaceMatch(), 'json', $context));
            }
            $dataArray['face_match'] = $value_9;
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\PASSCardValidation::class => false];
    }
}