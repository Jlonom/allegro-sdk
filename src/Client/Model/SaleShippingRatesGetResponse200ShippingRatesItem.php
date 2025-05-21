<?php

namespace Jlonom\AllegroSDK\Model;

class SaleShippingRatesGetResponse200ShippingRatesItem extends \ArrayObject
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
     * Shipping rate ID.
     *
     * @var string
     */
    protected $id;
    /**
     * User defined name of the shipping rates set.
     *
     * @var string
     */
    protected $name;
    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @var list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem>
     */
    protected $marketplaces;
    /**
     * Shipping rate ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Shipping rate ID.
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
    /**
     * User defined name of the shipping rates set.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * User defined name of the shipping rates set.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @return list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem>
     */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }
    /**
     * List of marketplace ids where these shipping rates are qualified for. The list is calculated based on the delivery methods added to the shipping rates.
     *
     * @param list<SaleShippingRatesGetResponse200ShippingRatesItemMarketplacesItem> $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
}