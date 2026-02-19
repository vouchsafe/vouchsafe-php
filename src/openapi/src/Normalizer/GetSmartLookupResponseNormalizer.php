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
class GetSmartLookupResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('team_id', $data)) {
            $object->setTeamId($data['team_id']);
        }
        if (\array_key_exists('checks', $data)) {
            $values = [];
            foreach ($data['checks'] as $value) {
                $values[] = $value;
            }
            $object->setChecks($values);
        }
        if (\array_key_exists('first_name', $data) && $data['first_name'] !== null) {
            $object->setFirstName($data['first_name']);
        }
        elseif (\array_key_exists('first_name', $data) && $data['first_name'] === null) {
            $object->setFirstName(null);
        }
        if (\array_key_exists('last_name', $data) && $data['last_name'] !== null) {
            $object->setLastName($data['last_name']);
        }
        elseif (\array_key_exists('last_name', $data) && $data['last_name'] === null) {
            $object->setLastName(null);
        }
        if (\array_key_exists('first_line_of_address', $data) && $data['first_line_of_address'] !== null) {
            $object->setFirstLineOfAddress($data['first_line_of_address']);
        }
        elseif (\array_key_exists('first_line_of_address', $data) && $data['first_line_of_address'] === null) {
            $object->setFirstLineOfAddress(null);
        }
        if (\array_key_exists('postcode', $data) && $data['postcode'] !== null) {
            $object->setPostcode($data['postcode']);
        }
        elseif (\array_key_exists('postcode', $data) && $data['postcode'] === null) {
            $object->setPostcode(null);
        }
        if (\array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
        }
        if (\array_key_exists('email', $data)) {
            $object->setEmail($data['email']);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('credit_bureau_verification_report', $data)) {
            $object->setCreditBureauVerificationReport($this->denormalizer->denormalize($data['credit_bureau_verification_report'], \Vouchsafe\OpenAPI\Model\CreditBureauVerificationReport::class, 'json', $context));
        }
        if (\array_key_exists('online_footprint_verification_report', $data)) {
            $object->setOnlineFootprintVerificationReport($this->denormalizer->denormalize($data['online_footprint_verification_report'], \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class, 'json', $context));
        }
        if (\array_key_exists('aml_verification_report', $data)) {
            $object->setAmlVerificationReport($this->denormalizer->denormalize($data['aml_verification_report'], \Vouchsafe\OpenAPI\Model\AmlVerificationReport::class, 'json', $context));
        }
        if (\array_key_exists('metadata', $data)) {
            $object->setMetadata($this->denormalizer->denormalize($data['metadata'], \Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class, 'json', $context));
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['team_id'] = $data->getTeamId();
        $values = [];
        foreach ($data->getChecks() as $value) {
            $values[] = $value;
        }
        $dataArray['checks'] = $values;
        $dataArray['first_name'] = $data->getFirstName();
        $dataArray['last_name'] = $data->getLastName();
        $dataArray['first_line_of_address'] = $data->getFirstLineOfAddress();
        $dataArray['postcode'] = $data->getPostcode();
        if ($data->isInitialized('dateOfBirth') && null !== $data->getDateOfBirth()) {
            $dataArray['date_of_birth'] = $data->getDateOfBirth();
        }
        if ($data->isInitialized('email') && null !== $data->getEmail()) {
            $dataArray['email'] = $data->getEmail();
        }
        if ($data->isInitialized('phone') && null !== $data->getPhone()) {
            $dataArray['phone'] = $data->getPhone();
        }
        if ($data->isInitialized('creditBureauVerificationReport') && null !== $data->getCreditBureauVerificationReport()) {
            $dataArray['credit_bureau_verification_report'] = $this->normalizer->normalize($data->getCreditBureauVerificationReport(), 'json', $context);
        }
        if ($data->isInitialized('onlineFootprintVerificationReport') && null !== $data->getOnlineFootprintVerificationReport()) {
            $dataArray['online_footprint_verification_report'] = $this->normalizer->normalize($data->getOnlineFootprintVerificationReport(), 'json', $context);
        }
        if ($data->isInitialized('amlVerificationReport') && null !== $data->getAmlVerificationReport()) {
            $dataArray['aml_verification_report'] = $this->normalizer->normalize($data->getAmlVerificationReport(), 'json', $context);
        }
        $dataArray['metadata'] = $this->normalizer->normalize($data->getMetadata(), 'json', $context);
        $dataArray['created_at'] = $data->getCreatedAt();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class => false];
    }
}