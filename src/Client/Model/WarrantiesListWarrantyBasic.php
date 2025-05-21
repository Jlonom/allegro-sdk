<?php

namespace Jlonom\AllegroSDK\Model;

class WarrantiesListWarrantyBasic extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * 
     *
     * @var list<WarrantyBasic>
     */
    protected $warranties;
    /**
     * 
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * 
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
     * @return list<WarrantyBasic>
     */
    public function getWarranties(): array
    {
        return $this->warranties;
    }
    /**
     * 
     *
     * @param list<WarrantyBasic> $warranties
     *
     * @return self
     */
    public function setWarranties(array $warranties): self
    {
        $this->initialized['warranties'] = true;
        $this->warranties = $warranties;
        return $this;
    }
}