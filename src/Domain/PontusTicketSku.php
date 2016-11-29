<?php

namespace Sofa\Alitrip\Domain;

/**
 * 门票sku信息
 * @author auto create
 */
class PontusTicketSku
{

    /**
     * 预定规则
     **/
    public $booking_rule_info_list;

    /**
     * 库存规则
     **/
    public $date_rule;

    /**
     * 园方式 1、   身份证 2、  二维码 3、  兑换纸质票
     **/
    public $enter_way;

    /**
     * 自定义入园方式
     **/
    public $enter_way_value;

    /**
     * 商品id
     **/
    public $item_id;

    /**
     * 限购规则
     **/
    public $limit_rule;

    /**
     * 商品编码
     **/
    public $outer_id;

    /**
     * 改期描述 当post_pone_type为2时，该字段必填
     **/
    public $post_pone_desc;

    /**
     * 改期类型 1为无条件改期 2有条件改期 3不可改期
     **/
    public $post_pone_type;

    /**
     * 是否实名制；0为非实名制 1为实名制
     **/
    public $real_name;

    /**
     * 退票描述 当refund_type为2，该字段必填
     **/
    public $refund_desc;

    /**
     * 退票类型 1为无条件退改 2为有条件退改 2不可退改
     **/
    public $refund_type;

    /**
     * skuId
     **/
    public $sku_id;

    /**
     * 票种
     **/
    public $ticket_type;
}
