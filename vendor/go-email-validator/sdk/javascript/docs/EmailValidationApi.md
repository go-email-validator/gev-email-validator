# EmailValidator.EmailValidationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailValidationSingleValidationGet**](EmailValidationApi.md#emailValidationSingleValidationGet) | **GET** /v1/validation/single/{email} | 
[**emailValidationSingleValidationPost**](EmailValidationApi.md#emailValidationSingleValidationPost) | **POST** /v1/validation/single | 



## emailValidationSingleValidationGet

> EmailResponse emailValidationSingleValidationGet(email, opts)



POST request contains additional parameters for detailed configuration

### Example

```javascript
import EmailValidator from 'email_validator';
let defaultClient = EmailValidator.ApiClient.instance;
// Configure API key authorization: AuthKey
let AuthKey = defaultClient.authentications['AuthKey'];
AuthKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//AuthKey.apiKeyPrefix = 'Token';
// Configure API key authorization: RapidApiKey
let RapidApiKey = defaultClient.authentications['RapidApiKey'];
RapidApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//RapidApiKey.apiKeyPrefix = 'Token';
// Configure API key authorization: RapidApiSecret
let RapidApiSecret = defaultClient.authentications['RapidApiSecret'];
RapidApiSecret.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//RapidApiSecret.apiKeyPrefix = 'Token';

let apiInstance = new EmailValidator.EmailValidationApi();
let email = "email_example"; // String | 
let opts = {
  'resultType': new EmailValidator.ResultType() // ResultType | ResultTypeDescription
};
apiInstance.emailValidationSingleValidationGet(email, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **String**|  | 
 **resultType** | [**ResultType**](.md)| ResultTypeDescription | [optional] 

### Return type

[**EmailResponse**](EmailResponse.md)

### Authorization

[AuthKey](../README.md#AuthKey), [RapidApiKey](../README.md#RapidApiKey), [RapidApiSecret](../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json


## emailValidationSingleValidationPost

> EmailResponse emailValidationSingleValidationPost(body)



### Example

```javascript
import EmailValidator from 'email_validator';
let defaultClient = EmailValidator.ApiClient.instance;
// Configure API key authorization: AuthKey
let AuthKey = defaultClient.authentications['AuthKey'];
AuthKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//AuthKey.apiKeyPrefix = 'Token';
// Configure API key authorization: RapidApiKey
let RapidApiKey = defaultClient.authentications['RapidApiKey'];
RapidApiKey.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//RapidApiKey.apiKeyPrefix = 'Token';
// Configure API key authorization: RapidApiSecret
let RapidApiSecret = defaultClient.authentications['RapidApiSecret'];
RapidApiSecret.apiKey = 'YOUR API KEY';
// Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
//RapidApiSecret.apiKeyPrefix = 'Token';

let apiInstance = new EmailValidator.EmailValidationApi();
let body = new EmailValidator.EmailRequest(); // EmailRequest | 
apiInstance.emailValidationSingleValidationPost(body, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**EmailRequest**](EmailRequest.md)|  | 

### Return type

[**EmailResponse**](EmailResponse.md)

### Authorization

[AuthKey](../README.md#AuthKey), [RapidApiKey](../README.md#RapidApiKey), [RapidApiSecret](../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

