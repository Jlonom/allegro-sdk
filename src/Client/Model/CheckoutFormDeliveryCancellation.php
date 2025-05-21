<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormDeliveryCancellation extends \ArrayObject
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
     * ISO date when the delivery was cancelled.
     *
     * @var \DateTime
     */
    protected $date;
    /**
     * ISO date when the delivery was cancelled.
     *
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }
    /**
     * ISO date when the delivery was cancelled.
     *
     * @param \DateTime $date
     *
     * @return self
     */
    public function setDate(\DateTime $date): self
    {
        $this->initialized['date'] = true;
        $this->date = $date;
        return $this;
    }
}