<?php

namespace Jlonom\AllegroSDK\Model;

class BadgePatchPricesPrices extends \ArrayObject
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
     * @var BadgePatchPricesPricesBargain
     */
    protected $bargain;
    /**
     * 
     *
     * @return BadgePatchPricesPricesBargain
     */
    public function getBargain(): BadgePatchPricesPricesBargain
    {
        return $this->bargain;
    }
    /**
     * 
     *
     * @param BadgePatchPricesPricesBargain $bargain
     *
     * @return self
     */
    public function setBargain(BadgePatchPricesPricesBargain $bargain): self
    {
        $this->initialized['bargain'] = true;
        $this->bargain = $bargain;
        return $this;
    }
}