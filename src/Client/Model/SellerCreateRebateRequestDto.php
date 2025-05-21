<?php

namespace Jlonom\AllegroSDK\Model;

class SellerCreateRebateRequestDto extends \ArrayObject
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
     * What kind of rebate will be given
     *
     * @var list<Benefit>
     */
    protected $benefits;
    /**
     * What offers will be included
     *
     * @var list<SellerRebateOfferCriterion>
     */
    protected $offerCriteria;
    /**
     * What kind of rebate will be given
     *
     * @return list<Benefit>
     */
    public function getBenefits(): array
    {
        return $this->benefits;
    }
    /**
     * What kind of rebate will be given
     *
     * @param list<Benefit> $benefits
     *
     * @return self
     */
    public function setBenefits(array $benefits): self
    {
        $this->initialized['benefits'] = true;
        $this->benefits = $benefits;
        return $this;
    }
    /**
     * What offers will be included
     *
     * @return list<SellerRebateOfferCriterion>
     */
    public function getOfferCriteria(): array
    {
        return $this->offerCriteria;
    }
    /**
     * What offers will be included
     *
     * @param list<SellerRebateOfferCriterion> $offerCriteria
     *
     * @return self
     */
    public function setOfferCriteria(array $offerCriteria): self
    {
        $this->initialized['offerCriteria'] = true;
        $this->offerCriteria = $offerCriteria;
        return $this;
    }
}