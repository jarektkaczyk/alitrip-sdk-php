<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.sku.price.modify request
 *
 * @author auto create
 * @since 1.0, 2015.12.22
 */
class AlitripTicketSkuPriceModifyRequest
{
    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 商家编码，商家编码和skuid必须传一个
     **/
    private $outerId;

    /**
     * 商品价格；精确到分
     **/
    private $price;

    /**
     * skuid，商家编码和skuid必须传一个
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

    public function setPrice($price)
    {
        $this->price = $price;
        $this->apiParas["price"] = $price;
    }

    public function getPrice()
    {
        return $this->price;
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
        return "taobao.alitrip.ticket.sku.price.modify";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        RequestCheckUtil::checkNotNull($this->price, "price");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
