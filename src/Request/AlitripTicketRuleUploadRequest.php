<?php

namespace Sofa\Alitrip\Request;

/**
 * TOP API: alitrip.ticket.rule.upload request
 *
 * @author auto create
 * @since 1.0, 2016.11.25
 */
class AlitripTicketRuleUploadRequest
{
    /**
     * 阿里旅行景点编码。新发布规则时必填，out_scenic_id与ali_scenic_id二选一，至少填写其中一个
     **/
    private $aliScenicId;

    /**
     * 新发布规则时必填。景区入园地址。游客在景区的详细入园地址，请仔细填写。
     **/
    private $enterAddress;

    /**
     * 新发布规则时必填。入园类型。1-用兑换凭证直接入园，2-用兑换凭证换票入园
     **/
    private $enterType;

    /**
     * 新发布规则时必填。入园使用的凭证类型。1、二维码，2、身份证，3、二维码或身份证，4:数字码，5、手机号，6、其它。当enter_type为1时，该字段只能选择1～3 。而当enterType为2时，该字段可设置1～6
     **/
    private $enterVoucherType;

    /**
     * 其他入园凭证类型。当enter_voucher_type=6时，填写其他入园凭证类型。
     **/
    private $enterVoucherValue;

    /**
     * 新发布规则时必填。门票商品一些游客须知的补充说明。
     **/
    private $extraDesc;

    /**
     * 新发布规则时必填。门票费用包含，请详细说明该门票商品包含的费用信息。
     **/
    private $feeInclude;

    /**
     * 商户票种规则id
     **/
    private $outRuleId;

    /**
     * 新发布规则时必填。商户票种规则名称
     **/
    private $outRuleName;

    /**
     * 商户景点编码。新发布规则时必填，out_scenic_id与ali_scenic_id二选一，至少填写其中一个
     **/
    private $outScenicId;

    /**
     * 新发布规则时特殊选填。退票描述。当refund_type为2时，该字段必填
     **/
    private $refundDesc;

    /**
     * 新发布规则时必填。退票类型。1-无条件退改， 2-有条件退改， 3-不可退改。
     **/
    private $refundType;

    /**
     * 可选，规则状态。0-生效，-1-失效。新发规则时不传 默认生效状态。
     **/
    private $ruleStatus;

    /**
     * 可选，票种规则类型：0-实体票规则，1-电子票（包含手工票和直连票）规则。新发规则时不传 默认为1
     **/
    private $ruleType;

    /**
     * 新发布规则时特殊选填。换票地址。当enter_type为2时，该字段必填。
     **/
    private $ticketChangeAdderss;

    /**
     * 新发布规则时特殊选填。需要的出游人信息，需要出游人信息时必填。 2:手机号,3:身份证,4:姓名,5:护照号码 6:护照姓名拼音。示例格式：2,3,4
     **/
    private $visitorInfos;

    /**
     * 新发布规则时必填。出游人 是否限购。1:限购,2:不限购
     **/
    private $visitorLimitAble;

    /**
     * 新发布规则时特殊选填。限购模式：mode为1按天, mode为2按周, mode为3按月
     **/
    private $visitorLimitMode;

    /**
     * 新发布规则时特殊选填。限购数量
     **/
    private $visitorLimitNum;

    /**
     * 新发布规则时特殊选填。限购类型。0-身份证限购， 1-手机号限购
     **/
    private $visitorLimitType;

    /**
     * 新发布规则时必填。出游人信息设置。1、不需要，2、仅需一位游客信息。3、需要所有游客信息。不填默认为1（不需要）。注：实体票（rule_type=2）不需要出游人信息，电子票（rule_type=1）一般是需要出游人信息
     **/
    private $visitorRequire;

    private $apiParas = array();

    public function setAliScenicId($aliScenicId)
    {
        $this->aliScenicId = $aliScenicId;
        $this->apiParas["ali_scenic_id"] = $aliScenicId;
    }

    public function getAliScenicId()
    {
        return $this->aliScenicId;
    }

    public function setEnterAddress($enterAddress)
    {
        $this->enterAddress = $enterAddress;
        $this->apiParas["enter_address"] = $enterAddress;
    }

    public function getEnterAddress()
    {
        return $this->enterAddress;
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

    public function setEnterVoucherType($enterVoucherType)
    {
        $this->enterVoucherType = $enterVoucherType;
        $this->apiParas["enter_voucher_type"] = $enterVoucherType;
    }

    public function getEnterVoucherType()
    {
        return $this->enterVoucherType;
    }

    public function setEnterVoucherValue($enterVoucherValue)
    {
        $this->enterVoucherValue = $enterVoucherValue;
        $this->apiParas["enter_voucher_value"] = $enterVoucherValue;
    }

    public function getEnterVoucherValue()
    {
        return $this->enterVoucherValue;
    }

    public function setExtraDesc($extraDesc)
    {
        $this->extraDesc = $extraDesc;
        $this->apiParas["extra_desc"] = $extraDesc;
    }

    public function getExtraDesc()
    {
        return $this->extraDesc;
    }

    public function setFeeInclude($feeInclude)
    {
        $this->feeInclude = $feeInclude;
        $this->apiParas["fee_include"] = $feeInclude;
    }

    public function getFeeInclude()
    {
        return $this->feeInclude;
    }

    public function setOutRuleId($outRuleId)
    {
        $this->outRuleId = $outRuleId;
        $this->apiParas["out_rule_id"] = $outRuleId;
    }

    public function getOutRuleId()
    {
        return $this->outRuleId;
    }

    public function setOutRuleName($outRuleName)
    {
        $this->outRuleName = $outRuleName;
        $this->apiParas["out_rule_name"] = $outRuleName;
    }

    public function getOutRuleName()
    {
        return $this->outRuleName;
    }

    public function setOutScenicId($outScenicId)
    {
        $this->outScenicId = $outScenicId;
        $this->apiParas["out_scenic_id"] = $outScenicId;
    }

    public function getOutScenicId()
    {
        return $this->outScenicId;
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

    public function setRuleStatus($ruleStatus)
    {
        $this->ruleStatus = $ruleStatus;
        $this->apiParas["rule_status"] = $ruleStatus;
    }

    public function getRuleStatus()
    {
        return $this->ruleStatus;
    }

    public function setRuleType($ruleType)
    {
        $this->ruleType = $ruleType;
        $this->apiParas["rule_type"] = $ruleType;
    }

    public function getRuleType()
    {
        return $this->ruleType;
    }

    public function setTicketChangeAdderss($ticketChangeAdderss)
    {
        $this->ticketChangeAdderss = $ticketChangeAdderss;
        $this->apiParas["ticket_change_adderss"] = $ticketChangeAdderss;
    }

    public function getTicketChangeAdderss()
    {
        return $this->ticketChangeAdderss;
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

    public function setVisitorLimitAble($visitorLimitAble)
    {
        $this->visitorLimitAble = $visitorLimitAble;
        $this->apiParas["visitor_limit_able"] = $visitorLimitAble;
    }

    public function getVisitorLimitAble()
    {
        return $this->visitorLimitAble;
    }

    public function setVisitorLimitMode($visitorLimitMode)
    {
        $this->visitorLimitMode = $visitorLimitMode;
        $this->apiParas["visitor_limit_mode"] = $visitorLimitMode;
    }

    public function getVisitorLimitMode()
    {
        return $this->visitorLimitMode;
    }

    public function setVisitorLimitNum($visitorLimitNum)
    {
        $this->visitorLimitNum = $visitorLimitNum;
        $this->apiParas["visitor_limit_num"] = $visitorLimitNum;
    }

    public function getVisitorLimitNum()
    {
        return $this->visitorLimitNum;
    }

    public function setVisitorLimitType($visitorLimitType)
    {
        $this->visitorLimitType = $visitorLimitType;
        $this->apiParas["visitor_limit_type"] = $visitorLimitType;
    }

    public function getVisitorLimitType()
    {
        return $this->visitorLimitType;
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
        return "alitrip.ticket.rule.upload";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {

        RequestCheckUtil::checkNotNull($this->outRuleId, "outRuleId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
