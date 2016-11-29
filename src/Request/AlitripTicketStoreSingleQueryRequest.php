<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: taobao.alitrip.ticket.store.single.query request
 *
 * @author auto create
 * @since 1.0, 2015.12.22
 */
class AlitripTicketStoreSingleQueryRequest
{
    /**
     * 码商id
     **/
    private $merchantId;

    /**
     * 机具编号id
     **/
    private $posId;

    private $apiParas = array();

    public function setMerchantId($merchantId)
    {
        $this->merchantId = $merchantId;
        $this->apiParas["merchant_id"] = $merchantId;
    }

    public function getMerchantId()
    {
        return $this->merchantId;
    }

    public function setPosId($posId)
    {
        $this->posId = $posId;
        $this->apiParas["pos_id"] = $posId;
    }

    public function getPosId()
    {
        return $this->posId;
    }

    public function getApiMethodName()
    {
        return "taobao.alitrip.ticket.store.single.query";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->merchantId, "merchantId");
        RequestCheckUtil::checkNotNull($this->posId, "posId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
