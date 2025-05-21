<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormsOrderInvoice extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $invoiceNumber;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var CheckoutFormsOrderInvoiceFile
     */
    protected $file;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
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
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormsOrderInvoiceFile
     */
    public function getFile(): CheckoutFormsOrderInvoiceFile
    {
        return $this->file;
    }
    /**
     * 
     *
     * @param CheckoutFormsOrderInvoiceFile $file
     *
     * @return self
     */
    public function setFile(CheckoutFormsOrderInvoiceFile $file): self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
}