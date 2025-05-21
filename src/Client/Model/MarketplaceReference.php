<?php

namespace Jlonom\AllegroSDK\Model;

class MarketplaceReference extends \ArrayObject
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
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of a marketplace.<br/> Available marketplaces can be determined using <a href="#operation/marketplacesGET">GET /marketplaces</a>.
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