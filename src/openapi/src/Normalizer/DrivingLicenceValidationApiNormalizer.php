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
class DrivingLicenceValidationApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi();
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
            $object->setRequiredFieldsExtracted($this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('document_borders_detected', $data)) {
            $object->setDocumentBordersDetected($this->denormalizer->denormalize($data['document_borders_detected'], \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApiDocumentBordersDetected::class, 'json', $context));
        }
        if (\array_key_exists('face_match', $data)) {
            $object->setFaceMatch($this->denormalizer->denormalize($data['face_match'], \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApiFaceMatch::class, 'json', $context));
        }
        if (\array_key_exists('dates_of_birth_consistent', $data)) {
            $object->setDatesOfBirthConsistent($this->denormalizer->denormalize($data['dates_of_birth_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('names_consistent', $data)) {
            $object->setNamesConsistent($this->denormalizer->denormalize($data['names_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('referee_over_18', $data)) {
            $object->setRefereeOver18($this->denormalizer->denormalize($data['referee_over_18'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('referee_biometrics_dissimilar', $data)) {
            $object->setRefereeBiometricsDissimilar($this->denormalizer->denormalize($data['referee_biometrics_dissimilar'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('security_features_present', $data)) {
            $object->setSecurityFeaturesPresent($this->denormalizer->denormalize($data['security_features_present'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('identifier_format_valid', $data)) {
            $object->setIdentifierFormatValid($this->denormalizer->denormalize($data['identifier_format_valid'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('not_sample_or_internal_use', $data)) {
            $object->setNotSampleOrInternalUse($this->denormalizer->denormalize($data['not_sample_or_internal_use'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('has_not_expired', $data)) {
            $object->setHasNotExpired($this->denormalizer->denormalize($data['has_not_expired'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        $dataArray['document_borders_detected'] = $this->normalizer->normalize($data->getDocumentBordersDetected(), 'json', $context);
        if ($data->isInitialized('faceMatch') && null !== $data->getFaceMatch()) {
            $dataArray['face_match'] = $this->normalizer->normalize($data->getFaceMatch(), 'json', $context);
        }
        if ($data->isInitialized('datesOfBirthConsistent') && null !== $data->getDatesOfBirthConsistent()) {
            $dataArray['dates_of_birth_consistent'] = $this->normalizer->normalize($data->getDatesOfBirthConsistent(), 'json', $context);
        }
        if ($data->isInitialized('namesConsistent') && null !== $data->getNamesConsistent()) {
            $dataArray['names_consistent'] = $this->normalizer->normalize($data->getNamesConsistent(), 'json', $context);
        }
        if ($data->isInitialized('refereeOver18') && null !== $data->getRefereeOver18()) {
            $dataArray['referee_over_18'] = $this->normalizer->normalize($data->getRefereeOver18(), 'json', $context);
        }
        if ($data->isInitialized('refereeBiometricsDissimilar') && null !== $data->getRefereeBiometricsDissimilar()) {
            $dataArray['referee_biometrics_dissimilar'] = $this->normalizer->normalize($data->getRefereeBiometricsDissimilar(), 'json', $context);
        }
        $dataArray['security_features_present'] = $this->normalizer->normalize($data->getSecurityFeaturesPresent(), 'json', $context);
        $dataArray['identifier_format_valid'] = $this->normalizer->normalize($data->getIdentifierFormatValid(), 'json', $context);
        $dataArray['not_sample_or_internal_use'] = $this->normalizer->normalize($data->getNotSampleOrInternalUse(), 'json', $context);
        if ($data->isInitialized('hasNotExpired') && null !== $data->getHasNotExpired()) {
            $dataArray['has_not_expired'] = $this->normalizer->normalize($data->getHasNotExpired(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi::class => false];
    }
}