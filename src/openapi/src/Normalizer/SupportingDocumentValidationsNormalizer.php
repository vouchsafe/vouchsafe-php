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
class SupportingDocumentValidationsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('required_fields_extracted', $data)) {
            $object->setRequiredFieldsExtracted($this->denormalizer->denormalize($data['required_fields_extracted'], \Vouchsafe\OpenAPI\Model\RequiredFieldsExtractedResult::class, 'json', $context));
        }
        if (\array_key_exists('category_match', $data)) {
            $object->setCategoryMatch($this->denormalizer->denormalize($data['category_match'], \Vouchsafe\OpenAPI\Model\CategoryMatchResult::class, 'json', $context));
        }
        if (\array_key_exists('document_age_valid', $data)) {
            $object->setDocumentAgeValid($this->denormalizer->denormalize($data['document_age_valid'], \Vouchsafe\OpenAPI\Model\DocumentAgeValidResult::class, 'json', $context));
        }
        if (\array_key_exists('document_complete_and_legible', $data)) {
            $object->setDocumentCompleteAndLegible($this->denormalizer->denormalize($data['document_complete_and_legible'], \Vouchsafe\OpenAPI\Model\DocumentCompleteAndLegibleResult::class, 'json', $context));
        }
        if (\array_key_exists('tampering_signals_check', $data)) {
            $object->setTamperingSignalsCheck($this->denormalizer->denormalize($data['tampering_signals_check'], \Vouchsafe\OpenAPI\Model\TamperingSignalsCheckResult::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('requiredFieldsExtracted') && null !== $data->getRequiredFieldsExtracted()) {
            $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        }
        if ($data->isInitialized('categoryMatch') && null !== $data->getCategoryMatch()) {
            $dataArray['category_match'] = $this->normalizer->normalize($data->getCategoryMatch(), 'json', $context);
        }
        if ($data->isInitialized('documentAgeValid') && null !== $data->getDocumentAgeValid()) {
            $dataArray['document_age_valid'] = $this->normalizer->normalize($data->getDocumentAgeValid(), 'json', $context);
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
        return [\Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class => false];
    }
}