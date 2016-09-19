# QueueApi

All URIs are relative to *https://localhost/servcorews*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processJSONPost**](QueueApi.md#processJSONPost) | **POST** /processJSON | 


<a name="processJSONPost"></a>
# **processJSONPost**
> Out processJSONPost(in)



Serviços de gestão de filas 

### Example
```java
// Import classes:
//import io.swagger.client.ApiException;
//import io.swagger.client.api.QueueApi;


QueueApi apiInstance = new QueueApi();
In in = new In(); // In | JSON com o POST.
try {
    Out result = apiInstance.processJSONPost(in);
    System.out.println(result);
} catch (ApiException e) {
    System.err.println("Exception when calling QueueApi#processJSONPost");
    e.printStackTrace();
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

