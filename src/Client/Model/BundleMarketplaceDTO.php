<?php

namespace Jlonom\AllegroSDK\Model;

class BundleMarketplaceDTO extends \ArrayObject
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
     * Marketplace ID. Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @var string
     */
    protected $id;
    /**
     * Marketplace ID. Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Marketplace ID. Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
}