<?php

namespace Jlonom\AllegroSDK\Model;

class QuoteResponse extends \ArrayObject
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
     * Quote fee name.
     *
     * @var string
     */
    protected $name;
    /**
     * Quote fee type.
     *
     * @var string
     */
    protected $type;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $fee;
    /**
     * Duration in ISO 8601 format.
     *
     * @var string
     */
    protected $cycleDuration;
    /**
     * 
     *
     * @var ClassifiedPackage
     */
    protected $classifiedsPackage;
    /**
     * Quote fee name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Quote fee name.
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
     * Quote fee type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Quote fee type.
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
     * The price data.
     *
     * @return Price
     */
    public function getFee(): Price
    {
        return $this->fee;
    }
    /**
     * The price data.
     *
     * @param Price $fee
     *
     * @return self
     */
    public function setFee(Price $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
    /**
     * Duration in ISO 8601 format.
     *
     * @return string
     */
    public function getCycleDuration(): string
    {
        return $this->cycleDuration;
    }
    /**
     * Duration in ISO 8601 format.
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
    /**
     * 
     *
     * @return ClassifiedPackage
     */
    public function getClassifiedsPackage(): ClassifiedPackage
    {
        return $this->classifiedsPackage;
    }
    /**
     * 
     *
     * @param ClassifiedPackage $classifiedsPackage
     *
     * @return self
     */
    public function setClassifiedsPackage(ClassifiedPackage $classifiedsPackage): self
    {
        $this->initialized['classifiedsPackage'] = true;
        $this->classifiedsPackage = $classifiedsPackage;
        return $this;
    }
}