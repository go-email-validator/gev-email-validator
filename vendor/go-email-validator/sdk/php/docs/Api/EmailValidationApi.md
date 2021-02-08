# OpenAPI\Client\EmailValidationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailValidationSingleValidationGet()**](EmailValidationApi.md#emailValidationSingleValidationGet) | **GET** /v1/validation/single/{email} | 
[**emailValidationSingleValidationPost()**](EmailValidationApi.md#emailValidationSingleValidationPost) | **POST** /v1/validation/single | 


## `emailValidationSingleValidationGet()`

```php
emailValidationSingleValidationGet($email, $result_type): \OpenAPI\Client\Model\EmailResponse
```



POST request contains additional parameters for detailed configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: RapidApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');

// Configure API key authorization: RapidApiSecret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Proxy-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Proxy-Secret', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$email = 'email_example'; // string
$result_type = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\ResultType(); // \OpenAPI\Client\Model\ResultType | ResultTypeDescription

try {
    $result = $apiInstance->emailValidationSingleValidationGet($email, $result_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailValidationApi->emailValidationSingleValidationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**|  |
 **result_type** | [**\OpenAPI\Client\Model\ResultType**](../Model/.md)| ResultTypeDescription | [optional]

### Return type

[**\OpenAPI\Client\Model\EmailResponse**](../Model/EmailResponse.md)

### Authorization

[AuthKey](../../README.md#AuthKey), [RapidApiKey](../../README.md#RapidApiKey), [RapidApiSecret](../../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `emailValidationSingleValidationPost()`

```php
emailValidationSingleValidationPost($body): \OpenAPI\Client\Model\EmailResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: AuthKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: RapidApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Key', 'Bearer');

// Configure API key authorization: RapidApiSecret
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-RapidAPI-Proxy-Secret', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-RapidAPI-Proxy-Secret', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\EmailValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EmailRequest(); // \OpenAPI\Client\Model\EmailRequest

try {
    $result = $apiInstance->emailValidationSingleValidationPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailValidationApi->emailValidationSingleValidationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\OpenAPI\Client\Model\EmailRequest**](../Model/EmailRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\EmailResponse**](../Model/EmailResponse.md)

### Authorization

[AuthKey](../../README.md#AuthKey), [RapidApiKey](../../README.md#RapidApiKey), [RapidApiSecret](../../README.md#RapidApiSecret)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
