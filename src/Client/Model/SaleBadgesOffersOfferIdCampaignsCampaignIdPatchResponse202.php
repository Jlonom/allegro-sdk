<?php

namespace Jlonom\AllegroSDK\Model;

class SaleBadgesOffersOfferIdCampaignsCampaignIdPatchResponse202 extends \ArrayObject
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
     * Operation Id
     *
     * @var string
     */
    protected $id;
    /**
     * Operation Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Operation Id
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