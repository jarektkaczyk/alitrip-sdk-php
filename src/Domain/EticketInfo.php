<?php

namespace Sofa\Alitrip\Domain;

/**
 * 电子凭证信息
 * @author auto create
 */
class EticketInfo
{

    /**
     * 门票商品电子凭证是否关联本地商户-在门票商品为电子凭证时必选
     **/
    public $association_status;

    /**
     * 门票商品电子凭证的售中自动退款比例-在门票商品为电子凭证时必选
     **/
    public $auto_refund;

    /**
     * 门票商品电子凭证是否支持身份证核销-在门票商品为电子凭证时必选
     **/
    public $idcard_support;

    /**
     * 门票商品电子凭证的码商-在门票商品为电子凭证时必选
     **/
    public $merchant_id;

    /**
     * 门票商品电子凭证的码商名-在门票商品为电子凭证时必选
     **/
    public $merchant_nick;

    /**
     * 门票商品电子凭证网店ID-在门票商品为电子凭证时必选
     **/
    public $network_id;

    /**
     * 门票商品电子凭证的过期退款比例-在门票商品为电子凭证时必选
     **/
    public $overdue_pay;

    /**
     * 门票商品电子凭证是否核销打款-在门票商品为电子凭证时必选
     **/
    public $verification_pay;
}
