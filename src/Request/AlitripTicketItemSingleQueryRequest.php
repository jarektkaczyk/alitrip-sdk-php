<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.item.single.query request
 *
 * @author auto create
 * @since 1.0, 2016.06.29
 */
class AlitripTicketItemSingleQueryRequest
{
    /**
     * 商品id
     **/
    private $itemId;

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

    public function getApiMethodName()
    {
        return "taobao.alitrip.ticket.item.single.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
