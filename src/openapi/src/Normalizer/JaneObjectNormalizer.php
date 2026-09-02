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
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentExtractedAddress::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentExtractedAddressNormalizer::class,
        
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
        
        \Vouchsafe\OpenAPI\Model\PassportExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\PassportExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PASSCardExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\PASSCardExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Pass::class => \Vouchsafe\OpenAPI\Normalizer\PassNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailFailedReasonMRZNOTTD3OrFailedReasonINCOMPLETEMRZDATA::class => \Vouchsafe\OpenAPI\Normalizer\FailFailedReasonMRZNOTTD3OrFailedReasonINCOMPLETEMRZDATANormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailMrzPhotoIdFailedReason::class => \Vouchsafe\OpenAPI\Normalizer\FailMrzPhotoIdFailedReasonNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOf::class => \Vouchsafe\OpenAPI\Normalizer\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOfNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOfMetadata::class => \Vouchsafe\OpenAPI\Normalizer\CompoundIdentifiersCheckMrzPhotoIdFailedReasonAnyOfMetadataNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailSpecimenErrorCode::class => \Vouchsafe\OpenAPI\Normalizer\FailSpecimenErrorCodeNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailTamperingErrorCode::class => \Vouchsafe\OpenAPI\Normalizer\FailTamperingErrorCodeNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ScoreCheckDocumentDimensionsErrorCodeAnyOf::class => \Vouchsafe\OpenAPI\Normalizer\ScoreCheckDocumentDimensionsErrorCodeAnyOfNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailDocumentFaceErrorCode::class => \Vouchsafe\OpenAPI\Normalizer\FailDocumentFaceErrorCodeNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ScoreCheckFaceMatchErrorCodeAnyOf::class => \Vouchsafe\OpenAPI\Normalizer\ScoreCheckFaceMatchErrorCodeAnyOfNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PassportValidation::class => \Vouchsafe\OpenAPI\Normalizer\PassportValidationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailFailedReasonMRZNOTTD1OrFailedReasonINCOMPLETEMRZDATA::class => \Vouchsafe\OpenAPI\Normalizer\FailFailedReasonMRZNOTTD1OrFailedReasonINCOMPLETEMRZDATANormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdValidation::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdValidationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailDrivingLicenceFailedReason::class => \Vouchsafe\OpenAPI\Normalizer\FailDrivingLicenceFailedReasonNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceValidation::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceValidationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailPASSCardFailedReason::class => \Vouchsafe\OpenAPI\Normalizer\FailPASSCardFailedReasonNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckPASSCardFailedReasonAnyOf::class => \Vouchsafe\OpenAPI\Normalizer\CompoundIdentifiersCheckPASSCardFailedReasonAnyOfNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadata::class => \Vouchsafe\OpenAPI\Normalizer\CompoundIdentifiersCheckPASSCardFailedReasonAnyOfMetadataNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PASSCardValidation::class => \Vouchsafe\OpenAPI\Normalizer\PASSCardValidationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\FailUnfamiliarPhotoIdFailedReason::class => \Vouchsafe\OpenAPI\Normalizer\FailUnfamiliarPhotoIdFailedReasonNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidation::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdValidationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\PhotoIdVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaArtefact::class => \Vouchsafe\OpenAPI\Normalizer\EvisaArtefactNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaExistsResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaExistsResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaRequiredFieldsExtractedResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaRequiredFieldsExtractedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusEvisaStartedResult::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusEvisaStartedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusEvisaNotExpiredResult::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusEvisaNotExpiredResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusEvisaValidations::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusEvisaValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaConditionsSuccess::class => \Vouchsafe\OpenAPI\Normalizer\EvisaConditionsSuccessNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaConditionsFailed::class => \Vouchsafe\OpenAPI\Normalizer\EvisaConditionsFailedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToWorkExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\RightToWorkExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaStartedResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaStartedResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaNotExpiredResult::class => \Vouchsafe\OpenAPI\Normalizer\EvisaNotExpiredResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaValidations::class => \Vouchsafe\OpenAPI\Normalizer\EvisaValidationsNormalizer::class,
        
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
        
        \Vouchsafe\OpenAPI\Model\AddressClaimInput::class => \Vouchsafe\OpenAPI\Normalizer\AddressClaimInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RequestVerificationInput::class => \Vouchsafe\OpenAPI\Normalizer\RequestVerificationInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Verification::class => \Vouchsafe\OpenAPI\Normalizer\VerificationNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Address::class => \Vouchsafe\OpenAPI\Normalizer\AddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ClaimDetails::class => \Vouchsafe\OpenAPI\Normalizer\ClaimDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ClaimDetailsAddress::class => \Vouchsafe\OpenAPI\Normalizer\ClaimDetailsAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ArtefactApi::class => \Vouchsafe\OpenAPI\Normalizer\ArtefactApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\VideoSelfieCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApiValidations::class => \Vouchsafe\OpenAPI\Normalizer\VideoSelfieCheckApiValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApiValidationsFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\VideoSelfieCheckApiValidationsFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApiValidationsRefereeDissimilarityCheck::class => \Vouchsafe\OpenAPI\Normalizer\VideoSelfieCheckApiValidationsRefereeDissimilarityCheckNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VideoSelfieCheckApiValidationsLivenessCheck::class => \Vouchsafe\OpenAPI\Normalizer\VideoSelfieCheckApiValidationsLivenessCheckNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyEmailCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\VerifyEmailCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyEmailCheckApiValidations::class => \Vouchsafe\OpenAPI\Normalizer\VerifyEmailCheckApiValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyEmailCheckApiValidationsEmailVerified::class => \Vouchsafe\OpenAPI\Normalizer\VerifyEmailCheckApiValidationsEmailVerifiedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyPhoneNumberCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\VerifyPhoneNumberCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyPhoneNumberCheckApiValidations::class => \Vouchsafe\OpenAPI\Normalizer\VerifyPhoneNumberCheckApiValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyPhoneNumberCheckApiValidationsPhoneVerified::class => \Vouchsafe\OpenAPI\Normalizer\VerifyPhoneNumberCheckApiValidationsPhoneVerifiedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ValidationOutcomeApi::class => \Vouchsafe\OpenAPI\Normalizer\ValidationOutcomeApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ReviewUserCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\ReviewUserCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ReviewUserCheckApiValidations::class => \Vouchsafe\OpenAPI\Normalizer\ReviewUserCheckApiValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CitizenCardDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\CitizenCardDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PassportDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\PassportDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\YoungScotDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\YoungScotDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NecDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\NecDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PassportValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\PassportValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PassportValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\PassportValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PassportValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\PassportValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DrivingLicenceValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\DrivingLicenceValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NationalIdValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\NationalIdValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CitizenCardValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\CitizenCardValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CitizenCardValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\CitizenCardValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CitizenCardValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\CitizenCardValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\YoungScotValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\YoungScotValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\YoungScotValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\YoungScotValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\YoungScotValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\YoungScotValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NecValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\NecValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NecValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\NecValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\NecValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\NecValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidationApi::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdValidationApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidationApiDocumentBordersDetected::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdValidationApiDocumentBordersDetectedNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\UnfamiliarPhotoIdValidationApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\UnfamiliarPhotoIdValidationApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PhotoIdEvidenceItemApi::class => \Vouchsafe\OpenAPI\Normalizer\PhotoIdEvidenceItemApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AddressDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\AddressDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentDetailsApiAddress::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentDetailsApiAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentValidationsApi::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentValidationsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SupportingDocumentEvidenceItemApi::class => \Vouchsafe\OpenAPI\Normalizer\SupportingDocumentEvidenceItemApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\TransactionDataApi::class => \Vouchsafe\OpenAPI\Normalizer\TransactionDataApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\BankAccountDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\BankAccountDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\BankAccountDetailsApiTransactionData::class => \Vouchsafe\OpenAPI\Normalizer\BankAccountDetailsApiTransactionDataNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\BankAccountValidationsApi::class => \Vouchsafe\OpenAPI\Normalizer\BankAccountValidationsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\BankAccountEvidenceItemApi::class => \Vouchsafe\OpenAPI\Normalizer\BankAccountEvidenceItemApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ImmigrationStatusDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\ImmigrationStatusDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaConditionsSuccessApi::class => \Vouchsafe\OpenAPI\Normalizer\EvisaConditionsSuccessApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaConditionsFailedApi::class => \Vouchsafe\OpenAPI\Normalizer\EvisaConditionsFailedApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToWorkDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\RightToWorkDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RightToRentDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\RightToRentDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaValidationsApi::class => \Vouchsafe\OpenAPI\Normalizer\EvisaValidationsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaValidationsApiFaceMatch::class => \Vouchsafe\OpenAPI\Normalizer\EvisaValidationsApiFaceMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\EvisaEvidenceItemApi::class => \Vouchsafe\OpenAPI\Normalizer\EvisaEvidenceItemApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VouchDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\VouchDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VouchValidationsApi::class => \Vouchsafe\OpenAPI\Normalizer\VouchValidationsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RefereeEvidenceItemApi::class => \Vouchsafe\OpenAPI\Normalizer\RefereeEvidenceItemApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApi::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdExtractedDetailsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdExtractedDetailsApiAddress::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdExtractedDetailsApiAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DigitalIdValidationsApi::class => \Vouchsafe\OpenAPI\Normalizer\DigitalIdValidationsApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepIdentityDigitalIdApi::class => \Vouchsafe\OpenAPI\Normalizer\StepIdentityDigitalIdApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepIdentityPhotoIdApi::class => \Vouchsafe\OpenAPI\Normalizer\StepIdentityPhotoIdApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepIdentityVouchApi::class => \Vouchsafe\OpenAPI\Normalizer\StepIdentityVouchApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressDigitalIdApi::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressDigitalIdApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressDigitalIdApiExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressDigitalIdApiExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressDigitalIdApiExtractedDetailsAddress::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressDigitalIdApiExtractedDetailsAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressCreditReferenceAgencyApi::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressCreditReferenceAgencyApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressCreditReferenceAgencyApiExtractedDetails::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressCreditReferenceAgencyApiExtractedDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressCreditReferenceAgencyApiExtractedDetailsAddress::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressCreditReferenceAgencyApiExtractedDetailsAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\StepAddressSupportingDocumentApi::class => \Vouchsafe\OpenAPI\Normalizer\StepAddressSupportingDocumentApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlMatchApi::class => \Vouchsafe\OpenAPI\Normalizer\AmlMatchApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlMatchApiProperties::class => \Vouchsafe\OpenAPI\Normalizer\AmlMatchApiPropertiesNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\AmlCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlCheckApiDetails::class => \Vouchsafe\OpenAPI\Normalizer\AmlCheckApiDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OfaCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\OfaCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OfaCheckApiDetails::class => \Vouchsafe\OpenAPI\Normalizer\OfaCheckApiDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OfaCheckApiDetailsSignals::class => \Vouchsafe\OpenAPI\Normalizer\OfaCheckApiDetailsSignalsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RadarCheckApi::class => \Vouchsafe\OpenAPI\Normalizer\RadarCheckApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RadarCheckApiDetails::class => \Vouchsafe\OpenAPI\Normalizer\RadarCheckApiDetailsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidations::class => \Vouchsafe\OpenAPI\Normalizer\RadarCheckApiDetailsValidationsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RadarCheckApiDetailsValidationsNoKnownFraudsterMatch::class => \Vouchsafe\OpenAPI\Normalizer\RadarCheckApiDetailsValidationsNoKnownFraudsterMatchNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetVerificationResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetVerificationResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamResponse::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamResponseCredentials::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamResponseCredentialsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreateTeamInput::class => \Vouchsafe\OpenAPI\Normalizer\CreateTeamInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Team::class => \Vouchsafe\OpenAPI\Normalizer\TeamNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PublicAddress::class => \Vouchsafe\OpenAPI\Normalizer\PublicAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CheckResult::class => \Vouchsafe\OpenAPI\Normalizer\CheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordCreditBureauVerificationChecksCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\RecordCreditBureauVerificationChecksCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CreditBureauVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\CreditBureauVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OnlineFootprintChecksAnyOf::class => \Vouchsafe\OpenAPI\Normalizer\OnlineFootprintChecksAnyOfNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\OnlineFootprintVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\OnlineFootprintVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordAmlVerificationChecksCheckResult::class => \Vouchsafe\OpenAPI\Normalizer\RecordAmlVerificationChecksCheckResultNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AmlVerificationReport::class => \Vouchsafe\OpenAPI\Normalizer\AmlVerificationReportNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\RecordStringUnknown::class => \Vouchsafe\OpenAPI\Normalizer\RecordStringUnknownNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupMetadataApi::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupMetadataApiNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupMetadataApiThresholds::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupMetadataApiThresholdsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetSmartLookupResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetSmartLookupResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetSmartLookupResponseAddress::class => \Vouchsafe\OpenAPI\Normalizer\GetSmartLookupResponseAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AddressInput::class => \Vouchsafe\OpenAPI\Normalizer\AddressInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupInput::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\SmartLookupInputThresholds::class => \Vouchsafe\OpenAPI\Normalizer\SmartLookupInputThresholdsNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PostcodeFormattedAddress::class => \Vouchsafe\OpenAPI\Normalizer\PostcodeFormattedAddressNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\PostcodeResponse::class => \Vouchsafe\OpenAPI\Normalizer\PostcodeResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\Flow::class => \Vouchsafe\OpenAPI\Normalizer\FlowNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\CoverageItem::class => \Vouchsafe\OpenAPI\Normalizer\CoverageItemNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AuthenticateResponse::class => \Vouchsafe\OpenAPI\Normalizer\AuthenticateResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AuthenticateInput::class => \Vouchsafe\OpenAPI\Normalizer\AuthenticateInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\GetArtefactsResponse::class => \Vouchsafe\OpenAPI\Normalizer\GetArtefactsResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AlertAccountResponse::class => \Vouchsafe\OpenAPI\Normalizer\AlertAccountResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ListAlertAccountsResponse::class => \Vouchsafe\OpenAPI\Normalizer\ListAlertAccountsResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\DatasetReference::class => \Vouchsafe\OpenAPI\Normalizer\DatasetReferenceNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AlertMatchResponse::class => \Vouchsafe\OpenAPI\Normalizer\AlertMatchResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AlertResponse::class => \Vouchsafe\OpenAPI\Normalizer\AlertResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AlertAccountDetailResponse::class => \Vouchsafe\OpenAPI\Normalizer\AlertAccountDetailResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ToggleAlertsResponse::class => \Vouchsafe\OpenAPI\Normalizer\ToggleAlertsResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\ToggleAlertsInput::class => \Vouchsafe\OpenAPI\Normalizer\ToggleAlertsInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AdverseMediaArticle::class => \Vouchsafe\OpenAPI\Normalizer\AdverseMediaArticleNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AdverseMediaResponse::class => \Vouchsafe\OpenAPI\Normalizer\AdverseMediaResponseNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\AdverseMediaInput::class => \Vouchsafe\OpenAPI\Normalizer\AdverseMediaInputNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody::class => \Vouchsafe\OpenAPI\Normalizer\VerifySupportingDocumentsPostBodyNormalizer::class,
        
        \Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody::class => \Vouchsafe\OpenAPI\Normalizer\VerifyPhotoIdPostBodyNormalizer::class,
        
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
        return array_combine(array_keys($this->normalizers), array_fill(0, count($this->normalizers), false));
    }
}