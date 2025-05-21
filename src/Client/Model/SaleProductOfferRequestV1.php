<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferRequestV1 extends \ArrayObject
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
     * 
     *
     * @var list<SaleProductOfferRequestV1productSetItem>
     */
    protected $productSet;
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @var B2b
     */
    protected $b2b;
    /**
     * An array of offer attachments.
     *
     * @var list<ProductOfferAttachmentItem>
     */
    protected $attachments;
    /**
     * 
     *
     * @var ProductOfferFundraisingCampaignRequest
     */
    protected $fundraisingCampaign;
    /**
     * Offer additional services.
     *
     * @var ProductOfferAdditionalServicesRequest
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var SaleProductOffersRequestStock
     */
    protected $stock;
    /**
     * 
     *
     * @var SaleProductOfferRequestBasedelivery
     */
    protected $delivery;
    /**
     * 
     *
     * @var SaleProductOfferRequestBasepublication
     */
    protected $publication;
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @var array<string, AdditionalMarketplacesRequestItem>
     */
    protected $additionalMarketplaces;
    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     *
     * @var SaleProductOfferRequestV1compatibilityList
     */
    protected $compatibilityList;
    /**
     * Declared base language of the offer.
     *
     * @var string
     */
    protected $language;
    /**
     * 
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * 
     *
     * @var list<ParameterProductOfferRequest>
     */
    protected $parameters;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServicesProductOfferRequest
     */
    protected $afterSalesServices;
    /**
     * 
     *
     * @var SizeTable
     */
    protected $sizeTable;
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     *
     * @var SaleProductOfferRequestBasecontact
     */
    protected $contact;
    /**
     * 
     *
     * @var DiscountsProductOfferRequest
     */
    protected $discounts;
    /**
    * Name (title) of an offer. Length cannot be more than 75 characters. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>
    /
    <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
    *
    * @var string
    */
    protected $name;
    /**
     * 
     *
     * @var Payments
     */
    protected $payments;
    /**
     * Information on the offer's selling mode.
     *
     * @var SellingMode
     */
    protected $sellingMode;
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>)
     *
     * @var Location
     */
    protected $location;
    /**
     * 
     *
     * @var list<string>
     */
    protected $images;
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @var StandardizedDescription
     */
    protected $description;
    /**
     * The information on the offer in an external system.
     *
     * @var ExternalId
     */
    protected $external;
    /**
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     *
     * @var OfferTaxSettings
     */
    protected $taxSettings;
    /**
     * Defines message to the seller settings options.
     *
     * @var MessageToSellerSettings
     */
    protected $messageToSellerSettings;
    /**
     * 
     *
     * @return list<SaleProductOfferRequestV1productSetItem>
     */
    public function getProductSet(): array
    {
        return $this->productSet;
    }
    /**
     * 
     *
     * @param list<SaleProductOfferRequestV1productSetItem> $productSet
     *
     * @return self
     */
    public function setProductSet(array $productSet): self
    {
        $this->initialized['productSet'] = true;
        $this->productSet = $productSet;
        return $this;
    }
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @return B2b
     */
    public function getB2b(): B2b
    {
        return $this->b2b;
    }
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @param B2b $b2b
     *
     * @return self
     */
    public function setB2b(B2b $b2b): self
    {
        $this->initialized['b2b'] = true;
        $this->b2b = $b2b;
        return $this;
    }
    /**
     * An array of offer attachments.
     *
     * @return list<ProductOfferAttachmentItem>
     */
    public function getAttachments(): array
    {
        return $this->attachments;
    }
    /**
     * An array of offer attachments.
     *
     * @param list<ProductOfferAttachmentItem> $attachments
     *
     * @return self
     */
    public function setAttachments(array $attachments): self
    {
        $this->initialized['attachments'] = true;
        $this->attachments = $attachments;
        return $this;
    }
    /**
     * 
     *
     * @return ProductOfferFundraisingCampaignRequest
     */
    public function getFundraisingCampaign(): ProductOfferFundraisingCampaignRequest
    {
        return $this->fundraisingCampaign;
    }
    /**
     * 
     *
     * @param ProductOfferFundraisingCampaignRequest $fundraisingCampaign
     *
     * @return self
     */
    public function setFundraisingCampaign(ProductOfferFundraisingCampaignRequest $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;
        return $this;
    }
    /**
     * Offer additional services.
     *
     * @return ProductOfferAdditionalServicesRequest
     */
    public function getAdditionalServices(): ProductOfferAdditionalServicesRequest
    {
        return $this->additionalServices;
    }
    /**
     * Offer additional services.
     *
     * @param ProductOfferAdditionalServicesRequest $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(ProductOfferAdditionalServicesRequest $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return SaleProductOffersRequestStock
     */
    public function getStock(): SaleProductOffersRequestStock
    {
        return $this->stock;
    }
    /**
     * 
     *
     * @param SaleProductOffersRequestStock $stock
     *
     * @return self
     */
    public function setStock(SaleProductOffersRequestStock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * 
     *
     * @return SaleProductOfferRequestBasedelivery
     */
    public function getDelivery(): SaleProductOfferRequestBasedelivery
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param SaleProductOfferRequestBasedelivery $delivery
     *
     * @return self
     */
    public function setDelivery(SaleProductOfferRequestBasedelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return SaleProductOfferRequestBasepublication
     */
    public function getPublication(): SaleProductOfferRequestBasepublication
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param SaleProductOfferRequestBasepublication $publication
     *
     * @return self
     */
    public function setPublication(SaleProductOfferRequestBasepublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @return array<string, AdditionalMarketplacesRequestItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer.<br/> Possible values of `marketplaceId` can be obtained from `GET /marketplaces` resource.</br> See [Allegro foreign marketplaces](https://developer.allegro.pl/tutorials/listing-and-managing-offers-on-foreign-marketplaces-7GndGjeAATn) for more details regarding this field.
     *
     * @param array<string, AdditionalMarketplacesRequestItem> $additionalMarketplaces
     *
     * @return self
     */
    public function setAdditionalMarketplaces(iterable $additionalMarketplaces): self
    {
        $this->initialized['additionalMarketplaces'] = true;
        $this->additionalMarketplaces = $additionalMarketplaces;
        return $this;
    }
    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     *
     * @return SaleProductOfferRequestV1compatibilityList
     */
    public function getCompatibilityList(): SaleProductOfferRequestV1compatibilityList
    {
        return $this->compatibilityList;
    }
    /**
     * For the `/sale/product-offers` resources you can send only definition of the MANUAL compatibility list. If compatibility list is provided for the product assigned to the offer, it will be used automatically.
     *
     * @param SaleProductOfferRequestV1compatibilityList $compatibilityList
     *
     * @return self
     */
    public function setCompatibilityList(SaleProductOfferRequestV1compatibilityList $compatibilityList): self
    {
        $this->initialized['compatibilityList'] = true;
        $this->compatibilityList = $compatibilityList;
        return $this;
    }
    /**
     * Declared base language of the offer.
     *
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }
    /**
     * Declared base language of the offer.
     *
     * @param string $language
     *
     * @return self
     */
    public function setLanguage(string $language): self
    {
        $this->initialized['language'] = true;
        $this->language = $language;
        return $this;
    }
    /**
     * 
     *
     * @return array<string, mixed>
     */
    public function getCategory(): iterable
    {
        return $this->category;
    }
    /**
     * 
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
     * 
     *
     * @return list<ParameterProductOfferRequest>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<ParameterProductOfferRequest> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @return AfterSalesServicesProductOfferRequest
     */
    public function getAfterSalesServices(): AfterSalesServicesProductOfferRequest
    {
        return $this->afterSalesServices;
    }
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @param AfterSalesServicesProductOfferRequest $afterSalesServices
     *
     * @return self
     */
    public function setAfterSalesServices(AfterSalesServicesProductOfferRequest $afterSalesServices): self
    {
        $this->initialized['afterSalesServices'] = true;
        $this->afterSalesServices = $afterSalesServices;
        return $this;
    }
    /**
     * 
     *
     * @return SizeTable
     */
    public function getSizeTable(): SizeTable
    {
        return $this->sizeTable;
    }
    /**
     * 
     *
     * @param SizeTable $sizeTable
     *
     * @return self
     */
    public function setSizeTable(SizeTable $sizeTable): self
    {
        $this->initialized['sizeTable'] = true;
        $this->sizeTable = $sizeTable;
        return $this;
    }
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     *
     * @return SaleProductOfferRequestBasecontact
     */
    public function getContact(): SaleProductOfferRequestBasecontact
    {
        return $this->contact;
    }
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad). You can enter the contact identifier or name.
     *
     * @param SaleProductOfferRequestBasecontact $contact
     *
     * @return self
     */
    public function setContact(SaleProductOfferRequestBasecontact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * 
     *
     * @return DiscountsProductOfferRequest
     */
    public function getDiscounts(): DiscountsProductOfferRequest
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param DiscountsProductOfferRequest $discounts
     *
     * @return self
     */
    public function setDiscounts(DiscountsProductOfferRequest $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
    /**
    * Name (title) of an offer. Length cannot be more than 75 characters. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>
    /
    <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
    *
    * @return string
    */
    public function getName(): string
    {
        return $this->name;
    }
    /**
    * Name (title) of an offer. Length cannot be more than 75 characters. Read more: <a href="../../tutorials/jak-jednym-requestem-wystawic-oferte-powiazana-z-produktem-D7Kj9gw4xFA#tytul-oferty" target="_blank">PL</a>
    /
    <a href="../../tutorials/list-offer-assigned-product-one-request-D7Kj9M71Bu6#offer-title" target="_blank">EN</a> .
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
     * 
     *
     * @return Payments
     */
    public function getPayments(): Payments
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param Payments $payments
     *
     * @return self
     */
    public function setPayments(Payments $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @return SellingMode
     */
    public function getSellingMode(): SellingMode
    {
        return $this->sellingMode;
    }
    /**
     * Information on the offer's selling mode.
     *
     * @param SellingMode $sellingMode
     *
     * @return self
     */
    public function setSellingMode(SellingMode $sellingMode): self
    {
        $this->initialized['sellingMode'] = true;
        $this->sellingMode = $sellingMode;
        return $this;
    }
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>)
     *
     * @return Location
     */
    public function getLocation(): Location
    {
        return $this->location;
    }
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>)
     *
     * @param Location $location
     *
     * @return self
     */
    public function setLocation(Location $location): self
    {
        $this->initialized['location'] = true;
        $this->location = $location;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getImages(): array
    {
        return $this->images;
    }
    /**
     * 
     *
     * @param list<string> $images
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
     * The description section cannot have more than 40000 bytes in length.
     *
     * @return StandardizedDescription
     */
    public function getDescription(): StandardizedDescription
    {
        return $this->description;
    }
    /**
     * The description section cannot have more than 40000 bytes in length.
     *
     * @param StandardizedDescription $description
     *
     * @return self
     */
    public function setDescription(StandardizedDescription $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
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
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     *
     * @return OfferTaxSettings
     */
    public function getTaxSettings(): OfferTaxSettings
    {
        return $this->taxSettings;
    }
    /**
     * Tax settings for offer. Available settings can be found under <a href="#operation/getTaxSettingsForCategory" target="_blank">"get all tax settings for category" resource</a>.
     *
     * @param OfferTaxSettings $taxSettings
     *
     * @return self
     */
    public function setTaxSettings(OfferTaxSettings $taxSettings): self
    {
        $this->initialized['taxSettings'] = true;
        $this->taxSettings = $taxSettings;
        return $this;
    }
    /**
     * Defines message to the seller settings options.
     *
     * @return MessageToSellerSettings
     */
    public function getMessageToSellerSettings(): MessageToSellerSettings
    {
        return $this->messageToSellerSettings;
    }
    /**
     * Defines message to the seller settings options.
     *
     * @param MessageToSellerSettings $messageToSellerSettings
     *
     * @return self
     */
    public function setMessageToSellerSettings(MessageToSellerSettings $messageToSellerSettings): self
    {
        $this->initialized['messageToSellerSettings'] = true;
        $this->messageToSellerSettings = $messageToSellerSettings;
        return $this;
    }
}