<?php

namespace Jlonom\AllegroSDK\Model;

class FundraisingCampaigns extends \ArrayObject
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
     * search results
     *
     * @var list<FundraisingCampaign>
     */
    protected $campaigns;
    /**
     * search results
     *
     * @return list<FundraisingCampaign>
     */
    public function getCampaigns(): array
    {
        return $this->campaigns;
    }
    /**
     * search results
     *
     * @param list<FundraisingCampaign> $campaigns
     *
     * @return self
     */
    public function setCampaigns(array $campaigns): self
    {
        $this->initialized['campaigns'] = true;
        $this->campaigns = $campaigns;
        return $this;
    }
}