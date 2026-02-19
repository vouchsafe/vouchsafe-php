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
class VerifiedClaimsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\VerifiedClaims::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\VerifiedClaims::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\VerifiedClaims();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('document', $data)) {
            $object->setDocument($this->denormalizer->denormalize($data['document'], \Vouchsafe\OpenAPI\Model\VerifiedClaimsDocument::class, 'json', $context));
            unset($data['document']);
        }
        if (\array_key_exists('address', $data)) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], \Vouchsafe\OpenAPI\Model\VerifiedClaimsAddress::class, 'json', $context));
            unset($data['address']);
        }
        if (\array_key_exists('nationality', $data)) {
            $object->setNationality($data['nationality']);
            unset($data['nationality']);
        }
        if (\array_key_exists('phone_number', $data)) {
            $object->setPhoneNumber($data['phone_number']);
            unset($data['phone_number']);
        }
        if (\array_key_exists('date_of_birth', $data)) {
            $object->setDateOfBirth($data['date_of_birth']);
            unset($data['date_of_birth']);
        }
        if (\array_key_exists('full_name', $data)) {
            $object->setFullName($data['full_name']);
            unset($data['full_name']);
        }
        if (\array_key_exists('family_name', $data)) {
            $object->setFamilyName($data['family_name']);
            unset($data['family_name']);
        }
        if (\array_key_exists('given_name', $data)) {
            $object->setGivenName($data['given_name']);
            unset($data['given_name']);
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
        if ($data->isInitialized('document') && null !== $data->getDocument()) {
            $dataArray['document'] = $this->normalizer->normalize($data->getDocument(), 'json', $context);
        }
        if ($data->isInitialized('address') && null !== $data->getAddress()) {
            $dataArray['address'] = $this->normalizer->normalize($data->getAddress(), 'json', $context);
        }
        if ($data->isInitialized('nationality') && null !== $data->getNationality()) {
            $dataArray['nationality'] = $data->getNationality();
        }
        if ($data->isInitialized('phoneNumber') && null !== $data->getPhoneNumber()) {
            $dataArray['phone_number'] = $data->getPhoneNumber();
        }
        if ($data->isInitialized('dateOfBirth') && null !== $data->getDateOfBirth()) {
            $dataArray['date_of_birth'] = $data->getDateOfBirth();
        }
        if ($data->isInitialized('fullName') && null !== $data->getFullName()) {
            $dataArray['full_name'] = $data->getFullName();
        }
        if ($data->isInitialized('familyName') && null !== $data->getFamilyName()) {
            $dataArray['family_name'] = $data->getFamilyName();
        }
        if ($data->isInitialized('givenName') && null !== $data->getGivenName()) {
            $dataArray['given_name'] = $data->getGivenName();
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\VerifiedClaims::class => false];
    }
}