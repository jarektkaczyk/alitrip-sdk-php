<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.sku.delete request
 *
 * @author auto create
 * @since 1.0, 2016.09.28
 */
class AlitripTicketSkuDeleteRequest
{
    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 商家编码，商家编号和skuid必须传一个
     **/
    private $outerId;

    /**
     * skuid， 商家编号和skuid必须传一个
     **/
    private $skuId;

    private $apiParas = array();

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
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
        return "taobao.alitrip.ticket.sku.delete";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
