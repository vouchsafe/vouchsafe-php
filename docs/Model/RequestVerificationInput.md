# # RequestVerificationInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The user&#39;s email address |
**first_name** | **string** | The user&#39;s first name, if you have it | [optional]
**last_name** | **string** | The user&#39;s last name, if you have it | [optional]
**street_address** | **string** | The user&#39;s street address, if you have it | [optional]
**postcode** | **string** | The user&#39;s postcode, if you have it | [optional]
**date_of_birth** | **string** | The user&#39;s date of birth, if you have it | [optional]
**workflow_id** | **string** | Which verification flow to use.  Get the flow ID from the URL of the builder page.  For example: &#x60;/admin/teams/abc123/builder/[workflow_id]&#x60;  If not provided, the last published flow is used instead. | [optional]
**external_id** | **string** | An identifier from your own systems, to avoid needing to store Vouchsafe&#39;s own ID | [optional]
**redirect_url** | **string** | A generic or unique URL to send the user back to upon success.  If not provided, the verification flow default will be used. | [optional]
**expires_at** | **string** | When will the verification session expire and the user cease getting reminders?  If not provided, the verification flow default will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
