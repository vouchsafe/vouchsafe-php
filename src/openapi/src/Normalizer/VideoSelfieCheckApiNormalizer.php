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
class VideoSelfieCheckApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi();
        if (\array_key_exists('total_attempts', $data) && \is_int($data['total_attempts'])) {
            $data['total_attempts'] = (double) $data['total_attempts'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('step', $data)) {
            $object->setStep($data['step']);
        }
        if (\array_key_exists('outcome', $data)) {
            $object->setOutcome($data['outcome']);
        }
        if (\array_key_exists('total_attempts', $data)) {
            $object->setTotalAttempts($data['total_attempts']);
        }
        if (\array_key_exists('artefacts', $data)) {
            $values = [];
            foreach ($data['artefacts'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\ArtefactApi::class, 'json', $context);
            }
            $object->setArtefacts($values);
        }
        if (\array_key_exists('validations', $data)) {
            $object->setValidations($this->denormalizer->denormalize($data['validations'], \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApiValidations::class, 'json', $context));
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['step'] = $data->getStep();
        $dataArray['outcome'] = $data->getOutcome();
        $dataArray['total_attempts'] = $data->getTotalAttempts();
        $values = [];
        foreach ($data->getArtefacts() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $dataArray['artefacts'] = $values;
        $dataArray['validations'] = $this->normalizer->normalize($data->getValidations(), 'json', $context);
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi::class => false];
    }
}