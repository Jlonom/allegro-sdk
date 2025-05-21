<?php

namespace Jlonom\AllegroSDK\Model;

class Modification extends \ArrayObject
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
     * @var AdditionalServicesGroup
     */
    protected $additionalServicesGroup;
    /**
     * Contains delivery details to change.
     *
     * @var ModificationDelivery
     */
    protected $delivery;
    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     *
     * @var ModificationDiscounts
     */
    protected $discounts;
    /**
     * for offer with a delivery method it is a parcel dispatch location. For offers with personal pick-up it is a pick-up location, additionally we recommend to use points of service (<a href="../../documentation/#tag/Points-of-service" target="_blank">https://developer.allegro.pl/documentation/#tag/Points-of-service</a>)
     *
     * @var Location
     */
    protected $location;
    /**
     * 
     *
     * @var ModificationPayments
     */
    protected $payments;
    /**
     * 
     *
     * @var SizeTable
     */
    protected $sizeTable;
    /**
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     *
     * @var ModificationPublication
     */
    protected $publication;
    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     *
     * @var ModificationResponsiblePerson
     */
    protected $responsiblePerson;
    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     *
     * @var ModificationResponsibleProducer
     */
    protected $responsibleProducer;
    /**
     * Allows you to set safety information in offers.
     *
     * @var ModificationSafetyInformation
     */
    protected $safetyInformation;
    /**
     * Allows you to declare whether the first product in the offer was marketed before the GPSR obligation.
     *
     * @var bool|null
     */
    protected $marketedBeforeGPSRObligation;
    /**
     * 
     *
     * @return AdditionalServicesGroup
     */
    public function getAdditionalServicesGroup(): AdditionalServicesGroup
    {
        return $this->additionalServicesGroup;
    }
    /**
     * 
     *
     * @param AdditionalServicesGroup $additionalServicesGroup
     *
     * @return self
     */
    public function setAdditionalServicesGroup(AdditionalServicesGroup $additionalServicesGroup): self
    {
        $this->initialized['additionalServicesGroup'] = true;
        $this->additionalServicesGroup = $additionalServicesGroup;
        return $this;
    }
    /**
     * Contains delivery details to change.
     *
     * @return ModificationDelivery
     */
    public function getDelivery(): ModificationDelivery
    {
        return $this->delivery;
    }
    /**
     * Contains delivery details to change.
     *
     * @param ModificationDelivery $delivery
     *
     * @return self
     */
    public function setDelivery(ModificationDelivery $delivery): self
    {
        $this->initialized['delivery'] = true;
        $this->delivery = $delivery;
        return $this;
    }
    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     *
     * @return ModificationDiscounts
     */
    public function getDiscounts(): ModificationDiscounts
    {
        return $this->discounts;
    }
    /**
     * Allows you to assign/unassign discounts (rebates) to/from offers.
     *
     * @param ModificationDiscounts $discounts
     *
     * @return self
     */
    public function setDiscounts(ModificationDiscounts $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;
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
     * @return ModificationPayments
     */
    public function getPayments(): ModificationPayments
    {
        return $this->payments;
    }
    /**
     * 
     *
     * @param ModificationPayments $payments
     *
     * @return self
     */
    public function setPayments(ModificationPayments $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
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
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     *
     * @return ModificationPublication
     */
    public function getPublication(): ModificationPublication
    {
        return $this->publication;
    }
    /**
     * Allows you to change duration of the offers. You can include only property in a request "duration" or "durationUnlimited".
     *
     * @param ModificationPublication $publication
     *
     * @return self
     */
    public function setPublication(ModificationPublication $publication): self
    {
        $this->initialized['publication'] = true;
        $this->publication = $publication;
        return $this;
    }
    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     *
     * @return ModificationResponsiblePerson
     */
    public function getResponsiblePerson(): ModificationResponsiblePerson
    {
        return $this->responsiblePerson;
    }
    /**
     * Allows you to assign/unassign responsible persons to/from offers.
     *
     * @param ModificationResponsiblePerson $responsiblePerson
     *
     * @return self
     */
    public function setResponsiblePerson(ModificationResponsiblePerson $responsiblePerson): self
    {
        $this->initialized['responsiblePerson'] = true;
        $this->responsiblePerson = $responsiblePerson;
        return $this;
    }
    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     *
     * @return ModificationResponsibleProducer
     */
    public function getResponsibleProducer(): ModificationResponsibleProducer
    {
        return $this->responsibleProducer;
    }
    /**
     * Allows you to assign/unassign responsible producers to/from offers.
     *
     * @param ModificationResponsibleProducer $responsibleProducer
     *
     * @return self
     */
    public function setResponsibleProducer(ModificationResponsibleProducer $responsibleProducer): self
    {
        $this->initialized['responsibleProducer'] = true;
        $this->responsibleProducer = $responsibleProducer;
        return $this;
    }
    /**
     * Allows you to set safety information in offers.
     *
     * @return ModificationSafetyInformation
     */
    public function getSafetyInformation(): ModificationSafetyInformation
    {
        return $this->safetyInformation;
    }
    /**
     * Allows you to set safety information in offers.
     *
     * @param ModificationSafetyInformation $safetyInformation
     *
     * @return self
     */
    public function setSafetyInformation(ModificationSafetyInformation $safetyInformation): self
    {
        $this->initialized['safetyInformation'] = true;
        $this->safetyInformation = $safetyInformation;
        return $this;
    }
    /**
     * Allows you to declare whether the first product in the offer was marketed before the GPSR obligation.
     *
     * @return bool|null
     */
    public function getMarketedBeforeGPSRObligation(): ?bool
    {
        return $this->marketedBeforeGPSRObligation;
    }
    /**
     * Allows you to declare whether the first product in the offer was marketed before the GPSR obligation.
     *
     * @param bool|null $marketedBeforeGPSRObligation
     *
     * @return self
     */
    public function setMarketedBeforeGPSRObligation(?bool $marketedBeforeGPSRObligation): self
    {
        $this->initialized['marketedBeforeGPSRObligation'] = true;
        $this->marketedBeforeGPSRObligation = $marketedBeforeGPSRObligation;
        return $this;
    }
}