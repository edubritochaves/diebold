<?php
/**
 * DataOut
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SERVCore NG
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 4.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * DataOut Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DataOut implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'dataOut';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'output_data' => '\Swagger\Client\Model\OutputData',
        'message' => '\Swagger\Client\Model\Message[]',
        'exception' => '\Swagger\Client\Model\Message[]',
        'response_code' => 'float'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'output_data' => 'OUTPUT_DATA',
        'message' => 'MESSAGE',
        'exception' => 'EXCEPTION',
        'response_code' => 'RESPONSE_CODE'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'output_data' => 'setOutputData',
        'message' => 'setMessage',
        'exception' => 'setException',
        'response_code' => 'setResponseCode'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'output_data' => 'getOutputData',
        'message' => 'getMessage',
        'exception' => 'getException',
        'response_code' => 'getResponseCode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['output_data'] = isset($data['output_data']) ? $data['output_data'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['exception'] = isset($data['exception']) ? $data['exception'] : null;
        $this->container['response_code'] = isset($data['response_code']) ? $data['response_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets output_data
     * @return \Swagger\Client\Model\OutputData
     */
    public function getOutputData()
    {
        return $this->container['output_data'];
    }

    /**
     * Sets output_data
     * @param \Swagger\Client\Model\OutputData $output_data Dados de saída
     * @return $this
     */
    public function setOutputData($output_data)
    {
        $this->container['output_data'] = $output_data;

        return $this;
    }

    /**
     * Gets message
     * @return \Swagger\Client\Model\Message[]
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param \Swagger\Client\Model\Message[] $message (Opcional) Pode ser retornado mais de uma mensagem, porém para os serviços aqui descritos será retornado somente uma mensagem.<br><br>MESSAGE_CODE MESSAGE_TEXT TRANSAÇÃO<br>-4 INVALID_CHANNEL Todas<br>-4 INVALID_IF Todas<br>-4 INVALID_TRANSACTION Todas<br>-4 INVALID_UNIT Todas<br>-4 INVALID_CATEGORY Todas<br>-4 INVALID_PRIORITY Todas<br>-4 TRANSACTION_NOT_PERMMITED Todas<br>-4 QUEUE_EMPTY 8000<br><br>OBS. Quando o campo MESSAGE é retornado o RESPONSE_CODE será 1.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets exception
     * @return \Swagger\Client\Model\Message[]
     */
    public function getException()
    {
        return $this->container['exception'];
    }

    /**
     * Sets exception
     * @param \Swagger\Client\Model\Message[] $exception (Opcional) Quando acontece uma exceção tratada ou não tratada.<br><br>MESSAGE_CODE MESSAGE_TEXT TRANSAÇÃO<br>-3 Exception tratada Todas<br>-3 GENERIC_ERROR Todas<br>OBS. Quando o campo EXCEPTION é retornado o RESPONSE_CODE é -1.
     * @return $this
     */
    public function setException($exception)
    {
        $this->container['exception'] = $exception;

        return $this;
    }

    /**
     * Gets response_code
     * @return float
     */
    public function getResponseCode()
    {
        return $this->container['response_code'];
    }

    /**
     * Sets response_code
     * @param float $response_code UNSUCCESSFULLY(-1)<br>SUCCESSFULLY(0)<br>SUCCESSFULLY_WARNING(1)<br>SUCCESSFULLY_EMPTY_DATA(2)
     * @return $this
     */
    public function setResponseCode($response_code)
    {
        $this->container['response_code'] = $response_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


