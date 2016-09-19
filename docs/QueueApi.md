# swagger_client.QueueApi

All URIs are relative to *https://diebold.herokuapp.com/servcorews*

Method | HTTP request | Description
------------- | ------------- | -------------
[**process_json_post**](QueueApi.md#process_json_post) | **POST** /processJSON | 


# **process_json_post**
> Out process_json_post(_in)



Serviços de gestão de filas 

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.QueueApi()
_in = swagger_client.ModelIn() # ModelIn | JSON com o POST.

try: 
    api_response = api_instance.process_json_post(_in)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling QueueApi->process_json_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **_in** | [**ModelIn**](ModelIn.md)| JSON com o POST. | 

### Return type

[**Out**](Out.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

