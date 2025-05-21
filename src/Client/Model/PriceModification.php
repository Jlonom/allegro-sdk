<?php

namespace Jlonom\AllegroSDK\Model;

class PriceModification extends \ArrayObject
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
     * Type of the modification.
     *
     * @var string
     */
    protected $type;
    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     *
     * @var string|null
     */
    protected $marketplaceId;
    /**
     * Type of the modification.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of the modification.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->initialized['type'] = true;
        $this->type = $type;
    }
    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     *
     * @return string|null
     */
    public function getMarketplaceId(): ?string
    {
        return $this->marketplaceId;
    }
    /**
     * The marketplace on which the price of the offer should be changed. If omitted, the price will be changed on the base marketplace of the offer.
     *
     * @param string|null $marketplaceId
     */
    public function setMarketplaceId(?string $marketplaceId)
    {
        $this->initialized['marketplaceId'] = true;
        $this->marketplaceId = $marketplaceId;
    }
}