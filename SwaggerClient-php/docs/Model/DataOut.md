# DataOut

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**output_data** | [**\Swagger\Client\Model\OutputData**](OutputData.md) | Dados de saída | [optional] 
**message** | [**\Swagger\Client\Model\Message[]**](Message.md) | (Opcional) Pode ser retornado mais de uma mensagem, porém para os serviços aqui descritos será retornado somente uma mensagem.&lt;br&gt;&lt;br&gt;MESSAGE_CODE MESSAGE_TEXT TRANSAÇÃO&lt;br&gt;-4 INVALID_CHANNEL Todas&lt;br&gt;-4 INVALID_IF Todas&lt;br&gt;-4 INVALID_TRANSACTION Todas&lt;br&gt;-4 INVALID_UNIT Todas&lt;br&gt;-4 INVALID_CATEGORY Todas&lt;br&gt;-4 INVALID_PRIORITY Todas&lt;br&gt;-4 TRANSACTION_NOT_PERMMITED Todas&lt;br&gt;-4 QUEUE_EMPTY 8000&lt;br&gt;&lt;br&gt;OBS. Quando o campo MESSAGE é retornado o RESPONSE_CODE será 1. | [optional] 
**exception** | [**\Swagger\Client\Model\Message[]**](Message.md) | (Opcional) Quando acontece uma exceção tratada ou não tratada.&lt;br&gt;&lt;br&gt;MESSAGE_CODE MESSAGE_TEXT TRANSAÇÃO&lt;br&gt;-3 Exception tratada Todas&lt;br&gt;-3 GENERIC_ERROR Todas&lt;br&gt;OBS. Quando o campo EXCEPTION é retornado o RESPONSE_CODE é -1. | [optional] 
**response_code** | **float** | UNSUCCESSFULLY(-1)&lt;br&gt;SUCCESSFULLY(0)&lt;br&gt;SUCCESSFULLY_WARNING(1)&lt;br&gt;SUCCESSFULLY_EMPTY_DATA(2) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


