<?php


namespace Pasuke\JapanDeliveryTracker;


interface DeliveryItemStatus
{
    /**
     * 配送状態を取得する
     *
     * @return DeliveryState 荷物の配送状態
     */
    public function getDeliveryState(): DeliveryState;

    /**
     * 荷物の追跡番号を取得する
     *
     * @return TrackingCode 荷物の追跡番号
     */
    public function getTrackingCode(): TrackingCode;
}
