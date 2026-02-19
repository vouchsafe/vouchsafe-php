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
class RightToRentVerificationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse();
        if (\array_key_exists('billable', $data) && \is_int($data['billable'])) {
            $data['billable'] = (bool) $data['billable'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('verification_method', $data)) {
            $object->setVerificationMethod($data['verification_method']);
        }
        if (\array_key_exists('evidence_type', $data)) {
            $object->setEvidenceType($data['evidence_type']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('extracted_details', $data)) {
            $value = $data['extracted_details'];
            if (is_array($data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\RightToRentExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\RecordStringNever::class, 'json', $context);
            }
            $object->setExtractedDetails($value);
        }
        if (\array_key_exists('artefacts', $data)) {
            $values = [];
            foreach ($data['artefacts'] as $value_1) {
                $values[] = $this->denormalizer->denormalize($value_1, \Vouchsafe\OpenAPI\Model\EvisaArtefact::class, 'json', $context);
            }
            $object->setArtefacts($values);
        }
        if (\array_key_exists('validations', $data)) {
            $value_2 = $data['validations'];
            if (is_array($data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\EvisaValidations::class, 'json', $context);
            } elseif (is_array($data['validations'])) {
                $value_2 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\RecordStringNever::class, 'json', $context);
            }
            $object->setValidations($value_2);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['verification_method'] = $data->getVerificationMethod();
        $dataArray['evidence_type'] = $data->getEvidenceType();
        $dataArray['outcome'] = $data->getOutcome();
        $dataArray['billable'] = $data->getBillable();
        $value = $data->getExtractedDetails();
        if (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        }
        $dataArray['extracted_details'] = $value;
        $values = [];
        foreach ($data->getArtefacts() as $value_1) {
            $values[] = $this->normalizer->normalize($value_1, 'json', $context);
        }
        $dataArray['artefacts'] = $values;
        $value_2 = $data->getValidations();
        if (is_object($data->getValidations())) {
            $value_2 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        } elseif (is_object($data->getValidations())) {
            $value_2 = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        }
        $dataArray['validations'] = $value_2;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse::class => false];
    }
}