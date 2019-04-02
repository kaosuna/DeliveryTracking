<?php


namespace Pasuke\JapanDeliveryTracker;


interface JapanDeliveryTracker
{
    /**
     * 配送情報を取得する
     *
     * @return DeliveryItemStatus
     */
    public static function getTrackingInfo(): DeliveryItemStatus;
}
