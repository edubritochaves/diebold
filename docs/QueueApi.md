# SwaggerClient::QueueApi

All URIs are relative to *https://localhost/servcorews*

Method | HTTP request | Description
------------- | ------------- | -------------
[**process_json_post**](QueueApi.md#process_json_post) | **POST** /processJSON | 


# **process_json_post**
> Out process_json_post(_in)



Serviços de gestão de filas 

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::QueueApi.new

_in = SwaggerClient::ModelIn.new # ModelIn | JSON com o POST.


begin
  result = api_instance.process_json_post(_in)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling QueueApi->process_json_post: #{e}"
end
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



