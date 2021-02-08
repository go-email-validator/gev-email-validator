# EmailValidationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailValidationSingleValidationGet**](EmailValidationApi.md#emailValidationSingleValidationGet) | **GET** /v1/validation/single/{email} | 
[**emailValidationSingleValidationPost**](EmailValidationApi.md#emailValidationSingleValidationPost) | **POST** /v1/validation/single | 


<a name="emailValidationSingleValidationGet"></a>
# **emailValidationSingleValidationGet**
> EmailResponse emailValidationSingleValidationGet(email, resultType)



POST request contains additional parameters for detailed configuration

### Example
```java
// Import classes:
import org.openapitools.client.ApiClient;
import org.openapitools.client.ApiException;
import org.openapitools.client.Configuration;
import org.openapitools.client.auth.*;
import org.openapitools.client.models.*;
import org.openapitools.client.api.EmailValidationApi;

public class Example {
  public static void main(String[] args) {
    ApiClient defaultClient = Configuration.getDefaultApiClient();
    defaultClient.setBasePath("http://localhost");
    
    // Configure API key authorization: AuthKey
    ApiKeyAuth AuthKey = (ApiKeyAuth) defaultClient.getAuthentication("AuthKey");
    AuthKey.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //AuthKey.setApiKeyPrefix("Token");

    // Configure API key authorization: RapidApiKey
    ApiKeyAuth RapidApiKey = (ApiKeyAuth) defaultClient.getAuthentication("RapidApiKey");
    RapidApiKey.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //RapidApiKey.setApiKeyPrefix("Token");

    // Configure API key authorization: RapidApiSecret
    ApiKeyAuth RapidApiSecret = (ApiKeyAuth) defaultClient.getAuthentication("RapidApiSecret");
    RapidApiSecret.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //RapidApiSecret.setApiKeyPrefix("Token");

    EmailValidationApi apiInstance = new EmailValidationApi(defaultClient);
    String email = "email_example"; // String | 
    ResultType resultType = ResultType.fromValue("CHECK_IF_EMAIL_EXIST"); // ResultType | ResultTypeDescription
    try {
      EmailResponse result = apiInstance.emailValidationSingleValidationGet(email, resultType);
      System.out.println(result);
    } catch (ApiException e) {
      System.err.println("Exception when calling EmailValidationApi#emailValidationSingleValidationGet");
      System.err.println("Status code: " + e.getCode());
      System.err.println("Reason: " + e.getResponseBody());
      System.err.println("Response headers: " + e.getResponseHeaders());
      e.printStackTrace();
    }
  }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **String**|  |
 **resultType** | [**ResultType**](.md)| ResultTypeDescription | [optional] [default to CHECK_IF_EMAIL_EXIST] [enum: CHECK_IF_EMAIL_EXIST, CIEE, MAILBOXVALIDATOR, MAIL_BOX_VALIDATOR, MBV, PROMPT_EMAIL_VERIFICATION_API, PEVA]

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
**200** | A successful response. |  -  |
**0** | An unexpected error response. |  -  |

<a name="emailValidationSingleValidationPost"></a>
# **emailValidationSingleValidationPost**
> EmailResponse emailValidationSingleValidationPost(body)



### Example
```java
// Import classes:
import org.openapitools.client.ApiClient;
import org.openapitools.client.ApiException;
import org.openapitools.client.Configuration;
import org.openapitools.client.auth.*;
import org.openapitools.client.models.*;
import org.openapitools.client.api.EmailValidationApi;

public class Example {
  public static void main(String[] args) {
    ApiClient defaultClient = Configuration.getDefaultApiClient();
    defaultClient.setBasePath("http://localhost");
    
    // Configure API key authorization: AuthKey
    ApiKeyAuth AuthKey = (ApiKeyAuth) defaultClient.getAuthentication("AuthKey");
    AuthKey.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //AuthKey.setApiKeyPrefix("Token");

    // Configure API key authorization: RapidApiKey
    ApiKeyAuth RapidApiKey = (ApiKeyAuth) defaultClient.getAuthentication("RapidApiKey");
    RapidApiKey.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //RapidApiKey.setApiKeyPrefix("Token");

    // Configure API key authorization: RapidApiSecret
    ApiKeyAuth RapidApiSecret = (ApiKeyAuth) defaultClient.getAuthentication("RapidApiSecret");
    RapidApiSecret.setApiKey("YOUR API KEY");
    // Uncomment the following line to set a prefix for the API key, e.g. "Token" (defaults to null)
    //RapidApiSecret.setApiKeyPrefix("Token");

    EmailValidationApi apiInstance = new EmailValidationApi(defaultClient);
    EmailRequest body = new EmailRequest(); // EmailRequest | 
    try {
      EmailResponse result = apiInstance.emailValidationSingleValidationPost(body);
      System.out.println(result);
    } catch (ApiException e) {
      System.err.println("Exception when calling EmailValidationApi#emailValidationSingleValidationPost");
      System.err.println("Status code: " + e.getCode());
      System.err.println("Reason: " + e.getResponseBody());
      System.err.println("Response headers: " + e.getResponseHeaders());
      e.printStackTrace();
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
**200** | A successful response. |  -  |
**0** | An unexpected error response. |  -  |

