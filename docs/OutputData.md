# SwaggerClient::OutputData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**queues** | [**Array&lt;Queue&gt;**](Queue.md) | Lista de senhas atual.&lt;br&gt;Para transação 8000 este campo sempre será retornado baseado no filtro de entrada&lt;br&gt;Para a transação 8001 este campo será retornado baseado no campo filter. | [optional] 
**queue** | [**Queue**](Queue.md) | Senha obtida para a loja, categoria e prioridade informada.&lt;br&gt;Este campo só é retornado para a transação 8001. | [optional] 


