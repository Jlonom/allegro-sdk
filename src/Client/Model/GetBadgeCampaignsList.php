<?php

namespace Jlonom\AllegroSDK\Model;

class GetBadgeCampaignsList extends \ArrayObject
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
     * List of badge campaigns.
     *
     * @var list<BadgeCampaign>
     */
    protected $badgeCampaigns;
    /**
     * List of badge campaigns.
     *
     * @return list<BadgeCampaign>
     */
    public function getBadgeCampaigns(): array
    {
        return $this->badgeCampaigns;
    }
    /**
     * List of badge campaigns.
     *
     * @param list<BadgeCampaign> $badgeCampaigns
     *
     * @return self
     */
    public function setBadgeCampaigns(array $badgeCampaigns): self
    {
        $this->initialized['badgeCampaigns'] = true;
        $this->badgeCampaigns = $badgeCampaigns;
        return $this;
    }
}