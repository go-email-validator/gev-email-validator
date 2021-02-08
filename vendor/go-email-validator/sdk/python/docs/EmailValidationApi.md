# openapi_client.EmailValidationApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**email_validation_single_validation_get**](EmailValidationApi.md#email_validation_single_validation_get) | **GET** /v1/validation/single/{email} | 
[**email_validation_single_validation_post**](EmailValidationApi.md#email_validation_single_validation_post) | **POST** /v1/validation/single | 


# **email_validation_single_validation_get**
> EmailResponse email_validation_single_validation_get(email)



POST request contains additional parameters for detailed configuration

### Example

* Api Key Authentication (AuthKey):
* Api Key Authentication (RapidApiKey):
* Api Key Authentication (RapidApiSecret):
```python
import time
import openapi_client
from openapi_client.api import email_validation_api
from openapi_client.model.email_response import EmailResponse
from openapi_client.model.result_type import ResultType
from openapi_client.model.unexpected_error import UnexpectedError
from pprint import pprint
# Defining the host is optional and defaults to http://localhost
# See configuration.py for a list of all supported configuration parameters.
configuration = openapi_client.Configuration(
    host = "http://localhost"
)

# The client must configure the authentication and authorization parameters
# in accordance with the API server security policy.
# Examples for each auth method are provided below, use the example that
# satisfies your auth use case.

# Configure API key authorization: AuthKey
configuration.api_key['AuthKey'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['AuthKey'] = 'Bearer'

# Configure API key authorization: RapidApiKey
configuration.api_key['RapidApiKey'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['RapidApiKey'] = 'Bearer'

# Configure API key authorization: RapidApiSecret
configuration.api_key['RapidApiSecret'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['RapidApiSecret'] = 'Bearer'

# Enter a context with an instance of the API client
with openapi_client.ApiClient(configuration) as api_client:
    # Create an instance of the API class
    api_instance = email_validation_api.EmailValidationApi(api_client)
    email = "email_example" # str | 
    result_type = ResultType("CHECK_IF_EMAIL_EXIST") # ResultType | ResultTypeDescription (optional)

    # example passing only required values which don't have defaults set
    try:
        api_response = api_instance.email_validation_single_validation_get(email)
        pprint(api_response)
    except openapi_client.ApiException as e:
        print("Exception when calling EmailValidationApi->email_validation_single_validation_get: %s\n" % e)

    # example passing only required values which don't have defaults set
    # and optional values
    try:
        api_response = api_instance.email_validation_single_validation_get(email, result_type=result_type)
        pprint(api_response)
    except openapi_client.ApiException as e:
        print("Exception when calling EmailValidationApi->email_validation_single_validation_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **str**|  |
 **result_type** | **ResultType**| ResultTypeDescription | [optional]

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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **email_validation_single_validation_post**
> EmailResponse email_validation_single_validation_post(body)



### Example

* Api Key Authentication (AuthKey):
* Api Key Authentication (RapidApiKey):
* Api Key Authentication (RapidApiSecret):
```python
import time
import openapi_client
from openapi_client.api import email_validation_api
from openapi_client.model.email_response import EmailResponse
from openapi_client.model.email_request import EmailRequest
from openapi_client.model.unexpected_error import UnexpectedError
from pprint import pprint
# Defining the host is optional and defaults to http://localhost
# See configuration.py for a list of all supported configuration parameters.
configuration = openapi_client.Configuration(
    host = "http://localhost"
)

# The client must configure the authentication and authorization parameters
# in accordance with the API server security policy.
# Examples for each auth method are provided below, use the example that
# satisfies your auth use case.

# Configure API key authorization: AuthKey
configuration.api_key['AuthKey'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['AuthKey'] = 'Bearer'

# Configure API key authorization: RapidApiKey
configuration.api_key['RapidApiKey'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['RapidApiKey'] = 'Bearer'

# Configure API key authorization: RapidApiSecret
configuration.api_key['RapidApiSecret'] = 'YOUR_API_KEY'

# Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
# configuration.api_key_prefix['RapidApiSecret'] = 'Bearer'

# Enter a context with an instance of the API client
with openapi_client.ApiClient(configuration) as api_client:
    # Create an instance of the API class
    api_instance = email_validation_api.EmailValidationApi(api_client)
    body = EmailRequest(
        email="SOME.EXISTING.EMAIL@domain.com",
        smtp=EmailRequestSmtp(
            email_from="user@example.org",
            hello_name="localhost",
            proxy="proxy_example",
            timeout_connection=5.0,
            timeout_response=3.14,
            port=25,
        ),
        result_type=ResultType("CHECK_IF_EMAIL_EXIST"),
    ) # EmailRequest | 

    # example passing only required values which don't have defaults set
    try:
        api_response = api_instance.email_validation_single_validation_post(body)
        pprint(api_response)
    except openapi_client.ApiException as e:
        print("Exception when calling EmailValidationApi->email_validation_single_validation_post: %s\n" % e)
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

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

