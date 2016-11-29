<?php

namespace Sofa\Alitrip\Domain;

/**
 * 商品基本信息
 * @author auto create
 */
class PontusTicketItemBaseInfo
{

    /**
     * 门票类目id
     **/
    public $category_id;

    /**
     * 宝贝所在市
     **/
    public $city;

    /**
     * 客服电话
     **/
    public $custom_tel;

    /**
     * pc端更多商品描述，不超过50000个字符
     **/
    public $desc;

    /**
     * 商品id
     **/
    public $item_id;

    /**
     * 商家定义的编码
     **/
    public $out_id;

    /**
     * 商品图片路径。最多支持5张，第一张为主图，必填，其余四张可选填。商品主图需要关联用户图片空间的绝对url。 这个url所对应的图片必须要属于当前用户。
     **/
    public $pic_urls;

    /**
     * 宝贝所在地省份
     **/
    public $prov;

    /**
     * 景点id
     **/
    public $scenic_id;

    /**
     * 景点名称
     **/
    public $scenic_name;

    /**
     * 收费项目名称
     **/
    public $spu_name;

    /**
     * 商品标题。30个字符以内
     **/
    public $title;

    /**
     * 核销服务商
     **/
    public $vertify_merchant;

    /**
     * 手机端描述。格式： 使用xml标签（shortDesc，txt和img）进行图文混排，shortDesc标签表示添加小标题，txt标签表示添加文本描述，img标签表示添加一张图片。  注意： 1）shortDesc，txt和img三个xml标签独立，可以乱序使用，但不能嵌套 2）图片路径只能使用商家图片空间内图片的绝对路径
     **/
    public $wap_desc;
}
