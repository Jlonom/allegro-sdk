<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1Stock extends \ArrayObject
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
     * The available stock value.
     *
     * @var int
     */
    protected $available;
    /**
     * The number of sold items in the last 30 days on the base marketplace.
     *
     * @var int
     */
    protected $sold;
    /**
     * The available stock value.
     *
     * @return int
     */
    public function getAvailable(): int
    {
        return $this->available;
    }
    /**
     * The available stock value.
     *
     * @param int $available
     *
     * @return self
     */
    public function setAvailable(int $available): self
    {
        $this->initialized['available'] = true;
        $this->available = $available;
        return $this;
    }
    /**
     * The number of sold items in the last 30 days on the base marketplace.
     *
     * @return int
     */
    public function getSold(): int
    {
        return $this->sold;
    }
    /**
     * The number of sold items in the last 30 days on the base marketplace.
     *
     * @param int $sold
     *
     * @return self
     */
    public function setSold(int $sold): self
    {
        $this->initialized['sold'] = true;
        $this->sold = $sold;
        return $this;
    }
}