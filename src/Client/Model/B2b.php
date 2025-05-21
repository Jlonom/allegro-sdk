<?php

namespace Jlonom\AllegroSDK\Model;

class B2b extends \ArrayObject
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
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     *
     * @var bool
     */
    protected $buyableOnlyByBusiness;
    /**
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     *
     * @return bool
     */
    public function getBuyableOnlyByBusiness(): bool
    {
        return $this->buyableOnlyByBusiness;
    }
    /**
     * If true, then only users with company account are eligible to buy given offer. Offers buyable only by business are allowed only in selected categories. False by default.
     *
     * @param bool $buyableOnlyByBusiness
     *
     * @return self
     */
    public function setBuyableOnlyByBusiness(bool $buyableOnlyByBusiness): self
    {
        $this->initialized['buyableOnlyByBusiness'] = true;
        $this->buyableOnlyByBusiness = $buyableOnlyByBusiness;
        return $this;
    }
}