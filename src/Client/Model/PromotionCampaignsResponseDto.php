<?php

namespace Jlonom\AllegroSDK\Model;

class PromotionCampaignsResponseDto extends \ArrayObject
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
     * 
     *
     * @var list<SinglePromotionCampaignResponseDto>
     */
    protected $promotionCampaigns;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<SinglePromotionCampaignResponseDto>
     */
    public function getPromotionCampaigns(): array
    {
        return $this->promotionCampaigns;
    }
    /**
     * 
     *
     * @param list<SinglePromotionCampaignResponseDto> $promotionCampaigns
     *
     * @return self
     */
    public function setPromotionCampaigns(array $promotionCampaigns): self
    {
        $this->initialized['promotionCampaigns'] = true;
        $this->promotionCampaigns = $promotionCampaigns;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * 
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}