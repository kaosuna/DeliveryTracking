<?php


namespace Pasuke\JapanDeliveryTracker;


interface JapanDeliveryTracker
{
    /**
     * 配送情報を取得する
     *
     * @return TrackingInfo
     */
    public static function getTrackingInfo(): TrackingInfo;
}
