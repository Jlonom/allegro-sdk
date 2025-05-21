<?php

namespace Jlonom\AllegroSDK\Model;

class ListingOffer extends \ArrayObject
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
     * Information about the seller.
     *
     * @var OfferSeller
     */
    protected $seller;
    /**
     * Information about promotion options for the item.
     *
     * @var OfferPromotion
     */
    protected $promotion;
    /**
     * Information about shipping options for the offer.
     *
     * @var OfferDelivery
     */
    protected $delivery;
    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @var list<OfferImages>
     */
    protected $images;
    /**
     * This section describes the selling format and prices.
     *
     * @var OfferSellingMode
     */
    protected $sellingMode;
    /**
     * Information about the stock.
     *
     * @var OfferStock
     */
    protected $stock;
    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     *
     * @var OfferVendor
     */
    protected $vendor;
    /**
     * The category to which the offer is listed for sale.
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * This section is available only for offers with a defined end of publication.
     *
     * @var OfferPublication
     */
    protected $publication;
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
     * Information about the seller.
     *
     * @return OfferSeller
     */
    public function getSeller(): OfferSeller
    {
        return $this->seller;
    }
    /**
     * Information about the seller.
     *
     * @param OfferSeller $seller
     *
     * @return self
     */
    public function setSeller(OfferSeller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * Information about promotion options for the item.
     *
     * @return OfferPromotion
     */
    public function getPromotion(): OfferPromotion
    {
        return $this->promotion;
    }
    /**
     * Information about promotion options for the item.
     *
     * @param OfferPromotion $promotion
     *
     * @return self
     */
    public function setPromotion(OfferPromotion $promotion): self
    {
        $this->initialized['promotion'] = true;
        $this->promotion = $promotion;
        return $this;
    }
    /**
     * Information about shipping options for the offer.
     *
     * @return OfferDelivery
     */
    public function getDelivery(): OfferDelivery
    {
        return $this->delivery;
    }
    /**
     * Information about shipping options for the offer.
     *
     * @param OfferDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(OfferDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @return list<OfferImages>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * The gallery of images. Only the URL of the original sized image is provided. The first image represents the thumbnail image used on listing.
     *
     * @param list<OfferImages> $images
     *
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->initialized['images'] = true;
        $this->images = $images;
        return $this;
    }
    /**
     * This section describes the selling format and prices.
     *
     * @return OfferSellingMode
     */
    public function getSellingMode(): OfferSellingMode
    {
        return $this->sellingMode;
    }
    /**
     * This section describes the selling format and prices.
     *
     * @param OfferSellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(OfferSellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * Information about the stock.
     *
     * @return OfferStock
     */
    public function getStock(): OfferStock
    {
        return $this->stock;
    }
    /**
     * Information about the stock.
     *
     * @param OfferStock $stock
     *
     * @return self
     */
    public function setStock(OfferStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     *
     * @return OfferVendor
     */
    public function getVendor(): OfferVendor
    {
        return $this->vendor;
    }
    /**
     * This section is available only for the charity, allegrolokalnie.pl, morizon.pl and ebilet.pl offers.
     *
     * @param OfferVendor $vendor
     *
     * @return self
     */
    public function setVendor(OfferVendor $vendor): self
    {
        $this->initialized['vendor'] = true;
        $this->vendor = $vendor;
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
     * This section is available only for offers with a defined end of publication.
     *
     * @return OfferPublication
     */
    public function getPublication(): OfferPublication
    {
        return $this->publication;
    }
    /**
     * This section is available only for offers with a defined end of publication.
     *
     * @param OfferPublication $publication
     *
     * @return self
     */
    public function setPublication(OfferPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
}