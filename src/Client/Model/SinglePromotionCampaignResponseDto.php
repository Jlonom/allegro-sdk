<?php

namespace Jlonom\AllegroSDK\Model;

class SinglePromotionCampaignResponseDto extends \ArrayObject
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
     * @var CampaignResponseDto
     */
    protected $campaign;
    /**
     * 
     *
     * @var PromotionResponseDto
     */
    protected $promotion;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @return CampaignResponseDto
     */
    public function getCampaign(): CampaignResponseDto
    {
        return $this->campaign;
    }
    /**
     * 
     *
     * @param CampaignResponseDto $campaign
     *
     * @return self
     */
    public function setCampaign(CampaignResponseDto $campaign): self
    {
        $this->initialized['campaign'] = true;
        $this->campaign = $campaign;
        return $this;
    }
    /**
     * 
     *
     * @return PromotionResponseDto
     */
    public function getPromotion(): PromotionResponseDto
    {
        return $this->promotion;
    }
    /**
     * 
     *
     * @param PromotionResponseDto $promotion
     *
     * @return self
     */
    public function setPromotion(PromotionResponseDto $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
}