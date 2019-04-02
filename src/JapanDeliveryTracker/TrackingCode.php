<?php


namespace Pasuke\JapanDeliveryTracker;


interface TrackingCode
{
    /**
     * TrackingCode インスタンスを生成する
     *
     * @param string $trackingCode 追跡番号
     */
    public function __construct(string $trackingCode);

    /**
     * インスタンスが示す追跡番号を返す
     * コンストラクタで与えられた追跡番号からハイフンなどの余計な文字を取り除いたものを返す
     *
     * @return string
     */
    public function getTrackingCode(): string;
}
