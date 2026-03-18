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
class GetVerificationResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return $type === \Vouchsafe\OpenAPI\Model\GetVerificationResponse::class;
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === \Vouchsafe\OpenAPI\Model\GetVerificationResponse::class;
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Vouchsafe\OpenAPI\Model\GetVerificationResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data)) {
            $object->setId($data['id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('expires_at', $data)) {
            $object->setExpiresAt($data['expires_at']);
        }
        if (\array_key_exists('email', $data) && $data['email'] !== null) {
            $object->setEmail($data['email']);
        }
        elseif (\array_key_exists('email', $data) && $data['email'] === null) {
            $object->setEmail(null);
        }
        if (\array_key_exists('redirect_url', $data) && $data['redirect_url'] !== null) {
            $object->setRedirectUrl($data['redirect_url']);
        }
        elseif (\array_key_exists('redirect_url', $data) && $data['redirect_url'] === null) {
            $object->setRedirectUrl(null);
        }
        if (\array_key_exists('workflow_id', $data)) {
            $object->setWorkflowId($data['workflow_id']);
        }
        if (\array_key_exists('external_id', $data) && $data['external_id'] !== null) {
            $object->setExternalId($data['external_id']);
        }
        elseif (\array_key_exists('external_id', $data) && $data['external_id'] === null) {
            $object->setExternalId(null);
        }
        if (\array_key_exists('identity_profile', $data)) {
            $object->setIdentityProfile($data['identity_profile']);
        }
        if (\array_key_exists('claim_details', $data)) {
            $object->setClaimDetails($this->denormalizer->denormalize($data['claim_details'], \Vouchsafe\OpenAPI\Model\ClaimDetails::class, 'json', $context));
        }
        if (\array_key_exists('checks', $data)) {
            $values = [];
            foreach ($data['checks'] as $value) {
                $value_1 = $value;
                if (is_array($value) and (isset($value['step']) and $value['step'] == 'video_selfie') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail' or $value['outcome'] == 'in_progress')) and isset($value['total_attempts']) and isset($value['artefacts']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'verify_email') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail' or $value['outcome'] == 'in_progress')) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\VerifyEmailCheckApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'verify_phone_number') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail' or $value['outcome'] == 'in_progress')) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\VerifyPhoneNumberCheckApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'verify_user') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail' or $value['outcome'] == 'in_progress')) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\ReviewUserCheckApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'photo_id') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail')) and (isset($value['evidence_type']) and ($value['evidence_type'] == 'unfamiliar_photo_id' or $value['evidence_type'] == 'passport' or $value['evidence_type'] == 'driving_licence' or $value['evidence_type'] == 'young_scot' or $value['evidence_type'] == 'national_entitlement_card' or $value['evidence_type'] == 'national_id' or $value['evidence_type'] == 'citizen_card')) and isset($value['created_at']) and isset($value['artefacts']) and isset($value['extracted_details']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'supporting_document') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail')) and (isset($value['evidence_type']) and ($value['evidence_type'] == 'birth_or_adoption_certificate' or $value['evidence_type'] == 'marriage_certificate' or $value['evidence_type'] == 'naturalisation_or_reg_certificate' or $value['evidence_type'] == 'education_certificate' or $value['evidence_type'] == 'paye_tax_summary' or $value['evidence_type'] == 'payslip' or $value['evidence_type'] == 'pension_annual_statement' or $value['evidence_type'] == 'benefits_letter' or $value['evidence_type'] == 'nhs_letter' or $value['evidence_type'] == 'bank_statement' or $value['evidence_type'] == 'credit_card_statement' or $value['evidence_type'] == 'mortgage_statement' or $value['evidence_type'] == 'insurance_policy_agreement' or $value['evidence_type'] == 'utility_bill' or $value['evidence_type'] == 'mobile_phone_bill' or $value['evidence_type'] == 'hmpps_letter')) and isset($value['created_at']) and isset($value['artefacts']) and isset($value['extracted_details']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\SupportingDocumentEvidenceItemApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'bank_account') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail')) and (isset($value['evidence_type']) and $value['evidence_type'] == 'open_banking') and isset($value['created_at']) and isset($value['extracted_details']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\BankAccountEvidenceItemApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'evisa') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail')) and (isset($value['evidence_type']) and ($value['evidence_type'] == 'right_to_work' or $value['evidence_type'] == 'right_to_rent' or $value['evidence_type'] == 'immigration_status')) and isset($value['created_at']) and isset($value['artefacts']) and isset($value['extracted_details']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi::class, 'json', $context);
                } elseif (is_array($value) and (isset($value['step']) and $value['step'] == 'vouch') and (isset($value['outcome']) and ($value['outcome'] == 'pass' or $value['outcome'] == 'fail' or $value['outcome'] == 'in_progress')) and (isset($value['evidence_type']) and ($value['evidence_type'] == 'professional_referee' or $value['evidence_type'] == 'personal_referee')) and isset($value['created_at']) and isset($value['extracted_details']) and isset($value['validations'])) {
                    $value_1 = $this->denormalizer->denormalize($value, \Vouchsafe\OpenAPI\Model\RefereeEvidenceItemApi::class, 'json', $context);
                }
                $values[] = $value_1;
            }
            $object->setChecks($values);
        }
        if (\array_key_exists('enrichments', $data)) {
            $values_1 = [];
            foreach ($data['enrichments'] as $value_2) {
                $value_3 = $value_2;
                if (is_array($value_2) and (isset($value_2['check']) and $value_2['check'] == 'aml_sanctions') and (isset($value_2['outcome']) and ($value_2['outcome'] == 'pass' or $value_2['outcome'] == 'fail' or $value_2['outcome'] == 'error')) and isset($value_2['details'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Vouchsafe\OpenAPI\Model\AmlCheckApi::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['check']) and ($value_2['check'] == 'email_footprint_analysis' or $value_2['check'] == 'phone_footprint_analysis')) and (isset($value_2['outcome']) and ($value_2['outcome'] == 'pass' or $value_2['outcome'] == 'fail' or $value_2['outcome'] == 'error')) and isset($value_2['details'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Vouchsafe\OpenAPI\Model\OfaCheckApi::class, 'json', $context);
                } elseif (is_array($value_2) and (isset($value_2['check']) and $value_2['check'] == 'radar') and (isset($value_2['outcome']) and ($value_2['outcome'] == 'pass' or $value_2['outcome'] == 'fail' or $value_2['outcome'] == 'error')) and isset($value_2['details'])) {
                    $value_3 = $this->denormalizer->denormalize($value_2, \Vouchsafe\OpenAPI\Model\RadarCheckApi::class, 'json', $context);
                }
                $values_1[] = $value_3;
            }
            $object->setEnrichments($values_1);
        }
        return $object;
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $dataArray = [];
        $dataArray['id'] = $data->getId();
        $dataArray['status'] = $data->getStatus();
        $dataArray['created_at'] = $data->getCreatedAt();
        $dataArray['expires_at'] = $data->getExpiresAt();
        $dataArray['email'] = $data->getEmail();
        $dataArray['redirect_url'] = $data->getRedirectUrl();
        $dataArray['workflow_id'] = $data->getWorkflowId();
        $dataArray['external_id'] = $data->getExternalId();
        if ($data->isInitialized('identityProfile') && null !== $data->getIdentityProfile()) {
            $dataArray['identity_profile'] = $data->getIdentityProfile();
        }
        $dataArray['claim_details'] = $this->normalizer->normalize($data->getClaimDetails(), 'json', $context);
        $values = [];
        foreach ($data->getChecks() as $value) {
            $value_1 = $value;
            if (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            } elseif (is_object($value)) {
                $value_1 = $this->normalizer->normalize($value, 'json', $context);
            }
            $values[] = $value_1;
        }
        $dataArray['checks'] = $values;
        $values_1 = [];
        foreach ($data->getEnrichments() as $value_2) {
            $value_3 = $value_2;
            if (is_object($value_2)) {
                $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
            } elseif (is_object($value_2)) {
                $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
            } elseif (is_object($value_2)) {
                $value_3 = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $values_1[] = $value_3;
        }
        $dataArray['enrichments'] = $values_1;
        return $dataArray;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [\Vouchsafe\OpenAPI\Model\GetVerificationResponse::class => false];
    }
}