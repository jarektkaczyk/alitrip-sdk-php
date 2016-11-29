<?php

namespace Sofa\Alitrip\Domain;

/**
 * 日历库存规则
 * @author auto create
 */
class DateRule
{

    /**
     * 日历库存  日期格式必须是yyyy-MM-dd
     **/
    public $date_inventory;

    /**
     * 结束时间
     **/
    public $end_date;

    /**
     * 计价规则描述
     **/
    public $fare_rule_desc;

    /**
     * 库存数
     **/
    public $inventory;

    /**
     * 门票价格 精确到分
     **/
    public $price;

    /**
     * 开始时间
     **/
    public $start_date;

    /**
     * 指定购买的星期 1、2、3、4、5、6、7分别表示周一至周日
     **/
    public $weeks;
}
