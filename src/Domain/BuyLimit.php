<?php

namespace Sofa\Alitrip\Domain;

/**
 * 购买限制信息
 * @author auto create
 */
class BuyLimit
{

    /**
     * 提前多少天购买
     **/
    public $ahead_at_day;

    /**
     * 提前多少天小时
     **/
    public $ahead_at_hour;

    /**
     * 提前多少天分钟
     **/
    public $ahead_at_minute;

    /**
     * 最多能预约多少天
     **/
    public $max_day;
}
