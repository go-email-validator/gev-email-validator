# EmailRequestSmtp

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email_from** | **str** |  | [optional]  if omitted the server will use the default value of user@example.org
**hello_name** | **str** |  | [optional]  if omitted the server will use the default value of "localhost"
**proxy** | **str** | Versions - SOCKS4, SOCKS4A and SOCKS5. Format -  schema://username:password@host:port.  | [optional] 
**timeout_connection** | **float** | timeout creating smtp connection | [optional]  if omitted the server will use the default value of 5.0
**timeout_response** | **float** | timeout of communication with smtp server | [optional] 
**port** | **int** | smtp port remote server | [optional]  if omitted the server will use the default value of 25

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


