<?php

namespace Jlonom\AllegroSDK\Model;

class OfferMarketplacesPriceChanges extends \ArrayObject
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
     * ID of the marketplace on which the price has been changed.
     *
     * @var string
     */
    protected $id;
    /**
     * Change type. One of MANUAL or AUTOMATIC.
     *
     * @var string
     */
    protected $changeType;
    /**
     * ID of the marketplace on which the price has been changed.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the marketplace on which the price has been changed.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Change type. One of MANUAL or AUTOMATIC.
     *
     * @return string
     */
    public function getChangeType(): string
    {
        return $this->changeType;
    }
    /**
     * Change type. One of MANUAL or AUTOMATIC.
     *
     * @param string $changeType
     *
     * @return self
     */
    public function setChangeType(string $changeType): self
    {
        $this->initialized['changeType'] = true;
        $this->changeType = $changeType;
        return $this;
    }
}