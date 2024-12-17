<?php
/**
 * ModelInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  NumenoAdmin\Model
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Numeno Admin API
 *
 * ## Introduction  Use the Numeno Administration API to create API Keys and set their permissions (which we call Scopes). This API is meant to be used by administrators of your organization.  ## Scopes  Scopes are used to let API Keys access only certain parts of the API.  Scopes are expressed as a string of the form `api:resource:action`.  For example, from the Numeno Article Recommender API (`art-rec`):   - `art-rec:feeds:read` - can read any Feed (eg. `GET` `/feeds`, `/feeds/:id`, `/feeds/:id/streams`, etc.)   - `art-rec:feeds:write` - can write (and read) any Feed   - `art-rec:feeds:*` - can perform any action on Feeds   - `art-rec:*:read` - can read any resource on `art-rec`   - `*:*:*` - can do everything
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@numeno.ai
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace NumenoAdmin\Model;

/**
 * Interface abstracting model access.
 *
 * @package NumenoAdmin\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}
