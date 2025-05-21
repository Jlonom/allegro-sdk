<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnRefund extends \ArrayObject
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
     * 
     *
     * @var CustomerReturnRefundBankAccount
     */
    protected $bankAccount;
    /**
     * 
     *
     * @return CustomerReturnRefundBankAccount
     */
    public function getBankAccount(): CustomerReturnRefundBankAccount
    {
        return $this->bankAccount;
    }
    /**
     * 
     *
     * @param CustomerReturnRefundBankAccount $bankAccount
     *
     * @return self
     */
    public function setBankAccount(CustomerReturnRefundBankAccount $bankAccount): self
    {
        $this->initialized['bankAccount'] = true;
        $this->bankAccount = $bankAccount;
        return $this;
    }
}