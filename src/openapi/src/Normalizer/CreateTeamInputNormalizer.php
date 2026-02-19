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
class CreateTeamInputNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\CreateTeamInput::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\CreateTeamInput::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\CreateTeamInput();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('public_name', $data)) {
            $object->setPublicName($data['public_name']);
        }
        if (\array_key_exists('logo_url', $data)) {
            $object->setLogoUrl($data['logo_url']);
        }
        if (\array_key_exists('team_admin_emails', $data)) {
            $values = [];
            foreach ($data['team_admin_emails'] as $value) {
                $values[] = $value;
            }
            $object->setTeamAdminEmails($values);
        }
        if (\array_key_exists('flow_template', $data)) {
            $object->setFlowTemplate($data['flow_template']);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['name'] = $data->getName();
        if ($data->isInitialized('publicName') && null !== $data->getPublicName()) {
            $dataArray['public_name'] = $data->getPublicName();
        }
        if ($data->isInitialized('logoUrl') && null !== $data->getLogoUrl()) {
            $dataArray['logo_url'] = $data->getLogoUrl();
        }
        $values = [];
        foreach ($data->getTeamAdminEmails() as $value) {
            $values[] = $value;
        }
        $dataArray['team_admin_emails'] = $values;
        if ($data->isInitialized('flowTemplate') && null !== $data->getFlowTemplate()) {
            $dataArray['flow_template'] = $data->getFlowTemplate();
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\CreateTeamInput::class => false];
    }
}