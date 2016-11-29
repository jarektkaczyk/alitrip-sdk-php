<?php

namespace Sofa\Alitrip\Domain;

/**
 * 门票商品发码方式
 * @author auto create
 */
class CodeSendingInfo
{

    /**
     * 发码方式。1、电子票自动发码 需设置电子凭证信息，2、电子票手工发码，3、实体票
     **/
    public $code_mode;

    /**
     * 电子凭证信息
     **/
    public $elec_info;

    /**
     * 是否需要买家邮箱
     **/
    public $has_email;
}
