<?php


namespace Pasuke\JapanDeliveryTracker;


use MyCLabs\Enum\Enum;

/**
 * 配送状態を示すenum
 *
 * @package Pasuke\JapanDeliveryTracker
 * @method static DeliveryState UNKNOWN() 不明
 * @method static DeliveryState ON_DELIVERY() 配達中
 * @method static DeliveryState DELIVERED() 配達済み
 */
class DeliveryState extends Enum
{
    protected const UNKNOWN = 'UNKNOWN';
    protected const ON_DELIVERY = 'ON_DELIVERY';
    protected const DELIVERED = 'DELIVERED';
}