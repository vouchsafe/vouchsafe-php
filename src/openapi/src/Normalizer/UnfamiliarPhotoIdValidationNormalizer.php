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
class UnfamiliarPhotoIdValidationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $value = $data['required_fields_extracted'];
            if (is_array($data['required_fields_extracted']) and (isset($data['required_fields_extracted']['status']) and $data['required_fields_extracted']['status'] == 'pass')) {
                $value = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['required_fields_extracted']) and (isset($data['required_fields_extracted']['status']) and $data['required_fields_extracted']['status'] == 'fail') and isset($data['required_fields_extracted']['failed_reasons'])) {
                $value = $this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\FailUnfamiliarPhotoIdFailedReason::class, 'json', $context);
            }
            $object->setRequiredFieldsExtracted($value);
        }
        if (\array_key_exists('has_not_expired', $data)) {
            $value_1 = $data['has_not_expired'];
            if (is_array($data['has_not_expired']) and (isset($data['has_not_expired']['status']) and $data['has_not_expired']['status'] == 'pass')) {
                $value_1 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['has_not_expired']) and (isset($data['has_not_expired']['status']) and $data['has_not_expired']['status'] == 'fail') and isset($data['has_not_expired']['failed_reasons'])) {
                $value_1 = $this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\FailUnfamiliarPhotoIdFailedReason::class, 'json', $context);
            }
            $object->setHasNotExpired($value_1);
        }
        if (\array_key_exists('not_specimen', $data)) {
            $value_2 = $data['not_specimen'];
            if (is_array($data['not_specimen']) and (isset($data['not_specimen']['status']) and $data['not_specimen']['status'] == 'pass')) {
                $value_2 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_specimen']) and (isset($data['not_specimen']['status']) and $data['not_specimen']['status'] == 'fail') and isset($data['not_specimen']['failed_reasons'])) {
                $value_2 = $this->denormalizer->denormalize($data['not_specimen'], \Vouchsafe\OpenAPI\Model\FailSpecimenErrorCode::class, 'json', $context);
            }
            $object->setNotSpecimen($value_2);
        }
        if (\array_key_exists('not_screenshot', $data)) {
            $value_3 = $data['not_screenshot'];
            if (is_array($data['not_screenshot']) and (isset($data['not_screenshot']['status']) and $data['not_screenshot']['status'] == 'pass')) {
                $value_3 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['not_screenshot']) and (isset($data['not_screenshot']['status']) and $data['not_screenshot']['status'] == 'fail') and isset($data['not_screenshot']['failed_reasons'])) {
                $value_3 = $this->denormalizer->denormalize($data['not_screenshot'], \Vouchsafe\OpenAPI\Model\FailTamperingErrorCode::class, 'json', $context);
            }
            $object->setNotScreenshot($value_3);
        }
        if (\array_key_exists('document_dimensions_matched', $data)) {
            $object->setDocumentDimensionsMatched($data['document_dimensions_matched']);
        }
        if (\array_key_exists('document_contains_face', $data)) {
            $value_4 = $data['document_contains_face'];
            if (is_array($data['document_contains_face']) and (isset($data['document_contains_face']['status']) and $data['document_contains_face']['status'] == 'pass')) {
                $value_4 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\Pass::class, 'json', $context);
            } elseif (is_array($data['document_contains_face']) and (isset($data['document_contains_face']['status']) and $data['document_contains_face']['status'] == 'fail') and isset($data['document_contains_face']['failed_reasons'])) {
                $value_4 = $this->denormalizer->denormalize($data['document_contains_face'], \Vouchsafe\OpenAPI\Model\FailDocumentFaceErrorCode::class, 'json', $context);
            }
            $object->setDocumentContainsFace($value_4);
        }
        if (\array_key_exists('face_match', $data)) {
            $object->setFaceMatch($data['face_match']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->getRequiredFieldsExtracted();
        if (is_object($data->getRequiredFieldsExtracted())) {
            $value = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        } elseif (is_object($data->getRequiredFieldsExtracted())) {
            $value = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        }
        $dataArray['required_fields_extracted'] = $value;
        if ($data->isInitialized('hasNotExpired') && null !== $data->getHasNotExpired()) {
            $value_1 = $data->getHasNotExpired();
            if (is_object($data->getHasNotExpired())) {
                $value_1 = $this->normalizer->normalize($data->getHasNotExpired(), 'json', $context);
            } elseif (is_object($data->getHasNotExpired())) {
                $value_1 = $this->normalizer->normalize($data->getHasNotExpired(), 'json', $context);
            }
            $dataArray['has_not_expired'] = $value_1;
        }
        $value_2 = $data->getNotSpecimen();
        if (is_object($data->getNotSpecimen())) {
            $value_2 = $this->normalizer->normalize($data->getNotSpecimen(), 'json', $context);
        } elseif (is_object($data->getNotSpecimen())) {
            $value_2 = $this->normalizer->normalize($data->getNotSpecimen(), 'json', $context);
        }
        $dataArray['not_specimen'] = $value_2;
        $value_3 = $data->getNotScreenshot();
        if (is_object($data->getNotScreenshot())) {
            $value_3 = $this->normalizer->normalize($data->getNotScreenshot(), 'json', $context);
        } elseif (is_object($data->getNotScreenshot())) {
            $value_3 = $this->normalizer->normalize($data->getNotScreenshot(), 'json', $context);
        }
        $dataArray['not_screenshot'] = $value_3;
        $dataArray['document_dimensions_matched'] = $data->getDocumentDimensionsMatched();
        $value_4 = $data->getDocumentContainsFace();
        if (is_object($data->getDocumentContainsFace())) {
            $value_4 = $this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context);
        } elseif (is_object($data->getDocumentContainsFace())) {
            $value_4 = $this->normalizer->normalize($data->getDocumentContainsFace(), 'json', $context);
        }
        $dataArray['document_contains_face'] = $value_4;
        if ($data->isInitialized('faceMatch') && null !== $data->getFaceMatch()) {
            $dataArray['face_match'] = $data->getFaceMatch();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class => false];
    }
}