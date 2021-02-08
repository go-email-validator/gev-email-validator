# CheckIfEmailExistResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Input** | Pointer to **string** |  | [optional] 
**IsReachable** | Pointer to **string** |  | [optional] 
**Misc** | Pointer to [**CheckIfEmailExistMisc**](CheckIfEmailExistMisc.md) |  | [optional] 
**Mx** | Pointer to [**CheckIfEmailExistMX**](CheckIfEmailExistMX.md) |  | [optional] 
**Smtp** | Pointer to [**CheckIfEmailExistSMTP**](CheckIfEmailExistSMTP.md) |  | [optional] 
**Syntax** | Pointer to [**CheckIfEmailExistSyntax**](CheckIfEmailExistSyntax.md) |  | [optional] 
**Error** | Pointer to **string** |  | [optional] 

## Methods

### NewCheckIfEmailExistResult

`func NewCheckIfEmailExistResult() *CheckIfEmailExistResult`

NewCheckIfEmailExistResult instantiates a new CheckIfEmailExistResult object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewCheckIfEmailExistResultWithDefaults

`func NewCheckIfEmailExistResultWithDefaults() *CheckIfEmailExistResult`

NewCheckIfEmailExistResultWithDefaults instantiates a new CheckIfEmailExistResult object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetInput

`func (o *CheckIfEmailExistResult) GetInput() string`

GetInput returns the Input field if non-nil, zero value otherwise.

### GetInputOk

`func (o *CheckIfEmailExistResult) GetInputOk() (*string, bool)`

GetInputOk returns a tuple with the Input field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetInput

`func (o *CheckIfEmailExistResult) SetInput(v string)`

SetInput sets Input field to given value.

### HasInput

`func (o *CheckIfEmailExistResult) HasInput() bool`

HasInput returns a boolean if a field has been set.

### GetIsReachable

`func (o *CheckIfEmailExistResult) GetIsReachable() string`

GetIsReachable returns the IsReachable field if non-nil, zero value otherwise.

### GetIsReachableOk

`func (o *CheckIfEmailExistResult) GetIsReachableOk() (*string, bool)`

GetIsReachableOk returns a tuple with the IsReachable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsReachable

`func (o *CheckIfEmailExistResult) SetIsReachable(v string)`

SetIsReachable sets IsReachable field to given value.

### HasIsReachable

`func (o *CheckIfEmailExistResult) HasIsReachable() bool`

HasIsReachable returns a boolean if a field has been set.

### GetMisc

`func (o *CheckIfEmailExistResult) GetMisc() CheckIfEmailExistMisc`

GetMisc returns the Misc field if non-nil, zero value otherwise.

### GetMiscOk

`func (o *CheckIfEmailExistResult) GetMiscOk() (*CheckIfEmailExistMisc, bool)`

GetMiscOk returns a tuple with the Misc field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMisc

`func (o *CheckIfEmailExistResult) SetMisc(v CheckIfEmailExistMisc)`

SetMisc sets Misc field to given value.

### HasMisc

`func (o *CheckIfEmailExistResult) HasMisc() bool`

HasMisc returns a boolean if a field has been set.

### GetMx

`func (o *CheckIfEmailExistResult) GetMx() CheckIfEmailExistMX`

GetMx returns the Mx field if non-nil, zero value otherwise.

### GetMxOk

`func (o *CheckIfEmailExistResult) GetMxOk() (*CheckIfEmailExistMX, bool)`

GetMxOk returns a tuple with the Mx field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMx

`func (o *CheckIfEmailExistResult) SetMx(v CheckIfEmailExistMX)`

SetMx sets Mx field to given value.

### HasMx

`func (o *CheckIfEmailExistResult) HasMx() bool`

HasMx returns a boolean if a field has been set.

### GetSmtp

`func (o *CheckIfEmailExistResult) GetSmtp() CheckIfEmailExistSMTP`

GetSmtp returns the Smtp field if non-nil, zero value otherwise.

### GetSmtpOk

`func (o *CheckIfEmailExistResult) GetSmtpOk() (*CheckIfEmailExistSMTP, bool)`

GetSmtpOk returns a tuple with the Smtp field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSmtp

`func (o *CheckIfEmailExistResult) SetSmtp(v CheckIfEmailExistSMTP)`

SetSmtp sets Smtp field to given value.

### HasSmtp

`func (o *CheckIfEmailExistResult) HasSmtp() bool`

HasSmtp returns a boolean if a field has been set.

### GetSyntax

`func (o *CheckIfEmailExistResult) GetSyntax() CheckIfEmailExistSyntax`

GetSyntax returns the Syntax field if non-nil, zero value otherwise.

### GetSyntaxOk

`func (o *CheckIfEmailExistResult) GetSyntaxOk() (*CheckIfEmailExistSyntax, bool)`

GetSyntaxOk returns a tuple with the Syntax field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSyntax

`func (o *CheckIfEmailExistResult) SetSyntax(v CheckIfEmailExistSyntax)`

SetSyntax sets Syntax field to given value.

### HasSyntax

`func (o *CheckIfEmailExistResult) HasSyntax() bool`

HasSyntax returns a boolean if a field has been set.

### GetError

`func (o *CheckIfEmailExistResult) GetError() string`

GetError returns the Error field if non-nil, zero value otherwise.

### GetErrorOk

`func (o *CheckIfEmailExistResult) GetErrorOk() (*string, bool)`

GetErrorOk returns a tuple with the Error field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetError

`func (o *CheckIfEmailExistResult) SetError(v string)`

SetError sets Error field to given value.

### HasError

`func (o *CheckIfEmailExistResult) HasError() bool`

HasError returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


