# EmailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**CheckIfEmailExist** | Pointer to [**CheckIfEmailExistResult**](CheckIfEmailExistResult.md) |  | [optional] 
**Mailboxvalidator** | Pointer to [**MailboxvalidatorResult**](MailboxvalidatorResult.md) |  | [optional] 
**PromptEmailVerificationApi** | Pointer to [**PromptEmailVerificationApiResult**](PromptEmailVerificationApiResult.md) |  | [optional] 

## Methods

### NewEmailResponse

`func NewEmailResponse() *EmailResponse`

NewEmailResponse instantiates a new EmailResponse object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewEmailResponseWithDefaults

`func NewEmailResponseWithDefaults() *EmailResponse`

NewEmailResponseWithDefaults instantiates a new EmailResponse object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetCheckIfEmailExist

`func (o *EmailResponse) GetCheckIfEmailExist() CheckIfEmailExistResult`

GetCheckIfEmailExist returns the CheckIfEmailExist field if non-nil, zero value otherwise.

### GetCheckIfEmailExistOk

`func (o *EmailResponse) GetCheckIfEmailExistOk() (*CheckIfEmailExistResult, bool)`

GetCheckIfEmailExistOk returns a tuple with the CheckIfEmailExist field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCheckIfEmailExist

`func (o *EmailResponse) SetCheckIfEmailExist(v CheckIfEmailExistResult)`

SetCheckIfEmailExist sets CheckIfEmailExist field to given value.

### HasCheckIfEmailExist

`func (o *EmailResponse) HasCheckIfEmailExist() bool`

HasCheckIfEmailExist returns a boolean if a field has been set.

### GetMailboxvalidator

`func (o *EmailResponse) GetMailboxvalidator() MailboxvalidatorResult`

GetMailboxvalidator returns the Mailboxvalidator field if non-nil, zero value otherwise.

### GetMailboxvalidatorOk

`func (o *EmailResponse) GetMailboxvalidatorOk() (*MailboxvalidatorResult, bool)`

GetMailboxvalidatorOk returns a tuple with the Mailboxvalidator field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMailboxvalidator

`func (o *EmailResponse) SetMailboxvalidator(v MailboxvalidatorResult)`

SetMailboxvalidator sets Mailboxvalidator field to given value.

### HasMailboxvalidator

`func (o *EmailResponse) HasMailboxvalidator() bool`

HasMailboxvalidator returns a boolean if a field has been set.

### GetPromptEmailVerificationApi

`func (o *EmailResponse) GetPromptEmailVerificationApi() PromptEmailVerificationApiResult`

GetPromptEmailVerificationApi returns the PromptEmailVerificationApi field if non-nil, zero value otherwise.

### GetPromptEmailVerificationApiOk

`func (o *EmailResponse) GetPromptEmailVerificationApiOk() (*PromptEmailVerificationApiResult, bool)`

GetPromptEmailVerificationApiOk returns a tuple with the PromptEmailVerificationApi field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetPromptEmailVerificationApi

`func (o *EmailResponse) SetPromptEmailVerificationApi(v PromptEmailVerificationApiResult)`

SetPromptEmailVerificationApi sets PromptEmailVerificationApi field to given value.

### HasPromptEmailVerificationApi

`func (o *EmailResponse) HasPromptEmailVerificationApi() bool`

HasPromptEmailVerificationApi returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


