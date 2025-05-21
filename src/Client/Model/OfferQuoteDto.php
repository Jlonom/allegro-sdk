<?php

namespace Jlonom\AllegroSDK\Model;

class OfferQuoteDto extends \ArrayObject
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
     * @var bool
     */
    protected $enabled;
    /**
     * 
     *
     * @var Fee
     */
    protected $fee;
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
    protected $nextDate;
    /**
     * 
     *
     * @var OfferId
     */
    protected $offer;
    /**
     * 
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }
    /**
     * 
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->initialized['enabled'] = true;
        $this->enabled = $enabled;
        return $this;
    }
    /**
     * 
     *
     * @return Fee
     */
    public function getFee(): Fee
    {
        return $this->fee;
    }
    /**
     * 
     *
     * @param Fee $fee
     *
     * @return self
     */
    public function setFee(Fee $fee): self
    {
        $this->initialized['fee'] = true;
        $this->fee = $fee;
        return $this;
    }
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
    public function getNextDate(): \DateTime
    {
        return $this->nextDate;
    }
    /**
     * 
     *
     * @param \DateTime $nextDate
     *
     * @return self
     */
    public function setNextDate(\DateTime $nextDate): self
    {
        $this->initialized['nextDate'] = true;
        $this->nextDate = $nextDate;
        return $this;
    }
    /**
     * 
     *
     * @return OfferId
     */
    public function getOffer(): OfferId
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param OfferId $offer
     *
     * @return self
     */
    public function setOffer(OfferId $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * 
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}