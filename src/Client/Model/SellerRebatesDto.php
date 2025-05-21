<?php

namespace Jlonom\AllegroSDK\Model;

class SellerRebatesDto extends \ArrayObject
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
     * @var list<SellerRebateDto>
     */
    protected $promotions;
    /**
     * 
     *
     * @var int
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<SellerRebateDto>
     */
    public function getPromotions(): array
    {
        return $this->promotions;
    }
    /**
     * 
     *
     * @param list<SellerRebateDto> $promotions
     *
     * @return self
     */
    public function setPromotions(array $promotions): self
    {
        $this->initialized['promotions'] = true;
        $this->promotions = $promotions;
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