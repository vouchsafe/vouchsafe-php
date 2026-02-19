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
class CreateDigitalIdSessionInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('known_claims', $data)) {
            $object->setKnownClaims($this->denormalizer->denormalize($data['known_claims'], \Vouchsafe\OpenAPI\Model\KnownClaims::class, 'json', $context));
            unset($data['known_claims']);
        }
        if (\array_key_exists('redirect_url', $data)) {
            $object->setRedirectUrl($data['redirect_url']);
            unset($data['redirect_url']);
        }
        if (\array_key_exists('flow_id', $data)) {
            $object->setFlowId($data['flow_id']);
            unset($data['flow_id']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        if ($data->isInitialized('knownClaims') && null !== $data->getKnownClaims()) {
            $dataArray['known_claims'] = $this->normalizer->normalize($data->getKnownClaims(), 'json', $context);
        }
        if ($data->isInitialized('redirectUrl') && null !== $data->getRedirectUrl()) {
            $dataArray['redirect_url'] = $data->getRedirectUrl();
        }
        $dataArray['flow_id'] = $data->getFlowId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput::class => false];
    }
}