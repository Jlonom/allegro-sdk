<?php

namespace Jlonom\AllegroSDK\Model;

class MarketedBeforeGPSRObligation extends \ArrayObject
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
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @return bool|null
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }
    /**
     * Allows you to declare that the product was introduced before 13 Dec 2024 and therefore does not require GPSR data.
     *
     * @param bool|null $marketedBeforeGPSRObligation
     *
     * @return self
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;
        return $this;
    }
}