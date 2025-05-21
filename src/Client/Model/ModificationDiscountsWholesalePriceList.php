<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationDiscountsWholesalePriceList extends \ArrayObject
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
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
     *
     * @var string
     */
    protected $id;
    /**
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Promotion id of a wholesale price list to assign to the offer or `null` to unassign wholesale price list from the offer.
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
}