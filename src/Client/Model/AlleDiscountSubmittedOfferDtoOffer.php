<?php

namespace Jlonom\AllegroSDK\Model;

class AlleDiscountSubmittedOfferDtoOffer extends \ArrayObject
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
     * The id of the offer.
     *
     * @var string
     */
    protected $id;
    /**
     * The id of the offer.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the offer.
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
}