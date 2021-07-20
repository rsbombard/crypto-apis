<?php
/**
 * GetZilliqaAddressDetailsRI
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * CryptoAPIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: developers@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace CryptoAPIs\Model;

use \ArrayAccess;
use \CryptoAPIs\ObjectSerializer;

/**
 * GetZilliqaAddressDetailsRI Class Doc Comment
 *
 * @category Class
 * @package  CryptoAPIs
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetZilliqaAddressDetailsRI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetZilliqaAddressDetailsRI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance' => '\CryptoAPIs\Model\GetZilliqaAddressDetailsRIBalance',
        'incoming_transactions_count' => 'int',
        'outgoing_transactions_count' => 'int',
        'transactions_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'balance' => null,
        'incoming_transactions_count' => null,
        'outgoing_transactions_count' => null,
        'transactions_count' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'balance' => 'balance',
        'incoming_transactions_count' => 'incomingTransactionsCount',
        'outgoing_transactions_count' => 'outgoingTransactionsCount',
        'transactions_count' => 'transactionsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance' => 'setBalance',
        'incoming_transactions_count' => 'setIncomingTransactionsCount',
        'outgoing_transactions_count' => 'setOutgoingTransactionsCount',
        'transactions_count' => 'setTransactionsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance' => 'getBalance',
        'incoming_transactions_count' => 'getIncomingTransactionsCount',
        'outgoing_transactions_count' => 'getOutgoingTransactionsCount',
        'transactions_count' => 'getTransactionsCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['balance'] = $data['balance'] ?? null;
        $this->container['incoming_transactions_count'] = $data['incoming_transactions_count'] ?? null;
        $this->container['outgoing_transactions_count'] = $data['outgoing_transactions_count'] ?? null;
        $this->container['transactions_count'] = $data['transactions_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['incoming_transactions_count'] === null) {
            $invalidProperties[] = "'incoming_transactions_count' can't be null";
        }
        if ($this->container['outgoing_transactions_count'] === null) {
            $invalidProperties[] = "'outgoing_transactions_count' can't be null";
        }
        if ($this->container['transactions_count'] === null) {
            $invalidProperties[] = "'transactions_count' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets balance
     *
     * @return \CryptoAPIs\Model\GetZilliqaAddressDetailsRIBalance
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \CryptoAPIs\Model\GetZilliqaAddressDetailsRIBalance $balance balance
     *
     * @return self
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets incoming_transactions_count
     *
     * @return int
     */
    public function getIncomingTransactionsCount()
    {
        return $this->container['incoming_transactions_count'];
    }

    /**
     * Sets incoming_transactions_count
     *
     * @param int $incoming_transactions_count Defines the received transaction count to the address.
     *
     * @return self
     */
    public function setIncomingTransactionsCount($incoming_transactions_count)
    {
        $this->container['incoming_transactions_count'] = $incoming_transactions_count;

        return $this;
    }

    /**
     * Gets outgoing_transactions_count
     *
     * @return int
     */
    public function getOutgoingTransactionsCount()
    {
        return $this->container['outgoing_transactions_count'];
    }

    /**
     * Sets outgoing_transactions_count
     *
     * @param int $outgoing_transactions_count Defines the sent transaction count from the address.
     *
     * @return self
     */
    public function setOutgoingTransactionsCount($outgoing_transactions_count)
    {
        $this->container['outgoing_transactions_count'] = $outgoing_transactions_count;

        return $this;
    }

    /**
     * Gets transactions_count
     *
     * @return int
     */
    public function getTransactionsCount()
    {
        return $this->container['transactions_count'];
    }

    /**
     * Sets transactions_count
     *
     * @param int $transactions_count Defines the entire count of the transactions.
     *
     * @return self
     */
    public function setTransactionsCount($transactions_count)
    {
        $this->container['transactions_count'] = $transactions_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


