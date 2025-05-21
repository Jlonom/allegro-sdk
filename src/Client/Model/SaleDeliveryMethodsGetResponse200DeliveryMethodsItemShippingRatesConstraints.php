<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints extends \ArrayObject
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
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     *
     * @var bool
     */
    protected $allowed;
    /**
     * Rules for the quantity per parcel.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage
     */
    protected $maxQuantityPerPackage;
    /**
     * Rules for the maximum weight of a package.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight
     */
    protected $maxPackageWeight;
    /**
     * Rules for the shipping cost for the first item in the parcel.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate
     */
    protected $firstItemRate;
    /**
     * Rules for the shipping cost of another item in the parcel.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate
     */
    protected $nextItemRate;
    /**
     * Rules for the shipping time.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime
     */
    protected $shippingTime;
    /**
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     *
     * @return bool
     */
    public function getAllowed(): bool
    {
        return $this->allowed;
    }
    /**
     * Indicates whether delivery method can be used when adding or modifying shipping rates.
     *
     * @param bool $allowed
     *
     * @return self
     */
    public function setAllowed(bool $allowed): self
    {
        $this->initialized['allowed'] = true;
        $this->allowed = $allowed;
        return $this;
    }
    /**
     * Rules for the quantity per parcel.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage
     */
    public function getMaxQuantityPerPackage(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage
    {
        return $this->maxQuantityPerPackage;
    }
    /**
     * Rules for the quantity per parcel.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage $maxQuantityPerPackage
     *
     * @return self
     */
    public function setMaxQuantityPerPackage(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxQuantityPerPackage $maxQuantityPerPackage): self
    {
        $this->initialized['maxQuantityPerPackage'] = true;
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;
        return $this;
    }
    /**
     * Rules for the maximum weight of a package.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight
     */
    public function getMaxPackageWeight(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight
    {
        return $this->maxPackageWeight;
    }
    /**
     * Rules for the maximum weight of a package.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight $maxPackageWeight
     *
     * @return self
     */
    public function setMaxPackageWeight(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsMaxPackageWeight $maxPackageWeight): self
    {
        $this->initialized['maxPackageWeight'] = true;
        $this->maxPackageWeight = $maxPackageWeight;
        return $this;
    }
    /**
     * Rules for the shipping cost for the first item in the parcel.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate
     */
    public function getFirstItemRate(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate
    {
        return $this->firstItemRate;
    }
    /**
     * Rules for the shipping cost for the first item in the parcel.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate $firstItemRate
     *
     * @return self
     */
    public function setFirstItemRate(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsFirstItemRate $firstItemRate): self
    {
        $this->initialized['firstItemRate'] = true;
        $this->firstItemRate = $firstItemRate;
        return $this;
    }
    /**
     * Rules for the shipping cost of another item in the parcel.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate
     */
    public function getNextItemRate(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate
    {
        return $this->nextItemRate;
    }
    /**
     * Rules for the shipping cost of another item in the parcel.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate $nextItemRate
     *
     * @return self
     */
    public function setNextItemRate(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsNextItemRate $nextItemRate): self
    {
        $this->initialized['nextItemRate'] = true;
        $this->nextItemRate = $nextItemRate;
        return $this;
    }
    /**
     * Rules for the shipping time.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime
     */
    public function getShippingTime(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime
    {
        return $this->shippingTime;
    }
    /**
     * Rules for the shipping time.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime $shippingTime
     *
     * @return self
     */
    public function setShippingTime(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTime $shippingTime): self
    {
        $this->initialized['shippingTime'] = true;
        $this->shippingTime = $shippingTime;
        return $this;
    }
}