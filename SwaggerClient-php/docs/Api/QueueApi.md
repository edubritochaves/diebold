# Swagger\Client\QueueApi

All URIs are relative to *https://localhost/servcorews*

Method | HTTP request | Description
------------- | ------------- | -------------
[**processJSONPost**](QueueApi.md#processJSONPost) | **POST** /processJSON | 


# **processJSONPost**
> \Swagger\Client\Model\Out processJSONPost($in)



Serviços de gestão de filas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\QueueApi();
$in = new \Swagger\Client\Model\In(); // \Swagger\Client\Model\In | JSON com o POST.

try {
    $result = $api_instance->processJSONPost($in);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QueueApi->processJSONPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **in** | [**\Swagger\Client\Model\In**](../Model/\Swagger\Client\Model\In.md)| JSON com o POST. |

### Return type

[**\Swagger\Client\Model\Out**](../Model/Out.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

