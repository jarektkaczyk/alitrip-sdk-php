<?php

namespace Sofa\Alitrip\Domain;

/**
 * 商品的销售属性相关信息
 * @author auto create
 */
class PontusTicketItemSaleInfo
{

    /**
     * 上架状态
     **/
    public $approve_status;

    /**
     * 返现金额； 如果存在金额，说明该商品参与返现
     **/
    public $back_cash;

    /**
     * 发码方式 ,1为自动发码 跟电子凭证有关系 2为手工发码
     **/
    public $code_mode;

    /**
     * 提前多少天 不填写 默认为－1
     **/
    public $duration;

    /**
     * 指定入园日期 多少天内有效 当为数字时，表示多少天内有效，当为日期时，表示到某日期有效；日期格式：yyyy-MM-dd
     **/
    public $eff_day;

    /**
     * 是否支持会员打折。可选值：true，false；默认值：false(不打折)。不传的话默认为false
     **/
    public $has_discount;

    /**
     * 是否提供发票 默认为false  仅C商家需要设置该值 B商家强制提供发票
     **/
    public $has_invoice;

    /**
     * 是否橱窗推荐，可选值：true，false；默认值：false(不推荐)
     **/
    public $has_showcase;

    /**
     * 库存类型 1、    普通库存  2、  日历非共享库存 3、  日历共享库存
     **/
    public $inventory_type;

    /**
     * 关联商品与店铺类目 结构:&quot;,cid1,cid2,...,&quot;，如果店铺类目存在二级类目，必须传入子类目cids。 支持最大长度为：256 支持的最大列表长度为：256;如何获取cid：进入店铺，点击叶子类目，页面URL里包含&ldquo;category-1079296278.htm&rdquo;;，红色标记数字就是叶子类目ID
     **/
    public $seller_cids;

    /**
     * 商品是否支持拍下减库存:1支持;2取消支持(付款减库存);0(默认)不更改，集市卖家默认拍下减库存;商城卖家默认付款减库存。
     **/
    public $sub_stock;
}
