<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutForms extends \ArrayObject
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
     * @var list<CheckoutForm>
     */
    protected $checkoutForms;
    /**
     * number of returned objects
     *
     * @var float
     */
    protected $count;
    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset)
     *
     * @var float
     */
    protected $totalCount;
    /**
     * 
     *
     * @return list<CheckoutForm>
     */
    public function getCheckoutForms(): array
    {
        return $this->checkoutForms;
    }
    /**
     * 
     *
     * @param list<CheckoutForm> $checkoutForms
     *
     * @return self
     */
    public function setCheckoutForms(array $checkoutForms): self
    {
        $this->initialized['checkoutForms'] = true;
        $this->checkoutForms = $checkoutForms;
        return $this;
    }
    /**
     * number of returned objects
     *
     * @return float
     */
    public function getCount(): float
    {
        return $this->count;
    }
    /**
     * number of returned objects
     *
     * @param float $count
     *
     * @return self
     */
    public function setCount(float $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset)
     *
     * @return float
     */
    public function getTotalCount(): float
    {
        return $this->totalCount;
    }
    /**
     * Number of all objects of requested status(es) available (regardless of the provided limit and offset)
     *
     * @param float $totalCount
     *
     * @return self
     */
    public function setTotalCount(float $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
}