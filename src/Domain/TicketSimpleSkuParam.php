<?php

namespace Sofa\Alitrip\Domain;

/**
 * 门票商品下 各个票种的sku信息
 * @author auto create
 */
class TicketSimpleSkuParam
{

    /**
     * 该票种下使用的价格规则
     **/
    public $price_rules;

    /**
     * 门票 票种类型
     **/
    public $ticket_type;
}
