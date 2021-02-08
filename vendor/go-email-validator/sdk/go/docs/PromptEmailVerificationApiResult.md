# PromptEmailVerificationApiResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**CanConnectSmtp** | Pointer to **bool** |  | [optional] 
**Email** | Pointer to **string** |  | [optional] 
**IsCatchAll** | Pointer to **bool** |  | [optional] 
**IsDeliverable** | Pointer to **bool** |  | [optional] 
**IsDisabled** | Pointer to **bool** |  | [optional] 
**IsDisposable** | Pointer to **bool** |  | [optional] 
**IsInboxFull** | Pointer to **bool** |  | [optional] 
**IsRoleAccount** | Pointer to **bool** |  | [optional] 
**MxRecords** | Pointer to [**PromptEmailVerificationApiMX**](PromptEmailVerificationApiMX.md) |  | [optional] 
**SyntaxValid** | Pointer to **bool** |  | [optional] 
**Message** | Pointer to **string** |  | [optional] 

## Methods

### NewPromptEmailVerificationApiResult

`func NewPromptEmailVerificationApiResult() *PromptEmailVerificationApiResult`

NewPromptEmailVerificationApiResult instantiates a new PromptEmailVerificationApiResult object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewPromptEmailVerificationApiResultWithDefaults

`func NewPromptEmailVerificationApiResultWithDefaults() *PromptEmailVerificationApiResult`

NewPromptEmailVerificationApiResultWithDefaults instantiates a new PromptEmailVerificationApiResult object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetCanConnectSmtp

`func (o *PromptEmailVerificationApiResult) GetCanConnectSmtp() bool`

GetCanConnectSmtp returns the CanConnectSmtp field if non-nil, zero value otherwise.

### GetCanConnectSmtpOk

`func (o *PromptEmailVerificationApiResult) GetCanConnectSmtpOk() (*bool, bool)`

GetCanConnectSmtpOk returns a tuple with the CanConnectSmtp field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCanConnectSmtp

`func (o *PromptEmailVerificationApiResult) SetCanConnectSmtp(v bool)`

SetCanConnectSmtp sets CanConnectSmtp field to given value.

### HasCanConnectSmtp

`func (o *PromptEmailVerificationApiResult) HasCanConnectSmtp() bool`

HasCanConnectSmtp returns a boolean if a field has been set.

### GetEmail

`func (o *PromptEmailVerificationApiResult) GetEmail() string`

GetEmail returns the Email field if non-nil, zero value otherwise.

### GetEmailOk

`func (o *PromptEmailVerificationApiResult) GetEmailOk() (*string, bool)`

GetEmailOk returns a tuple with the Email field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetEmail

`func (o *PromptEmailVerificationApiResult) SetEmail(v string)`

SetEmail sets Email field to given value.

### HasEmail

`func (o *PromptEmailVerificationApiResult) HasEmail() bool`

HasEmail returns a boolean if a field has been set.

### GetIsCatchAll

`func (o *PromptEmailVerificationApiResult) GetIsCatchAll() bool`

GetIsCatchAll returns the IsCatchAll field if non-nil, zero value otherwise.

### GetIsCatchAllOk

`func (o *PromptEmailVerificationApiResult) GetIsCatchAllOk() (*bool, bool)`

GetIsCatchAllOk returns a tuple with the IsCatchAll field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsCatchAll

`func (o *PromptEmailVerificationApiResult) SetIsCatchAll(v bool)`

SetIsCatchAll sets IsCatchAll field to given value.

### HasIsCatchAll

`func (o *PromptEmailVerificationApiResult) HasIsCatchAll() bool`

HasIsCatchAll returns a boolean if a field has been set.

### GetIsDeliverable

`func (o *PromptEmailVerificationApiResult) GetIsDeliverable() bool`

GetIsDeliverable returns the IsDeliverable field if non-nil, zero value otherwise.

### GetIsDeliverableOk

`func (o *PromptEmailVerificationApiResult) GetIsDeliverableOk() (*bool, bool)`

GetIsDeliverableOk returns a tuple with the IsDeliverable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsDeliverable

`func (o *PromptEmailVerificationApiResult) SetIsDeliverable(v bool)`

SetIsDeliverable sets IsDeliverable field to given value.

### HasIsDeliverable

`func (o *PromptEmailVerificationApiResult) HasIsDeliverable() bool`

HasIsDeliverable returns a boolean if a field has been set.

### GetIsDisabled

`func (o *PromptEmailVerificationApiResult) GetIsDisabled() bool`

GetIsDisabled returns the IsDisabled field if non-nil, zero value otherwise.

### GetIsDisabledOk

`func (o *PromptEmailVerificationApiResult) GetIsDisabledOk() (*bool, bool)`

GetIsDisabledOk returns a tuple with the IsDisabled field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsDisabled

`func (o *PromptEmailVerificationApiResult) SetIsDisabled(v bool)`

SetIsDisabled sets IsDisabled field to given value.

### HasIsDisabled

`func (o *PromptEmailVerificationApiResult) HasIsDisabled() bool`

HasIsDisabled returns a boolean if a field has been set.

### GetIsDisposable

`func (o *PromptEmailVerificationApiResult) GetIsDisposable() bool`

GetIsDisposable returns the IsDisposable field if non-nil, zero value otherwise.

### GetIsDisposableOk

`func (o *PromptEmailVerificationApiResult) GetIsDisposableOk() (*bool, bool)`

GetIsDisposableOk returns a tuple with the IsDisposable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsDisposable

`func (o *PromptEmailVerificationApiResult) SetIsDisposable(v bool)`

SetIsDisposable sets IsDisposable field to given value.

### HasIsDisposable

`func (o *PromptEmailVerificationApiResult) HasIsDisposable() bool`

HasIsDisposable returns a boolean if a field has been set.

### GetIsInboxFull

`func (o *PromptEmailVerificationApiResult) GetIsInboxFull() bool`

GetIsInboxFull returns the IsInboxFull field if non-nil, zero value otherwise.

### GetIsInboxFullOk

`func (o *PromptEmailVerificationApiResult) GetIsInboxFullOk() (*bool, bool)`

GetIsInboxFullOk returns a tuple with the IsInboxFull field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsInboxFull

`func (o *PromptEmailVerificationApiResult) SetIsInboxFull(v bool)`

SetIsInboxFull sets IsInboxFull field to given value.

### HasIsInboxFull

`func (o *PromptEmailVerificationApiResult) HasIsInboxFull() bool`

HasIsInboxFull returns a boolean if a field has been set.

### GetIsRoleAccount

`func (o *PromptEmailVerificationApiResult) GetIsRoleAccount() bool`

GetIsRoleAccount returns the IsRoleAccount field if non-nil, zero value otherwise.

### GetIsRoleAccountOk

`func (o *PromptEmailVerificationApiResult) GetIsRoleAccountOk() (*bool, bool)`

GetIsRoleAccountOk returns a tuple with the IsRoleAccount field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsRoleAccount

`func (o *PromptEmailVerificationApiResult) SetIsRoleAccount(v bool)`

SetIsRoleAccount sets IsRoleAccount field to given value.

### HasIsRoleAccount

`func (o *PromptEmailVerificationApiResult) HasIsRoleAccount() bool`

HasIsRoleAccount returns a boolean if a field has been set.

### GetMxRecords

`func (o *PromptEmailVerificationApiResult) GetMxRecords() PromptEmailVerificationApiMX`

GetMxRecords returns the MxRecords field if non-nil, zero value otherwise.

### GetMxRecordsOk

`func (o *PromptEmailVerificationApiResult) GetMxRecordsOk() (*PromptEmailVerificationApiMX, bool)`

GetMxRecordsOk returns a tuple with the MxRecords field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMxRecords

`func (o *PromptEmailVerificationApiResult) SetMxRecords(v PromptEmailVerificationApiMX)`

SetMxRecords sets MxRecords field to given value.

### HasMxRecords

`func (o *PromptEmailVerificationApiResult) HasMxRecords() bool`

HasMxRecords returns a boolean if a field has been set.

### GetSyntaxValid

`func (o *PromptEmailVerificationApiResult) GetSyntaxValid() bool`

GetSyntaxValid returns the SyntaxValid field if non-nil, zero value otherwise.

### GetSyntaxValidOk

`func (o *PromptEmailVerificationApiResult) GetSyntaxValidOk() (*bool, bool)`

GetSyntaxValidOk returns a tuple with the SyntaxValid field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSyntaxValid

`func (o *PromptEmailVerificationApiResult) SetSyntaxValid(v bool)`

SetSyntaxValid sets SyntaxValid field to given value.

### HasSyntaxValid

`func (o *PromptEmailVerificationApiResult) HasSyntaxValid() bool`

HasSyntaxValid returns a boolean if a field has been set.

### GetMessage

`func (o *PromptEmailVerificationApiResult) GetMessage() string`

GetMessage returns the Message field if non-nil, zero value otherwise.

### GetMessageOk

`func (o *PromptEmailVerificationApiResult) GetMessageOk() (*string, bool)`

GetMessageOk returns a tuple with the Message field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMessage

`func (o *PromptEmailVerificationApiResult) SetMessage(v string)`

SetMessage sets Message field to given value.

### HasMessage

`func (o *PromptEmailVerificationApiResult) HasMessage() bool`

HasMessage returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


