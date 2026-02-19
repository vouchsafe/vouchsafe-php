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
class DigitalIdSessionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\DigitalIdSession::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\DigitalIdSession::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\DigitalIdSession();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('enrichments', $data) && $data['enrichments'] !== null) {
            $object->setEnrichments($this->denormalizer->denormalize($data['enrichments'], \Vouchsafe\OpenAPI\Model\DigitalIdSessionEnrichments::class, 'json', $context));
            unset($data['enrichments']);
        }
        elseif (\array_key_exists('enrichments', $data) && $data['enrichments'] === null) {
            $object->setEnrichments(null);
        }
        if (\array_key_exists('verified_claims', $data) && $data['verified_claims'] !== null) {
            $object->setVerifiedClaims($this->denormalizer->denormalize($data['verified_claims'], \Vouchsafe\OpenAPI\Model\DigitalIdSessionVerifiedClaims::class, 'json', $context));
            unset($data['verified_claims']);
        }
        elseif (\array_key_exists('verified_claims', $data) && $data['verified_claims'] === null) {
            $object->setVerifiedClaims(null);
        }
        if (\array_key_exists('known_claims', $data) && $data['known_claims'] !== null) {
            $object->setKnownClaims($this->denormalizer->denormalize($data['known_claims'], \Vouchsafe\OpenAPI\Model\DigitalIdSessionKnownClaims::class, 'json', $context));
            unset($data['known_claims']);
        }
        elseif (\array_key_exists('known_claims', $data) && $data['known_claims'] === null) {
            $object->setKnownClaims(null);
        }
        if (\array_key_exists('provider_id', $data) && $data['provider_id'] !== null) {
            $object->setProviderId($data['provider_id']);
            unset($data['provider_id']);
        }
        elseif (\array_key_exists('provider_id', $data) && $data['provider_id'] === null) {
            $object->setProviderId(null);
        }
        if (\array_key_exists('flow_id', $data)) {
            $object->setFlowId($data['flow_id']);
            unset($data['flow_id']);
        }
        if (\array_key_exists('redirect_url', $data) && $data['redirect_url'] !== null) {
            $object->setRedirectUrl($data['redirect_url']);
            unset($data['redirect_url']);
        }
        elseif (\array_key_exists('redirect_url', $data) && $data['redirect_url'] === null) {
            $object->setRedirectUrl(null);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt($data['expires_at']);
            unset($data['expires_at']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
            unset($data['created_at']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
            unset($data['status']);
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
            unset($data['id']);
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
        $dataArray['enrichments'] = $this->normalizer->normalize($data->getEnrichments(), 'json', $context);
        $dataArray['verified_claims'] = $this->normalizer->normalize($data->getVerifiedClaims(), 'json', $context);
        $dataArray['known_claims'] = $this->normalizer->normalize($data->getKnownClaims(), 'json', $context);
        $dataArray['provider_id'] = $data->getProviderId();
        $dataArray['flow_id'] = $data->getFlowId();
        $dataArray['redirect_url'] = $data->getRedirectUrl();
        $dataArray['expires_at'] = $data->getExpiresAt();
        $dataArray['created_at'] = $data->getCreatedAt();
        $dataArray['status'] = $data->getStatus();
        $dataArray['id'] = $data->getId();
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\DigitalIdSession::class => false];
    }
}