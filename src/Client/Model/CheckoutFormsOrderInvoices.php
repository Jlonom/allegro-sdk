<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormsOrderInvoices extends \ArrayObject
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
     * @var list<CheckoutFormsOrderInvoice>
     */
    protected $invoices;
    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform
     *
     * @var bool
     */
    protected $hasExternalInvoices;
    /**
     * 
     *
     * @return list<CheckoutFormsOrderInvoice>
     */
    public function getInvoices(): array
    {
        return $this->invoices;
    }
    /**
     * 
     *
     * @param list<CheckoutFormsOrderInvoice> $invoices
     *
     * @return self
     */
    public function setInvoices(array $invoices): self
    {
        $this->initialized['invoices'] = true;
        $this->invoices = $invoices;
        return $this;
    }
    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform
     *
     * @return bool
     */
    public function getHasExternalInvoices(): bool
    {
        return $this->hasExternalInvoices;
    }
    /**
     * Informs whether an invoice or a proof-of-purchase has been sent outside of Allegro platform
     *
     * @param bool $hasExternalInvoices
     *
     * @return self
     */
    public function setHasExternalInvoices(bool $hasExternalInvoices): self
    {
        $this->initialized['hasExternalInvoices'] = true;
        $this->hasExternalInvoices = $hasExternalInvoices;
        return $this;
    }
}