<?php
/**
 * Build
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Kleister
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Kleister OpenAPI
 *
 * API definition for Kleister, manage mod packs for Minecraft
 *
 * The version of the OpenAPI document: 1.0.0-alpha1
 * Contact: kleister@webhippie.de
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Kleister\Model;

use \ArrayAccess;
use \Kleister\ObjectSerializer;

/**
 * Build Class Doc Comment
 *
 * @category Class
 * @description Model to represent build
 * @package  Kleister
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Build implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'build';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'packId' => 'string',
        'pack' => '\Kleister\Model\Pack',
        'minecraftId' => 'string',
        'minecraft' => '\Kleister\Model\Minecraft',
        'forgeId' => 'string',
        'forge' => '\Kleister\Model\Forge',
        'neoforgeId' => 'string',
        'neoforge' => '\Kleister\Model\Neoforge',
        'quiltId' => 'string',
        'quilt' => '\Kleister\Model\Quilt',
        'fabricId' => 'string',
        'fabric' => '\Kleister\Model\Fabric',
        'slug' => 'string',
        'name' => 'string',
        'java' => 'string',
        'memory' => 'string',
        'public' => 'bool',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'versions' => '\Kleister\Model\BuildVersion[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'packId' => null,
        'pack' => null,
        'minecraftId' => null,
        'minecraft' => null,
        'forgeId' => null,
        'forge' => null,
        'neoforgeId' => null,
        'neoforge' => null,
        'quiltId' => null,
        'quilt' => null,
        'fabricId' => null,
        'fabric' => null,
        'slug' => null,
        'name' => null,
        'java' => null,
        'memory' => null,
        'public' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'versions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'packId' => false,
        'pack' => false,
        'minecraftId' => true,
        'minecraft' => false,
        'forgeId' => true,
        'forge' => false,
        'neoforgeId' => true,
        'neoforge' => false,
        'quiltId' => true,
        'quilt' => false,
        'fabricId' => true,
        'fabric' => false,
        'slug' => true,
        'name' => true,
        'java' => true,
        'memory' => true,
        'public' => true,
        'createdAt' => false,
        'updatedAt' => false,
        'versions' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'packId' => 'pack_id',
        'pack' => 'pack',
        'minecraftId' => 'minecraft_id',
        'minecraft' => 'minecraft',
        'forgeId' => 'forge_id',
        'forge' => 'forge',
        'neoforgeId' => 'neoforge_id',
        'neoforge' => 'neoforge',
        'quiltId' => 'quilt_id',
        'quilt' => 'quilt',
        'fabricId' => 'fabric_id',
        'fabric' => 'fabric',
        'slug' => 'slug',
        'name' => 'name',
        'java' => 'java',
        'memory' => 'memory',
        'public' => 'public',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'versions' => 'versions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'packId' => 'setPackId',
        'pack' => 'setPack',
        'minecraftId' => 'setMinecraftId',
        'minecraft' => 'setMinecraft',
        'forgeId' => 'setForgeId',
        'forge' => 'setForge',
        'neoforgeId' => 'setNeoforgeId',
        'neoforge' => 'setNeoforge',
        'quiltId' => 'setQuiltId',
        'quilt' => 'setQuilt',
        'fabricId' => 'setFabricId',
        'fabric' => 'setFabric',
        'slug' => 'setSlug',
        'name' => 'setName',
        'java' => 'setJava',
        'memory' => 'setMemory',
        'public' => 'setPublic',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'versions' => 'setVersions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'packId' => 'getPackId',
        'pack' => 'getPack',
        'minecraftId' => 'getMinecraftId',
        'minecraft' => 'getMinecraft',
        'forgeId' => 'getForgeId',
        'forge' => 'getForge',
        'neoforgeId' => 'getNeoforgeId',
        'neoforge' => 'getNeoforge',
        'quiltId' => 'getQuiltId',
        'quilt' => 'getQuilt',
        'fabricId' => 'getFabricId',
        'fabric' => 'getFabric',
        'slug' => 'getSlug',
        'name' => 'getName',
        'java' => 'getJava',
        'memory' => 'getMemory',
        'public' => 'getPublic',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'versions' => 'getVersions'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('packId', $data ?? [], null);
        $this->setIfExists('pack', $data ?? [], null);
        $this->setIfExists('minecraftId', $data ?? [], null);
        $this->setIfExists('minecraft', $data ?? [], null);
        $this->setIfExists('forgeId', $data ?? [], null);
        $this->setIfExists('forge', $data ?? [], null);
        $this->setIfExists('neoforgeId', $data ?? [], null);
        $this->setIfExists('neoforge', $data ?? [], null);
        $this->setIfExists('quiltId', $data ?? [], null);
        $this->setIfExists('quilt', $data ?? [], null);
        $this->setIfExists('fabricId', $data ?? [], null);
        $this->setIfExists('fabric', $data ?? [], null);
        $this->setIfExists('slug', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('java', $data ?? [], null);
        $this->setIfExists('memory', $data ?? [], null);
        $this->setIfExists('public', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('versions', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets packId
     *
     * @return string|null
     */
    public function getPackId()
    {
        return $this->container['packId'];
    }

    /**
     * Sets packId
     *
     * @param string|null $packId packId
     *
     * @return self
     */
    public function setPackId($packId)
    {
        if (is_null($packId)) {
            throw new \InvalidArgumentException('non-nullable packId cannot be null');
        }
        $this->container['packId'] = $packId;

        return $this;
    }

    /**
     * Gets pack
     *
     * @return \Kleister\Model\Pack|null
     */
    public function getPack()
    {
        return $this->container['pack'];
    }

    /**
     * Sets pack
     *
     * @param \Kleister\Model\Pack|null $pack pack
     *
     * @return self
     */
    public function setPack($pack)
    {
        if (is_null($pack)) {
            throw new \InvalidArgumentException('non-nullable pack cannot be null');
        }
        $this->container['pack'] = $pack;

        return $this;
    }

    /**
     * Gets minecraftId
     *
     * @return string|null
     */
    public function getMinecraftId()
    {
        return $this->container['minecraftId'];
    }

    /**
     * Sets minecraftId
     *
     * @param string|null $minecraftId minecraftId
     *
     * @return self
     */
    public function setMinecraftId($minecraftId)
    {
        if (is_null($minecraftId)) {
            array_push($this->openAPINullablesSetToNull, 'minecraftId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('minecraftId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['minecraftId'] = $minecraftId;

        return $this;
    }

    /**
     * Gets minecraft
     *
     * @return \Kleister\Model\Minecraft|null
     */
    public function getMinecraft()
    {
        return $this->container['minecraft'];
    }

    /**
     * Sets minecraft
     *
     * @param \Kleister\Model\Minecraft|null $minecraft minecraft
     *
     * @return self
     */
    public function setMinecraft($minecraft)
    {
        if (is_null($minecraft)) {
            throw new \InvalidArgumentException('non-nullable minecraft cannot be null');
        }
        $this->container['minecraft'] = $minecraft;

        return $this;
    }

    /**
     * Gets forgeId
     *
     * @return string|null
     */
    public function getForgeId()
    {
        return $this->container['forgeId'];
    }

    /**
     * Sets forgeId
     *
     * @param string|null $forgeId forgeId
     *
     * @return self
     */
    public function setForgeId($forgeId)
    {
        if (is_null($forgeId)) {
            array_push($this->openAPINullablesSetToNull, 'forgeId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('forgeId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['forgeId'] = $forgeId;

        return $this;
    }

    /**
     * Gets forge
     *
     * @return \Kleister\Model\Forge|null
     */
    public function getForge()
    {
        return $this->container['forge'];
    }

    /**
     * Sets forge
     *
     * @param \Kleister\Model\Forge|null $forge forge
     *
     * @return self
     */
    public function setForge($forge)
    {
        if (is_null($forge)) {
            throw new \InvalidArgumentException('non-nullable forge cannot be null');
        }
        $this->container['forge'] = $forge;

        return $this;
    }

    /**
     * Gets neoforgeId
     *
     * @return string|null
     */
    public function getNeoforgeId()
    {
        return $this->container['neoforgeId'];
    }

    /**
     * Sets neoforgeId
     *
     * @param string|null $neoforgeId neoforgeId
     *
     * @return self
     */
    public function setNeoforgeId($neoforgeId)
    {
        if (is_null($neoforgeId)) {
            array_push($this->openAPINullablesSetToNull, 'neoforgeId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('neoforgeId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['neoforgeId'] = $neoforgeId;

        return $this;
    }

    /**
     * Gets neoforge
     *
     * @return \Kleister\Model\Neoforge|null
     */
    public function getNeoforge()
    {
        return $this->container['neoforge'];
    }

    /**
     * Sets neoforge
     *
     * @param \Kleister\Model\Neoforge|null $neoforge neoforge
     *
     * @return self
     */
    public function setNeoforge($neoforge)
    {
        if (is_null($neoforge)) {
            throw new \InvalidArgumentException('non-nullable neoforge cannot be null');
        }
        $this->container['neoforge'] = $neoforge;

        return $this;
    }

    /**
     * Gets quiltId
     *
     * @return string|null
     */
    public function getQuiltId()
    {
        return $this->container['quiltId'];
    }

    /**
     * Sets quiltId
     *
     * @param string|null $quiltId quiltId
     *
     * @return self
     */
    public function setQuiltId($quiltId)
    {
        if (is_null($quiltId)) {
            array_push($this->openAPINullablesSetToNull, 'quiltId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('quiltId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['quiltId'] = $quiltId;

        return $this;
    }

    /**
     * Gets quilt
     *
     * @return \Kleister\Model\Quilt|null
     */
    public function getQuilt()
    {
        return $this->container['quilt'];
    }

    /**
     * Sets quilt
     *
     * @param \Kleister\Model\Quilt|null $quilt quilt
     *
     * @return self
     */
    public function setQuilt($quilt)
    {
        if (is_null($quilt)) {
            throw new \InvalidArgumentException('non-nullable quilt cannot be null');
        }
        $this->container['quilt'] = $quilt;

        return $this;
    }

    /**
     * Gets fabricId
     *
     * @return string|null
     */
    public function getFabricId()
    {
        return $this->container['fabricId'];
    }

    /**
     * Sets fabricId
     *
     * @param string|null $fabricId fabricId
     *
     * @return self
     */
    public function setFabricId($fabricId)
    {
        if (is_null($fabricId)) {
            array_push($this->openAPINullablesSetToNull, 'fabricId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fabricId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fabricId'] = $fabricId;

        return $this;
    }

    /**
     * Gets fabric
     *
     * @return \Kleister\Model\Fabric|null
     */
    public function getFabric()
    {
        return $this->container['fabric'];
    }

    /**
     * Sets fabric
     *
     * @param \Kleister\Model\Fabric|null $fabric fabric
     *
     * @return self
     */
    public function setFabric($fabric)
    {
        if (is_null($fabric)) {
            throw new \InvalidArgumentException('non-nullable fabric cannot be null');
        }
        $this->container['fabric'] = $fabric;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string|null
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string|null $slug slug
     *
     * @return self
     */
    public function setSlug($slug)
    {
        if (is_null($slug)) {
            array_push($this->openAPINullablesSetToNull, 'slug');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('slug', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets java
     *
     * @return string|null
     */
    public function getJava()
    {
        return $this->container['java'];
    }

    /**
     * Sets java
     *
     * @param string|null $java java
     *
     * @return self
     */
    public function setJava($java)
    {
        if (is_null($java)) {
            array_push($this->openAPINullablesSetToNull, 'java');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('java', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['java'] = $java;

        return $this;
    }

    /**
     * Gets memory
     *
     * @return string|null
     */
    public function getMemory()
    {
        return $this->container['memory'];
    }

    /**
     * Sets memory
     *
     * @param string|null $memory memory
     *
     * @return self
     */
    public function setMemory($memory)
    {
        if (is_null($memory)) {
            array_push($this->openAPINullablesSetToNull, 'memory');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('memory', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['memory'] = $memory;

        return $this;
    }

    /**
     * Gets public
     *
     * @return bool|null
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     *
     * @param bool|null $public public
     *
     * @return self
     */
    public function setPublic($public)
    {
        if (is_null($public)) {
            array_push($this->openAPINullablesSetToNull, 'public');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('public', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets versions
     *
     * @return \Kleister\Model\BuildVersion[]|null
     */
    public function getVersions()
    {
        return $this->container['versions'];
    }

    /**
     * Sets versions
     *
     * @param \Kleister\Model\BuildVersion[]|null $versions versions
     *
     * @return self
     */
    public function setVersions($versions)
    {
        if (is_null($versions)) {
            array_push($this->openAPINullablesSetToNull, 'versions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('versions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['versions'] = $versions;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

