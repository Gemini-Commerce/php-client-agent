<?php
/**
 * AgentSortOrder
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\Agent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * agent/service.proto
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: version not set
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\Agent\Model;
use \GeminiCommerce\Agent\ObjectSerializer;

/**
 * AgentSortOrder Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\Agent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AgentSortOrder
{
    /**
     * Possible values of this enum
     */
    public const DESC = 'DESC';

    public const ASC = 'ASC';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DESC,
            self::ASC
        ];
    }
}


