# MailboxvalidatorResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**EmailAddress** | Pointer to **string** |  | [optional] 
**Domain** | Pointer to **string** |  | [optional] 
**IsFree** | Pointer to **string** |  | [optional] 
**IsSyntax** | Pointer to **string** |  | [optional] 
**IsDomain** | Pointer to **string** |  | [optional] 
**IsSmtp** | Pointer to **string** |  | [optional] 
**IsVerified** | Pointer to **string** |  | [optional] 
**IsServerDown** | Pointer to **string** |  | [optional] 
**IsGreylisted** | Pointer to **string** |  | [optional] 
**IsDisposable** | Pointer to **string** |  | [optional] 
**IsSuppressed** | Pointer to **string** |  | [optional] 
**IsRole** | Pointer to **string** |  | [optional] 
**IsHighRisk** | Pointer to **string** |  | [optional] 
**IsCatchall** | Pointer to **string** |  | [optional] 
**MailboxvalidatorScore** | Pointer to **string** |  | [optional] 
**TimeTaken** | Pointer to **string** |  | [optional] 
**Status** | Pointer to **string** |  | [optional] 
**CreditsAvailable** | Pointer to **int64** |  | [optional] 
**ErrorCode** | Pointer to **string** |  | [optional] 
**ErrorMessage** | Pointer to **string** |  | [optional] 

## Methods

### NewMailboxvalidatorResult

`func NewMailboxvalidatorResult() *MailboxvalidatorResult`

NewMailboxvalidatorResult instantiates a new MailboxvalidatorResult object
This constructor will assign default values to properties that have it defined,
and makes sure properties required by API are set, but the set of arguments
will change when the set of required properties is changed

### NewMailboxvalidatorResultWithDefaults

`func NewMailboxvalidatorResultWithDefaults() *MailboxvalidatorResult`

NewMailboxvalidatorResultWithDefaults instantiates a new MailboxvalidatorResult object
This constructor will only assign default values to properties that have it defined,
but it doesn't guarantee that properties required by API are set

### GetEmailAddress

`func (o *MailboxvalidatorResult) GetEmailAddress() string`

GetEmailAddress returns the EmailAddress field if non-nil, zero value otherwise.

### GetEmailAddressOk

`func (o *MailboxvalidatorResult) GetEmailAddressOk() (*string, bool)`

GetEmailAddressOk returns a tuple with the EmailAddress field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetEmailAddress

`func (o *MailboxvalidatorResult) SetEmailAddress(v string)`

SetEmailAddress sets EmailAddress field to given value.

### HasEmailAddress

`func (o *MailboxvalidatorResult) HasEmailAddress() bool`

HasEmailAddress returns a boolean if a field has been set.

### GetDomain

`func (o *MailboxvalidatorResult) GetDomain() string`

GetDomain returns the Domain field if non-nil, zero value otherwise.

### GetDomainOk

`func (o *MailboxvalidatorResult) GetDomainOk() (*string, bool)`

GetDomainOk returns a tuple with the Domain field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetDomain

`func (o *MailboxvalidatorResult) SetDomain(v string)`

SetDomain sets Domain field to given value.

### HasDomain

`func (o *MailboxvalidatorResult) HasDomain() bool`

HasDomain returns a boolean if a field has been set.

### GetIsFree

`func (o *MailboxvalidatorResult) GetIsFree() string`

GetIsFree returns the IsFree field if non-nil, zero value otherwise.

### GetIsFreeOk

`func (o *MailboxvalidatorResult) GetIsFreeOk() (*string, bool)`

GetIsFreeOk returns a tuple with the IsFree field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsFree

`func (o *MailboxvalidatorResult) SetIsFree(v string)`

SetIsFree sets IsFree field to given value.

### HasIsFree

`func (o *MailboxvalidatorResult) HasIsFree() bool`

HasIsFree returns a boolean if a field has been set.

### GetIsSyntax

`func (o *MailboxvalidatorResult) GetIsSyntax() string`

GetIsSyntax returns the IsSyntax field if non-nil, zero value otherwise.

### GetIsSyntaxOk

`func (o *MailboxvalidatorResult) GetIsSyntaxOk() (*string, bool)`

GetIsSyntaxOk returns a tuple with the IsSyntax field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsSyntax

`func (o *MailboxvalidatorResult) SetIsSyntax(v string)`

SetIsSyntax sets IsSyntax field to given value.

### HasIsSyntax

`func (o *MailboxvalidatorResult) HasIsSyntax() bool`

HasIsSyntax returns a boolean if a field has been set.

### GetIsDomain

`func (o *MailboxvalidatorResult) GetIsDomain() string`

GetIsDomain returns the IsDomain field if non-nil, zero value otherwise.

### GetIsDomainOk

`func (o *MailboxvalidatorResult) GetIsDomainOk() (*string, bool)`

GetIsDomainOk returns a tuple with the IsDomain field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsDomain

`func (o *MailboxvalidatorResult) SetIsDomain(v string)`

SetIsDomain sets IsDomain field to given value.

### HasIsDomain

`func (o *MailboxvalidatorResult) HasIsDomain() bool`

HasIsDomain returns a boolean if a field has been set.

### GetIsSmtp

`func (o *MailboxvalidatorResult) GetIsSmtp() string`

GetIsSmtp returns the IsSmtp field if non-nil, zero value otherwise.

### GetIsSmtpOk

`func (o *MailboxvalidatorResult) GetIsSmtpOk() (*string, bool)`

GetIsSmtpOk returns a tuple with the IsSmtp field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsSmtp

`func (o *MailboxvalidatorResult) SetIsSmtp(v string)`

SetIsSmtp sets IsSmtp field to given value.

### HasIsSmtp

`func (o *MailboxvalidatorResult) HasIsSmtp() bool`

HasIsSmtp returns a boolean if a field has been set.

### GetIsVerified

`func (o *MailboxvalidatorResult) GetIsVerified() string`

GetIsVerified returns the IsVerified field if non-nil, zero value otherwise.

### GetIsVerifiedOk

`func (o *MailboxvalidatorResult) GetIsVerifiedOk() (*string, bool)`

GetIsVerifiedOk returns a tuple with the IsVerified field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsVerified

`func (o *MailboxvalidatorResult) SetIsVerified(v string)`

SetIsVerified sets IsVerified field to given value.

### HasIsVerified

`func (o *MailboxvalidatorResult) HasIsVerified() bool`

HasIsVerified returns a boolean if a field has been set.

### GetIsServerDown

`func (o *MailboxvalidatorResult) GetIsServerDown() string`

GetIsServerDown returns the IsServerDown field if non-nil, zero value otherwise.

### GetIsServerDownOk

`func (o *MailboxvalidatorResult) GetIsServerDownOk() (*string, bool)`

GetIsServerDownOk returns a tuple with the IsServerDown field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsServerDown

`func (o *MailboxvalidatorResult) SetIsServerDown(v string)`

SetIsServerDown sets IsServerDown field to given value.

### HasIsServerDown

`func (o *MailboxvalidatorResult) HasIsServerDown() bool`

HasIsServerDown returns a boolean if a field has been set.

### GetIsGreylisted

`func (o *MailboxvalidatorResult) GetIsGreylisted() string`

GetIsGreylisted returns the IsGreylisted field if non-nil, zero value otherwise.

### GetIsGreylistedOk

`func (o *MailboxvalidatorResult) GetIsGreylistedOk() (*string, bool)`

GetIsGreylistedOk returns a tuple with the IsGreylisted field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsGreylisted

`func (o *MailboxvalidatorResult) SetIsGreylisted(v string)`

SetIsGreylisted sets IsGreylisted field to given value.

### HasIsGreylisted

`func (o *MailboxvalidatorResult) HasIsGreylisted() bool`

HasIsGreylisted returns a boolean if a field has been set.

### GetIsDisposable

`func (o *MailboxvalidatorResult) GetIsDisposable() string`

GetIsDisposable returns the IsDisposable field if non-nil, zero value otherwise.

### GetIsDisposableOk

`func (o *MailboxvalidatorResult) GetIsDisposableOk() (*string, bool)`

GetIsDisposableOk returns a tuple with the IsDisposable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsDisposable

`func (o *MailboxvalidatorResult) SetIsDisposable(v string)`

SetIsDisposable sets IsDisposable field to given value.

### HasIsDisposable

`func (o *MailboxvalidatorResult) HasIsDisposable() bool`

HasIsDisposable returns a boolean if a field has been set.

### GetIsSuppressed

`func (o *MailboxvalidatorResult) GetIsSuppressed() string`

GetIsSuppressed returns the IsSuppressed field if non-nil, zero value otherwise.

### GetIsSuppressedOk

`func (o *MailboxvalidatorResult) GetIsSuppressedOk() (*string, bool)`

GetIsSuppressedOk returns a tuple with the IsSuppressed field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsSuppressed

`func (o *MailboxvalidatorResult) SetIsSuppressed(v string)`

SetIsSuppressed sets IsSuppressed field to given value.

### HasIsSuppressed

`func (o *MailboxvalidatorResult) HasIsSuppressed() bool`

HasIsSuppressed returns a boolean if a field has been set.

### GetIsRole

`func (o *MailboxvalidatorResult) GetIsRole() string`

GetIsRole returns the IsRole field if non-nil, zero value otherwise.

### GetIsRoleOk

`func (o *MailboxvalidatorResult) GetIsRoleOk() (*string, bool)`

GetIsRoleOk returns a tuple with the IsRole field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsRole

`func (o *MailboxvalidatorResult) SetIsRole(v string)`

SetIsRole sets IsRole field to given value.

### HasIsRole

`func (o *MailboxvalidatorResult) HasIsRole() bool`

HasIsRole returns a boolean if a field has been set.

### GetIsHighRisk

`func (o *MailboxvalidatorResult) GetIsHighRisk() string`

GetIsHighRisk returns the IsHighRisk field if non-nil, zero value otherwise.

### GetIsHighRiskOk

`func (o *MailboxvalidatorResult) GetIsHighRiskOk() (*string, bool)`

GetIsHighRiskOk returns a tuple with the IsHighRisk field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsHighRisk

`func (o *MailboxvalidatorResult) SetIsHighRisk(v string)`

SetIsHighRisk sets IsHighRisk field to given value.

### HasIsHighRisk

`func (o *MailboxvalidatorResult) HasIsHighRisk() bool`

HasIsHighRisk returns a boolean if a field has been set.

### GetIsCatchall

`func (o *MailboxvalidatorResult) GetIsCatchall() string`

GetIsCatchall returns the IsCatchall field if non-nil, zero value otherwise.

### GetIsCatchallOk

`func (o *MailboxvalidatorResult) GetIsCatchallOk() (*string, bool)`

GetIsCatchallOk returns a tuple with the IsCatchall field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetIsCatchall

`func (o *MailboxvalidatorResult) SetIsCatchall(v string)`

SetIsCatchall sets IsCatchall field to given value.

### HasIsCatchall

`func (o *MailboxvalidatorResult) HasIsCatchall() bool`

HasIsCatchall returns a boolean if a field has been set.

### GetMailboxvalidatorScore

`func (o *MailboxvalidatorResult) GetMailboxvalidatorScore() string`

GetMailboxvalidatorScore returns the MailboxvalidatorScore field if non-nil, zero value otherwise.

### GetMailboxvalidatorScoreOk

`func (o *MailboxvalidatorResult) GetMailboxvalidatorScoreOk() (*string, bool)`

GetMailboxvalidatorScoreOk returns a tuple with the MailboxvalidatorScore field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetMailboxvalidatorScore

`func (o *MailboxvalidatorResult) SetMailboxvalidatorScore(v string)`

SetMailboxvalidatorScore sets MailboxvalidatorScore field to given value.

### HasMailboxvalidatorScore

`func (o *MailboxvalidatorResult) HasMailboxvalidatorScore() bool`

HasMailboxvalidatorScore returns a boolean if a field has been set.

### GetTimeTaken

`func (o *MailboxvalidatorResult) GetTimeTaken() string`

GetTimeTaken returns the TimeTaken field if non-nil, zero value otherwise.

### GetTimeTakenOk

`func (o *MailboxvalidatorResult) GetTimeTakenOk() (*string, bool)`

GetTimeTakenOk returns a tuple with the TimeTaken field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetTimeTaken

`func (o *MailboxvalidatorResult) SetTimeTaken(v string)`

SetTimeTaken sets TimeTaken field to given value.

### HasTimeTaken

`func (o *MailboxvalidatorResult) HasTimeTaken() bool`

HasTimeTaken returns a boolean if a field has been set.

### GetStatus

`func (o *MailboxvalidatorResult) GetStatus() string`

GetStatus returns the Status field if non-nil, zero value otherwise.

### GetStatusOk

`func (o *MailboxvalidatorResult) GetStatusOk() (*string, bool)`

GetStatusOk returns a tuple with the Status field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetStatus

`func (o *MailboxvalidatorResult) SetStatus(v string)`

SetStatus sets Status field to given value.

### HasStatus

`func (o *MailboxvalidatorResult) HasStatus() bool`

HasStatus returns a boolean if a field has been set.

### GetCreditsAvailable

`func (o *MailboxvalidatorResult) GetCreditsAvailable() int64`

GetCreditsAvailable returns the CreditsAvailable field if non-nil, zero value otherwise.

### GetCreditsAvailableOk

`func (o *MailboxvalidatorResult) GetCreditsAvailableOk() (*int64, bool)`

GetCreditsAvailableOk returns a tuple with the CreditsAvailable field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetCreditsAvailable

`func (o *MailboxvalidatorResult) SetCreditsAvailable(v int64)`

SetCreditsAvailable sets CreditsAvailable field to given value.

### HasCreditsAvailable

`func (o *MailboxvalidatorResult) HasCreditsAvailable() bool`

HasCreditsAvailable returns a boolean if a field has been set.

### GetErrorCode

`func (o *MailboxvalidatorResult) GetErrorCode() string`

GetErrorCode returns the ErrorCode field if non-nil, zero value otherwise.

### GetErrorCodeOk

`func (o *MailboxvalidatorResult) GetErrorCodeOk() (*string, bool)`

GetErrorCodeOk returns a tuple with the ErrorCode field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetErrorCode

`func (o *MailboxvalidatorResult) SetErrorCode(v string)`

SetErrorCode sets ErrorCode field to given value.

### HasErrorCode

`func (o *MailboxvalidatorResult) HasErrorCode() bool`

HasErrorCode returns a boolean if a field has been set.

### GetErrorMessage

`func (o *MailboxvalidatorResult) GetErrorMessage() string`

GetErrorMessage returns the ErrorMessage field if non-nil, zero value otherwise.

### GetErrorMessageOk

`func (o *MailboxvalidatorResult) GetErrorMessageOk() (*string, bool)`

GetErrorMessageOk returns a tuple with the ErrorMessage field if it's non-nil, zero value otherwise
and a boolean to check if the value has been set.

### SetErrorMessage

`func (o *MailboxvalidatorResult) SetErrorMessage(v string)`

SetErrorMessage sets ErrorMessage field to given value.

### HasErrorMessage

`func (o *MailboxvalidatorResult) HasErrorMessage() bool`

HasErrorMessage returns a boolean if a field has been set.


[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


