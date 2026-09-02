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
class AmlMatchApiPropertiesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\AmlMatchApiProperties::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\AmlMatchApiProperties::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $object = new \Vouchsafe\OpenAPI\Model\AmlMatchApiProperties();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (isset($data['$ref']) && !isset($data['type']) && !isset($data['properties']) && !isset($data['allOf'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        if (\array_key_exists('birth_country', $data)) {
            $value = $data['birth_country'];
            if (is_string($data['birth_country'])) {
                $value = $data['birth_country'];
            } elseif (is_array($data['birth_country']) && $this->isOnlyNumericKeys($data['birth_country'])) {
                $values = [];
                foreach ($data['birth_country'] as $value_1) {
                    $values[] = $value_1;
                }
                $value = $values;
            }
            $object->setBirthCountry($value);
            unset($data['birth_country']);
        }
        if (\array_key_exists('birth_place', $data)) {
            $value_2 = $data['birth_place'];
            if (is_string($data['birth_place'])) {
                $value_2 = $data['birth_place'];
            } elseif (is_array($data['birth_place']) && $this->isOnlyNumericKeys($data['birth_place'])) {
                $values_1 = [];
                foreach ($data['birth_place'] as $value_3) {
                    $values_1[] = $value_3;
                }
                $value_2 = $values_1;
            }
            $object->setBirthPlace($value_2);
            unset($data['birth_place']);
        }
        if (\array_key_exists('birth_date', $data)) {
            $object->setBirthDate($data['birth_date']);
            unset($data['birth_date']);
        }
        if (\array_key_exists('position', $data)) {
            $value_4 = $data['position'];
            if (is_string($data['position'])) {
                $value_4 = $data['position'];
            } elseif (is_array($data['position']) && $this->isOnlyNumericKeys($data['position'])) {
                $values_2 = [];
                foreach ($data['position'] as $value_5) {
                    $values_2[] = $value_5;
                }
                $value_4 = $values_2;
            }
            $object->setPosition($value_4);
            unset($data['position']);
        }
        if (\array_key_exists('country', $data)) {
            $value_6 = $data['country'];
            if (is_string($data['country'])) {
                $value_6 = $data['country'];
            } elseif (is_array($data['country']) && $this->isOnlyNumericKeys($data['country'])) {
                $values_3 = [];
                foreach ($data['country'] as $value_7) {
                    $values_3[] = $value_7;
                }
                $value_6 = $values_3;
            }
            $object->setCountry($value_6);
            unset($data['country']);
        }
        if (\array_key_exists('notes', $data)) {
            $value_8 = $data['notes'];
            if (is_string($data['notes'])) {
                $value_8 = $data['notes'];
            } elseif (is_array($data['notes']) && $this->isOnlyNumericKeys($data['notes'])) {
                $values_4 = [];
                foreach ($data['notes'] as $value_9) {
                    $values_4[] = $value_9;
                }
                $value_8 = $values_4;
            }
            $object->setNotes($value_8);
            unset($data['notes']);
        }
        foreach ($data as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_10;
            }
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $value = $data->getBirthCountry();
        if (is_string($data->getBirthCountry())) {
            $value = $data->getBirthCountry();
        } elseif (is_array($data->getBirthCountry())) {
            $values = [];
            foreach ($data->getBirthCountry() as $value_1) {
                $values[] = $value_1;
            }
            $value = $values;
        }
        $dataArray['birth_country'] = $value;
        $value_2 = $data->getBirthPlace();
        if (is_string($data->getBirthPlace())) {
            $value_2 = $data->getBirthPlace();
        } elseif (is_array($data->getBirthPlace())) {
            $values_1 = [];
            foreach ($data->getBirthPlace() as $value_3) {
                $values_1[] = $value_3;
            }
            $value_2 = $values_1;
        }
        $dataArray['birth_place'] = $value_2;
        $dataArray['birth_date'] = $data->getBirthDate();
        $value_4 = $data->getPosition();
        if (is_string($data->getPosition())) {
            $value_4 = $data->getPosition();
        } elseif (is_array($data->getPosition())) {
            $values_2 = [];
            foreach ($data->getPosition() as $value_5) {
                $values_2[] = $value_5;
            }
            $value_4 = $values_2;
        }
        $dataArray['position'] = $value_4;
        $value_6 = $data->getCountry();
        if (is_string($data->getCountry())) {
            $value_6 = $data->getCountry();
        } elseif (is_array($data->getCountry())) {
            $values_3 = [];
            foreach ($data->getCountry() as $value_7) {
                $values_3[] = $value_7;
            }
            $value_6 = $values_3;
        }
        $dataArray['country'] = $value_6;
        $value_8 = $data->getNotes();
        if (is_string($data->getNotes())) {
            $value_8 = $data->getNotes();
        } elseif (is_array($data->getNotes())) {
            $values_4 = [];
            foreach ($data->getNotes() as $value_9) {
                $values_4[] = $value_9;
            }
            $value_8 = $values_4;
        }
        $dataArray['notes'] = $value_8;
        foreach ($data->additionalPropertyEntries() as $key => $value_10) {
            if (preg_match('/.*/', (string) $key)) {
                $dataArray[$key] = $value_10;
            }
        }
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\AmlMatchApiProperties::class => false];
    }
}