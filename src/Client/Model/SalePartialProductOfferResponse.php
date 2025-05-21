<?php

namespace Jlonom\AllegroSDK\Model;

class SalePartialProductOfferResponse extends \ArrayObject
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
     * Offer's ID
     *
     * @var string
     */
    protected $id;
    /**
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     *
     * @var SalePartialProductOfferResponseStock
     */
    protected $stock;
    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     *
     * @var SalePartialProductOfferResponseSellingMode
     */
    protected $sellingMode;
    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @var array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem>
     */
    protected $additionalMarketplaces;
    /**
     * Offer's ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Offer's ID
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
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     *
     * @return SalePartialProductOfferResponseStock
     */
    public function getStock(): SalePartialProductOfferResponseStock
    {
        return $this->stock;
    }
    /**
     * Number of times this offer can be purchased (available for <var>include=stock</var>).
     *
     * @param SalePartialProductOfferResponseStock $stock
     *
     * @return self
     */
    public function setStock(SalePartialProductOfferResponseStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     *
     * @return SalePartialProductOfferResponseSellingMode
     */
    public function getSellingMode(): SalePartialProductOfferResponseSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Offer's price information for base marketplace (available for <var>include=price</var>).
     *
     * @param SalePartialProductOfferResponseSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(SalePartialProductOfferResponseSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @return array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Information about this offer in additional marketplaces (available for <var>include=price</var>).
     *
     * @param array<string, SalePartialProductOfferResponseAdditionalMarketplacesItem> $additionalMarketplaces
     *
     * @return self
     */
    public function setAdditionalMarketplaces(iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;
        return $this;
    }
}