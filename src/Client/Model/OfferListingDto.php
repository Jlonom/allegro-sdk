<?php

namespace Jlonom\AllegroSDK\Model;

class OfferListingDto extends \ArrayObject
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
     * The offer ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The title of the offer.
     *
     * @var string
     */
    protected $name;
    /**
     * The category to which the offer is listed for sale.
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * The image used as a thumbnail on the listings.
     *
     * @var OfferListingDtoImage
     */
    protected $primaryImage;
    /**
     * Information on the offer's selling mode.
     *
     * @var OfferListingDtoV1SellingMode
     */
    protected $sellingMode;
    /**
     * Additional information about offers in auction format.
     *
     * @var OfferListingDtoV1SaleInfo
     */
    protected $saleInfo;
    /**
     * Information on the offer's stock.
     *
     * @var OfferListingDtoV1Stock
     */
    protected $stock;
    /**
     * The offer's statistics on the base marketplace.
     *
     * @var OfferListingDtoV1Stats|null
     */
    protected $stats;
    /**
     * Information on the offer's publication status and dates.
     *
     * @var OfferListingDtoV1Publication
     */
    protected $publication;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServices
     */
    protected $afterSalesServices;
    /**
     * The definition of the additional services assigned to the offer.
     *
     * @var OfferAdditionalServices
     */
    protected $additionalServices;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId
     */
    protected $external;
    /**
     * Delivery information.
     *
     * @var OfferListingDtoV1Delivery
     */
    protected $delivery;
    /**
     * Information about offer's business properties.
     *
     * @var OfferListingDtoV1B2b
     */
    protected $b2b;
    /**
     * 
     *
     * @var JustId
     */
    protected $fundraisingCampaign;
    /**
     * Properties of the offer for each additional marketplace.
     *
     * @var array<string, OfferListingDtoV1AdditionalMarketplace>
     */
    protected $additionalMarketplaces;
    /**
     * The offer ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The offer ID.
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
     * The title of the offer.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The title of the offer.
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
     * The category to which the offer is listed for sale.
     *
     * @return array<string, mixed>
     */
    public function getCategory(): iterable
    {
        return $this->category;
    }
    /**
     * The category to which the offer is listed for sale.
     *
     * @param array<string, mixed> $category
     *
     * @return self
     */
    public function setCategory(iterable $category): self
    {
        $this->initialized['category'] = true;
        $this->category = $category;
        return $this;
    }
    /**
     * The image used as a thumbnail on the listings.
     *
     * @return OfferListingDtoImage
     */
    public function getPrimaryImage(): OfferListingDtoImage
    {
        return $this->primaryImage;
    }
    /**
     * The image used as a thumbnail on the listings.
     *
     * @param OfferListingDtoImage $primaryImage
     *
     * @return self
     */
    public function setPrimaryImage(OfferListingDtoImage $primaryImage): self
    {
        $this->initialized['primaryImage'] = true;
        $this->primaryImage = $primaryImage;
        return $this;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @return OfferListingDtoV1SellingMode
     */
    public function getSellingMode(): OfferListingDtoV1SellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @param OfferListingDtoV1SellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(OfferListingDtoV1SellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * Additional information about offers in auction format.
     *
     * @return OfferListingDtoV1SaleInfo
     */
    public function getSaleInfo(): OfferListingDtoV1SaleInfo
    {
        return $this->saleInfo;
    }
    /**
     * Additional information about offers in auction format.
     *
     * @param OfferListingDtoV1SaleInfo $saleInfo
     *
     * @return self
     */
    public function setSaleInfo(OfferListingDtoV1SaleInfo $saleInfo): self
    {
        $this->initialized['saleInfo'] = true;
        $this->saleInfo = $saleInfo;
        return $this;
    }
    /**
     * Information on the offer's stock.
     *
     * @return OfferListingDtoV1Stock
     */
    public function getStock(): OfferListingDtoV1Stock
    {
        return $this->stock;
    }
    /**
     * Information on the offer's stock.
     *
     * @param OfferListingDtoV1Stock $stock
     *
     * @return self
     */
    public function setStock(OfferListingDtoV1Stock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * The offer's statistics on the base marketplace.
     *
     * @return OfferListingDtoV1Stats|null
     */
    public function getStats(): ?OfferListingDtoV1Stats
    {
        return $this->stats;
    }
    /**
     * The offer's statistics on the base marketplace.
     *
     * @param OfferListingDtoV1Stats|null $stats
     *
     * @return self
     */
    public function setStats(?OfferListingDtoV1Stats $stats): self
    {
        $this->initialized['stats'] = true;
        $this->stats = $stats;
        return $this;
    }
    /**
     * Information on the offer's publication status and dates.
     *
     * @return OfferListingDtoV1Publication
     */
    public function getPublication(): OfferListingDtoV1Publication
    {
        return $this->publication;
    }
    /**
     * Information on the offer's publication status and dates.
     *
     * @param OfferListingDtoV1Publication $publication
     *
     * @return self
     */
    public function setPublication(OfferListingDtoV1Publication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @return AfterSalesServices
     */
    public function getAfterSalesServices(): AfterSalesServices
    {
        return $this->afterSalesServices;
    }
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @param AfterSalesServices $afterSalesServices
     *
     * @return self
     */
    public function setAfterSalesServices(AfterSalesServices $afterSalesServices): self
    {
        $this->initialized['afterSalesServices'] = true;
        $this->afterSalesServices = $afterSalesServices;
        return $this;
    }
    /**
     * The definition of the additional services assigned to the offer.
     *
     * @return OfferAdditionalServices
     */
    public function getAdditionalServices(): OfferAdditionalServices
    {
        return $this->additionalServices;
    }
    /**
     * The definition of the additional services assigned to the offer.
     *
     * @param OfferAdditionalServices $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(OfferAdditionalServices $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * The information on the offer in an external system.
     *
     * @return ExternalId
     */
    public function getExternal(): ExternalId
    {
        return $this->external;
    }
    /**
     * The information on the offer in an external system.
     *
     * @param ExternalId $external
     *
     * @return self
     */
    public function setExternal(ExternalId $external): self
    {
        $this->initialized['external'] = true;
        $this->external = $external;
        return $this;
    }
    /**
     * Delivery information.
     *
     * @return OfferListingDtoV1Delivery
     */
    public function getDelivery(): OfferListingDtoV1Delivery
    {
        return $this->delivery;
    }
    /**
     * Delivery information.
     *
     * @param OfferListingDtoV1Delivery $delivery
     *
     * @return self
     */
    public function setDelivery(OfferListingDtoV1Delivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Information about offer's business properties.
     *
     * @return OfferListingDtoV1B2b
     */
    public function getB2b(): OfferListingDtoV1B2b
    {
        return $this->b2b;
    }
    /**
     * Information about offer's business properties.
     *
     * @param OfferListingDtoV1B2b $b2b
     *
     * @return self
     */
    public function setB2b(OfferListingDtoV1B2b $b2b): self
    {
        $this->initialized['b2b'] = true;
        $this->b2b = $b2b;
        return $this;
    }
    /**
     * 
     *
     * @return JustId
     */
    public function getFundraisingCampaign(): JustId
    {
        return $this->fundraisingCampaign;
    }
    /**
     * 
     *
     * @param JustId $fundraisingCampaign
     *
     * @return self
     */
    public function setFundraisingCampaign(JustId $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;
        return $this;
    }
    /**
     * Properties of the offer for each additional marketplace.
     *
     * @return array<string, OfferListingDtoV1AdditionalMarketplace>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Properties of the offer for each additional marketplace.
     *
     * @param array<string, OfferListingDtoV1AdditionalMarketplace> $additionalMarketplaces
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