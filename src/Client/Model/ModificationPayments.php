<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationPayments extends \ArrayObject
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
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE
     *
     * @var string
     */
    protected $invoice;
    /**
     * VAT tax rate.
     *
     * @var Tax
     */
    protected $tax;
    /**
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE
     *
     * @return string
     */
    public function getInvoice(): string
    {
        return $this->invoice;
    }
    /**
     * Invoice type: VAT, VAT_MARGIN, WITHOUT_VAT, NO_INVOICE
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
    /**
     * VAT tax rate.
     *
     * @return Tax
     */
    public function getTax(): Tax
    {
        return $this->tax;
    }
    /**
     * VAT tax rate.
     *
     * @param Tax $tax
     *
     * @return self
     */
    public function setTax(Tax $tax): self
    {
        $this->initialized['tax'] = true;
        $this->tax = $tax;
        return $this;
    }
}