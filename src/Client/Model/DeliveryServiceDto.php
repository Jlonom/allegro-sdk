<?php

namespace Jlonom\AllegroSDK\Model;

class DeliveryServiceDto extends \ArrayObject
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
     * @var DeliveryServiceIdDto
     */
    protected $id;
    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $carrierId;
    /**
     * 
     *
     * @var list<AdditionalServiceDto>
     */
    protected $additionalServices;
    /**
     * 
     *
     * @var list<AdditionalPropertyDto>
     */
    protected $additionalProperties;
    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement
     *
     * @var string
     */
    protected $owner;
    /**
     * List of marketplaces supported by service
     *
     * @var list<string>
     */
    protected $marketplaces;
    /**
     * List of supported package types
     *
     * @var list<string>
     */
    protected $packageTypes;
    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     *
     * @var CashOnDeliveryLimitDto
     */
    protected $cashOnDelivery;
    /**
     * 
     *
     * @var LimitWithCurrencyDto
     */
    protected $insurance;
    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @var array<string, string>
     */
    protected $features;
    /**
     * 
     *
     * @return DeliveryServiceIdDto
     */
    public function getId(): DeliveryServiceIdDto
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param DeliveryServiceIdDto $id
     *
     * @return self
     */
    public function setId(DeliveryServiceIdDto $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of delivery service. <br/> For Allegro Standard method, name of service will be exactly same and occurs only once: eg. 'Allegro Courier DPD'. <br/> For merchant's controlled method, name is concatenation of method name and credential name: eg. 'Courier DPD (My agreement)'.
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
     * @return string
     */
    public function getCarrierId(): string
    {
        return $this->carrierId;
    }
    /**
     * 
     *
     * @param string $carrierId
     *
     * @return self
     */
    public function setCarrierId(string $carrierId): self
    {
        $this->initialized['carrierId'] = true;
        $this->carrierId = $carrierId;
        return $this;
    }
    /**
     * 
     *
     * @return list<AdditionalServiceDto>
     */
    public function getAdditionalServices(): array
    {
        return $this->additionalServices;
    }
    /**
     * 
     *
     * @param list<AdditionalServiceDto> $additionalServices
     *
     * @return self
     */
    public function setAdditionalServices(array $additionalServices): self
    {
        $this->initialized['additionalServices'] = true;
        $this->additionalServices = $additionalServices;
        return $this;
    }
    /**
     * 
     *
     * @return list<AdditionalPropertyDto>
     */
    public function getAdditionalProperties(): array
    {
        return $this->additionalProperties;
    }
    /**
     * 
     *
     * @param list<AdditionalPropertyDto> $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(array $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement
     *
     * @return string
     */
    public function getOwner(): string
    {
        return $this->owner;
    }
    /**
     * Define delivery method type. ALLEGRO - Allegro Standard. Client - Merchant carrier agreement
     *
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner): self
    {
        $this->initialized['owner'] = true;
        $this->owner = $owner;
        return $this;
    }
    /**
     * List of marketplaces supported by service
     *
     * @return list<string>
     */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }
    /**
     * List of marketplaces supported by service
     *
     * @param list<string> $marketplaces
     *
     * @return self
     */
    public function setMarketplaces(array $marketplaces): self
    {
        $this->initialized['marketplaces'] = true;
        $this->marketplaces = $marketplaces;
        return $this;
    }
    /**
     * List of supported package types
     *
     * @return list<string>
     */
    public function getPackageTypes(): array
    {
        return $this->packageTypes;
    }
    /**
     * List of supported package types
     *
     * @param list<string> $packageTypes
     *
     * @return self
     */
    public function setPackageTypes(array $packageTypes): self
    {
        $this->initialized['packageTypes'] = true;
        $this->packageTypes = $packageTypes;
        return $this;
    }
    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     *
     * @return CashOnDeliveryLimitDto
     */
    public function getCashOnDelivery(): CashOnDeliveryLimitDto
    {
        return $this->cashOnDelivery;
    }
    /**
     * Definition of cash on delivery specification for method. If null, then COD is not supported.
     *
     * @param CashOnDeliveryLimitDto $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(CashOnDeliveryLimitDto $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * 
     *
     * @return LimitWithCurrencyDto
     */
    public function getInsurance(): LimitWithCurrencyDto
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param LimitWithCurrencyDto $insurance
     *
     * @return self
     */
    public function setInsurance(LimitWithCurrencyDto $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @return array<string, string>
     */
    public function getFeatures(): iterable
    {
        return $this->features;
    }
    /**
     * A map of service-specific features. List of key will be builded per services.
     *
     * @param array<string, string> $features
     *
     * @return self
     */
    public function setFeatures(iterable $features): self
    {
        $this->initialized['features'] = true;
        $this->features = $features;
        return $this;
    }
}