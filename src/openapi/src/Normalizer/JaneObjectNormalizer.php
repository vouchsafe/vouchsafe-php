<?php

namespace Vouchsafe\OpenAPI\Normalizer;

use Vouchsafe\OpenAPI\Runtime\Normalizer\CheckArray;
use Vouchsafe\OpenAPI\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;
    protected $normalizers = [
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordStringNever::class => \Vouchsafe\OpenAPI\Normalizer\RecordStringNeverNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RequiredFieldsExtractedResult::class => \Vouchsafe\OpenAPI\Normalizer\RequiredFieldsExtractedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CategoryMatchResult::class => \Vouchsafe\OpenAPI\Normalizer\CategoryMatchResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DocumentAgeValidResult::class => \Vouchsafe\OpenAPI\Normalizer\DocumentAgeValidResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DocumentCompleteAndLegibleResult::class => \Vouchsafe\OpenAPI\Normalizer\DocumentCompleteAndLegibleResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\TamperingSignalsCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\TamperingSignalsCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ApiErrorResponse::class => \Vouchsafe\OpenAPI\Normalizer\ApiErrorResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaArtefact::class => \Vouchsafe\OpenAPI\Normalizer\EvisaArtefactNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaExistsResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaExistsResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaRequiredFieldsExtractedResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaRequiredFieldsExtractedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaStartedResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaStartedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaNotExpiredResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaNotExpiredResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaValidations::class => \Vouchsafe\OpenAPI\Normalizer\EvisaValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaBaseExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\EvisaBaseExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToWorkVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\RightToWorkVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToRentExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\RightToRentExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\RightToRentVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusInput::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusInputPayload::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusInputPayloadNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToWorkInput::class => \Vouchsafe\OpenAPI\Normalizer\RightToWorkInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToWorkInputPayload::class => \Vouchsafe\OpenAPI\Normalizer\RightToWorkInputPayloadNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToRentInput::class => \Vouchsafe\OpenAPI\Normalizer\RightToRentInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToRentInputPayload::class => \Vouchsafe\OpenAPI\Normalizer\RightToRentInputPayloadNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RequestVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\RequestVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RequestVerificationInput::class => \Vouchsafe\OpenAPI\Normalizer\RequestVerificationInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Verification::class => \Vouchsafe\OpenAPI\Normalizer\VerificationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ClaimDetails::class => \Vouchsafe\OpenAPI\Normalizer\ClaimDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamResponse::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamResponseCredentials::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamResponseCredentialsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamInput::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Team::class => \Vouchsafe\OpenAPI\Normalizer\TeamNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CheckResult::class => \Vouchsafe\OpenAPI\Normalizer\CheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordCreditBureauVerificationChecksCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\RecordCreditBureauVerificationChecksCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreditBureauVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\CreditBureauVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\OnlineFootprintVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordAmlVerificationChecksCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\RecordAmlVerificationChecksCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\AmlVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class => \Vouchsafe\OpenAPI\Normalizer\RecordStringUnknownNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupMetadataNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupMetadataThresholds::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupMetadataThresholdsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetSmartLookupResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupInput::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupInputThresholds::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupInputThresholdsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PostcodeResponse::class => \Vouchsafe\OpenAPI\Normalizer\PostcodeResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Flow::class => \Vouchsafe\OpenAPI\Normalizer\FlowNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionResponse::class => \Vouchsafe\OpenAPI\Normalizer\CreateDigitalIdSessionResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\KnownClaims::class => \Vouchsafe\OpenAPI\Normalizer\KnownClaimsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\KnownClaimsAddress::class => \Vouchsafe\OpenAPI\Normalizer\KnownClaimsAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput::class => \Vouchsafe\OpenAPI\Normalizer\CreateDigitalIdSessionInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifiedClaims::class => \Vouchsafe\OpenAPI\Normalizer\VerifiedClaimsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifiedClaimsDocument::class => \Vouchsafe\OpenAPI\Normalizer\VerifiedClaimsDocumentNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifiedClaimsAddress::class => \Vouchsafe\OpenAPI\Normalizer\VerifiedClaimsAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RadarResult::class => \Vouchsafe\OpenAPI\Normalizer\RadarResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordStringEnrichmentCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\RecordStringEnrichmentCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Enrichments::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentsAml::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsAmlNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentsOnlineFootprint::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsOnlineFootprintNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentsCreditBureau::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsCreditBureauNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentsAddressVerification::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsAddressVerificationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EnrichmentsRadar::class => \Vouchsafe\OpenAPI\Normalizer\EnrichmentsRadarNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdSession::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdSessionNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdSessionEnrichments::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdSessionEnrichmentsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdSessionVerifiedClaims::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdSessionVerifiedClaimsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdSessionKnownClaims::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdSessionKnownClaimsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AuthenticateResponse::class => \Vouchsafe\OpenAPI\Normalizer\AuthenticateResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AuthenticateInput::class => \Vouchsafe\OpenAPI\Normalizer\AuthenticateInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetArtefactsResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetArtefactsResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody::class => \Vouchsafe\OpenAPI\Normalizer\VerifySupportingDocumentsPostBodyNormalizer::class,
        
        \Jane\Component\JsonSchemaRuntime\Reference::class => \Vouchsafe\OpenAPI\Runtime\Normalizer\ReferenceNormalizer::class,
    ], $normalizersCache = [];
    public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
    {
        return array_key_exists($type, $this->normalizers);
    }
    public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }
    public function normalize(mixed $data, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
    {
        $normalizerClass = $this->normalizers[get_class($data)];
        $normalizer = $this->getNormalizer($normalizerClass);
        return $normalizer->normalize($data, $format, $context);
    }
    public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
    {
        $denormalizerClass = $this->normalizers[$type];
        $denormalizer = $this->getNormalizer($denormalizerClass);
        return $denormalizer->denormalize($data, $type, $format, $context);
    }
    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }
    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;
        return $normalizer;
    }
    public function getSupportedTypes(?string $format = null): array
    {
        return [
            
            \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedDetails::class => false,
            \Vouchsafe\OpenAPI\Model\RecordStringNever::class => false,
            \Vouchsafe\OpenAPI\Model\RequiredFieldsExtractedResult::class => false,
            \Vouchsafe\OpenAPI\Model\CategoryMatchResult::class => false,
            \Vouchsafe\OpenAPI\Model\DocumentAgeValidResult::class => false,
            \Vouchsafe\OpenAPI\Model\DocumentCompleteAndLegibleResult::class => false,
            \Vouchsafe\OpenAPI\Model\TamperingSignalsCheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\SupportingDocumentValidations::class => false,
            \Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\ApiErrorResponse::class => false,
            \Vouchsafe\OpenAPI\Model\ImmigrationStatusExtractedDetails::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaArtefact::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaExistsResult::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaRequiredFieldsExtractedResult::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaStartedResult::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaNotExpiredResult::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaValidations::class => false,
            \Vouchsafe\OpenAPI\Model\ImmigrationStatusVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\EvisaBaseExtractedDetails::class => false,
            \Vouchsafe\OpenAPI\Model\RightToWorkVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\RightToRentExtractedDetails::class => false,
            \Vouchsafe\OpenAPI\Model\RightToRentVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\ImmigrationStatusInput::class => false,
            \Vouchsafe\OpenAPI\Model\ImmigrationStatusInputPayload::class => false,
            \Vouchsafe\OpenAPI\Model\RightToWorkInput::class => false,
            \Vouchsafe\OpenAPI\Model\RightToWorkInputPayload::class => false,
            \Vouchsafe\OpenAPI\Model\RightToRentInput::class => false,
            \Vouchsafe\OpenAPI\Model\RightToRentInputPayload::class => false,
            \Vouchsafe\OpenAPI\Model\RequestVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\RequestVerificationInput::class => false,
            \Vouchsafe\OpenAPI\Model\Verification::class => false,
            \Vouchsafe\OpenAPI\Model\ClaimDetails::class => false,
            \Vouchsafe\OpenAPI\Model\GetVerificationResponse::class => false,
            \Vouchsafe\OpenAPI\Model\CreateTeamResponse::class => false,
            \Vouchsafe\OpenAPI\Model\CreateTeamResponseCredentials::class => false,
            \Vouchsafe\OpenAPI\Model\CreateTeamInput::class => false,
            \Vouchsafe\OpenAPI\Model\Team::class => false,
            \Vouchsafe\OpenAPI\Model\CheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\RecordCreditBureauVerificationChecksCheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\CreditBureauVerificationReport::class => false,
            \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class => false,
            \Vouchsafe\OpenAPI\Model\RecordAmlVerificationChecksCheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\AmlVerificationReport::class => false,
            \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class => false,
            \Vouchsafe\OpenAPI\Model\SmartLookupMetadata::class => false,
            \Vouchsafe\OpenAPI\Model\SmartLookupMetadataThresholds::class => false,
            \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class => false,
            \Vouchsafe\OpenAPI\Model\SmartLookupInput::class => false,
            \Vouchsafe\OpenAPI\Model\SmartLookupInputThresholds::class => false,
            \Vouchsafe\OpenAPI\Model\PostcodeResponse::class => false,
            \Vouchsafe\OpenAPI\Model\Flow::class => false,
            \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionResponse::class => false,
            \Vouchsafe\OpenAPI\Model\KnownClaims::class => false,
            \Vouchsafe\OpenAPI\Model\KnownClaimsAddress::class => false,
            \Vouchsafe\OpenAPI\Model\CreateDigitalIdSessionInput::class => false,
            \Vouchsafe\OpenAPI\Model\VerifiedClaims::class => false,
            \Vouchsafe\OpenAPI\Model\VerifiedClaimsDocument::class => false,
            \Vouchsafe\OpenAPI\Model\VerifiedClaimsAddress::class => false,
            \Vouchsafe\OpenAPI\Model\RadarResult::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentCheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\RecordStringEnrichmentCheckResult::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentVerificationReport::class => false,
            \Vouchsafe\OpenAPI\Model\Enrichments::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentsAml::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentsOnlineFootprint::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentsCreditBureau::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentsAddressVerification::class => false,
            \Vouchsafe\OpenAPI\Model\EnrichmentsRadar::class => false,
            \Vouchsafe\OpenAPI\Model\DigitalIdSession::class => false,
            \Vouchsafe\OpenAPI\Model\DigitalIdSessionEnrichments::class => false,
            \Vouchsafe\OpenAPI\Model\DigitalIdSessionVerifiedClaims::class => false,
            \Vouchsafe\OpenAPI\Model\DigitalIdSessionKnownClaims::class => false,
            \Vouchsafe\OpenAPI\Model\AuthenticateResponse::class => false,
            \Vouchsafe\OpenAPI\Model\AuthenticateInput::class => false,
            \Vouchsafe\OpenAPI\Model\GetArtefactsResponse::class => false,
            \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody::class => false,
            \Jane\Component\JsonSchemaRuntime\Reference::class => false,
        ];
    }
}