<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPolicyOptions extends \ArrayObject
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
     * Order sent back with cash on pickup is not allowed
     *
     * @var bool
     */
    protected $cashOnDeliveryNotAllowed;
    /**
     * If free accessories were added to the order, the client needs to send them back
     *
     * @var bool
     */
    protected $freeAccessoriesReturnRequired;
    /**
     * If there was a discount granted after the order, the return is lowered by the received discount
     *
     * @var bool
     */
    protected $refundLoweredByReceivedDiscount;
    /**
     * Returns for B2B purchases allowed
     *
     * @var bool
     */
    protected $businessReturnAllowed;
    /**
     * Return items are picked up by the seller
     *
     * @var bool
     */
    protected $collectBySellerOnly;
    /**
     * Order sent back with cash on pickup is not allowed
     *
     * @return bool
     */
    public function getCashOnDeliveryNotAllowed(): bool
    {
        return $this->cashOnDeliveryNotAllowed;
    }
    /**
     * Order sent back with cash on pickup is not allowed
     *
     * @param bool $cashOnDeliveryNotAllowed
     *
     * @return self
     */
    public function setCashOnDeliveryNotAllowed(bool $cashOnDeliveryNotAllowed): self
    {
        $this->initialized['cashOnDeliveryNotAllowed'] = true;
        $this->cashOnDeliveryNotAllowed = $cashOnDeliveryNotAllowed;
        return $this;
    }
    /**
     * If free accessories were added to the order, the client needs to send them back
     *
     * @return bool
     */
    public function getFreeAccessoriesReturnRequired(): bool
    {
        return $this->freeAccessoriesReturnRequired;
    }
    /**
     * If free accessories were added to the order, the client needs to send them back
     *
     * @param bool $freeAccessoriesReturnRequired
     *
     * @return self
     */
    public function setFreeAccessoriesReturnRequired(bool $freeAccessoriesReturnRequired): self
    {
        $this->initialized['freeAccessoriesReturnRequired'] = true;
        $this->freeAccessoriesReturnRequired = $freeAccessoriesReturnRequired;
        return $this;
    }
    /**
     * If there was a discount granted after the order, the return is lowered by the received discount
     *
     * @return bool
     */
    public function getRefundLoweredByReceivedDiscount(): bool
    {
        return $this->refundLoweredByReceivedDiscount;
    }
    /**
     * If there was a discount granted after the order, the return is lowered by the received discount
     *
     * @param bool $refundLoweredByReceivedDiscount
     *
     * @return self
     */
    public function setRefundLoweredByReceivedDiscount(bool $refundLoweredByReceivedDiscount): self
    {
        $this->initialized['refundLoweredByReceivedDiscount'] = true;
        $this->refundLoweredByReceivedDiscount = $refundLoweredByReceivedDiscount;
        return $this;
    }
    /**
     * Returns for B2B purchases allowed
     *
     * @return bool
     */
    public function getBusinessReturnAllowed(): bool
    {
        return $this->businessReturnAllowed;
    }
    /**
     * Returns for B2B purchases allowed
     *
     * @param bool $businessReturnAllowed
     *
     * @return self
     */
    public function setBusinessReturnAllowed(bool $businessReturnAllowed): self
    {
        $this->initialized['businessReturnAllowed'] = true;
        $this->businessReturnAllowed = $businessReturnAllowed;
        return $this;
    }
    /**
     * Return items are picked up by the seller
     *
     * @return bool
     */
    public function getCollectBySellerOnly(): bool
    {
        return $this->collectBySellerOnly;
    }
    /**
     * Return items are picked up by the seller
     *
     * @param bool $collectBySellerOnly
     *
     * @return self
     */
    public function setCollectBySellerOnly(bool $collectBySellerOnly): self
    {
        $this->initialized['collectBySellerOnly'] = true;
        $this->collectBySellerOnly = $collectBySellerOnly;
        return $this;
    }
}