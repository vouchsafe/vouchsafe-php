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
class CertifiedDetailsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\CertifiedDetails::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\CertifiedDetails::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\CertifiedDetails();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('supplementary_code_compliant', $data) && \is_int($data['supplementary_code_compliant'])) {
            $data['supplementary_code_compliant'] = (bool) $data['supplementary_code_compliant'];
        }
        if (\array_key_exists('identity_verified', $data) && \is_int($data['identity_verified'])) {
            $data['identity_verified'] = (bool) $data['identity_verified'];
        }
        if (\array_key_exists('address_verified', $data) && \is_int($data['address_verified'])) {
            $data['address_verified'] = (bool) $data['address_verified'];
        }
        if (\array_key_exists('registration_confirmed', $data) && \is_int($data['registration_confirmed'])) {
            $data['registration_confirmed'] = (bool) $data['registration_confirmed'];
        }
        if (\array_key_exists('check_type', $data)) {
            $object->setCheckType($data['check_type']);
        }
        if (\array_key_exists('identity_profile_state', $data)) {
            $object->setIdentityProfileState($data['identity_profile_state']);
        }
        if (\array_key_exists('supplementary_code_compliant', $data)) {
            $object->setSupplementaryCodeCompliant($data['supplementary_code_compliant']);
        }
        if (\array_key_exists('trust_framework_version', $data)) {
            $object->setTrustFrameworkVersion($data['trust_framework_version']);
        }
        if (\array_key_exists('identity_verified', $data)) {
            $object->setIdentityVerified($data['identity_verified']);
        }
        if (\array_key_exists('date_of_identity_check', $data)) {
            $object->setDateOfIdentityCheck($data['date_of_identity_check']);
        }
        if (\array_key_exists('address_verified', $data)) {
            $object->setAddressVerified($data['address_verified']);
        }
        if (\array_key_exists('date_of_address_check', $data)) {
            $object->setDateOfAddressCheck($data['date_of_address_check']);
        }
        if (\array_key_exists('evidence_checked_by', $data)) {
            $object->setEvidenceCheckedBy($data['evidence_checked_by']);
        }
        if (\array_key_exists('registration_confirmed', $data)) {
            $object->setRegistrationConfirmed($data['registration_confirmed']);
        }
        if (\array_key_exists('registration_entry', $data)) {
            $object->setRegistrationEntry($data['registration_entry']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['check_type'] = $data->getCheckType();
        $dataArray['identity_profile_state'] = $data->getIdentityProfileState();
        $dataArray['supplementary_code_compliant'] = $data->getSupplementaryCodeCompliant();
        $dataArray['trust_framework_version'] = $data->getTrustFrameworkVersion();
        $dataArray['identity_verified'] = $data->getIdentityVerified();
        if ($data->isInitialized('dateOfIdentityCheck') && null !== $data->getDateOfIdentityCheck()) {
            $dataArray['date_of_identity_check'] = $data->getDateOfIdentityCheck();
        }
        if ($data->isInitialized('addressVerified') && null !== $data->getAddressVerified()) {
            $dataArray['address_verified'] = $data->getAddressVerified();
        }
        if ($data->isInitialized('dateOfAddressCheck') && null !== $data->getDateOfAddressCheck()) {
            $dataArray['date_of_address_check'] = $data->getDateOfAddressCheck();
        }
        $dataArray['evidence_checked_by'] = $data->getEvidenceCheckedBy();
        $dataArray['registration_confirmed'] = $data->getRegistrationConfirmed();
        $dataArray['registration_entry'] = $data->getRegistrationEntry();
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\CertifiedDetails::class => false];
    }
}