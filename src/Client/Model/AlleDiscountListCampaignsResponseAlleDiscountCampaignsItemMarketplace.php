<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListCampaignsResponseAlleDiscountCampaignsItemMarketplace extends \ArrayObject
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
     * The id of the marketplace.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of the marketplace.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the marketplace.
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