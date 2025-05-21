<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductOfferStatusResponse extends \ArrayObject
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
     * @var OfferId
     */
    protected $offer;
    /**
     * 
     *
     * @var SaleProductOfferStatusResponseOperation
     */
    protected $operation;
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
     * @return SaleProductOfferStatusResponseOperation
     */
    public function getOperation(): SaleProductOfferStatusResponseOperation
    {
        return $this->operation;
    }
    /**
     * 
     *
     * @param SaleProductOfferStatusResponseOperation $operation
     *
     * @return self
     */
    public function setOperation(SaleProductOfferStatusResponseOperation $operation): self
    {
        $this->initialized['operation'] = true;
        $this->operation = $operation;
        return $this;
    }
}