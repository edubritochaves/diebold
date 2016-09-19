# WWW::SwaggerClient::QueueApi

## Load the API package
```perl
use WWW::SwaggerClient::Object::QueueApi;
```

All URIs are relative to *https://localhost/servcorews*

Method | HTTP request | Description
------------- | ------------- | -------------
[**process_json_post**](QueueApi.md#process_json_post) | **POST** /processJSON | 


# **process_json_post**
> Out process_json_post(in => $in)



Serviços de gestão de filas 

### Example 
```perl
use Data::Dumper;

my $api_instance = WWW::SwaggerClient::QueueApi->new();
my $in = WWW::SwaggerClient::Object::In->new(); # In | JSON com o POST.

eval { 
    my $result = $api_instance->process_json_post(in => $in);
    print Dumper($result);
};
if ($@) {
    warn "Exception when calling QueueApi->process_json_post: $@\n";
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in** | [**In**](In.md)| JSON com o POST. | 

### Return type

[**Out**](Out.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

