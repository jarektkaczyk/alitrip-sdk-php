<?php

namespace Sofa\Alitrip\Domain;

/**
 * 门票商品信息
 * @author auto create
 */
class TicketInfoVO
{

    /**
     * 门票基本信息
     **/
    public $base_info;

    /**
     * 购买限制
     **/
    public $buy_limit;

    /**
     * 创建时间
     **/
    public $created;

    /**
     * 电子凭证信息
     **/
    public $eticket_info;

    /**
     * 商品id
     **/
    public $item_id;

    /**
     * 门票销售相关属性
     **/
    public $item_sale_info;

    /**
     * 上架状态
     **/
    public $item_status;

    /**
     * 修改时间
     **/
    public $modified;

    /**
     * 新版电子凭证信息
     **/
    public $new_eticket_info;

    /**
     * 卖家id
     **/
    public $seller_id;

    /**
     * 卖家昵称
     **/
    public $seller_nick;

    /**
     * 门票sku信息
     **/
    public $ticket_sku_infos;
}
