# Org.OpenAPITools.Api.EmailValidationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**EmailValidationSingleValidationGet**](EmailValidationApi.md#emailvalidationsinglevalidationget) | **GET** /v1/validation/single/{email} | 
[**EmailValidationSingleValidationPost**](EmailValidationApi.md#emailvalidationsinglevalidationpost) | **POST** /v1/validation/single | 



## EmailValidationSingleValidationGet

> EmailResponse EmailValidationSingleValidationGet (string email, ResultType? resultType = null)



POST request contains additional parameters for detailed configuration

### Example

```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmailValidationSingleValidationGetExample
    {
        public static void Main()
        {
            Configuration.Default.BasePath = "http://localhost";
            // Configure API key authorization: AuthKey
            Configuration.Default.AddApiKey("Authorization", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("Authorization", "Bearer");
            // Configure API key authorization: RapidApiKey
            Configuration.Default.AddApiKey("X-RapidAPI-Key", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("X-RapidAPI-Key", "Bearer");
            // Configure API key authorization: RapidApiSecret
            Configuration.Default.AddApiKey("X-RapidAPI-Proxy-Secret", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("X-RapidAPI-Proxy-Secret", "Bearer");

            var apiInstance = new EmailValidationApi(Configuration.Default);
            var email = email_example;  // string | 
            var resultType = ;  // ResultType? | ResultTypeDescription (optional) 

            try
            {
                EmailResponse result = apiInstance.EmailValidationSingleValidationGet(email, resultType);
                Debug.WriteLine(result);
            }
            catch (ApiException e)
            {
                Debug.Print("Exception when calling EmailValidationApi.EmailValidationSingleValidationGet: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  | 
 **resultType** | **ResultType?**| ResultTypeDescription | [optional] 

### Return type

[**EmailResponse**](EmailResponse.md)

### Authorization

[AuthKey](../README.md#AuthKey), [RapidApiKey](../README.md#RapidApiKey), [RapidApiSecret](../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** | A successful response. |  -  |
| **0** | An unexpected error response. |  -  |

[[Back to top]](#)
[[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)


## EmailValidationSingleValidationPost

> EmailResponse EmailValidationSingleValidationPost (EmailRequest body)



### Example

```csharp
using System.Collections.Generic;
using System.Diagnostics;
using Org.OpenAPITools.Api;
using Org.OpenAPITools.Client;
using Org.OpenAPITools.Model;

namespace Example
{
    public class EmailValidationSingleValidationPostExample
    {
        public static void Main()
        {
            Configuration.Default.BasePath = "http://localhost";
            // Configure API key authorization: AuthKey
            Configuration.Default.AddApiKey("Authorization", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("Authorization", "Bearer");
            // Configure API key authorization: RapidApiKey
            Configuration.Default.AddApiKey("X-RapidAPI-Key", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("X-RapidAPI-Key", "Bearer");
            // Configure API key authorization: RapidApiSecret
            Configuration.Default.AddApiKey("X-RapidAPI-Proxy-Secret", "YOUR_API_KEY");
            // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
            // Configuration.Default.AddApiKeyPrefix("X-RapidAPI-Proxy-Secret", "Bearer");

            var apiInstance = new EmailValidationApi(Configuration.Default);
            var body = new EmailRequest(); // EmailRequest | 

            try
            {
                EmailResponse result = apiInstance.EmailValidationSingleValidationPost(body);
                Debug.WriteLine(result);
            }
            catch (ApiException e)
            {
                Debug.Print("Exception when calling EmailValidationApi.EmailValidationSingleValidationPost: " + e.Message );
                Debug.Print("Status Code: "+ e.ErrorCode);
                Debug.Print(e.StackTrace);
            }
        }
    }
}
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

### HTTP response details
| Status code | Description | Response headers |
|-------------|-------------|------------------|
| **200** | A successful response. |  -  |
| **0** | An unexpected error response. |  -  |

[[Back to top]](#)
[[Back to API list]](../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../README.md#documentation-for-models)
[[Back to README]](../README.md)

