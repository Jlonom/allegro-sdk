<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountListCampaignsResponse extends \ArrayObject
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
     * Array of the available AlleDiscount campaigns.
     *
     * @var list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem>
     */
    protected $alleDiscountCampaigns;
    /**
     * Array of the available AlleDiscount campaigns.
     *
     * @return list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem>
     */
    public function getAlleDiscountCampaigns(): array
    {
        return $this->alleDiscountCampaigns;
    }
    /**
     * Array of the available AlleDiscount campaigns.
     *
     * @param list<AlleDiscountListCampaignsResponseAlleDiscountCampaignsItem> $alleDiscountCampaigns
     *
     * @return self
     */
    public function setAlleDiscountCampaigns(array $alleDiscountCampaigns): self
    {
        $this->initialized['alleDiscountCampaigns'] = true;
        $this->alleDiscountCampaigns = $alleDiscountCampaigns;
        return $this;
    }
}