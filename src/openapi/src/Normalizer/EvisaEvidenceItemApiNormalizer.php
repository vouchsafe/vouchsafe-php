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
class EvisaEvidenceItemApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi();
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
            if (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['share_code']) and isset($data['extracted_details']['reference_number']) and isset($data['extracted_details']['immigration_status']) and isset($data['extracted_details']['nationality']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issue_date'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['share_code']) and isset($data['extracted_details']['reference_number']) and isset($data['extracted_details']['expiration_date'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi::class, 'json', $context);
            } elseif (is_array($data['extracted_details']) and isset($data['extracted_details']['first_name']) and isset($data['extracted_details']['last_name']) and isset($data['extracted_details']['date_of_birth']) and isset($data['extracted_details']['share_code']) and isset($data['extracted_details']['reference_number']) and isset($data['extracted_details']['expiration_date']) and isset($data['extracted_details']['issue_date'])) {
                $value_1 = $this->denormalizer->denormalize($data['extracted_details'], \Vouchsafe\OpenAPI\Model\RightToRentDetailsApi::class, 'json', $context);
            }
            $object->setExtractedDetails($value_1);
        }
        if (\array_key_exists('validations', $data)) {
            $object->setValidations($this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\EvisaValidationsApi::class, 'json', $context));
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
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['artefacts'] = $values;
        $value_1 = $data->getExtractedDetails();
        if (is_object($data->getExtractedDetails())) {
            $value_1 = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        } elseif (is_object($data->getExtractedDetails())) {
            $value_1 = $this->normalizer->normalize($data->getExtractedDetails(), 'json', $context);
        }
        $dataArray['extracted_details'] = $value_1;
        $dataArray['validations'] = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi::class => false];
    }
}