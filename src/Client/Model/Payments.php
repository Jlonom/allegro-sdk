<?php

namespace Jlonom\AllegroSDK\Model;

class Payments extends \ArrayObject
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
     * Invoice type
     *
     * @var string
     */
    protected $invoice;
    /**
     * Invoice type
     *
     * @return string
     */
    public function getInvoice(): string
    {
        return $this->invoice;
    }
    /**
     * Invoice type
     *
     * @param string $invoice
     *
     * @return self
     */
    public function setInvoice(string $invoice): self
    {
        $this->initialized['invoice'] = true;
        $this->invoice = $invoice;
        return $this;
    }
}