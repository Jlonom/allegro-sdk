<?php

namespace Jlonom\AllegroSDK\Model;

class ImpliedWarrantyRequest extends \ArrayObject
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
     * Warranty name.
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
     * Warranty name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Warranty name.
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