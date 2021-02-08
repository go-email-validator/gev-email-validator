/*
 * Email Validator
 *
 * All timeouts are set in seconds with nanosecond precision. For example, 1.505402 is 1 second, 505 milliseconds and 402 microseconds. 
 *
 * API version: 0.0.1
 */

// Code generated by OpenAPI Generator (https://openapi-generator.tech); DO NOT EDIT.

package openapi

import (
	"encoding/json"
)

// EmailRequestSmtp struct for EmailRequestSmtp
type EmailRequestSmtp struct {
	EmailFrom *string `json:"email_from,omitempty"`
	HelloName *string `json:"hello_name,omitempty"`
	// Versions - SOCKS4, SOCKS4A and SOCKS5. Format -  schema://username:password@host:port. 
	Proxy *string `json:"proxy,omitempty"`
	// timeout creating smtp connection
	TimeoutConnection *float32 `json:"timeout_connection,omitempty"`
	// timeout of communication with smtp server
	TimeoutResponse *float32 `json:"timeout_response,omitempty"`
	// smtp port remote server
	Port *int32 `json:"port,omitempty"`
}

// NewEmailRequestSmtp instantiates a new EmailRequestSmtp object
// This constructor will assign default values to properties that have it defined,
// and makes sure properties required by API are set, but the set of arguments
// will change when the set of required properties is changed
func NewEmailRequestSmtp() *EmailRequestSmtp {
	this := EmailRequestSmtp{}
	var emailFrom string = "user@example.org"
	this.EmailFrom = &emailFrom
	var helloName string = "localhost"
	this.HelloName = &helloName
	var timeoutConnection float32 = 5.0
	this.TimeoutConnection = &timeoutConnection
	var port int32 = 25
	this.Port = &port
	return &this
}

// NewEmailRequestSmtpWithDefaults instantiates a new EmailRequestSmtp object
// This constructor will only assign default values to properties that have it defined,
// but it doesn't guarantee that properties required by API are set
func NewEmailRequestSmtpWithDefaults() *EmailRequestSmtp {
	this := EmailRequestSmtp{}
	var emailFrom string = "user@example.org"
	this.EmailFrom = &emailFrom
	var helloName string = "localhost"
	this.HelloName = &helloName
	var timeoutConnection float32 = 5.0
	this.TimeoutConnection = &timeoutConnection
	var port int32 = 25
	this.Port = &port
	return &this
}

// GetEmailFrom returns the EmailFrom field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetEmailFrom() string {
	if o == nil || o.EmailFrom == nil {
		var ret string
		return ret
	}
	return *o.EmailFrom
}

// GetEmailFromOk returns a tuple with the EmailFrom field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetEmailFromOk() (*string, bool) {
	if o == nil || o.EmailFrom == nil {
		return nil, false
	}
	return o.EmailFrom, true
}

// HasEmailFrom returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasEmailFrom() bool {
	if o != nil && o.EmailFrom != nil {
		return true
	}

	return false
}

// SetEmailFrom gets a reference to the given string and assigns it to the EmailFrom field.
func (o *EmailRequestSmtp) SetEmailFrom(v string) {
	o.EmailFrom = &v
}

// GetHelloName returns the HelloName field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetHelloName() string {
	if o == nil || o.HelloName == nil {
		var ret string
		return ret
	}
	return *o.HelloName
}

// GetHelloNameOk returns a tuple with the HelloName field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetHelloNameOk() (*string, bool) {
	if o == nil || o.HelloName == nil {
		return nil, false
	}
	return o.HelloName, true
}

// HasHelloName returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasHelloName() bool {
	if o != nil && o.HelloName != nil {
		return true
	}

	return false
}

// SetHelloName gets a reference to the given string and assigns it to the HelloName field.
func (o *EmailRequestSmtp) SetHelloName(v string) {
	o.HelloName = &v
}

// GetProxy returns the Proxy field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetProxy() string {
	if o == nil || o.Proxy == nil {
		var ret string
		return ret
	}
	return *o.Proxy
}

// GetProxyOk returns a tuple with the Proxy field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetProxyOk() (*string, bool) {
	if o == nil || o.Proxy == nil {
		return nil, false
	}
	return o.Proxy, true
}

// HasProxy returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasProxy() bool {
	if o != nil && o.Proxy != nil {
		return true
	}

	return false
}

// SetProxy gets a reference to the given string and assigns it to the Proxy field.
func (o *EmailRequestSmtp) SetProxy(v string) {
	o.Proxy = &v
}

// GetTimeoutConnection returns the TimeoutConnection field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetTimeoutConnection() float32 {
	if o == nil || o.TimeoutConnection == nil {
		var ret float32
		return ret
	}
	return *o.TimeoutConnection
}

// GetTimeoutConnectionOk returns a tuple with the TimeoutConnection field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetTimeoutConnectionOk() (*float32, bool) {
	if o == nil || o.TimeoutConnection == nil {
		return nil, false
	}
	return o.TimeoutConnection, true
}

// HasTimeoutConnection returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasTimeoutConnection() bool {
	if o != nil && o.TimeoutConnection != nil {
		return true
	}

	return false
}

// SetTimeoutConnection gets a reference to the given float32 and assigns it to the TimeoutConnection field.
func (o *EmailRequestSmtp) SetTimeoutConnection(v float32) {
	o.TimeoutConnection = &v
}

// GetTimeoutResponse returns the TimeoutResponse field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetTimeoutResponse() float32 {
	if o == nil || o.TimeoutResponse == nil {
		var ret float32
		return ret
	}
	return *o.TimeoutResponse
}

// GetTimeoutResponseOk returns a tuple with the TimeoutResponse field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetTimeoutResponseOk() (*float32, bool) {
	if o == nil || o.TimeoutResponse == nil {
		return nil, false
	}
	return o.TimeoutResponse, true
}

// HasTimeoutResponse returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasTimeoutResponse() bool {
	if o != nil && o.TimeoutResponse != nil {
		return true
	}

	return false
}

// SetTimeoutResponse gets a reference to the given float32 and assigns it to the TimeoutResponse field.
func (o *EmailRequestSmtp) SetTimeoutResponse(v float32) {
	o.TimeoutResponse = &v
}

// GetPort returns the Port field value if set, zero value otherwise.
func (o *EmailRequestSmtp) GetPort() int32 {
	if o == nil || o.Port == nil {
		var ret int32
		return ret
	}
	return *o.Port
}

// GetPortOk returns a tuple with the Port field value if set, nil otherwise
// and a boolean to check if the value has been set.
func (o *EmailRequestSmtp) GetPortOk() (*int32, bool) {
	if o == nil || o.Port == nil {
		return nil, false
	}
	return o.Port, true
}

// HasPort returns a boolean if a field has been set.
func (o *EmailRequestSmtp) HasPort() bool {
	if o != nil && o.Port != nil {
		return true
	}

	return false
}

// SetPort gets a reference to the given int32 and assigns it to the Port field.
func (o *EmailRequestSmtp) SetPort(v int32) {
	o.Port = &v
}

func (o EmailRequestSmtp) MarshalJSON() ([]byte, error) {
	toSerialize := map[string]interface{}{}
	if o.EmailFrom != nil {
		toSerialize["email_from"] = o.EmailFrom
	}
	if o.HelloName != nil {
		toSerialize["hello_name"] = o.HelloName
	}
	if o.Proxy != nil {
		toSerialize["proxy"] = o.Proxy
	}
	if o.TimeoutConnection != nil {
		toSerialize["timeout_connection"] = o.TimeoutConnection
	}
	if o.TimeoutResponse != nil {
		toSerialize["timeout_response"] = o.TimeoutResponse
	}
	if o.Port != nil {
		toSerialize["port"] = o.Port
	}
	return json.Marshal(toSerialize)
}

type NullableEmailRequestSmtp struct {
	value *EmailRequestSmtp
	isSet bool
}

func (v NullableEmailRequestSmtp) Get() *EmailRequestSmtp {
	return v.value
}

func (v *NullableEmailRequestSmtp) Set(val *EmailRequestSmtp) {
	v.value = val
	v.isSet = true
}

func (v NullableEmailRequestSmtp) IsSet() bool {
	return v.isSet
}

func (v *NullableEmailRequestSmtp) Unset() {
	v.value = nil
	v.isSet = false
}

func NewNullableEmailRequestSmtp(val *EmailRequestSmtp) *NullableEmailRequestSmtp {
	return &NullableEmailRequestSmtp{value: val, isSet: true}
}

func (v NullableEmailRequestSmtp) MarshalJSON() ([]byte, error) {
	return json.Marshal(v.value)
}

func (v *NullableEmailRequestSmtp) UnmarshalJSON(src []byte) error {
	v.isSet = true
	return json.Unmarshal(src, &v.value)
}


