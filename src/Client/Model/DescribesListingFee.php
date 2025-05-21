<?php

namespace Jlonom\AllegroSDK\Model;

class DescribesListingFee extends \ArrayObject
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
     * @var Fee
     */
    protected $fee;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * Pricing cycle duration, ISO 8601 duration format
     *
     * @var string
     */
    protected $cycleDuration;
    /**
     * 
     *
     * @return Fee
     */
    public function getFee(): Fee
    {
        return $this->fee;
    }
    /**
     * 
     *
     * @param Fee $fee
     *
     * @return self
     */
    public function setFee(Fee $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
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
     * Pricing cycle duration, ISO 8601 duration format
     *
     * @return string
     */
    public function getCycleDuration(): string
    {
        return $this->cycleDuration;
    }
    /**
     * Pricing cycle duration, ISO 8601 duration format
     *
     * @param string $cycleDuration
     *
     * @return self
     */
    public function setCycleDuration(string $cycleDuration): self
    {
        $this->initialized['cycleDuration'] = true;
        $this->cycleDuration = $cycleDuration;
        return $this;
    }
}