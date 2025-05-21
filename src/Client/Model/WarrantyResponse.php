<?php

namespace Jlonom\AllegroSDK\Model;

class WarrantyResponse extends \ArrayObject
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
     * The ID of the warranty definition.
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
     * Warranty name.
     *
     * @var string
     */
    protected $name;
    /**
     * Defines who is warrantor.
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var WarrantyPeriod
     */
    protected $individual;
    /**
     * 
     *
     * @var WarrantyPeriod
     */
    protected $corporate;
    /**
     * 
     *
     * @var AfterSalesServicesAttachment
     */
    protected $attachment;
    /**
     * Warranty description.
     *
     * @var string
     */
    protected $description;
    /**
     * The ID of the warranty definition.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the warranty definition.
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
     * Defines who is warrantor.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Defines who is warrantor.
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
     * 
     *
     * @return WarrantyPeriod
     */
    public function getIndividual(): WarrantyPeriod
    {
        return $this->individual;
    }
    /**
     * 
     *
     * @param WarrantyPeriod $individual
     *
     * @return self
     */
    public function setIndividual(WarrantyPeriod $individual): self
    {
        $this->initialized['individual'] = true;
        $this->individual = $individual;
        return $this;
    }
    /**
     * 
     *
     * @return WarrantyPeriod
     */
    public function getCorporate(): WarrantyPeriod
    {
        return $this->corporate;
    }
    /**
     * 
     *
     * @param WarrantyPeriod $corporate
     *
     * @return self
     */
    public function setCorporate(WarrantyPeriod $corporate): self
    {
        $this->initialized['corporate'] = true;
        $this->corporate = $corporate;
        return $this;
    }
    /**
     * 
     *
     * @return AfterSalesServicesAttachment
     */
    public function getAttachment(): AfterSalesServicesAttachment
    {
        return $this->attachment;
    }
    /**
     * 
     *
     * @param AfterSalesServicesAttachment $attachment
     *
     * @return self
     */
    public function setAttachment(AfterSalesServicesAttachment $attachment): self
    {
        $this->initialized['attachment'] = true;
        $this->attachment = $attachment;
        return $this;
    }
    /**
     * Warranty description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Warranty description.
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