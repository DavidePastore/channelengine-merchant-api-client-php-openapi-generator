<?php
/**
 * NotificationType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Model;
use \ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * NotificationType Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NotificationType
{
    /**
     * Possible values of this enum
     */
    public const CHANNEL_ORDER_ANONYMIZED_BY_REQUEST = 'CHANNEL_ORDER_ANONYMIZED_BY_REQUEST';

    public const CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY = 'CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY';

    public const CHANNEL_ORDER_CANCELLATION_REQUEST_NEW = 'CHANNEL_ORDER_CANCELLATION_REQUEST_NEW';

    public const CHANNEL_ORDER_CORRECTION_NEEDED = 'CHANNEL_ORDER_CORRECTION_NEEDED';

    public const CHANNEL_ORDER_DUPLICATE_LINE = 'CHANNEL_ORDER_DUPLICATE_LINE';

    public const CHANNEL_ORDER_INVOICE_SEND_FAILED = 'CHANNEL_ORDER_INVOICE_SEND_FAILED';

    public const CHANNEL_ORDER_IMPORT_FAILED = 'CHANNEL_ORDER_IMPORT_FAILED';

    public const CHANNEL_ORDER_NEW = 'CHANNEL_ORDER_NEW';

    public const CHANNEL_ORDER_OVERDUE = 'CHANNEL_ORDER_OVERDUE';

    public const CHANNEL_PRODUCT_DATA_EXPORT_FAILED = 'CHANNEL_PRODUCT_DATA_EXPORT_FAILED';

    public const CHANNEL_PRODUCT_DATA_IMPORT_FAILED = 'CHANNEL_PRODUCT_DATA_IMPORT_FAILED';

    public const CHANNEL_RETURN_EXPORT_FAILED = 'CHANNEL_RETURN_EXPORT_FAILED';

    public const CHANNEL_RETURN_IMPORT_FAILED = 'CHANNEL_RETURN_IMPORT_FAILED';

    public const CHANNEL_RETURN_NEW = 'CHANNEL_RETURN_NEW';

    public const CHANNEL_RETURN_OVERDUE = 'CHANNEL_RETURN_OVERDUE';

    public const CHANNEL_REFUND_EXPORT_FAILED = 'CHANNEL_REFUND_EXPORT_FAILED';

    public const CHANNEL_SHIPMENT_IMPORT_FAILED = 'CHANNEL_SHIPMENT_IMPORT_FAILED';

    public const CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED = 'CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED';

    public const CHANNEL_SHIPMENT_EXPORT_FAILED = 'CHANNEL_SHIPMENT_EXPORT_FAILED';

    public const CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED = 'CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED';

    public const CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED = 'CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED';

    public const CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED = 'CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED';

    public const CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED = 'CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED';

    public const CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER = 'CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER';

    public const CHANNELENGINE_SUPPORT_NOTIFICATION = 'CHANNELENGINE_SUPPORT_NOTIFICATION';

    public const CHANNELENGINE_WEBHOOK_RQUEST_FAILED = 'CHANNELENGINE_WEBHOOK_RQUEST_FAILED';

    public const FEED_NO_PRODUCTS_FAILED = 'FEED_NO_PRODUCTS_FAILED';

    public const FEED_IMPORT_FAILED = 'FEED_IMPORT_FAILED';

    public const GLOBAL_MESSAGE = 'GLOBAL_MESSAGE';

    public const MERCHANT_ORDER_EXPORT_FAILED = 'MERCHANT_ORDER_EXPORT_FAILED';

    public const PLUGIN_INVALID_SETTING = 'PLUGIN_INVALID_SETTING';

    public const PLUGIN_DEACTIVATED = 'PLUGIN_DEACTIVATED';

    public const PRODUCT_BUNDLE_IMPORT_FAILED = 'PRODUCT_BUNDLE_IMPORT_FAILED';

    public const CHANNEL_REFUND_LINE_ITEMS_ERROR = 'CHANNEL_REFUND_LINE_ITEMS_ERROR';

    public const CHANNEL_CANCELLATION_EXPORT_FAILED = 'CHANNEL_CANCELLATION_EXPORT_FAILED';

    public const MERCHANT_ORDER_EXPORT_LINES_CANCELLED = 'MERCHANT_ORDER_EXPORT_LINES_CANCELLED';

    public const OAUTH_REFRESH_TOKEN_ABOUT_TO_EXPIRE = 'OAUTH_REFRESH_TOKEN_ABOUT_TO_EXPIRE';

    public const MERCHANT_CANCELLATION_IMPORT_FAILED = 'MERCHANT_CANCELLATION_IMPORT_FAILED';

    public const CHANNEL_ORDER_TOO_LONG_ON_NEW = 'CHANNEL_ORDER_TOO_LONG_ON_NEW';

    public const MERCHANT_STOCK_UPDATE_FAILED = 'MERCHANT_STOCK_UPDATE_FAILED';

    public const FEED_INVALID_PRODUCTS_OCCURED = 'FEED_INVALID_PRODUCTS_OCCURED';

    public const CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO = 'CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO';

    public const CHANNEL_PRODUCT_OFFER_EXPORT_FAILED = 'CHANNEL_PRODUCT_OFFER_EXPORT_FAILED';

    public const TRANSLATION_IMAGE_TAGS_BROKEN = 'TRANSLATION_IMAGE_TAGS_BROKEN';

    public const CHANNEL_RETURN_DELETED = 'CHANNEL_RETURN_DELETED';

    public const TAX_PROVIDER_NOT_ACTIVATED = 'TAX_PROVIDER_NOT_ACTIVATED';

    public const STOCK_LOCATION_NOT_FOUND = 'STOCK_LOCATION_NOT_FOUND';

    public const CUSTOM_VAT_RATE_OVERLAPPING_RATES = 'CUSTOM_VAT_RATE_OVERLAPPING_RATES';

    public const TRANSLATION_FAILED = 'TRANSLATION_FAILED';

    public const ORDER_CANNOT_BE_FULFILLED = 'ORDER_CANNOT_BE_FULFILLED';

    public const CHANNEL_FULFILLMENT_SHIPMENT_RECEIVED = 'CHANNEL_FULFILLMENT_SHIPMENT_RECEIVED';

    public const TRANSLATION_RETRY = 'TRANSLATION_RETRY';

    public const PLUGIN_SALES_CHANNEL_DEACTIVATED = 'PLUGIN_SALES_CHANNEL_DEACTIVATED';

    public const PLUGIN_CATEGORIES_CHANGED = 'PLUGIN_CATEGORIES_CHANGED';

    public const PLUGIN_ATTRIBUTES_CHANGED = 'PLUGIN_ATTRIBUTES_CHANGED';

    public const ORDER_WITH_BACKORDER_STATUS = 'ORDER_WITH_BACKORDER_STATUS';

    public const ORDER_WITH_BACKORDER_STATUS_FULFILLED = 'ORDER_WITH_BACKORDER_STATUS_FULFILLED';

    public const ORDERS_GOT_REJECTED_BY_MCF = 'ORDERS_GOT_REJECTED_BY_MCF';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CHANNEL_ORDER_ANONYMIZED_BY_REQUEST,
            self::CHANNEL_ORDER_ANONYMIZED_AUTOMATICALLY,
            self::CHANNEL_ORDER_CANCELLATION_REQUEST_NEW,
            self::CHANNEL_ORDER_CORRECTION_NEEDED,
            self::CHANNEL_ORDER_DUPLICATE_LINE,
            self::CHANNEL_ORDER_INVOICE_SEND_FAILED,
            self::CHANNEL_ORDER_IMPORT_FAILED,
            self::CHANNEL_ORDER_NEW,
            self::CHANNEL_ORDER_OVERDUE,
            self::CHANNEL_PRODUCT_DATA_EXPORT_FAILED,
            self::CHANNEL_PRODUCT_DATA_IMPORT_FAILED,
            self::CHANNEL_RETURN_EXPORT_FAILED,
            self::CHANNEL_RETURN_IMPORT_FAILED,
            self::CHANNEL_RETURN_NEW,
            self::CHANNEL_RETURN_OVERDUE,
            self::CHANNEL_REFUND_EXPORT_FAILED,
            self::CHANNEL_SHIPMENT_IMPORT_FAILED,
            self::CHANNEL_SHIPMENT_IMPORT_STATUS_FAILED,
            self::CHANNEL_SHIPMENT_EXPORT_FAILED,
            self::CHANNEL_SHIPMENT_IMPORT_MISSING_LINE_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_IMPORT_STATUS_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_FAILED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_EXPORT_SUCCEEDED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_LINE_FOR_CLOSED_ORDER,
            self::CHANNELENGINE_SUPPORT_NOTIFICATION,
            self::CHANNELENGINE_WEBHOOK_RQUEST_FAILED,
            self::FEED_NO_PRODUCTS_FAILED,
            self::FEED_IMPORT_FAILED,
            self::GLOBAL_MESSAGE,
            self::MERCHANT_ORDER_EXPORT_FAILED,
            self::PLUGIN_INVALID_SETTING,
            self::PLUGIN_DEACTIVATED,
            self::PRODUCT_BUNDLE_IMPORT_FAILED,
            self::CHANNEL_REFUND_LINE_ITEMS_ERROR,
            self::CHANNEL_CANCELLATION_EXPORT_FAILED,
            self::MERCHANT_ORDER_EXPORT_LINES_CANCELLED,
            self::OAUTH_REFRESH_TOKEN_ABOUT_TO_EXPIRE,
            self::MERCHANT_CANCELLATION_IMPORT_FAILED,
            self::CHANNEL_ORDER_TOO_LONG_ON_NEW,
            self::MERCHANT_STOCK_UPDATE_FAILED,
            self::FEED_INVALID_PRODUCTS_OCCURED,
            self::CHANNEL_SHIPMENT_EXPORT_INVALID_MERCHANTSHIPMENTNO,
            self::CHANNEL_PRODUCT_OFFER_EXPORT_FAILED,
            self::TRANSLATION_IMAGE_TAGS_BROKEN,
            self::CHANNEL_RETURN_DELETED,
            self::TAX_PROVIDER_NOT_ACTIVATED,
            self::STOCK_LOCATION_NOT_FOUND,
            self::CUSTOM_VAT_RATE_OVERLAPPING_RATES,
            self::TRANSLATION_FAILED,
            self::ORDER_CANNOT_BE_FULFILLED,
            self::CHANNEL_FULFILLMENT_SHIPMENT_RECEIVED,
            self::TRANSLATION_RETRY,
            self::PLUGIN_SALES_CHANNEL_DEACTIVATED,
            self::PLUGIN_CATEGORIES_CHANGED,
            self::PLUGIN_ATTRIBUTES_CHANGED,
            self::ORDER_WITH_BACKORDER_STATUS,
            self::ORDER_WITH_BACKORDER_STATUS_FULFILLED,
            self::ORDERS_GOT_REJECTED_BY_MCF
        ];
    }
}


