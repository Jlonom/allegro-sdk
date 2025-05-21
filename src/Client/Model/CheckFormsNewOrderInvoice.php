<?php

namespace Jlonom\AllegroSDK\Model;

class CheckFormsNewOrderInvoice extends \ArrayObject
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
     * @var CheckFormsNewOrderInvoiceFile
     */
    protected $file;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @return CheckFormsNewOrderInvoiceFile
     */
    public function getFile(): CheckFormsNewOrderInvoiceFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param CheckFormsNewOrderInvoiceFile $file
     *
     * @return self
     */
    public function setFile(CheckFormsNewOrderInvoiceFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInvoiceNumber(): string
    {
        return $this->invoiceNumber;
    }
    /**
     * 
     *
     * @param string $invoiceNumber
     *
     * @return self
     */
    public function setInvoiceNumber(string $invoiceNumber): self
    {
        $this->initialized['invoiceNumber'] = true;
        $this->invoiceNumber = $invoiceNumber;
        return $this;
    }
}