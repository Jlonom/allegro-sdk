<?php

namespace Jlonom\AllegroSDK\Model;

class VariantSets extends \ArrayObject
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
     * Total number of variant sets matching the query.
     *
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var list<VariantSetsVariantSet>
     */
    protected $offerVariants;
    /**
     * Total number of variant sets matching the query.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Total number of variant sets matching the query.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * 
     *
     * @return list<VariantSetsVariantSet>
     */
    public function getOfferVariants(): array
    {
        return $this->offerVariants;
    }
    /**
     * 
     *
     * @param list<VariantSetsVariantSet> $offerVariants
     *
     * @return self
     */
    public function setOfferVariants(array $offerVariants): self
    {
        $this->initialized['offerVariants'] = true;
        $this->offerVariants = $offerVariants;
        return $this;
    }
}