<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPoint extends \ArrayObject
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
     * Point id. You can use it in Send with Allegro.
     *
     * @var string
     */
    protected $id;
    /**
     * Point name.
     *
     * @var string
     */
    protected $name;
    /**
     * Point type.
     *
     * @var string
     */
    protected $type;
    /**
     * Point services.
     *
     * @var list<AllegroPickupDropOffPointServicesItem>
     */
    protected $services;
    /**
     * Point restrictions.
     *
     * @var list<AllegroPickupDropOffPointRestrictionsItem>
     */
    protected $restrictions;
    /**
     * Point description
     *
     * @var string
     */
    protected $description;
    /**
     * Point payment type.
     *
     * @var list<AllegroPickupDropOffPointPaymentsItem>
     */
    protected $payments;
    /**
     * 
     *
     * @var AllegroPickupDropOffPointAddress
     */
    protected $address;
    /**
     * Point working hours information.
     *
     * @var list<AllegroPickupDropOffPointOpeningItem>
     */
    protected $opening;
    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @var list<string>
     */
    protected $carriers;
    /**
     * Point id. You can use it in Send with Allegro.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Point id. You can use it in Send with Allegro.
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
     * Point name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Point name.
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
     * Point type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Point type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * Point services.
     *
     * @return list<AllegroPickupDropOffPointServicesItem>
     */
    public function getServices(): array
    {
        return $this->services;
    }
    /**
     * Point services.
     *
     * @param list<AllegroPickupDropOffPointServicesItem> $services
     *
     * @return self
     */
    public function setServices(array $services): self
    {
        $this->initialized['services'] = true;
        $this->services = $services;
        return $this;
    }
    /**
     * Point restrictions.
     *
     * @return list<AllegroPickupDropOffPointRestrictionsItem>
     */
    public function getRestrictions(): array
    {
        return $this->restrictions;
    }
    /**
     * Point restrictions.
     *
     * @param list<AllegroPickupDropOffPointRestrictionsItem> $restrictions
     *
     * @return self
     */
    public function setRestrictions(array $restrictions): self
    {
        $this->initialized['restrictions'] = true;
        $this->restrictions = $restrictions;
        return $this;
    }
    /**
     * Point description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Point description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * Point payment type.
     *
     * @return list<AllegroPickupDropOffPointPaymentsItem>
     */
    public function getPayments(): array
    {
        return $this->payments;
    }
    /**
     * Point payment type.
     *
     * @param list<AllegroPickupDropOffPointPaymentsItem> $payments
     *
     * @return self
     */
    public function setPayments(array $payments): self
    {
        $this->initialized['payments'] = true;
        $this->payments = $payments;
        return $this;
    }
    /**
     * 
     *
     * @return AllegroPickupDropOffPointAddress
     */
    public function getAddress(): AllegroPickupDropOffPointAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param AllegroPickupDropOffPointAddress $address
     *
     * @return self
     */
    public function setAddress(AllegroPickupDropOffPointAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Point working hours information.
     *
     * @return list<AllegroPickupDropOffPointOpeningItem>
     */
    public function getOpening(): array
    {
        return $this->opening;
    }
    /**
     * Point working hours information.
     *
     * @param list<AllegroPickupDropOffPointOpeningItem> $opening
     *
     * @return self
     */
    public function setOpening(array $opening): self
    {
        $this->initialized['opening'] = true;
        $this->opening = $opening;
        return $this;
    }
    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @return list<string>
     */
    public function getCarriers(): array
    {
        return $this->carriers;
    }
    /**
     * List of carriers that can drop off/pick up packages from point.
     *
     * @param list<string> $carriers
     *
     * @return self
     */
    public function setCarriers(array $carriers): self
    {
        $this->initialized['carriers'] = true;
        $this->carriers = $carriers;
        return $this;
    }
}