<?php

namespace Jlonom\AllegroSDK\Model;

class StockQuantity extends \ArrayObject
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
     * A number of items which are available on the current active offer for the product.
     *
     * @var float
     */
    protected $onOffer;
    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     *
     * @var float
     */
    protected $available;
    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     *
     * @var float
     */
    protected $onOrder;
    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     *
     * @var float
     */
    protected $onHold;
    /**
     * A number of items which are available on the current active offer for the product.
     *
     * @return float
     */
    public function getOnOffer(): float
    {
        return $this->onOffer;
    }
    /**
     * A number of items which are available on the current active offer for the product.
     *
     * @param float $onOffer
     *
     * @return self
     */
    public function setOnOffer(float $onOffer): self
    {
        $this->initialized['onOffer'] = true;
        $this->onOffer = $onOffer;
        return $this;
    }
    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     *
     * @return float
     */
    public function getAvailable(): float
    {
        return $this->available;
    }
    /**
     * A number of items in a warehouse available for sale. The amount is taken from the current active offer, or in case there is no active offer, it shows the amount that will be available on offer after it will have been created.
     *
     * @param float $available
     *
     * @return self
     */
    public function setAvailable(float $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     *
     * @return float
     */
    public function getOnOrder(): float
    {
        return $this->onOrder;
    }
    /**
     * A number of items already bought but not shipped. These are items in unpaid and paid orders that waiting for courier pickup.
     *
     * @param float $onOrder
     *
     * @return self
     */
    public function setOnOrder(float $onOrder): self
    {
        $this->initialized['onOrder'] = true;
        $this->onOrder = $onOrder;
        return $this;
    }
    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     *
     * @return float
     */
    public function getOnHold(): float
    {
        return $this->onHold;
    }
    /**
     * A number of items in a warehouse not available for sale (e.g. due to damage).
     *
     * @param float $onHold
     *
     * @return self
     */
    public function setOnHold(float $onHold): self
    {
        $this->initialized['onHold'] = true;
        $this->onHold = $onHold;
        return $this;
    }
}