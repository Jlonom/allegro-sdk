<?php

namespace Jlonom\AllegroSDK\Model;

class WarrantyRequest extends \ArrayObject
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
     * @var WarrantyAttachment
     */
    protected $attachment;
    /**
     * Warranty description.
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
     * @return WarrantyAttachment
     */
    public function getAttachment(): WarrantyAttachment
    {
        return $this->attachment;
    }
    /**
     * 
     *
     * @param WarrantyAttachment $attachment
     *
     * @return self
     */
    public function setAttachment(WarrantyAttachment $attachment): self
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