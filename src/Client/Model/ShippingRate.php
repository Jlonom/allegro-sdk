<?php

namespace Jlonom\AllegroSDK\Model;

class ShippingRate extends \ArrayObject
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
     * @var ShippingRateDeliveryMethod
     */
    protected $deliveryMethod;
    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @var int
     */
    protected $maxQuantityPerPackage;
    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     *
     * @var ShippingRateMaxPackageWeight
     */
    protected $maxPackageWeight;
    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     *
     * @var ShippingRateFirstItemRate
     */
    protected $firstItemRate;
    /**
     * Rate for every other item, after the first, in the same parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource.
     *
     * @var ShippingRateNextItemRate
     */
    protected $nextItemRate;
    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     *
     * @var ShippingRateShippingTime
     */
    protected $shippingTime;
    /**
     * 
     *
     * @return ShippingRateDeliveryMethod
     */
    public function getDeliveryMethod(): ShippingRateDeliveryMethod
    {
        return $this->deliveryMethod;
    }
    /**
     * 
     *
     * @param ShippingRateDeliveryMethod $deliveryMethod
     *
     * @return self
     */
    public function setDeliveryMethod(ShippingRateDeliveryMethod $deliveryMethod): self
    {
        $this->initialized['deliveryMethod'] = true;
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }
    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @return int
     */
    public function getMaxQuantityPerPackage(): int
    {
        return $this->maxQuantityPerPackage;
    }
    /**
     * Maximum quantity per package for the given delivery method. Minimum value is 1.
     *
     * @param int $maxQuantityPerPackage
     *
     * @return self
     */
    public function setMaxQuantityPerPackage(int $maxQuantityPerPackage): self
    {
        $this->initialized['maxQuantityPerPackage'] = true;
        $this->maxQuantityPerPackage = $maxQuantityPerPackage;
        return $this;
    }
    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     *
     * @return ShippingRateMaxPackageWeight
     */
    public function getMaxPackageWeight(): ShippingRateMaxPackageWeight
    {
        return $this->maxPackageWeight;
    }
    /**
     * Maximum weight of a package for the given delivery method (allowed only for methods with shippingRatesConstraints.maxPackageWeight.supported set to true in the delivery-methods resource). If not set, only maxQuantityPerPackage will be used to calculate the number of packages. Please note that the weight value must be the same for both related delivery methods, i.e. with `IN_ADVANCE` and `CASH_ON_DELIVERY` payment policy if both methods are in the shipping rates set.
     *
     * @param ShippingRateMaxPackageWeight $maxPackageWeight
     *
     * @return self
     */
    public function setMaxPackageWeight(ShippingRateMaxPackageWeight $maxPackageWeight): self
    {
        $this->initialized['maxPackageWeight'] = true;
        $this->maxPackageWeight = $maxPackageWeight;
        return $this;
    }
    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     *
     * @return ShippingRateFirstItemRate
     */
    public function getFirstItemRate(): ShippingRateFirstItemRate
    {
        return $this->firstItemRate;
    }
    /**
     * Rate for the first item in the parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.firstItemRate restrictions described in the delivery-methods resource.
     *
     * @param ShippingRateFirstItemRate $firstItemRate
     *
     * @return self
     */
    public function setFirstItemRate(ShippingRateFirstItemRate $firstItemRate): self
    {
        $this->initialized['firstItemRate'] = true;
        $this->firstItemRate = $firstItemRate;
        return $this;
    }
    /**
     * Rate for every other item, after the first, in the same parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource.
     *
     * @return ShippingRateNextItemRate
     */
    public function getNextItemRate(): ShippingRateNextItemRate
    {
        return $this->nextItemRate;
    }
    /**
     * Rate for every other item, after the first, in the same parcel for the given delivery method. The rate amount and currency must comply with the shippingRatesConstraints.nextItemRate restrictions described in the delivery-methods resource.
     *
     * @param ShippingRateNextItemRate $nextItemRate
     *
     * @return self
     */
    public function setNextItemRate(ShippingRateNextItemRate $nextItemRate): self
    {
        $this->initialized['nextItemRate'] = true;
        $this->nextItemRate = $nextItemRate;
        return $this;
    }
    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     *
     * @return ShippingRateShippingTime
     */
    public function getShippingTime(): ShippingRateShippingTime
    {
        return $this->shippingTime;
    }
    /**
     * Custom shipping time for the given delivery method (allowed only for methods with shippingRatesConstraints.shippingTime.customizable set to true in the delivery-methods resource). If not set the default shipping time specified in the delivery-methods resource is used.
     *
     * @param ShippingRateShippingTime $shippingTime
     *
     * @return self
     */
    public function setShippingTime(ShippingRateShippingTime $shippingTime): self
    {
        $this->initialized['shippingTime'] = true;
        $this->shippingTime = $shippingTime;
        return $this;
    }
}