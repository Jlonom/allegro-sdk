<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferRequestBasedelivery extends \ArrayObject
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
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     *
     * @var string
     */
    protected $handlingTime;
    /**
     * You can enter the shipping rates identifier or name.
     *
     * @var mixed
     */
    protected $shippingRates;
    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @deprecated
     *
     * @var string
     */
    protected $additionalInfo;
    /**
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     *
     * @return string
     */
    public function getHandlingTime(): string
    {
        return $this->handlingTime;
    }
    /**
     * Handling time, ISO 8601 duration format. This field must be set to one of the following: PT0S for immediately, PT24H, P2D, P3D, P4D, P5D, P7D, P10D, P14D, P21D, P30D, P60D.
     *
     * @param string $handlingTime
     *
     * @return self
     */
    public function setHandlingTime(string $handlingTime): self
    {
        $this->initialized['handlingTime'] = true;
        $this->handlingTime = $handlingTime;
        return $this;
    }
    /**
     * You can enter the shipping rates identifier or name.
     *
     * @return mixed
     */
    public function getShippingRates()
    {
        return $this->shippingRates;
    }
    /**
     * You can enter the shipping rates identifier or name.
     *
     * @param mixed $shippingRates
     *
     * @return self
     */
    public function setShippingRates($shippingRates): self
    {
        $this->initialized['shippingRates'] = true;
        $this->shippingRates = $shippingRates;
        return $this;
    }
    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @deprecated
     *
     * @return string
     */
    public function getAdditionalInfo(): string
    {
        return $this->additionalInfo;
    }
    /**
     * Additional information about delivery. Parameter is deprecated and will be removed in the future. Additional information is only visible on marketplace `allegro-pl`.
     *
     * @param string $additionalInfo
     *
     * @deprecated
     *
     * @return self
     */
    public function setAdditionalInfo(string $additionalInfo): self
    {
        $this->initialized['additionalInfo'] = true;
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}