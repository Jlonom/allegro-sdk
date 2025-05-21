<?php

namespace Jlonom\AllegroSDK\Model;

class DisputeListResponse extends \ArrayObject
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
     * @var list<Dispute>
     */
    protected $disputes;
    /**
     * 
     *
     * @return list<Dispute>
     */
    public function getDisputes(): array
    {
        return $this->disputes;
    }
    /**
     * 
     *
     * @param list<Dispute> $disputes
     *
     * @return self
     */
    public function setDisputes(array $disputes): self
    {
        $this->initialized['disputes'] = true;
        $this->disputes = $disputes;
        return $this;
    }
}