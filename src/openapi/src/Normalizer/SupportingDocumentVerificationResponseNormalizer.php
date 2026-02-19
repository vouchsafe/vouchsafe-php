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
class SupportingDocumentVerificationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse();
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
        if (\array_key_exists('billable', $data)) {
            $object->setBillable($data['billable']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('extracted_details', $data)) {
            $value = $data['extracted_details'];
            if (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['first_line_of_address']) and isset($data['extracted_details']['postcode']) and isset($data['extracted_details']['document_date']) and isset($data['extracted_details']['document_category']) and isset($data['extracted_details']['unique_identifier']) and isset($data['extracted_details']['issuer'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class, 'json', $context);
            } elseif (is_array($data['extracted_details'])) {
                $value = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\RecordStringNever::class, 'json', $context);
            }
            $object->setExtractedDetails($value);
        }
        if (\array_key_exists('validations', $data)) {
            $value_1 = $data['validations'];
            if (is_array($data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class, 'json', $context);
            } elseif (is_array($data['validations'])) {
                $value_1 = $this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\RecordStringNever::class, 'json', $context);
            }
            $object->setValidations($value_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['verification_method'] = $data->getVerificationMethod();
        $dataArray['evidence_type'] = $data->getEvidenceType();
        $dataArray['billable'] = $data->getBillable();
        $dataArray['outcome'] = $data->getOutcome();
        $value = $data->getExtractedDetails();
        if (is_object($data->getExtractedDetails())) {
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
        }
        $dataArray['validations'] = $value_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse::class => false];
    }
}