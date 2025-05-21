<?php

namespace Jlonom\AllegroSDK\Model;

class ShipmentCreateRequestDto extends \ArrayObject
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
     * Id of delivery method, chosen by buyer in order.
     *
     * @var string
     */
    protected $deliveryMethodId;
    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @var string
     */
    protected $credentialsId;
    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     *
     * @var SenderAddressDto
     */
    protected $sender;
    /**
     * Receiver address data with optional point ID.
     *
     * @var ReceiverAddressDto
     */
    protected $receiver;
    /**
     * Optional pickup address with optional drop-off point. If empty, then sender object will be used. Parameter is deprecated and will be removed in the future. Pickup address should be provided when requesting Pickup.
     *
     * @deprecated
     *
     * @var ShipmentPickupAddressDto
     */
    protected $pickup;
    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     *
     * @var string
     */
    protected $referenceNumber;
    /**
     * 
     *
     * @var list<PackageRequestDto>
     */
    protected $packages;
    /**
     * 
     *
     * @var InsuranceDto
     */
    protected $insurance;
    /**
     * 
     *
     * @var CashOnDeliveryDto
     */
    protected $cashOnDelivery;
    /**
     * Label file format.
     *
     * @var string
     */
    protected $labelFormat;
    /**
     * List of additional services.
     *
     * @var list<string>
     */
    protected $additionalServices;
    /**
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @var array<string, string>
     */
    protected $additionalProperties;
    /**
     * Id of delivery method, chosen by buyer in order.
     *
     * @return string
     */
    public function getDeliveryMethodId(): string
    {
        return $this->deliveryMethodId;
    }
    /**
     * Id of delivery method, chosen by buyer in order.
     *
     * @param string $deliveryMethodId
     *
     * @return self
     */
    public function setDeliveryMethodId(string $deliveryMethodId): self
    {
        $this->initialized['deliveryMethodId'] = true;
        $this->deliveryMethodId = $deliveryMethodId;
        return $this;
    }
    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @return string
     */
    public function getCredentialsId(): string
    {
        return $this->credentialsId;
    }
    /**
     * ID of merchant agreement, registered in WZA. Value should be read from /shipment-management/delivery-services. For Allegro Standard methods, this field should be null.
     *
     * @param string $credentialsId
     *
     * @return self
     */
    public function setCredentialsId(string $credentialsId): self
    {
        $this->initialized['credentialsId'] = true;
        $this->credentialsId = $credentialsId;
        return $this;
    }
    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     *
     * @return SenderAddressDto
     */
    public function getSender(): SenderAddressDto
    {
        return $this->sender;
    }
    /**
     * Shipment owner data. This address will be provided on label and will be used to operation return.
     *
     * @param SenderAddressDto $sender
     *
     * @return self
     */
    public function setSender(SenderAddressDto $sender): self
    {
        $this->initialized['sender'] = true;
        $this->sender = $sender;
        return $this;
    }
    /**
     * Receiver address data with optional point ID.
     *
     * @return ReceiverAddressDto
     */
    public function getReceiver(): ReceiverAddressDto
    {
        return $this->receiver;
    }
    /**
     * Receiver address data with optional point ID.
     *
     * @param ReceiverAddressDto $receiver
     *
     * @return self
     */
    public function setReceiver(ReceiverAddressDto $receiver): self
    {
        $this->initialized['receiver'] = true;
        $this->receiver = $receiver;
        return $this;
    }
    /**
     * Optional pickup address with optional drop-off point. If empty, then sender object will be used. Parameter is deprecated and will be removed in the future. Pickup address should be provided when requesting Pickup.
     *
     * @deprecated
     *
     * @return ShipmentPickupAddressDto
     */
    public function getPickup(): ShipmentPickupAddressDto
    {
        return $this->pickup;
    }
    /**
     * Optional pickup address with optional drop-off point. If empty, then sender object will be used. Parameter is deprecated and will be removed in the future. Pickup address should be provided when requesting Pickup.
     *
     * @param ShipmentPickupAddressDto $pickup
     *
     * @deprecated
     *
     * @return self
     */
    public function setPickup(ShipmentPickupAddressDto $pickup): self
    {
        $this->initialized['pickup'] = true;
        $this->pickup = $pickup;
        return $this;
    }
    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     *
     * @return string
     */
    public function getReferenceNumber(): string
    {
        return $this->referenceNumber;
    }
    /**
     * Shipment identifier in own system. Example: `Ordering number`.
     *
     * @param string $referenceNumber
     *
     * @return self
     */
    public function setReferenceNumber(string $referenceNumber): self
    {
        $this->initialized['referenceNumber'] = true;
        $this->referenceNumber = $referenceNumber;
        return $this;
    }
    /**
     * 
     *
     * @return list<PackageRequestDto>
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
    /**
     * 
     *
     * @param list<PackageRequestDto> $packages
     *
     * @return self
     */
    public function setPackages(array $packages): self
    {
        $this->initialized['packages'] = true;
        $this->packages = $packages;
        return $this;
    }
    /**
     * 
     *
     * @return InsuranceDto
     */
    public function getInsurance(): InsuranceDto
    {
        return $this->insurance;
    }
    /**
     * 
     *
     * @param InsuranceDto $insurance
     *
     * @return self
     */
    public function setInsurance(InsuranceDto $insurance): self
    {
        $this->initialized['insurance'] = true;
        $this->insurance = $insurance;
        return $this;
    }
    /**
     * 
     *
     * @return CashOnDeliveryDto
     */
    public function getCashOnDelivery(): CashOnDeliveryDto
    {
        return $this->cashOnDelivery;
    }
    /**
     * 
     *
     * @param CashOnDeliveryDto $cashOnDelivery
     *
     * @return self
     */
    public function setCashOnDelivery(CashOnDeliveryDto $cashOnDelivery): self
    {
        $this->initialized['cashOnDelivery'] = true;
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }
    /**
     * Label file format.
     *
     * @return string
     */
    public function getLabelFormat(): string
    {
        return $this->labelFormat;
    }
    /**
     * Label file format.
     *
     * @param string $labelFormat
     *
     * @return self
     */
    public function setLabelFormat(string $labelFormat): self
    {
        $this->initialized['labelFormat'] = true;
        $this->labelFormat = $labelFormat;
        return $this;
    }
    /**
     * List of additional services.
     *
     * @return list<string>
     */
    public function getAdditionalServices(): array
    {
        return $this->additionalServices;
    }
    /**
     * List of additional services.
     *
     * @param list<string> $additionalServices
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
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @return array<string, string>
     */
    public function getAdditionalProperties(): iterable
    {
        return $this->additionalProperties;
    }
    /**
     * Key-Value map defining non-standard, carrier specific features. List of the supported properties is located as sub-resource in /shipment-management/delivery-services.
     *
     * @param array<string, string> $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties(iterable $additionalProperties): self
    {
        $this->initialized['additionalProperties'] = true;
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
}