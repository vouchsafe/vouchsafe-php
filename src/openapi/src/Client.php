<?php

namespace Vouchsafe\OpenAPI;

class Client extends \Vouchsafe\OpenAPI\Runtime\Client\Client
{
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Extract and validate a supporting document.
     *
     * This endpoint accepts a document file (PDF, JPG, or PNG) and extracts personal identity information and address details.
     *
     * **Request format:** This endpoint accepts `multipart/form-data` with:
     * - `document` - The document file (PDF, JPG, or PNG, max 10MB)
     * - `sub_type` (required) - The type of document (e.g., `BankStatement`, `UtilityBill`). See "Supported document types" below.
     * - `minimum_document_length` (optional) - Minimum document age in months. Documents older than this will fail the `document_age_valid` check.
     *
     * **Supported document types (`sub_type`):**
     * - `Payslip` - Employment payslips
     * - `PensionAnnualStatement` - Pension statements
     * - `BenefitsLetter` - Government benefits letters
     * - `HMPPSLetter` - Probation service letters
     * - `NHSLetter` - NHS correspondence
     * - `BankStatement` - Bank account statements
     * - `CreditCardStatement` - Credit card statements
     * - `MortgageStatement` - Mortgage statements
     * - `UtilityBill` - Gas, electricity, water bills
     * - `MobilePhoneBill` - Mobile phone bills
     *
     * **Validations performed:**
     * - `required_fields_extracted` - Key identity fields were successfully extracted. These are: `first_name`, `last_name`, `first_line_of_address` and `postcode`
     * - `category_match` - Document matches the specified sub_type
     * - `document_age_valid` - Document is within acceptable age range (only if `minimum_document_length` provided)
     * - `document_complete_and_legible` - Document is complete and readable
     * - `tampering_signals_check` - No signs of document tampering detected
     *
     * Sandbox testing:
     * In sandbox mode, the endpoint returns a mock "pass" response with sandbox values. No actual document processing occurs.
     *
     * > **Request behaviour:** This is a synchronous endpoint. Processing typically takes 5-15 seconds
     * > depending on document complexity.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifySupportingDocumentServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\SupportingDocumentVerificationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function verifySupportingDocument(\Vouchsafe\OpenAPI\Model\VerifySupportingDocumentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\VerifySupportingDocument($requestBody), $fetch);
    }
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * This endpoint extracts details from a photo ID, validates the fields, and optionally matches the document photo to a face scan.
     *
     * You provide:
     * - `sub_type` (required) - must be one of:
     *    - `Passport`
     *    - `NationalId` (MRZ-enabled IDs only)
     *    - `DrivingLicence` (GB and EU countries)
     *    - `PASSCard` (including Citizencard and Young Scot)
     *    - `UnfamiliarPhotoId`
     * - `front` (required) - the front of the photo ID document.
     * - `back` (`NationalId` only) - the back of the photo ID document.
     * - `country_code` (`DrivingLicence` only) - the issuing country as an ISO 3166-1 alpha-2 (e.g. `GB`, `DE`, `FR`).
     * - `face_scan` (optional) - a face image to compare with the photo on the document.
     *
     * > **File requirements:** Max 10MB per file; JPEG or PNG only.
     *
     * > **Sandbox testing:** In sandbox mode, the endpoint returns a mock “pass” response. It echoes back your reference values. It does not process the document.
     * @param \Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdNotImplementedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyPhotoIdServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\PhotoIdVerificationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function verifyPhotoId(\Vouchsafe\OpenAPI\Model\VerifyPhotoIdPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\VerifyPhotoId($requestBody), $fetch);
    }
    /**
     * Verify a person's UK eVisa using their Home Office share code.
     *
     * This endpoint allows you to verify a person's `immigration status`, `right to work`, or `right to rent` eVisa
     * by providing their share code and date of birth. The share code is obtained by
     * the individual from the UK Home Office online service.
     *
     * **Supported verification types:**
     * - `ImmigrationStatus` - Check a person's immigration status (e.g., Settled, Skilled Worker, Youth Mobility Scheme)
     * - `RightToWork` - Check a person's right to work in the UK
     * - `RightToRent` - Check a person's right to rent property in the UK
     *
     * > **Request behaviour:** This is a synchronous endpoint. It can take up to 20 seconds.
     *
     * **Response summary:**
     * | HTTP Status | Meaning | Action |
     * |-------------|---------|--------|
     * | `200` | Verification completed | Check the `outcome` field (`pass`, `fail`, or `inconclusive`) |
     * | `422` | Share code locked out by GOV.UK | Retry with a new share code |
     * | `503` | Service temporarily unavailable | Retry with exponential backoff |
     *
     * **Billing:**
     * An API call is billable when the eVisa was found on GOV.UK, regardless of whether the verification
     * outcome is `pass`, `fail`, or `inconclusive`. If the `share_code` or `date_of_birth` is invalid and no eVisa can be
     * retrieved, the response will have `billable: false` and you will not be charged.
     * Error responses (`HTTP 422`, `HTTP 503`) are also not billable and return an Error response body.
     *
     * **Artefacts:**
     * On a successful response, artefacts are returned inline with pre-signed download URLs.
     * You have **30 minutes** to download them before the URLs expire.
     *
     *
     * **Sandbox testing:**
     * Use these share codes in [sandbox mode](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work) to test different outcomes:
     * - `PASS12345` - Returns a successful verification with "Pass" outcome
     * - `FAIL12345` - Returns a failed verification (e.g. expired status)
     * - `INC123456` - Returns an inconclusive verification (unrecognised indefinite immigration status)
     * - `ERROR1234` - Returns an error response
     * - `BADCODE12` - Returns a non-billable failed verification (e.g. invalid share code)
     * - `WRONGDOB1` - Returns a non-billable failed verification (e.g. wrong date of birth)
     * **Response fields by outcome:**
     * - `pass`: all fields for the sub-type will be populated.
     * - `fail`: `extracted_details` may be partially populated or empty depending on which validation step failed.
     * - `inconclusive`: all identity fields are populated but date-based validations could not be performed.
     *
     * **Inconclusive outcome (`ImmigrationStatus` only):**
     * Some immigration statuses are indefinite (i.e. they have no expiry date or start date on GOV.UK) but are not yet on our recognised list. In this case the eVisa is successfully retrieved and all identity details are returned, but the date validations (`evisa_started`, `evisa_not_expired`) cannot be performed. The response will have:
     * - `outcome: "inconclusive"`
     * - `evisa_started` and `evisa_not_expired` both with `status: "inconclusive"` and `failed_reasons: ["UNRECOGNISED_INDEFINITE_STATUS"]`
     * - `expiration_date: null` and `valid_from: null` in `extracted_details`
     *
     * **eVisa conditions:**
     * > This feature is experimental and only available for `RightToWork` eVisas.
     * The `evisa_conditions` object (within the `extracted_details` object) contains certain employment conditions extracted
     * verbatim from the eVisa text or `null` if that condition could not be extracted from the eVisa.
     *
     * Always check `extraction_success` before using the object:
     * - **`true`**: conditions were successfully extracted — each non-null value is a verbatim quote from the eVisa
     * - **`false`**: extraction could not be performed — manually review the conditions on the eVisa
     *
     * **Available fields:**
     *
     * - `max_weekly_hours` (string | null): verbatim phrase stating a limit on weekly working hours, or `null` if uncapped.
     *   Covers both primary job caps (e.g. student term-time limit) and additional part-time caps (e.g. sponsored workers).
     *
     * - `no_self_employment` (string | null): verbatim phrase prohibiting running a business or being self-employed,
     *   or `null` if no such prohibition is stated.
     * @param mixed $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaUnprocessableEntityException
     * @throws \Vouchsafe\OpenAPI\Exception\VerifyEvisaServiceUnavailableException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function verifyEvisa($requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\VerifyEvisa($requestBody), $fetch);
    }
    /**
     * List all verifications for your team.
     *
     * This can be a long list, so filtering by status is recommended.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param array{
     *    "status"?: string, //Optional status filter.
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\ListVerificationsBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\ListVerificationsUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\Verification[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listVerifications(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\ListVerifications($queryParameters), $fetch);
    }
    /**
     * Request a new verification.
     *
     * Provide the user's email and the ID of one of your verification flows to send them through.
     *
     * Vouchsafe will respond with:
     *
     * - a URL to redirect to the user to
     * - a unique ID for you to track the verification
     *
     * If you have enabled "On request creation" emails in your flow, this also sends them an email.
     *
     * You can optionally provide more information/claims about the user, like their name, date of birth and address. Any that are provided will be checked against evidence the user gives.
     *
     * If you do provide additional information about your user, you should let them know the information you are expecting them to verify. This helps prevent users getting stuck when the evidence they have does not match what you have provided.
     *
     * #### Expiry
     *
     * Verifications expire after the window configured on your flow (default: **7 days** from creation). Once expired, the verification link stops working and the verification will show as **Expired** in your dashboard.
     *
     * You can override the expiry for a specific verification using the `expires_at` field. Provide an **ISO 8601 timestamp** (e.g. `2025-08-08T12:00:00Z`).
     *
     * **Recommendation:** If you use this field, make sure the window is long enough for the user to receive and complete the verification - we recommend **at least 1 day**. Otherwise, omit `expires_at` and the default flow expiry window will be used.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\RequestVerificationInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\RequestVerificationForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\RequestVerificationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function requestVerification(\Vouchsafe\OpenAPI\Model\RequestVerificationInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\RequestVerification($requestBody), $fetch);
    }
    /**
     * Get a single verification by ID.
     *
     * Returns the latest status, claim details and results for a verification you previously requested.
     *
     * Vouchsafe will respond with:
     *
     * - the verification status and timestamps
     * - the identity claim details (e.g. name, email, phone number)
     * - the list of checks performed (e.g. liveness, photo ID, email verification) including outcomes and validations
     * - results of any background checks (e.g. radar, online footprint analysis, aml sanctions)
     *
     * #### Downloading files (artefacts)
     *
     * Some checks may include an `artefacts` array (for example: face scan or document images).
     * For security reasons, the verification response only contains an `artefact key` — not the file itself.
     *
     * To download an artefact, use:
     *
     * - `GET /artefacts/{artefact_key}`
     *
     * This returns a **time-limited pre-signed URL** which can be used to download the file.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The verification ID returned when you requested it.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetVerificationNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\GetVerificationResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getVerification(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\GetVerification($id), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\GetTeamBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetTeamUnauthorizedException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getTeam(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\GetTeam(), $fetch);
    }
    /**
     * Create a new team (Partners only).
     *
     * Creates a new team with the specified configuration and admin users.
     *
     * Vouchsafe will respond with:
     *
     * - a unique team ID for tracking
     * - the team name and public-facing name
     * - client credentials to authenticate team API requests
     * - creation timestamp (ISO 8601 format)
     *
     * The provided admin emails will be granted administrative access to manage the team's settings and workflows.
     *
     * **Note:** This endpoint requires a valid partner token in the `X-Partner-Token` header.
     * @param \Vouchsafe\OpenAPI\Model\CreateTeamInput $requestBody
     * @param array{
     *    "X-Partner-Token": string,
     * } $headerParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\CreateTeamBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\CreateTeamUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\CreateTeamResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function createTeam(\Vouchsafe\OpenAPI\Model\CreateTeamInput $requestBody, array $headerParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\CreateTeam($requestBody, $headerParameters), $fetch);
    }
    /**
     * Run quick [background checks](https://help.vouchsafe.id/en/articles/11075009-how-background-checks-work) on a user's details.
     *
     * Provide the user's details and the check(s) to run and receive the report.
     *
     * First line of address should be taken from the results returned by the [`GET /postcode` endpoint](https://app.vouchsafe.id/docs/operations/SearchPostcode).
     *
     * The supported checks are:
     *   - `CreditBureau` checking credit reference agency data, plus public data like the electoral roll
     *   - `OnlineFootprint` checking against public traces of the user's online activity
     *   - `AML` checking international sanctions database, watchlists and other lists of high-risk people
     *
     * ### Caching and billing
     *
     * To make it easier to test and demo, if you run the same smart lookup query within four hours, your results will be cached and you will not be charged again.
     *
     * The `billable` field in the response body indicates whether tokens were charged for this call.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\SmartLookupInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\PerformSmartLookupBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\PerformSmartLookupUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\PerformSmartLookupForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\GetSmartLookupResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function performSmartLookup(\Vouchsafe\OpenAPI\Model\SmartLookupInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\PerformSmartLookup($requestBody), $fetch);
    }
    /**
    * Look up all addresses for a given UK postcode.
    *
    * Useful for guaranteeing that a user's address is recognised before onboarding.
    * @param array{
    *    "postcode": string, //UK postcode to search for.
    Example: `SW1A 2AA`
    Can be with or without space. Case insensitive.
    * } $queryParameters
    
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Vouchsafe\OpenAPI\Exception\SearchPostcodeBadRequestException
    * @throws \Vouchsafe\OpenAPI\Exception\SearchPostcodeUnauthorizedException
    * @throws \Vouchsafe\OpenAPI\Exception\SearchPostcodeForbiddenException
    *
    * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\PostcodeResponse : \Psr\Http\Message\ResponseInterface)
    */
    public function searchPostcode(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\SearchPostcode($queryParameters), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\ListFlowsBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\ListFlowsUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\Flow[] : \Psr\Http\Message\ResponseInterface)
     */
    public function listFlows(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\ListFlows(), $fetch);
    }
    /**
     *
     * Get a specific verification flow.
     *
     * Use an ID from one of these flows to request verifications with the  [`POST /verifications` endpoint](https://app.vouchsafe.id/docs/operations/RequestVerification).
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The ID of the flow to retrieve.
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\GetFlowBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetFlowUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetFlowNotFoundException
     *
     * @return ($fetch is 'object' ? null : \Psr\Http\Message\ResponseInterface)
     */
    public function getFlow(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\GetFlow($id), $fetch);
    }
    /**
     * Get the access token, needed for all other API requests.
     *
     * You will need your client ID and secret from the **API Integration** tab of the Vouchsafe dashboard.
     *
     * Each access token is valid for 24 hours, after which you will need to re-authenticate.
     *
     * Once you have an access token, pass it in future requests as a [Bearer token](https://workos.com/blog/understanding-bearer-tokens) in an `Authorization` header.
     *
     * Use an [SDK or library](https://help.vouchsafe.id/en/articles/12026847-vouchsafe-sdks-and-libraries) to simplify handling tokens
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param \Vouchsafe\OpenAPI\Model\AuthenticateInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\AuthenticateBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\AuthenticateUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\AuthenticateResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function authenticate(\Vouchsafe\OpenAPI\Model\AuthenticateInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\Authenticate($requestBody), $fetch);
    }
    /**
     * Get an artefact download link.
     *
     * For security reasons, other endpoints (e.g. `GET /verifications/{id}`) may return only an `artefact_key`.
     * Use this endpoint to exchange that key for a **time-limited pre-signed URL** that can be used
     * to download the file.
     *
     * Vouchsafe will respond with:
     * - the requested `artefact_key`
     * - a `download_url` (pre-signed and time-limited)
     * - an `expires_at` timestamp (ISO 8601, UTC)
     *
     * **Note:** The `download_url` will stop working after `expires_at`.
     * If it expires, request a new URL using this endpoint.
     * @param string $artefactKey
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetArtefactNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\GetArtefactsResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getArtefact(string $artefactKey, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\GetArtefact($artefactKey), $fetch);
    }
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * List monitored accounts.
     *
     * Returns accounts that have ongoing AML/sanctions monitoring enabled,
     * with summary info including current alert status.
     *
     * Use cursor-based pagination to iterate through results.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param array{
     *    "status"?: string, //Filter by alert status
     *    "cursor"?: string, //Cursor for pagination (ID of last item from previous page)
     * } $queryParameters
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\ListAccountsUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\ListAccountsForbiddenException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\ListAlertAccountsResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function listAccounts(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\ListAccounts($queryParameters), $fetch);
    }
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Get full account detail.
     *
     * Returns the account's personal details, all alerts, and matched entities.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The account ID (SmartLookup ID)
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\GetAccountDetailNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\AlertAccountDetailResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function getAccountDetail(string $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\GetAccountDetail($id), $fetch);
    }
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This feature is new and currently in beta.
     * </div>
     *
     * Toggle ongoing monitoring for an account.
     *
     * Enable or disable AML/sanctions screening for an existing account.
     *
     * > This endpoint supports sandbox mode. [See how sandbox mode works](https://help.vouchsafe.id/en/articles/11979598-how-does-sandbox-mode-work).
     * @param string $id The account ID (SmartLookup ID)
     * @param \Vouchsafe\OpenAPI\Model\ToggleAlertsInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\ToggleAlertsBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\ToggleAlertsUnauthorizedException
     * @throws \Vouchsafe\OpenAPI\Exception\ToggleAlertsForbiddenException
     * @throws \Vouchsafe\OpenAPI\Exception\ToggleAlertsNotFoundException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\ToggleAlertsResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function toggleAlerts(string $id, \Vouchsafe\OpenAPI\Model\ToggleAlertsInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\ToggleAlerts($id, $requestBody), $fetch);
    }
    /**
     * <div style="background-color: #ffebee; border-left: 4px solid #c62828; padding: 12px 16px; margin: 10px 0;">
     * <strong style="color: #c62828;">Experimental (beta):</strong> This is a new endpoint. The interface or behaviour may change without notice.
     * </div>
     *
     * Screen an individual against recent news coverage for adverse or negative reporting.
     *
     * Each article returned by the search is scored from 0–100 for the severity of its content by our AI screening model. Articles at or above the threshold are returned as `strong_matches` and cause the overall `status` to be `FAIL`.
     *
     * All articles found are also returned in `all_results` for audit purposes, including those that scored below the threshold.
     *
     * Providing a `location` is strongly recommended: it significantly improves search precision and reduces false positives for common names.
     * @param \Vouchsafe\OpenAPI\Model\AdverseMediaInput $requestBody
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckBadRequestException
     * @throws \Vouchsafe\OpenAPI\Exception\PerformAdverseMediaCheckUnauthorizedException
     *
     * @return ($fetch is 'object' ? null|\Vouchsafe\OpenAPI\Model\AdverseMediaResponse : \Psr\Http\Message\ResponseInterface)
     */
    public function performAdverseMediaCheck(\Vouchsafe\OpenAPI\Model\AdverseMediaInput $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vouchsafe\OpenAPI\Endpoint\PerformAdverseMediaCheck($requestBody), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://app.vouchsafe.id/api/v1');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Vouchsafe\OpenAPI\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}