<?php

namespace Jlonom\AllegroSDK\Model;

class AfterSalesServicesProductOfferRequest extends \ArrayObject
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
     * @var AfterSalesServicesProductOfferRequestImpliedWarranty
     */
    protected $impliedWarranty;
    /**
     * 
     *
     * @var AfterSalesServicesProductOfferRequestReturnPolicy
     */
    protected $returnPolicy;
    /**
     * 
     *
     * @var AfterSalesServicesProductOfferRequestWarranty
     */
    protected $warranty;
    /**
     * 
     *
     * @return AfterSalesServicesProductOfferRequestImpliedWarranty
     */
    public function getImpliedWarranty(): AfterSalesServicesProductOfferRequestImpliedWarranty
    {
        return $this->impliedWarranty;
    }
    /**
     * 
     *
     * @param AfterSalesServicesProductOfferRequestImpliedWarranty $impliedWarranty
     *
     * @return self
     */
    public function setImpliedWarranty(AfterSalesServicesProductOfferRequestImpliedWarranty $impliedWarranty): self
    {
        $this->initialized['impliedWarranty'] = true;
        $this->impliedWarranty = $impliedWarranty;
        return $this;
    }
    /**
     * 
     *
     * @return AfterSalesServicesProductOfferRequestReturnPolicy
     */
    public function getReturnPolicy(): AfterSalesServicesProductOfferRequestReturnPolicy
    {
        return $this->returnPolicy;
    }
    /**
     * 
     *
     * @param AfterSalesServicesProductOfferRequestReturnPolicy $returnPolicy
     *
     * @return self
     */
    public function setReturnPolicy(AfterSalesServicesProductOfferRequestReturnPolicy $returnPolicy): self
    {
        $this->initialized['returnPolicy'] = true;
        $this->returnPolicy = $returnPolicy;
        return $this;
    }
    /**
     * 
     *
     * @return AfterSalesServicesProductOfferRequestWarranty
     */
    public function getWarranty(): AfterSalesServicesProductOfferRequestWarranty
    {
        return $this->warranty;
    }
    /**
     * 
     *
     * @param AfterSalesServicesProductOfferRequestWarranty $warranty
     *
     * @return self
     */
    public function setWarranty(AfterSalesServicesProductOfferRequestWarranty $warranty): self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;
        return $this;
    }
}