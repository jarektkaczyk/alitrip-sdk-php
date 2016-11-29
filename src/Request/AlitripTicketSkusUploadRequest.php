<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: alitrip.ticket.skus.upload request
 *
 * @author auto create
 * @since 1.0, 2016.11.25
 */
class AlitripTicketSkusUploadRequest
{
    /**
     * 特殊必填，阿里标准收费项目id。ali_product_id, item_id与out_product_id三选一，至少填写其中一个
     **/
    private $aliProductId;

    /**
     * 特殊必填，淘宝商品id。ali_product_id, item_id与out_product_id三选一，至少填写其中一个
     **/
    private $itemId;

    /**
     * 特殊必填，商户收费项目id。ali_product_id, item_id与out_product_id三选一，至少填写其中一个
     **/
    private $outProductId;

    /**
     * 必填，该票种下使用的价格规则。
     **/
    private $priceRules;

    /**
     * 必填，门票 票种类型
     **/
    private $ticketType;

    private $apiParas = array();

    public function setAliProductId($aliProductId)
    {
        $this->aliProductId = $aliProductId;
        $this->apiParas["ali_product_id"] = $aliProductId;
    }

    public function getAliProductId()
    {
        return $this->aliProductId;
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

    public function setOutProductId($outProductId)
    {
        $this->outProductId = $outProductId;
        $this->apiParas["out_product_id"] = $outProductId;
    }

    public function getOutProductId()
    {
        return $this->outProductId;
    }

    public function setPriceRules($priceRules)
    {
        $this->priceRules = $priceRules;
        $this->apiParas["price_rules"] = $priceRules;
    }

    public function getPriceRules()
    {
        return $this->priceRules;
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

    public function getApiMethodName()
    {
        return "alitrip.ticket.skus.upload";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->ticketType, "ticketType");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
