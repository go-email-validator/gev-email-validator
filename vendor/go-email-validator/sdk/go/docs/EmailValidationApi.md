# \EmailValidationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**EmailValidationSingleValidationGet**](EmailValidationApi.md#EmailValidationSingleValidationGet) | **Get** /v1/validation/single/{email} | 
[**EmailValidationSingleValidationPost**](EmailValidationApi.md#EmailValidationSingleValidationPost) | **Post** /v1/validation/single | 



## EmailValidationSingleValidationGet

> EmailResponse EmailValidationSingleValidationGet(ctx, email).ResultType(resultType).Execute()





### Example

```go
package main

import (
    "context"
    "fmt"
    "os"
    openapiclient "./openapi"
)

func main() {
    email := "email_example" // string | 
    resultType := openapiclient.ResultType("CHECK_IF_EMAIL_EXIST") // ResultType | ResultTypeDescription (optional) (default to "CHECK_IF_EMAIL_EXIST")

    configuration := openapiclient.NewConfiguration()
    api_client := openapiclient.NewAPIClient(configuration)
    resp, r, err := api_client.EmailValidationApi.EmailValidationSingleValidationGet(context.Background(), email).ResultType(resultType).Execute()
    if err != nil {
        fmt.Fprintf(os.Stderr, "Error when calling `EmailValidationApi.EmailValidationSingleValidationGet``: %v\n", err)
        fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
    }
    // response from `EmailValidationSingleValidationGet`: EmailResponse
    fmt.Fprintf(os.Stdout, "Response from `EmailValidationApi.EmailValidationSingleValidationGet`: %v\n", resp)
}
```

### Path Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
**ctx** | **context.Context** | context for authentication, logging, cancellation, deadlines, tracing, etc.
**email** | **string** |  | 

### Other Parameters

Other parameters are passed through a pointer to a apiEmailValidationSingleValidationGetRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------

 **resultType** | [**ResultType**](ResultType.md) | ResultTypeDescription | [default to &quot;CHECK_IF_EMAIL_EXIST&quot;]

### Return type

[**EmailResponse**](EmailResponse.md)

### Authorization

[AuthKey](../README.md#AuthKey), [RapidApiKey](../README.md#RapidApiKey), [RapidApiSecret](../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## EmailValidationSingleValidationPost

> EmailResponse EmailValidationSingleValidationPost(ctx).Body(body).Execute()



### Example

```go
package main

import (
    "context"
    "fmt"
    "os"
    openapiclient "./openapi"
)

func main() {
    body := *openapiclient.NewEmailRequest() // EmailRequest | 

    configuration := openapiclient.NewConfiguration()
    api_client := openapiclient.NewAPIClient(configuration)
    resp, r, err := api_client.EmailValidationApi.EmailValidationSingleValidationPost(context.Background()).Body(body).Execute()
    if err != nil {
        fmt.Fprintf(os.Stderr, "Error when calling `EmailValidationApi.EmailValidationSingleValidationPost``: %v\n", err)
        fmt.Fprintf(os.Stderr, "Full HTTP response: %v\n", r)
    }
    // response from `EmailValidationSingleValidationPost`: EmailResponse
    fmt.Fprintf(os.Stdout, "Response from `EmailValidationApi.EmailValidationSingleValidationPost`: %v\n", resp)
}
```

### Path Parameters



### Other Parameters

Other parameters are passed through a pointer to a apiEmailValidationSingleValidationPostRequest struct via the builder pattern


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**EmailRequest**](EmailRequest.md) |  | 

### Return type

[**EmailResponse**](EmailResponse.md)

### Authorization

[AuthKey](../README.md#AuthKey), [RapidApiKey](../README.md#RapidApiKey), [RapidApiSecret](../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)

