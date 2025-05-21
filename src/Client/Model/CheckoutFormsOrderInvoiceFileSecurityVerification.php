<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormsOrderInvoiceFileSecurityVerification extends \ArrayObject
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
    protected $status;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $verifiedAt;
    /**
     * 
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getVerifiedAt(): \DateTime
    {
        return $this->verifiedAt;
    }
    /**
     * 
     *
     * @param \DateTime $verifiedAt
     *
     * @return self
     */
    public function setVerifiedAt(\DateTime $verifiedAt): self
    {
        $this->initialized['verifiedAt'] = true;
        $this->verifiedAt = $verifiedAt;
        return $this;
    }
}