<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.simplesku.update request
 *
 * @author auto create
 * @since 1.0, 2016.10.14
 */
class AlitripTicketSimpleskuUpdateRequest
{
    /**
     * 1
     **/
    private $dateRule;

    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 规则编码，如果是新增sku，那么需要指定
     **/
    private $outRuleCode;

    /**
     * sku规则编码，注意只有新增的时候，该编码才会起作用。如果只是更新sku，该字段不需要填写，需要填写sku_id
     **/
    private $outerId;

    /**
     * 规则id.新增sku的时候，如果不指定out_rule_code,指定rule_id也可以。二选一
     **/
    private $ruleId;

    /**
     * sku_id.商户需要记录下来，用来后续更新指定的sku
     **/
    private $skuId;

    private $apiParas = array();

    public function setDateRule($dateRule)
    {
        $this->dateRule = $dateRule;
        $this->apiParas["date_rule"] = $dateRule;
    }

    public function getDateRule()
    {
        return $this->dateRule;
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

    public function setOutRuleCode($outRuleCode)
    {
        $this->outRuleCode = $outRuleCode;
        $this->apiParas["out_rule_code"] = $outRuleCode;
    }

    public function getOutRuleCode()
    {
        return $this->outRuleCode;
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

    public function setRuleId($ruleId)
    {
        $this->ruleId = $ruleId;
        $this->apiParas["rule_id"] = $ruleId;
    }

    public function getRuleId()
    {
        return $this->ruleId;
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

    public function getApiMethodName()
    {
        return "taobao.alitrip.ticket.simplesku.update";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->outerId, "outerId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
