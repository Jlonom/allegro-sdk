<?php

namespace Jlonom\AllegroSDK\Model;

class CheckoutFormLineItemTax extends \ArrayObject
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
     * The tax rate.
     *
     * @var string|null
     */
    protected $rate;
    /**
     * The subject of taxation.
     *
     * @var string|null
     */
    protected $subject;
    /**
     * The exemption of taxation.
     *
     * @var string|null
     */
    protected $exemption;
    /**
     * The tax rate.
     *
     * @return string|null
     */
    public function getRate(): ?string
    {
        return $this->rate;
    }
    /**
     * The tax rate.
     *
     * @param string|null $rate
     *
     * @return self
     */
    public function setRate(?string $rate): self
    {
        $this->initialized['rate'] = true;
        $this->rate = $rate;
        return $this;
    }
    /**
     * The subject of taxation.
     *
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }
    /**
     * The subject of taxation.
     *
     * @param string|null $subject
     *
     * @return self
     */
    public function setSubject(?string $subject): self
    {
        $this->initialized['subject'] = true;
        $this->subject = $subject;
        return $this;
    }
    /**
     * The exemption of taxation.
     *
     * @return string|null
     */
    public function getExemption(): ?string
    {
        return $this->exemption;
    }
    /**
     * The exemption of taxation.
     *
     * @param string|null $exemption
     *
     * @return self
     */
    public function setExemption(?string $exemption): self
    {
        $this->initialized['exemption'] = true;
        $this->exemption = $exemption;
        return $this;
    }
}