<?php

namespace Jlonom\AllegroSDK\Model;

class AfterSalesServices extends \ArrayObject
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
     * The implied warranty information.
     *
     * @var ImpliedWarranty
     */
    protected $impliedWarranty;
    /**
     * The return policy information.
     *
     * @var ReturnPolicy
     */
    protected $returnPolicy;
    /**
     * The warranty information.
     *
     * @var Warranty
     */
    protected $warranty;
    /**
     * The implied warranty information.
     *
     * @return ImpliedWarranty
     */
    public function getImpliedWarranty(): ImpliedWarranty
    {
        return $this->impliedWarranty;
    }
    /**
     * The implied warranty information.
     *
     * @param ImpliedWarranty $impliedWarranty
     *
     * @return self
     */
    public function setImpliedWarranty(ImpliedWarranty $impliedWarranty): self
    {
        $this->initialized['impliedWarranty'] = true;
        $this->impliedWarranty = $impliedWarranty;
        return $this;
    }
    /**
     * The return policy information.
     *
     * @return ReturnPolicy
     */
    public function getReturnPolicy(): ReturnPolicy
    {
        return $this->returnPolicy;
    }
    /**
     * The return policy information.
     *
     * @param ReturnPolicy $returnPolicy
     *
     * @return self
     */
    public function setReturnPolicy(ReturnPolicy $returnPolicy): self
    {
        $this->initialized['returnPolicy'] = true;
        $this->returnPolicy = $returnPolicy;
        return $this;
    }
    /**
     * The warranty information.
     *
     * @return Warranty
     */
    public function getWarranty(): Warranty
    {
        return $this->warranty;
    }
    /**
     * The warranty information.
     *
     * @param Warranty $warranty
     *
     * @return self
     */
    public function setWarranty(Warranty $warranty): self
    {
        $this->initialized['warranty'] = true;
        $this->warranty = $warranty;
        return $this;
    }
}