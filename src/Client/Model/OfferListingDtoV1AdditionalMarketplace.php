<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDtoV1AdditionalMarketplace extends \ArrayObject
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
     * Information about the publication of the offer on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplacePublication|null
     */
    protected $publication;
    /**
     * Information about the selling mode of the offer on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceSellingMode|null
     */
    protected $sellingMode;
    /**
     * The offer's statistics on the given marketplace.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceStats
     */
    protected $stats;
    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     *
     * @var OfferListingDtoV1AdditionalMarketplaceStock|null
     */
    protected $stock;
    /**
     * Information about the publication of the offer on the given marketplace.
     *
     * @return OfferListingDtoV1AdditionalMarketplacePublication|null
     */
    public function getPublication(): ?OfferListingDtoV1AdditionalMarketplacePublication
    {
        return $this->publication;
    }
    /**
     * Information about the publication of the offer on the given marketplace.
     *
     * @param OfferListingDtoV1AdditionalMarketplacePublication|null $publication
     *
     * @return self
     */
    public function setPublication(?OfferListingDtoV1AdditionalMarketplacePublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Information about the selling mode of the offer on the given marketplace.
     *
     * @return OfferListingDtoV1AdditionalMarketplaceSellingMode|null
     */
    public function getSellingMode(): ?OfferListingDtoV1AdditionalMarketplaceSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Information about the selling mode of the offer on the given marketplace.
     *
     * @param OfferListingDtoV1AdditionalMarketplaceSellingMode|null $sellingMode
     *
     * @return self
     */
    public function setSellingMode(?OfferListingDtoV1AdditionalMarketplaceSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * The offer's statistics on the given marketplace.
     *
     * @return OfferListingDtoV1AdditionalMarketplaceStats
     */
    public function getStats(): OfferListingDtoV1AdditionalMarketplaceStats
    {
        return $this->stats;
    }
    /**
     * The offer's statistics on the given marketplace.
     *
     * @param OfferListingDtoV1AdditionalMarketplaceStats $stats
     *
     * @return self
     */
    public function setStats(OfferListingDtoV1AdditionalMarketplaceStats $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;
        return $this;
    }
    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     *
     * @return OfferListingDtoV1AdditionalMarketplaceStock|null
     */
    public function getStock(): ?OfferListingDtoV1AdditionalMarketplaceStock
    {
        return $this->stock;
    }
    /**
     * Contains only the sold stock on the given marketplace. The available stock applies to all marketplaces.
     *
     * @param OfferListingDtoV1AdditionalMarketplaceStock|null $stock
     *
     * @return self
     */
    public function setStock(?OfferListingDtoV1AdditionalMarketplaceStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
}