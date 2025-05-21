<?php

namespace Jlonom\AllegroSDK\Model;

class OfferStatsResponseDto extends \ArrayObject
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
     * @var list<OfferStatResponseDto>
     */
    protected $offerStats;
    /**
     * 
     *
     * @return list<OfferStatResponseDto>
     */
    public function getOfferStats(): array
    {
        return $this->offerStats;
    }
    /**
     * 
     *
     * @param list<OfferStatResponseDto> $offerStats
     *
     * @return self
     */
    public function setOfferStats(array $offerStats): self
    {
        $this->initialized['offerStats'] = true;
        $this->offerStats = $offerStats;
        return $this;
    }
}