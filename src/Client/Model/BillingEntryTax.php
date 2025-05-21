<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntryTax extends \ArrayObject
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
     * Optional tax rate shown as a number in the range 0-100.
     *
     * @var string
     */
    protected $percentage;
    /**
     * Optional annotation explaining the tax rate.
     *
     * @var string
     */
    protected $annotation;
    /**
     * Optional tax rate shown as a number in the range 0-100.
     *
     * @return string
     */
    public function getPercentage(): string
    {
        return $this->percentage;
    }
    /**
     * Optional tax rate shown as a number in the range 0-100.
     *
     * @param string $percentage
     *
     * @return self
     */
    public function setPercentage(string $percentage): self
    {
        $this->initialized['percentage'] = true;
        $this->percentage = $percentage;
        return $this;
    }
    /**
     * Optional annotation explaining the tax rate.
     *
     * @return string
     */
    public function getAnnotation(): string
    {
        return $this->annotation;
    }
    /**
     * Optional annotation explaining the tax rate.
     *
     * @param string $annotation
     *
     * @return self
     */
    public function setAnnotation(string $annotation): self
    {
        $this->initialized['annotation'] = true;
        $this->annotation = $annotation;
        return $this;
    }
}