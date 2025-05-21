<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplacesVisibility extends \ArrayObject
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
     * Base marketplace ID.
     *
     * @var string
     */
    protected $base;
    /**
     * Additional marketplaces information.
     *
     * @var list<AdditionalMarketplacesVisibility>
     */
    protected $additional;
    /**
     * Base marketplace ID.
     *
     * @return string
     */
    public function getBase(): string
    {
        return $this->base;
    }
    /**
     * Base marketplace ID.
     *
     * @param string $base
     *
     * @return self
     */
    public function setBase(string $base): self
    {
        $this->initialized['base'] = true;
        $this->base = $base;
        return $this;
    }
    /**
     * Additional marketplaces information.
     *
     * @return list<AdditionalMarketplacesVisibility>
     */
    public function getAdditional(): array
    {
        return $this->additional;
    }
    /**
     * Additional marketplaces information.
     *
     * @param list<AdditionalMarketplacesVisibility> $additional
     *
     * @return self
     */
    public function setAdditional(array $additional): self
    {
        $this->initialized['additional'] = true;
        $this->additional = $additional;
        return $this;
    }
}