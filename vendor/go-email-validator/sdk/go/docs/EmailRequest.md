# EmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Email** | Pointer to **string** |  | [optional] 
**Smtp** | Pointer to [**EmailRequestSmtp**](EmailRequest_smtp.md) |  | [optional] 
**ResultType** | Pointer to [**ResultType**](ResultType.md) |  | [optional] [default to "CHECK_IF_EMAIL_EXIST"]

## Methods

### NewEmailRequest

`func NewEmailRequest() *EmailRequest`

NewEmailRequest instantiates a new EmailRequest object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewEmailRequestWithDefaults

`func NewEmailRequestWithDefaults() *EmailRequest`

NewEmailRequestWithDefaults instantiates a new EmailRequest object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetEmail

`func (o *EmailRequest) GetEmail() string`

GetEmail returns the Email field if non-nil, zero value otherwise.

### GetEmailOk

`func (o *EmailRequest) GetEmailOk() (*string, bool)`

GetEmailOk returns a tuple with the Email field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetEmail

`func (o *EmailRequest) SetEmail(v string)`

SetEmail sets Email field to given value.

### HasEmail

`func (o *EmailRequest) HasEmail() bool`

HasEmail returns a boolean if a field has been set.

### GetSmtp

`func (o *EmailRequest) GetSmtp() EmailRequestSmtp`

GetSmtp returns the Smtp field if non-nil, zero value otherwise.

### GetSmtpOk

`func (o *EmailRequest) GetSmtpOk() (*EmailRequestSmtp, bool)`

GetSmtpOk returns a tuple with the Smtp field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetSmtp

`func (o *EmailRequest) SetSmtp(v EmailRequestSmtp)`

SetSmtp sets Smtp field to given value.

### HasSmtp

`func (o *EmailRequest) HasSmtp() bool`

HasSmtp returns a boolean if a field has been set.

### GetResultType

`func (o *EmailRequest) GetResultType() ResultType`

GetResultType returns the ResultType field if non-nil, zero value otherwise.

### GetResultTypeOk

`func (o *EmailRequest) GetResultTypeOk() (*ResultType, bool)`

GetResultTypeOk returns a tuple with the ResultType field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetResultType

`func (o *EmailRequest) SetResultType(v ResultType)`

SetResultType sets ResultType field to given value.

### HasResultType

`func (o *EmailRequest) HasResultType() bool`

HasResultType returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


