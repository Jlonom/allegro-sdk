<?php

namespace Jlonom\AllegroSDK\Model;

class ImpliedWarrantyResponse extends \ArrayObject
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
     * The ID of the implied warranty definition.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var Seller
     */
    protected $seller;
    /**
     * Implied warranty name.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ImpliedWarrantyPeriod
     */
    protected $individual;
    /**
     * 
     *
     * @var ImpliedWarrantyPeriod
     */
    protected $corporate;
    /**
     * 
     *
     * @var AfterSalesServicesAddress
     */
    protected $address;
    /**
     * Implied warranty description.
     *
     * @var string
     */
    protected $description;
    /**
     * The ID of the implied warranty definition.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the implied warranty definition.
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
     * @return Seller
     */
    public function getSeller(): Seller
    {
        return $this->seller;
    }
    /**
     * 
     *
     * @param Seller $seller
     *
     * @return self
     */
    public function setSeller(Seller $seller): self
    {
        $this->initialized['seller'] = true;
        $this->seller = $seller;
        return $this;
    }
    /**
     * Implied warranty name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Implied warranty name.
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
     * @return ImpliedWarrantyPeriod
     */
    public function getIndividual(): ImpliedWarrantyPeriod
    {
        return $this->individual;
    }
    /**
     * 
     *
     * @param ImpliedWarrantyPeriod $individual
     *
     * @return self
     */
    public function setIndividual(ImpliedWarrantyPeriod $individual): self
    {
        $this->initialized['individual'] = true;
        $this->individual = $individual;
        return $this;
    }
    /**
     * 
     *
     * @return ImpliedWarrantyPeriod
     */
    public function getCorporate(): ImpliedWarrantyPeriod
    {
        return $this->corporate;
    }
    /**
     * 
     *
     * @param ImpliedWarrantyPeriod $corporate
     *
     * @return self
     */
    public function setCorporate(ImpliedWarrantyPeriod $corporate): self
    {
        $this->initialized['corporate'] = true;
        $this->corporate = $corporate;
        return $this;
    }
    /**
     * 
     *
     * @return AfterSalesServicesAddress
     */
    public function getAddress(): AfterSalesServicesAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param AfterSalesServicesAddress $address
     *
     * @return self
     */
    public function setAddress(AfterSalesServicesAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;
        return $this;
    }
    /**
     * Implied warranty description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Implied warranty description.
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
}