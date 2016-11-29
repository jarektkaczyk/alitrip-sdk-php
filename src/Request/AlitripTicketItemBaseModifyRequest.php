<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.item.base.modify request
 *
 * @author auto create
 * @since 1.0, 2016.09.28
 */
class AlitripTicketItemBaseModifyRequest
{
    /**
     * 购买限制信息
     **/
    private $buyLimit;

    /**
     * 旧版电子凭证信息（旧版电子凭证已不再更新维护，请尽快切换到新版电子凭证参数）
     **/
    private $eticketInfo;

    /**
     * 商品基本信息
     **/
    private $itemBaseInfo;

    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 商品的销售属性相关信息
     **/
    private $itemSaleInfo;

    /**
     * 新版电子凭证信息。如果传递了此参数，则eticket_info中旧版电子凭证信息将被忽略，否则电子凭证信息将以旧版电子凭证参数为准。
     **/
    private $newEticketInfo;

    private $apiParas = array();

    public function setBuyLimit($buyLimit)
    {
        $this->buyLimit = $buyLimit;
        $this->apiParas["buy_limit"] = $buyLimit;
    }

    public function getBuyLimit()
    {
        return $this->buyLimit;
    }

    public function setEticketInfo($eticketInfo)
    {
        $this->eticketInfo = $eticketInfo;
        $this->apiParas["eticket_info"] = $eticketInfo;
    }

    public function getEticketInfo()
    {
        return $this->eticketInfo;
    }

    public function setItemBaseInfo($itemBaseInfo)
    {
        $this->itemBaseInfo = $itemBaseInfo;
        $this->apiParas["item_base_info"] = $itemBaseInfo;
    }

    public function getItemBaseInfo()
    {
        return $this->itemBaseInfo;
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

    public function setItemSaleInfo($itemSaleInfo)
    {
        $this->itemSaleInfo = $itemSaleInfo;
        $this->apiParas["item_sale_info"] = $itemSaleInfo;
    }

    public function getItemSaleInfo()
    {
        return $this->itemSaleInfo;
    }

    public function setNewEticketInfo($newEticketInfo)
    {
        $this->newEticketInfo = $newEticketInfo;
        $this->apiParas["new_eticket_info"] = $newEticketInfo;
    }

    public function getNewEticketInfo()
    {
        return $this->newEticketInfo;
    }

    public function getApiMethodName()
    {
        return "taobao.alitrip.ticket.item.base.modify";
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
