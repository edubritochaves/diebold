/**
 * SERVCore NG
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */


package io.swagger.client.model;

import java.util.Objects;
import com.google.gson.annotations.SerializedName;
import io.swagger.annotations.ApiModel;
import io.swagger.annotations.ApiModelProperty;
import io.swagger.client.model.Queue;
import java.util.ArrayList;
import java.util.List;


/**
 * OutputData
 */
@javax.annotation.Generated(value = "class io.swagger.codegen.languages.JavaClientCodegen", date = "2016-09-19T22:43:24.169Z")
public class OutputData   {
  @SerializedName("queues")
  private List<Queue> queues = new ArrayList<Queue>();

  @SerializedName("queue")
  private Queue queue = null;

  public OutputData queues(List<Queue> queues) {
    this.queues = queues;
    return this;
  }

  public OutputData addQueuesItem(Queue queuesItem) {
    this.queues.add(queuesItem);
    return this;
  }

   /**
   * Lista de senhas atual.<br>Para transação 8000 este campo sempre será retornado baseado no filtro de entrada<br>Para a transação 8001 este campo será retornado baseado no campo filter.
   * @return queues
  **/
  @ApiModelProperty(example = "null", value = "Lista de senhas atual.<br>Para transação 8000 este campo sempre será retornado baseado no filtro de entrada<br>Para a transação 8001 este campo será retornado baseado no campo filter.")
  public List<Queue> getQueues() {
    return queues;
  }

  public void setQueues(List<Queue> queues) {
    this.queues = queues;
  }

  public OutputData queue(Queue queue) {
    this.queue = queue;
    return this;
  }

   /**
   * Senha obtida para a loja, categoria e prioridade informada.<br>Este campo só é retornado para a transação 8001.
   * @return queue
  **/
  @ApiModelProperty(example = "null", value = "Senha obtida para a loja, categoria e prioridade informada.<br>Este campo só é retornado para a transação 8001.")
  public Queue getQueue() {
    return queue;
  }

  public void setQueue(Queue queue) {
    this.queue = queue;
  }


  @Override
  public boolean equals(java.lang.Object o) {
    if (this == o) {
      return true;
    }
    if (o == null || getClass() != o.getClass()) {
      return false;
    }
    OutputData outputData = (OutputData) o;
    return Objects.equals(this.queues, outputData.queues) &&
        Objects.equals(this.queue, outputData.queue);
  }

  @Override
  public int hashCode() {
    return Objects.hash(queues, queue);
  }

  @Override
  public String toString() {
    StringBuilder sb = new StringBuilder();
    sb.append("class OutputData {\n");
    
    sb.append("    queues: ").append(toIndentedString(queues)).append("\n");
    sb.append("    queue: ").append(toIndentedString(queue)).append("\n");
    sb.append("}");
    return sb.toString();
  }

  /**
   * Convert the given object to string with each line indented by 4 spaces
   * (except the first line).
   */
  private String toIndentedString(java.lang.Object o) {
    if (o == null) {
      return "null";
    }
    return o.toString().replace("\n", "\n    ");
  }
}
