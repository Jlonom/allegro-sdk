<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceItemLanguage extends \ArrayObject
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
     * BCP-47 language code
     *
     * @var string
     */
    protected $code;
    /**
     * BCP-47 language code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
    /**
     * BCP-47 language code
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