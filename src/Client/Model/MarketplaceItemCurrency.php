<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceItemCurrency extends \ArrayObject
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
     * ISO 4217 currency code
     *
     * @var string
     */
    protected $code;
    /**
     * ISO 4217 currency code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * ISO 4217 currency code
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->initialized['code'] = true;
        $this->code = $code;
        return $this;
    }
}