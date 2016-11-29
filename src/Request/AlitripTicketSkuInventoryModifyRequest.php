<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.sku.inventory.modify request
 *
 * @author auto create
 * @since 1.0, 2015.12.22
 */
class AlitripTicketSkuInventoryModifyRequest
{
    /**
     * 日历库存；日历库存时，该参数必填；主要用于设置每一天的库存，如果有当天的库存会进行覆盖，如果没有，则新增
     **/
    private $dateInventory;

    /**
     * 库存数；普通库存时，该参数必填
     **/
    private $inventory;

    /**
     * 商品id
     **/
    private $itemId;

    /**
     * 商家编码
     **/
    private $outerId;

    /**
     * skuid
     **/
    private $skuId;

    private $apiParas = array();

    public function setDateInventory($dateInventory)
    {
        $this->dateInventory = $dateInventory;
        $this->apiParas["date_inventory"] = $dateInventory;
    }

    public function getDateInventory()
    {
        return $this->dateInventory;
    }

    public function setInventory($inventory)
    {
        $this->inventory = $inventory;
        $this->apiParas["inventory"] = $inventory;
    }

    public function getInventory()
    {
        return $this->inventory;
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
        return "taobao.alitrip.ticket.sku.inventory.modify";
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
