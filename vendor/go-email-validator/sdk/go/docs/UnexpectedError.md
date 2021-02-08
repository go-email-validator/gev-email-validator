# UnexpectedError

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**Code** | Pointer to **int32** |  | [optional] 
**Message** | Pointer to **string** |  | [optional] 
**Details** | Pointer to **map[string]map[string]interface{}** |  | [optional] 

## Methods

### NewUnexpectedError

`func NewUnexpectedError() *UnexpectedError`

NewUnexpectedError instantiates a new UnexpectedError object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewUnexpectedErrorWithDefaults

`func NewUnexpectedErrorWithDefaults() *UnexpectedError`

NewUnexpectedErrorWithDefaults instantiates a new UnexpectedError object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetCode

`func (o *UnexpectedError) GetCode() int32`

GetCode returns the Code field if non-nil, zero value otherwise.

### GetCodeOk

`func (o *UnexpectedError) GetCodeOk() (*int32, bool)`

GetCodeOk returns a tuple with the Code field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCode

`func (o *UnexpectedError) SetCode(v int32)`

SetCode sets Code field to given value.

### HasCode

`func (o *UnexpectedError) HasCode() bool`

HasCode returns a boolean if a field has been set.

### GetMessage

`func (o *UnexpectedError) GetMessage() string`

GetMessage returns the Message field if non-nil, zero value otherwise.

### GetMessageOk

`func (o *UnexpectedError) GetMessageOk() (*string, bool)`

GetMessageOk returns a tuple with the Message field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMessage

`func (o *UnexpectedError) SetMessage(v string)`

SetMessage sets Message field to given value.

### HasMessage

`func (o *UnexpectedError) HasMessage() bool`

HasMessage returns a boolean if a field has been set.

### GetDetails

`func (o *UnexpectedError) GetDetails() map[string]map[string]interface{}`

GetDetails returns the Details field if non-nil, zero value otherwise.

### GetDetailsOk

`func (o *UnexpectedError) GetDetailsOk() (*map[string]map[string]interface{}, bool)`

GetDetailsOk returns a tuple with the Details field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetDetails

`func (o *UnexpectedError) SetDetails(v map[string]map[string]interface{})`

SetDetails sets Details field to given value.

### HasDetails

`func (o *UnexpectedError) HasDetails() bool`

HasDetails returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


