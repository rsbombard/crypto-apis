<?php
/**
 * GetContractDetailsByAddressResponseItem
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Crypto APIs
 *
 * Crypto APIs 2.0 is a complex and innovative infrastructure layer that radically simplifies the development of any Blockchain and Crypto related applications. Organized around REST, Crypto APIs 2.0 can assist both novice Bitcoin/Ethereum enthusiasts and crypto experts with the development of their blockchain applications. Crypto APIs 2.0 provides unified endpoints and data, raw data, automatic tokens and coins forwardings, callback functionalities, and much more.
 *
 * The version of the OpenAPI document: 2.0.0
 * Contact: bizdev@cryptoapis.io
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GetContractDetailsByAddressResponseItem Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetContractDetailsByAddressResponseItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetContractDetailsByAddressResponseItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'confirmed_balance' => 'string',
        'creator_address' => 'string',
        'token_decimals' => 'string',
        'token_name' => 'string',
        'token_symbol' => 'string',
        'token_type' => 'string',
        'tokens_balance' => 'string',
        'total_supply' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'confirmed_balance' => null,
        'creator_address' => null,
        'token_decimals' => null,
        'token_name' => null,
        'token_symbol' => null,
        'token_type' => null,
        'tokens_balance' => null,
        'total_supply' => null
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
        'confirmed_balance' => 'confirmedBalance',
        'creator_address' => 'creatorAddress',
        'token_decimals' => 'tokenDecimals',
        'token_name' => 'tokenName',
        'token_symbol' => 'tokenSymbol',
        'token_type' => 'tokenType',
        'tokens_balance' => 'tokensBalance',
        'total_supply' => 'totalSupply'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'confirmed_balance' => 'setConfirmedBalance',
        'creator_address' => 'setCreatorAddress',
        'token_decimals' => 'setTokenDecimals',
        'token_name' => 'setTokenName',
        'token_symbol' => 'setTokenSymbol',
        'token_type' => 'setTokenType',
        'tokens_balance' => 'setTokensBalance',
        'total_supply' => 'setTotalSupply'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'confirmed_balance' => 'getConfirmedBalance',
        'creator_address' => 'getCreatorAddress',
        'token_decimals' => 'getTokenDecimals',
        'token_name' => 'getTokenName',
        'token_symbol' => 'getTokenSymbol',
        'token_type' => 'getTokenType',
        'tokens_balance' => 'getTokensBalance',
        'total_supply' => 'getTotalSupply'
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
        $this->container['confirmed_balance'] = $data['confirmed_balance'] ?? null;
        $this->container['creator_address'] = $data['creator_address'] ?? null;
        $this->container['token_decimals'] = $data['token_decimals'] ?? null;
        $this->container['token_name'] = $data['token_name'] ?? null;
        $this->container['token_symbol'] = $data['token_symbol'] ?? null;
        $this->container['token_type'] = $data['token_type'] ?? null;
        $this->container['tokens_balance'] = $data['tokens_balance'] ?? null;
        $this->container['total_supply'] = $data['total_supply'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['confirmed_balance'] === null) {
            $invalidProperties[] = "'confirmed_balance' can't be null";
        }
        if ($this->container['creator_address'] === null) {
            $invalidProperties[] = "'creator_address' can't be null";
        }
        if ($this->container['tokens_balance'] === null) {
            $invalidProperties[] = "'tokens_balance' can't be null";
        }
        if ($this->container['total_supply'] === null) {
            $invalidProperties[] = "'total_supply' can't be null";
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
     * Gets confirmed_balance
     *
     * @return string
     */
    public function getConfirmedBalance()
    {
        return $this->container['confirmed_balance'];
    }

    /**
     * Sets confirmed_balance
     *
     * @param string $confirmed_balance Token balance
     *
     * @return self
     */
    public function setConfirmedBalance($confirmed_balance)
    {
        $this->container['confirmed_balance'] = $confirmed_balance;

        return $this;
    }

    /**
     * Gets creator_address
     *
     * @return string
     */
    public function getCreatorAddress()
    {
        return $this->container['creator_address'];
    }

    /**
     * Sets creator_address
     *
     * @param string $creator_address Token creator
     *
     * @return self
     */
    public function setCreatorAddress($creator_address)
    {
        $this->container['creator_address'] = $creator_address;

        return $this;
    }

    /**
     * Gets token_decimals
     *
     * @return string|null
     */
    public function getTokenDecimals()
    {
        return $this->container['token_decimals'];
    }

    /**
     * Sets token_decimals
     *
     * @param string|null $token_decimals Number of decimals
     *
     * @return self
     */
    public function setTokenDecimals($token_decimals)
    {
        $this->container['token_decimals'] = $token_decimals;

        return $this;
    }

    /**
     * Gets token_name
     *
     * @return string|null
     */
    public function getTokenName()
    {
        return $this->container['token_name'];
    }

    /**
     * Sets token_name
     *
     * @param string|null $token_name Token name
     *
     * @return self
     */
    public function setTokenName($token_name)
    {
        $this->container['token_name'] = $token_name;

        return $this;
    }

    /**
     * Gets token_symbol
     *
     * @return string|null
     */
    public function getTokenSymbol()
    {
        return $this->container['token_symbol'];
    }

    /**
     * Sets token_symbol
     *
     * @param string|null $token_symbol Token symbol
     *
     * @return self
     */
    public function setTokenSymbol($token_symbol)
    {
        $this->container['token_symbol'] = $token_symbol;

        return $this;
    }

    /**
     * Gets token_type
     *
     * @return string|null
     */
    public function getTokenType()
    {
        return $this->container['token_type'];
    }

    /**
     * Sets token_type
     *
     * @param string|null $token_type Token type
     *
     * @return self
     */
    public function setTokenType($token_type)
    {
        $this->container['token_type'] = $token_type;

        return $this;
    }

    /**
     * Gets tokens_balance
     *
     * @return string
     */
    public function getTokensBalance()
    {
        return $this->container['tokens_balance'];
    }

    /**
     * Sets tokens_balance
     *
     * @param string $tokens_balance Token balance
     *
     * @return self
     */
    public function setTokensBalance($tokens_balance)
    {
        $this->container['tokens_balance'] = $tokens_balance;

        return $this;
    }

    /**
     * Gets total_supply
     *
     * @return string
     */
    public function getTotalSupply()
    {
        return $this->container['total_supply'];
    }

    /**
     * Sets total_supply
     *
     * @param string $total_supply Token total supply
     *
     * @return self
     */
    public function setTotalSupply($total_supply)
    {
        $this->container['total_supply'] = $total_supply;

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

