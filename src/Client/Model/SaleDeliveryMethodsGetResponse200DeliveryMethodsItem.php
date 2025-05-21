<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItem extends \ArrayObject
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
     * Delivery method id.
     *
     * @var string
     */
    protected $id;
    /**
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     *
     * @var string
     */
    protected $name;
    /**
     * List of marketplace ids where this delivery method is available for buyers.
     *
     * @var list<string>
     */
    protected $marketplaces;
    /**
     * Whether the payment is to be collected in advance or on delivery.
     *
     * @var string
     */
    protected $paymentPolicy;
    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     *
     * @var bool
     */
    protected $allegroEndorsed;
    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     *
     * @var string|null
     */
    protected $dispatchCountry;
    /**
     * Country code to which the shipment is being sent.
     *
     * @var string
     */
    protected $destinationCountry;
    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     *
     * @var SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints
     */
    protected $shippingRatesConstraints;
    /**
     * Delivery method id.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Delivery method id.
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
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Delivery method name. Please note that only method ids are unique, not method names. For duplicate names, check the marketplaces, paymentPolicy and allegroEndorsed properties as well.
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
     * List of marketplace ids where this delivery method is available for buyers.
     *
     * @return list<string>
     */
    public function getMarketplaces(): array
    {
        return $this->marketplaces;
    }
    /**
     * List of marketplace ids where this delivery method is available for buyers.
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
     * Whether the payment is to be collected in advance or on delivery.
     *
     * @return string
     */
    public function getPaymentPolicy(): string
    {
        return $this->paymentPolicy;
    }
    /**
     * Whether the payment is to be collected in advance or on delivery.
     *
     * @param string $paymentPolicy
     *
     * @return self
     */
    public function setPaymentPolicy(string $paymentPolicy): self
    {
        $this->initialized['paymentPolicy'] = true;
        $this->paymentPolicy = $paymentPolicy;
        return $this;
    }
    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     *
     * @return bool
     */
    public function getAllegroEndorsed(): bool
    {
        return $this->allegroEndorsed;
    }
    /**
     * Indicates Allegro signed delivery method, which allows to easily distinguish similar delivery methods with various restrictions, e.g. Allegro Paczkomaty 24/7 InPost from Paczkomaty 24/7.
     *
     * @param bool $allegroEndorsed
     *
     * @return self
     */
    public function setAllegroEndorsed(bool $allegroEndorsed): self
    {
        $this->initialized['allegroEndorsed'] = true;
        $this->allegroEndorsed = $allegroEndorsed;
        return $this;
    }
    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     *
     * @return string|null
     */
    public function getDispatchCountry(): ?string
    {
        return $this->dispatchCountry;
    }
    /**
     * Country code from which the shipment is dispatched, if null the country is undefined and the shipment can be dispatched from any country.
     *
     * @param string|null $dispatchCountry
     *
     * @return self
     */
    public function setDispatchCountry(?string $dispatchCountry): self
    {
        $this->initialized['dispatchCountry'] = true;
        $this->dispatchCountry = $dispatchCountry;
        return $this;
    }
    /**
     * Country code to which the shipment is being sent.
     *
     * @return string
     */
    public function getDestinationCountry(): string
    {
        return $this->destinationCountry;
    }
    /**
     * Country code to which the shipment is being sent.
     *
     * @param string $destinationCountry
     *
     * @return self
     */
    public function setDestinationCountry(string $destinationCountry): self
    {
        $this->initialized['destinationCountry'] = true;
        $this->destinationCountry = $destinationCountry;
        return $this;
    }
    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     *
     * @return SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints
     */
    public function getShippingRatesConstraints(): SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints
    {
        return $this->shippingRatesConstraints;
    }
    /**
     * Rules for the delivery method, i.e. price, quantity, shipping time, etc.
     *
     * @param SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints $shippingRatesConstraints
     *
     * @return self
     */
    public function setShippingRatesConstraints(SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraints $shippingRatesConstraints): self
    {
        $this->initialized['shippingRatesConstraints'] = true;
        $this->shippingRatesConstraints = $shippingRatesConstraints;
        return $this;
    }
}