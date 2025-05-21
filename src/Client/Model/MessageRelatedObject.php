<?php

namespace Jlonom\AllegroSDK\Model;

class MessageRelatedObject extends \ArrayObject
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
     * @var MessageOffer|null
     */
    protected $offer;
    /**
     * 
     *
     * @var MessageOrder|null
     */
    protected $order;
    /**
     * 
     *
     * @return MessageOffer|null
     */
    public function getOffer(): ?MessageOffer
    {
        return $this->offer;
    }
    /**
     * 
     *
     * @param MessageOffer|null $offer
     *
     * @return self
     */
    public function setOffer(?MessageOffer $offer): self
    {
        $this->initialized['offer'] = true;
        $this->offer = $offer;
        return $this;
    }
    /**
     * 
     *
     * @return MessageOrder|null
     */
    public function getOrder(): ?MessageOrder
    {
        return $this->order;
    }
    /**
     * 
     *
     * @param MessageOrder|null $order
     *
     * @return self
     */
    public function setOrder(?MessageOrder $order): self
    {
        $this->initialized['order'] = true;
        $this->order = $order;
        return $this;
    }
}