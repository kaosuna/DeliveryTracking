<?php


namespace Pasuke\JapanDeliveryTracker;


interface JapanDeliveryTracker
{
    /**
     * @return TrackingInfo
     */
    public static function getTrackingInfo(): TrackingInfo;
}
