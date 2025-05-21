<?php

namespace Jlonom\AllegroSDK\Model;

class SalesQualityHistoryResponse extends \ArrayObject
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
     * @var list<SalesQualityForDay>
     */
    protected $quality;
    /**
     * 
     *
     * @return list<SalesQualityForDay>
     */
    public function getQuality(): array
    {
        return $this->quality;
    }
    /**
     * 
     *
     * @param list<SalesQualityForDay> $quality
     *
     * @return self
     */
    public function setQuality(array $quality): self
    {
        $this->initialized['quality'] = true;
        $this->quality = $quality;
        return $this;
    }
}