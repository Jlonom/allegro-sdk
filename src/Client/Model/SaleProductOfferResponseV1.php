<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferResponseV1 extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var list<SaleProductOfferResponseV1productSetItem>
     */
    protected $productSet;
    /**
     * The category to which the offer is listed for sale.
     *
     * @var array<string, mixed>
     */
    protected $category;
    /**
     * An array of offer attachments.
     *
     * @var list<ProductOfferAttachmentItem>
     */
    protected $attachments;
    /**
     * 
     *
     * @var ProductOfferFundraisingCampaignResponse
     */
    protected $fundraisingCampaign;
    /**
     * 
     *
     * @var ProductOfferAdditionalServicesResponse
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var DeliveryProductOfferResponse
     */
    protected $delivery;
    /**
     * 
     *
     * @var SaleProductOfferPublicationResponse
     */
    protected $publication;
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @var array<string, AdditionalMarketplacesResponseItem>
     */
    protected $additionalMarketplaces;
    /**
     * Defines offer properties for buyers with company account (Allegro Biznes).
     *
     * @var B2b
     */
    protected $b2b;
    /**
     * 
     *
     * @var CompatibilityListProductOfferResponse
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
     * @var Validation
     */
    protected $validation;
    /**
     * 
     *
     * @var list<Error>
     */
    protected $warnings;
    /**
     * The definitions of the different after sales services assigned to the offer.
     *
     * @var AfterSalesServices
     */
    protected $afterSalesServices;
    /**
     * 
     *
     * @var DiscountsProductOfferResponse
     */
    protected $discounts;
    /**
     * 
     *
     * @var Stock
     */
    protected $stock;
    /**
     * List of offer parameters.
     *
     * @var list<ParameterProductOfferResponse>
     */
    protected $parameters;
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     *
     * @var SaleProductOfferResponseV1contact
     */
    protected $contact;
    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @var \DateTime
     */
    protected $updatedAt;
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
     * 
     *
     * @var SizeTable
     */
    protected $sizeTable;
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
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return list<SaleProductOfferResponseV1productSetItem>
     */
    public function getProductSet(): array
    {
        return $this->productSet;
    }
    /**
     * 
     *
     * @param list<SaleProductOfferResponseV1productSetItem> $productSet
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
     * @return ProductOfferFundraisingCampaignResponse
     */
    public function getFundraisingCampaign(): ProductOfferFundraisingCampaignResponse
    {
        return $this->fundraisingCampaign;
    }
    /**
     * 
     *
     * @param ProductOfferFundraisingCampaignResponse $fundraisingCampaign
     *
     * @return self
     */
    public function setFundraisingCampaign(ProductOfferFundraisingCampaignResponse $fundraisingCampaign): self
    {
        $this->initialized['fundraisingCampaign'] = true;
        $this->fundraisingCampaign = $fundraisingCampaign;
        return $this;
    }
    /**
     * 
     *
     * @return ProductOfferAdditionalServicesResponse
     */
    public function getAdditionalServices(): ProductOfferAdditionalServicesResponse
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param ProductOfferAdditionalServicesResponse $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(ProductOfferAdditionalServicesResponse $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return DeliveryProductOfferResponse
     */
    public function getDelivery(): DeliveryProductOfferResponse
    {
        return $this->delivery;
    }
    /**
     * 
     *
     * @param DeliveryProductOfferResponse $delivery
     *
     * @return self
     */
    public function setDelivery(DeliveryProductOfferResponse $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * 
     *
     * @return SaleProductOfferPublicationResponse
     */
    public function getPublication(): SaleProductOfferPublicationResponse
    {
        return $this->publication;
    }
    /**
     * 
     *
     * @param SaleProductOfferPublicationResponse $publication
     *
     * @return self
     */
    public function setPublication(SaleProductOfferPublicationResponse $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @return array<string, AdditionalMarketplacesResponseItem>
     */
    public function getAdditionalMarketplaces(): iterable
    {
        return $this->additionalMarketplaces;
    }
    /**
     * Selected information about the offer in each additional service. This field does not contain information about the base marketplace of the offer. You will find all available marketplaces here. Even if the seller does not want the offer to be visible in the additional service, we will return it in response.
     *
     * @param array<string, AdditionalMarketplacesResponseItem> $additionalMarketplaces
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
     * 
     *
     * @return CompatibilityListProductOfferResponse
     */
    public function getCompatibilityList(): CompatibilityListProductOfferResponse
    {
        return $this->compatibilityList;
    }
    /**
     * 
     *
     * @param CompatibilityListProductOfferResponse $compatibilityList
     *
     * @return self
     */
    public function setCompatibilityList(CompatibilityListProductOfferResponse $compatibilityList): self
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
     * @return Validation
     */
    public function getValidation(): Validation
    {
        return $this->validation;
    }
    /**
     * 
     *
     * @param Validation $validation
     *
     * @return self
     */
    public function setValidation(Validation $validation): self
    {
        $this->initialized['validation'] = true;
        $this->validation = $validation;
        return $this;
    }
    /**
     * 
     *
     * @return list<Error>
     */
    public function getWarnings(): array
    {
        return $this->warnings;
    }
    /**
     * 
     *
     * @param list<Error> $warnings
     *
     * @return self
     */
    public function setWarnings(array $warnings): self
    {
        $this->initialized['warnings'] = true;
        $this->warnings = $warnings;
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
     * 
     *
     * @return DiscountsProductOfferResponse
     */
    public function getDiscounts(): DiscountsProductOfferResponse
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param DiscountsProductOfferResponse $discounts
     *
     * @return self
     */
    public function setDiscounts(DiscountsProductOfferResponse $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * 
     *
     * @return Stock
     */
    public function getStock(): Stock
    {
        return $this->stock;
    }
    /**
     * 
     *
     * @param Stock $stock
     *
     * @return self
     */
    public function setStock(Stock $stock): self
    {
        $this->initialized['stock'] = true;
        $this->stock = $stock;
        return $this;
    }
    /**
     * List of offer parameters.
     *
     * @return list<ParameterProductOfferResponse>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * List of offer parameters.
     *
     * @param list<ParameterProductOfferResponse> $parameters
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
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     *
     * @return SaleProductOfferResponseV1contact
     */
    public function getContact(): SaleProductOfferResponseV1contact
    {
        return $this->contact;
    }
    /**
     * Identifier of contact data for sales format ADVERTISEMENT (classified ad); retrieve it via GET /sale/offer-contacts.
     *
     * @param SaleProductOfferResponseV1contact $contact
     *
     * @return self
     */
    public function setContact(SaleProductOfferResponseV1contact $contact): self
    {
        $this->initialized['contact'] = true;
        $this->contact = $contact;
        return $this;
    }
    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * Creation date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * Last update date: Format (ISO 8601) - yyyy-MM-dd'T'HH:mm:ss.SSSZ. Cannot be modified.
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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