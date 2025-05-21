<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryTime extends \ArrayObject
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
     * ISO date when the earliest delivery attempt can take place.
     *
     * @var \DateTime
     */
    protected $from;
    /**
     * ISO date when the latest delivery attempt can take place.
     *
     * @var \DateTime
     */
    protected $to;
    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @deprecated
     *
     * @var CheckoutFormDeliveryTimeGuaranteed
     */
    protected $guaranteed;
    /**
     * Dates when delivery should be dispatched, passed to the provider.
     *
     * @var CheckoutFormDeliveryTimeDispatch
     */
    protected $dispatch;
    /**
     * ISO date when the earliest delivery attempt can take place.
     *
     * @return \DateTime
     */
    public function getFrom(): \DateTime
    {
        return $this->from;
    }
    /**
     * ISO date when the earliest delivery attempt can take place.
     *
     * @param \DateTime $from
     *
     * @return self
     */
    public function setFrom(\DateTime $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * ISO date when the latest delivery attempt can take place.
     *
     * @return \DateTime
     */
    public function getTo(): \DateTime
    {
        return $this->to;
    }
    /**
     * ISO date when the latest delivery attempt can take place.
     *
     * @param \DateTime $to
     *
     * @return self
     */
    public function setTo(\DateTime $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @deprecated
     *
     * @return CheckoutFormDeliveryTimeGuaranteed
     */
    public function getGuaranteed(): CheckoutFormDeliveryTimeGuaranteed
    {
        return $this->guaranteed;
    }
    /**
     * Guaranteed date when first delivery attempt takes place. This is always filled for Allegro One Courier delivery method. This field is deprecated in favor of `delivery.time.from` and `delivery.time.to`.
     *
     * @param CheckoutFormDeliveryTimeGuaranteed $guaranteed
     *
     * @deprecated
     *
     * @return self
     */
    public function setGuaranteed(CheckoutFormDeliveryTimeGuaranteed $guaranteed): self
    {
        $this->initialized['guaranteed'] = true;
        $this->guaranteed = $guaranteed;
        return $this;
    }
    /**
     * Dates when delivery should be dispatched, passed to the provider.
     *
     * @return CheckoutFormDeliveryTimeDispatch
     */
    public function getDispatch(): CheckoutFormDeliveryTimeDispatch
    {
        return $this->dispatch;
    }
    /**
     * Dates when delivery should be dispatched, passed to the provider.
     *
     * @param CheckoutFormDeliveryTimeDispatch $dispatch
     *
     * @return self
     */
    public function setDispatch(CheckoutFormDeliveryTimeDispatch $dispatch): self
    {
        $this->initialized['dispatch'] = true;
        $this->dispatch = $dispatch;
        return $this;
    }
}