<?php

namespace Jlonom\AllegroSDK\Model;

class LineItemVoucher extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The voucher code.
     *
     * @var string
     */
    protected $code;
    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     *
     * @var string
     */
    protected $type;
    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     *
     * @var string
     */
    protected $status;
    /**
     * The external transaction id. The value may differ depending on the status type.
     *
     * @var string
     */
    protected $externalTransactionId;
    /**
     * 
     *
     * @var LineItemVoucherValue
     */
    protected $value;
    /**
     * The voucher code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * The voucher code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Describes the types of vouchers used in the lineItems. The types of vouchers can be as follows: * `NOTEBOOKS_FOR_TEACHERS` - a voucher for teacher's notebook action.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * Describes the status of the current voucher. The status of voucher can be as follows: * `ACTIVE` - an active voucher, ready to use, * `CANCELLED` - a cancelled voucher, disabled to use.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * The external transaction id. The value may differ depending on the status type.
     *
     * @return string
     */
    public function getExternalTransactionId(): string
    {
        return $this->externalTransactionId;
    }
    /**
     * The external transaction id. The value may differ depending on the status type.
     *
     * @param string $externalTransactionId
     *
     * @return self
     */
    public function setExternalTransactionId(string $externalTransactionId): self
    {
        $this->initialized['externalTransactionId'] = true;
        $this->externalTransactionId = $externalTransactionId;
        return $this;
    }
    /**
     * 
     *
     * @return LineItemVoucherValue
     */
    public function getValue(): LineItemVoucherValue
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param LineItemVoucherValue $value
     *
     * @return self
     */
    public function setValue(LineItemVoucherValue $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}