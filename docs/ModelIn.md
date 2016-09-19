# ModelIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**trn** | **float** | (Obrigatório) Identificação da Transação&lt;br&gt;8000 - Obtêm a lista de senhas&lt;br&gt;8001 - Solicita uma senha | [optional] 
**chn** | **float** | (Obrigatório) Canal a ser acessado&lt;br&gt;1 - CRM&lt;br&gt;2 - GONDOLA&lt;br&gt;3 - FEEDBACK&lt;br&gt;4 - MOBILE&lt;br&gt;5 - GESTÃO&lt;br&gt;6 - BACKOFFICE&lt;br&gt;7 - SORTEXT | [optional] 
**inst** | **float** | (Opcional) Instituição de acesso. Caso não seja informado será considerada a instituição default do sistema. | [optional] 
**unit** | **str** | (Obrigatório) Sigla da loja. | [optional] 
**cat** | **float** | Categoria do setor.&lt;br&gt;Para transação 8000 o campo é opcional, caso o mesmo não seja informado serão retornadas senhas para todas as categorias.&lt;br&gt;Para transação 8001 o campo é obrigatório. | [optional] 
**filter** | **float** | (Opcional) Campo utilizado apenas para transação 8001.&lt;br&gt;0 - não retorna a lista de senhas (Default).&lt;br&gt;1 - Retorna a lista de senhas para a categoria e a loja informada.&lt;br&gt;2 - Retorna a lista de senhas para todas as categorias e a loja informada. | [optional] 
**prior** | **float** | (Opcional) Prioridade da senha.&lt;br&gt;0 - Normal&lt;br&gt;1 - Prioritária&lt;br&gt;Para transação 8000 caso o mesmo não seja informado serão retornadas todas as senhas indepentende da prioridade.&lt;br&gt;Para a transação 8001 caso o mesmo não seja informado será solicitada uma senha com prioridade normal. | [optional] 
**token** | **str** | (Opcional) Token seguro gerado pelo FCM (Firebase Cloud Messaging).&lt;br&gt;Caso não seja informado nenhuma notificação será enviada para um cliente Web ou Dispositivo IOS/Android. | [optional] 
**_not** | **float** | (Opcional) Regra de notificação via FCM.&lt;br&gt;Caso o campo não seja informado o valor padrão será X.&lt;br&gt;Campo é composto por uma lógica binária:&lt;br&gt;bit 0 - 1 - notificar ou 0 - não notificar&lt;br&gt;bit 1 2 3 - número de senhas para ser notificado.&lt;br&gt;Exemplos:&lt;br&gt;0 1 0 - será notificado 2 senhas antes da solicitada.&lt;br&gt;0 1 1 -  será notificado 3 senhas antes da solicitada.&lt;br&gt;bit 4 - 0 - notificação sem som 1 - notificação com som. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


