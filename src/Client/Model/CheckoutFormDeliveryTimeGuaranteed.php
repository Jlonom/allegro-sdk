<?php

namespace Jlonom\AllegroSDK\Model;

/**
 *
 * @deprecated
 */
class CheckoutFormDeliveryTimeGuaranteed extends \ArrayObject
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
}