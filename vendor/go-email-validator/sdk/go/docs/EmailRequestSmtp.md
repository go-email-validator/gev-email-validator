# EmailRequestSmtp

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**EmailFrom** | Pointer to **string** |  | [optional] [default to "user@example.org"]
**HelloName** | Pointer to **string** |  | [optional] [default to "localhost"]
**Proxy** | Pointer to **string** | Versions - SOCKS4, SOCKS4A and SOCKS5. Format -  schema://username:password@host:port.  | [optional] 
**TimeoutConnection** | Pointer to **float32** | timeout creating smtp connection | [optional] [default to 5.0]
**TimeoutResponse** | Pointer to **float32** | timeout of communication with smtp server | [optional] 
**Port** | Pointer to **int32** | smtp port remote server | [optional] [default to 25]

## Methods

### NewEmailRequestSmtp

`func NewEmailRequestSmtp() *EmailRequestSmtp`

NewEmailRequestSmtp instantiates a new EmailRequestSmtp object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewEmailRequestSmtpWithDefaults

`func NewEmailRequestSmtpWithDefaults() *EmailRequestSmtp`

NewEmailRequestSmtpWithDefaults instantiates a new EmailRequestSmtp object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetEmailFrom

`func (o *EmailRequestSmtp) GetEmailFrom() string`

GetEmailFrom returns the EmailFrom field if non-nil, zero value otherwise.

### GetEmailFromOk

`func (o *EmailRequestSmtp) GetEmailFromOk() (*string, bool)`

GetEmailFromOk returns a tuple with the EmailFrom field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetEmailFrom

`func (o *EmailRequestSmtp) SetEmailFrom(v string)`

SetEmailFrom sets EmailFrom field to given value.

### HasEmailFrom

`func (o *EmailRequestSmtp) HasEmailFrom() bool`

HasEmailFrom returns a boolean if a field has been set.

### GetHelloName

`func (o *EmailRequestSmtp) GetHelloName() string`

GetHelloName returns the HelloName field if non-nil, zero value otherwise.

### GetHelloNameOk

`func (o *EmailRequestSmtp) GetHelloNameOk() (*string, bool)`

GetHelloNameOk returns a tuple with the HelloName field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetHelloName

`func (o *EmailRequestSmtp) SetHelloName(v string)`

SetHelloName sets HelloName field to given value.

### HasHelloName

`func (o *EmailRequestSmtp) HasHelloName() bool`

HasHelloName returns a boolean if a field has been set.

### GetProxy

`func (o *EmailRequestSmtp) GetProxy() string`

GetProxy returns the Proxy field if non-nil, zero value otherwise.

### GetProxyOk

`func (o *EmailRequestSmtp) GetProxyOk() (*string, bool)`

GetProxyOk returns a tuple with the Proxy field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetProxy

`func (o *EmailRequestSmtp) SetProxy(v string)`

SetProxy sets Proxy field to given value.

### HasProxy

`func (o *EmailRequestSmtp) HasProxy() bool`

HasProxy returns a boolean if a field has been set.

### GetTimeoutConnection

`func (o *EmailRequestSmtp) GetTimeoutConnection() float32`

GetTimeoutConnection returns the TimeoutConnection field if non-nil, zero value otherwise.

### GetTimeoutConnectionOk

`func (o *EmailRequestSmtp) GetTimeoutConnectionOk() (*float32, bool)`

GetTimeoutConnectionOk returns a tuple with the TimeoutConnection field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetTimeoutConnection

`func (o *EmailRequestSmtp) SetTimeoutConnection(v float32)`

SetTimeoutConnection sets TimeoutConnection field to given value.

### HasTimeoutConnection

`func (o *EmailRequestSmtp) HasTimeoutConnection() bool`

HasTimeoutConnection returns a boolean if a field has been set.

### GetTimeoutResponse

`func (o *EmailRequestSmtp) GetTimeoutResponse() float32`

GetTimeoutResponse returns the TimeoutResponse field if non-nil, zero value otherwise.

### GetTimeoutResponseOk

`func (o *EmailRequestSmtp) GetTimeoutResponseOk() (*float32, bool)`

GetTimeoutResponseOk returns a tuple with the TimeoutResponse field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetTimeoutResponse

`func (o *EmailRequestSmtp) SetTimeoutResponse(v float32)`

SetTimeoutResponse sets TimeoutResponse field to given value.

### HasTimeoutResponse

`func (o *EmailRequestSmtp) HasTimeoutResponse() bool`

HasTimeoutResponse returns a boolean if a field has been set.

### GetPort

`func (o *EmailRequestSmtp) GetPort() int32`

GetPort returns the Port field if non-nil, zero value otherwise.

### GetPortOk

`func (o *EmailRequestSmtp) GetPortOk() (*int32, bool)`

GetPortOk returns a tuple with the Port field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetPort

`func (o *EmailRequestSmtp) SetPort(v int32)`

SetPort sets Port field to given value.

### HasPort

`func (o *EmailRequestSmtp) HasPort() bool`

HasPort returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


