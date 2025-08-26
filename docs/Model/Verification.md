# # Verification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique ID for tracking a verification session over time |
**status** | [**\Vouchsafe\Model\Status**](Status.md) |  |
**created_at** | **string** | When it was originally requested or begun |
**expires_at** | **string** | When the user will stop getting reminders |
**email** | **string** | The originally supplied email address |
**redirect_url** | **string** | Where to send the user upon success. If null, the verification flow default will be used. |
**workflow_id** | **string** | The verification flow it belongs to |
**external_id** | **string** | An identifier from your own systems, to avoid needing to store Vouchsafe&#39;s own ID. Provided at request time. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
