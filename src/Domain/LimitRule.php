<?php

namespace Sofa\Alitrip\Domain;

/**
 * 限制规则
 * @author auto create
 */
class LimitRule
{

    /**
     * 1、身份证限购 2、手机号限购 3、身份证＋手机号限购
     **/
    public $mode;

    /**
     * 限购数量
     **/
    public $num;

    /**
     * 1、身份证限购 2、手机号限购 3、身份证＋手机号限购
     **/
    public $type;
}
