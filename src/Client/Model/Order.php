<?php

namespace Jlonom\AllegroSDK\Model;

class Order extends \ArrayObject
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
     * Order id
     *
     * @var string
     */
    protected $id;
    /**
     * List of order offers
     *
     * @var list<OrderOffersItem>
     */
    protected $offers;
    /**
     * Order id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Order id
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
     * List of order offers
     *
     * @return list<OrderOffersItem>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * List of order offers
     *
     * @param list<OrderOffersItem> $offers
     *
     * @return self
     */
    public function setOffers(array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;
        return $this;
    }
}