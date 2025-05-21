<?php

namespace Jlonom\AllegroSDK\Model;

class ImpliedWarrantiesListImpliedWarrantyBasic extends \ArrayObject
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
     * @var list<ImpliedWarrantyBasic>
     */
    protected $impliedWarranties;
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
     * @return list<ImpliedWarrantyBasic>
     */
    public function getImpliedWarranties(): array
    {
        return $this->impliedWarranties;
    }
    /**
     * 
     *
     * @param list<ImpliedWarrantyBasic> $impliedWarranties
     *
     * @return self
     */
    public function setImpliedWarranties(array $impliedWarranties): self
    {
        $this->initialized['impliedWarranties'] = true;
        $this->impliedWarranties = $impliedWarranties;
        return $this;
    }
}