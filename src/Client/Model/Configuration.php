<?php

namespace Jlonom\AllegroSDK\Model;

class Configuration extends \ArrayObject
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
     * @var ConstraintCriteria
     */
    protected $constraintCriteria;
    /**
     * The price data.
     *
     * @var Price
     */
    protected $price;
    /**
     * 
     *
     * @return ConstraintCriteria
     */
    public function getConstraintCriteria(): ConstraintCriteria
    {
        return $this->constraintCriteria;
    }
    /**
     * 
     *
     * @param ConstraintCriteria $constraintCriteria
     *
     * @return self
     */
    public function setConstraintCriteria(ConstraintCriteria $constraintCriteria): self
    {
        $this->initialized['constraintCriteria'] = true;
        $this->constraintCriteria = $constraintCriteria;
        return $this;
    }
    /**
     * The price data.
     *
     * @return Price
     */
    public function getPrice(): Price
    {
        return $this->price;
    }
    /**
     * The price data.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(Price $price): self
    {
        $this->initialized['price'] = true;
        $this->price = $price;
        return $this;
    }
}