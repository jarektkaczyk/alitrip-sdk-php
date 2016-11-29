<?php

namespace Sofa\Alitrip\Domain;

/**
 * 必填，每日价格库存。
 * @author auto create
 */
class DateInventory
{

    /**
     * 日期。格式：2016-12-10 23:59:00
     **/
    public $date;

    /**
     * 价格，以分为单位，必须大于0。
     **/
    public $price;

    /**
     * 库存，必须大于等于0
     **/
    public $stock;
}
