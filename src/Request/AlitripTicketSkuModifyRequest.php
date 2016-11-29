<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.sku.modify request
 *
 * @author auto create
 * @since 1.0, 2016.09.28
 */
class AlitripTicketSkuModifyRequest
{
    /**
     * 预定规则结构。预定须知中，费用包含和入园地址为必填项
     **/
    private $bookingRuleInfo;

    /**
     * 换票地址。当入园类型为 兑换凭证入园  该字段必填
     **/
    private $changeAddress;

    /**
     * 日历库存规则
     **/
    private $dateRule;

    /**
     * 入园类型。 1-凭证直接入园 ，2-兑换凭证入园
     **/
    private $enterType;

    /**
     * 入园方式。 1:二维码，2:身份证、3:二维码或身份证、4:数字码、5:手机号、6:其它。   在入园方式选择上 ，当enter_type为1时，该字段只能选择1～3 。而当enterType为2时，该字段可设置1～6
     **/
    private $enterWay;

    /**
     * 当入园方式选择换票入园且为其他时 需要手动输入入园方式
     **/
    private $enterWayValue;

    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 限购规则
     **/
    private $limitRule;

    /**
     * sku的操作有以下两种：1-新增;2-更新;
     **/
    private $operationType;

    /**
     * sku的外部商家编码
     **/
    private $outerId;

    /**
     * 退票描述。 当refund_type为2，该字段必填
     **/
    private $refundDesc;

    /**
     * 退票类型。 1-无条件退改， 2-有条件退改， 3-不可退改
     **/
    private $refundType;

    /**
     * skuid
     **/
    private $skuId;

    /**
     * 票种；根据taobao.alitrip.travel.baseinfo.scenics.get接口获取票种
     **/
    private $ticketType;

    /**
     * 出游人。  1-只需要一位手机号， 2-需要多位手机号， 3-身份证， 4-姓名
     **/
    private $visitorInfos;

    /**
     * 游客信息设置。 1:不需要,2:仅需一位游客信息,3:需要所有游客信息
     **/
    private $visitorRequire;

    private $apiParas = array();

    public function setBookingRuleInfo($bookingRuleInfo)
    {
        $this->bookingRuleInfo = $bookingRuleInfo;
        $this->apiParas["booking_rule_info"] = $bookingRuleInfo;
    }

    public function getBookingRuleInfo()
    {
        return $this->bookingRuleInfo;
    }

    public function setChangeAddress($changeAddress)
    {
        $this->changeAddress = $changeAddress;
        $this->apiParas["change_address"] = $changeAddress;
    }

    public function getChangeAddress()
    {
        return $this->changeAddress;
    }

    public function setDateRule($dateRule)
    {
        $this->dateRule = $dateRule;
        $this->apiParas["date_rule"] = $dateRule;
    }

    public function getDateRule()
    {
        return $this->dateRule;
    }

    public function setEnterType($enterType)
    {
        $this->enterType = $enterType;
        $this->apiParas["enter_type"] = $enterType;
    }

    public function getEnterType()
    {
        return $this->enterType;
    }

    public function setEnterWay($enterWay)
    {
        $this->enterWay = $enterWay;
        $this->apiParas["enter_way"] = $enterWay;
    }

    public function getEnterWay()
    {
        return $this->enterWay;
    }

    public function setEnterWayValue($enterWayValue)
    {
        $this->enterWayValue = $enterWayValue;
        $this->apiParas["enter_way_value"] = $enterWayValue;
    }

    public function getEnterWayValue()
    {
        return $this->enterWayValue;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setLimitRule($limitRule)
    {
        $this->limitRule = $limitRule;
        $this->apiParas["limit_rule"] = $limitRule;
    }

    public function getLimitRule()
    {
        return $this->limitRule;
    }

    public function setOperationType($operationType)
    {
        $this->operationType = $operationType;
        $this->apiParas["operation_type"] = $operationType;
    }

    public function getOperationType()
    {
        return $this->operationType;
    }

    public function setOuterId($outerId)
    {
        $this->outerId = $outerId;
        $this->apiParas["outer_id"] = $outerId;
    }

    public function getOuterId()
    {
        return $this->outerId;
    }

    public function setRefundDesc($refundDesc)
    {
        $this->refundDesc = $refundDesc;
        $this->apiParas["refund_desc"] = $refundDesc;
    }

    public function getRefundDesc()
    {
        return $this->refundDesc;
    }

    public function setRefundType($refundType)
    {
        $this->refundType = $refundType;
        $this->apiParas["refund_type"] = $refundType;
    }

    public function getRefundType()
    {
        return $this->refundType;
    }

    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
        $this->apiParas["sku_id"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;
        $this->apiParas["ticket_type"] = $ticketType;
    }

    public function getTicketType()
    {
        return $this->ticketType;
    }

    public function setVisitorInfos($visitorInfos)
    {
        $this->visitorInfos = $visitorInfos;
        $this->apiParas["visitor_infos"] = $visitorInfos;
    }

    public function getVisitorInfos()
    {
        return $this->visitorInfos;
    }

    public function setVisitorRequire($visitorRequire)
    {
        $this->visitorRequire = $visitorRequire;
        $this->apiParas["visitor_require"] = $visitorRequire;
    }

    public function getVisitorRequire()
    {
        return $this->visitorRequire;
    }

    public function getApiMethodName()
    {
        return "taobao.alitrip.ticket.sku.modify";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->operationType, "operationType");
        RequestCheckUtil::checkMaxListSize($this->visitorInfos, 20, "visitorInfos");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
