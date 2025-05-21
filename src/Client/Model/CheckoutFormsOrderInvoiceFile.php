<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormsOrderInvoiceFile extends \ArrayObject
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
    protected $name;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $uploadedAt;
    /**
     * 
     *
     * @var CheckoutFormsOrderInvoiceFileSecurityVerification
     */
    protected $securityVerification;
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
     * @return \DateTime
     */
    public function getUploadedAt(): \DateTime
    {
        return $this->uploadedAt;
    }
    /**
     * 
     *
     * @param \DateTime $uploadedAt
     *
     * @return self
     */
    public function setUploadedAt(\DateTime $uploadedAt): self
    {
        $this->initialized['uploadedAt'] = true;
        $this->uploadedAt = $uploadedAt;
        return $this;
    }
    /**
     * 
     *
     * @return CheckoutFormsOrderInvoiceFileSecurityVerification
     */
    public function getSecurityVerification(): CheckoutFormsOrderInvoiceFileSecurityVerification
    {
        return $this->securityVerification;
    }
    /**
     * 
     *
     * @param CheckoutFormsOrderInvoiceFileSecurityVerification $securityVerification
     *
     * @return self
     */
    public function setSecurityVerification(CheckoutFormsOrderInvoiceFileSecurityVerification $securityVerification): self
    {
        $this->initialized['securityVerification'] = true;
        $this->securityVerification = $securityVerification;
        return $this;
    }
}