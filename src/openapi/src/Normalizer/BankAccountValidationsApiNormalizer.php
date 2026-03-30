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
class BankAccountValidationsApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\BankAccountValidationsApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\BankAccountValidationsApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\BankAccountValidationsApi();
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
        if (\array_key_exists('has_recent_transactions', $data)) {
            $object->setHasRecentTransactions($this->denormalizer->denormalize($data['has_recent_transactions'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('non_zero_balance', $data)) {
            $object->setNonZeroBalance($this->denormalizer->denormalize($data['non_zero_balance'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('names_consistent', $data)) {
            $object->setNamesConsistent($this->denormalizer->denormalize($data['names_consistent'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        if (\array_key_exists('referee_biometrics_dissimilar', $data)) {
            $object->setRefereeBiometricsDissimilar($this->denormalizer->denormalize($data['referee_biometrics_dissimilar'], \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['required_fields_extracted'] = $this->normalizer->normalize($data->getRequiredFieldsExtracted(), 'json', $context);
        $dataArray['has_recent_transactions'] = $this->normalizer->normalize($data->getHasRecentTransactions(), 'json', $context);
        $dataArray['non_zero_balance'] = $this->normalizer->normalize($data->getNonZeroBalance(), 'json', $context);
        if ($data->isInitialized('namesConsistent') && null !== $data->getNamesConsistent()) {
            $dataArray['names_consistent'] = $this->normalizer->normalize($data->getNamesConsistent(), 'json', $context);
        }
        if ($data->isInitialized('refereeBiometricsDissimilar') && null !== $data->getRefereeBiometricsDissimilar()) {
            $dataArray['referee_biometrics_dissimilar'] = $this->normalizer->normalize($data->getRefereeBiometricsDissimilar(), 'json', $context);
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\BankAccountValidationsApi::class => false];
    }
}