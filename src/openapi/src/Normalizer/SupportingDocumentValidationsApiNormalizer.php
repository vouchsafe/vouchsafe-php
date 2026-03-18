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
class SupportingDocumentValidationsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\SupportingDocumentValidationsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\SupportingDocumentValidationsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\SupportingDocumentValidationsApi();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $object->setRequiredFieldsExtracted($this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('category_match', $data)) {
            $object->setCategoryMatch($this->denormalizer->denormalize($data['category_match'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('document_age_valid', $data)) {
            $object->setDocumentAgeValid($this->denormalizer->denormalize($data['document_age_valid'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('document_unique', $data)) {
            $object->setDocumentUnique($this->denormalizer->denormalize($data['document_unique'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('date_fields_valid', $data)) {
            $object->setDateFieldsValid($this->denormalizer->denormalize($data['date_fields_valid'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('names_consistent', $data)) {
            $object->setNamesConsistent($this->denormalizer->denormalize($data['names_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('addresses_consistent', $data)) {
            $object->setAddressesConsistent($this->denormalizer->denormalize($data['addresses_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('dates_of_birth_consistent', $data)) {
            $object->setDatesOfBirthConsistent($this->denormalizer->denormalize($data['dates_of_birth_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('referee_biometrics_dissimilar', $data)) {
            $object->setRefereeBiometricsDissimilar($this->denormalizer->denormalize($data['referee_biometrics_dissimilar'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('document_complete_and_legible', $data)) {
            $object->setDocumentCompleteAndLegible($this->denormalizer->denormalize($data['document_complete_and_legible'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('tampering_signals_check', $data)) {
            $object->setTamperingSignalsCheck($this->denormalizer->denormalize($data['tampering_signals_check'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        if ($data->isInitialized('categoryMatch') && null !== $data->getCategoryMatch()) {
            $dataArray['category_match'] = $this->normalizer->normalize($data->getCategoryMatch(), 'json', $context);
        }
        if ($data->isInitialized('documentAgeValid') && null !== $data->getDocumentAgeValid()) {
            $dataArray['document_age_valid'] = $this->normalizer->normalize($data->getDocumentAgeValid(), 'json', $context);
        }
        if ($data->isInitialized('documentUnique') && null !== $data->getDocumentUnique()) {
            $dataArray['document_unique'] = $this->normalizer->normalize($data->getDocumentUnique(), 'json', $context);
        }
        if ($data->isInitialized('dateFieldsValid') && null !== $data->getDateFieldsValid()) {
            $dataArray['date_fields_valid'] = $this->normalizer->normalize($data->getDateFieldsValid(), 'json', $context);
        }
        if ($data->isInitialized('namesConsistent') && null !== $data->getNamesConsistent()) {
            $dataArray['names_consistent'] = $this->normalizer->normalize($data->getNamesConsistent(), 'json', $context);
        }
        if ($data->isInitialized('addressesConsistent') && null !== $data->getAddressesConsistent()) {
            $dataArray['addresses_consistent'] = $this->normalizer->normalize($data->getAddressesConsistent(), 'json', $context);
        }
        if ($data->isInitialized('datesOfBirthConsistent') && null !== $data->getDatesOfBirthConsistent()) {
            $dataArray['dates_of_birth_consistent'] = $this->normalizer->normalize($data->getDatesOfBirthConsistent(), 'json', $context);
        }
        if ($data->isInitialized('refereeBiometricsDissimilar') && null !== $data->getRefereeBiometricsDissimilar()) {
            $dataArray['referee_biometrics_dissimilar'] = $this->normalizer->normalize($data->getRefereeBiometricsDissimilar(), 'json', $context);
        }
        if ($data->isInitialized('documentCompleteAndLegible') && null !== $data->getDocumentCompleteAndLegible()) {
            $dataArray['document_complete_and_legible'] = $this->normalizer->normalize($data->getDocumentCompleteAndLegible(), 'json', $context);
        }
        if ($data->isInitialized('tamperingSignalsCheck') && null !== $data->getTamperingSignalsCheck()) {
            $dataArray['tampering_signals_check'] = $this->normalizer->normalize($data->getTamperingSignalsCheck(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\SupportingDocumentValidationsApi::class => false];
    }
}