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
            if (is_array($data['matches_issuer_database']) and (isset($data['matches_issuer_database']['status']) and $data['matches_issuer_database']['status'] == 'pass')) {
                $value = $this->denormalizer->denormalize($data['matches_issuer_database'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['matches_issuer_database']) and (isset($data['matches_issuer_database']['status']) and $data['matches_issuer_database']['status'] == 'fail') and isset($data['matches_issuer_database']['failed_reasons'])) {
                $value = $this->denormalizer->denormalize($data['matches_issuer_database'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setMatchesIssuerDatabase($value);
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $value_1 = $data['required_fields_extracted'];
            if (is_array($data['required_fields_extracted']) and (isset($data['required_fields_extracted']['status']) and $data['required_fields_extracted']['status'] == 'pass')) {
                $value_1 = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['required_fields_extracted']) and (isset($data['required_fields_extracted']['status']) and $data['required_fields_extracted']['status'] == 'fail') and isset($data['required_fields_extracted']['failed_reasons'])) {
                $value_1 = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setRequiredFieldsExtracted($value_1);
        }
        if (\array_key_exists('compound_identifiers_match', $data)) {
            $object->setCompoundIdentifiersMatch($data['compound_identifiers_match']);
        }
        if (\array_key_exists('identifier_format_valid', $data)) {
            $value_2 = $data['identifier_format_valid'];
            if (is_array($data['identifier_format_valid']) and (isset($data['identifier_format_valid']['status']) and $data['identifier_format_valid']['status'] == 'pass')) {
                $value_2 = $this->denormalizer->denormalize($data['identifier_format_valid'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['identifier_format_valid']) and (isset($data['identifier_format_valid']['status']) and $data['identifier_format_valid']['status'] == 'fail') and isset($data['identifier_format_valid']['failed_reasons'])) {
                $value_2 = $this->denormalizer->denormalize($data['identifier_format_valid'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setIdentifierFormatValid($value_2);
        }
        if (\array_key_exists('has_not_expired', $data)) {
            $value_3 = $data['has_not_expired'];
            if (is_array($data['has_not_expired']) and (isset($data['has_not_expired']['status']) and $data['has_not_expired']['status'] == 'pass')) {
                $value_3 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['has_not_expired']) and (isset($data['has_not_expired']['status']) and $data['has_not_expired']['status'] == 'fail') and isset($data['has_not_expired']['failed_reasons'])) {
                $value_3 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class, 'json', $context);
            }
            $object->setHasNotExpired($value_3);
        }
        if (\array_key_exists('not_specimen', $data)) {
            $value_4 = $data['not_specimen'];
            if (is_array($data['not_specimen']) and (isset($data['not_specimen']['status']) and $data['not_specimen']['status'] == 'pass')) {
                $value_4 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_specimen']) and (isset($data['not_specimen']['status']) and $data['not_specimen']['status'] == 'fail') and isset($data['not_specimen']['failed_reasons'])) {
                $value_4 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\FailSpecimenErrorCode::class, 'json', $context);
            }
            $object->setNotSpecimen($value_4);
        }
        if (\array_key_exists('not_screenshot', $data)) {
            $value_5 = $data['not_screenshot'];
            if (is_array($data['not_screenshot']) and (isset($data['not_screenshot']['status']) and $data['not_screenshot']['status'] == 'pass')) {
                $value_5 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_screenshot']) and (isset($data['not_screenshot']['status']) and $data['not_screenshot']['status'] == 'fail') and isset($data['not_screenshot']['failed_reasons'])) {
                $value_5 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\FailTamperingErrorCode::class, 'json', $context);
            }
            $object->setNotScreenshot($value_5);
        }
        if (\array_key_exists('document_dimensions_matched', $data)) {
            $object->setDocumentDimensionsMatched($data['document_dimensions_matched']);
        }
        if (\array_key_exists('document_contains_face', $data)) {
            $value_6 = $data['document_contains_face'];
            if (is_array($data['document_contains_face']) and (isset($data['document_contains_face']['status']) and $data['document_contains_face']['status'] == 'pass')) {
                $value_6 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['document_contains_face']) and (isset($data['document_contains_face']['status']) and $data['document_contains_face']['status'] == 'fail') and isset($data['document_contains_face']['failed_reasons'])) {
                $value_6 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\FailDocumentFaceErrorCode::class, 'json', $context);
            }
            $object->setDocumentContainsFace($value_6);
        }
        if (\array_key_exists('face_match', $data)) {
            $object->setFaceMatch($data['face_match']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('matchesIssuerDatabase') && null !== $data->getMatchesIssuerDatabase()) {
            $value = $data->getMatchesIssuerDatabase();
            if (is_object($data->getMatchesIssuerDatabase())) {
                $value = $this->normalizer->normalize($data->getMatchesIssuerDatabase(), 'json', $context);
            } elseif (is_object($data->getMatchesIssuerDatabase())) {
                $value = $this->normalizer->normalize($data->getMatchesIssuerDatabase(), 'json', $context);
            }
            $dataArray['matches_issuer_database'] = $value;
        }
        $value_1 = $data->getRequiredFieldsExtracted();
        if (is_object($data->getRequiredFieldsExtracted())) {
            $value_1 = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        } elseif (is_object($data->getRequiredFieldsExtracted())) {
            $value_1 = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        }
        $dataArray['required_fields_extracted'] = $value_1;
        $dataArray['compound_identifiers_match'] = $data->getCompoundIdentifiersMatch();
        $value_2 = $data->getIdentifierFormatValid();
        if (is_object($data->getIdentifierFormatValid())) {
            $value_2 = $this->normalizer->normalize($data->getIdentifierFormatValid(), 'json', $context);
        } elseif (is_object($data->getIdentifierFormatValid())) {
            $value_2 = $this->normalizer->normalize($data->getIdentifierFormatValid(), 'json', $context);
        }
        $dataArray['identifier_format_valid'] = $value_2;
        if ($data->isInitialized('hasNotExpired') && null !== $data->getHasNotExpired()) {
            $value_3 = $data->getHasNotExpired();
            if (is_object($data->getHasNotExpired())) {
                $value_3 = $this->normalizer->normalize($data->getHasNotExpired(), 'json', $context);
            } elseif (is_object($data->getHasNotExpired())) {
                $value_3 = $this->normalizer->normalize($data->getHasNotExpired(), 'json', $context);
            }
            $dataArray['has_not_expired'] = $value_3;
        }
        $value_4 = $data->getNotSpecimen();
        if (is_object($data->getNotSpecimen())) {
            $value_4 = $this->normalizer->normalize($data->getNotSpecimen(), 'json', $context);
        } elseif (is_object($data->getNotSpecimen())) {
            $value_4 = $this->normalizer->normalize($data->getNotSpecimen(), 'json', $context);
        }
        $dataArray['not_specimen'] = $value_4;
        $value_5 = $data->getNotScreenshot();
        if (is_object($data->getNotScreenshot())) {
            $value_5 = $this->normalizer->normalize($data->getNotScreenshot(), 'json', $context);
        } elseif (is_object($data->getNotScreenshot())) {
            $value_5 = $this->normalizer->normalize($data->getNotScreenshot(), 'json', $context);
        }
        $dataArray['not_screenshot'] = $value_5;
        $dataArray['document_dimensions_matched'] = $data->getDocumentDimensionsMatched();
        $value_6 = $data->getDocumentContainsFace();
        if (is_object($data->getDocumentContainsFace())) {
            $value_6 = $this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context);
        } elseif (is_object($data->getDocumentContainsFace())) {
            $value_6 = $this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context);
        }
        $dataArray['document_contains_face'] = $value_6;
        if ($data->isInitialized('faceMatch') && null !== $data->getFaceMatch()) {
            $dataArray['face_match'] = $data->getFaceMatch();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\PASSCardValidation::class => false];
    }
}