<?php

namespace Jlonom\AllegroSDK\Model;

class WrapsListingAndCommissionsFees extends \ArrayObject
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
     * @var list<DescribesSuccessCommissionFee>
     */
    protected $commissions;
    /**
     * 
     *
     * @var list<DescribesListingFee>
     */
    protected $quotes;
    /**
     * 
     *
     * @return list<DescribesSuccessCommissionFee>
     */
    public function getCommissions(): array
    {
        return $this->commissions;
    }
    /**
     * 
     *
     * @param list<DescribesSuccessCommissionFee> $commissions
     *
     * @return self
     */
    public function setCommissions(array $commissions): self
    {
        $this->initialized['commissions'] = true;
        $this->commissions = $commissions;
        return $this;
    }
    /**
     * 
     *
     * @return list<DescribesListingFee>
     */
    public function getQuotes(): array
    {
        return $this->quotes;
    }
    /**
     * 
     *
     * @param list<DescribesListingFee> $quotes
     *
     * @return self
     */
    public function setQuotes(array $quotes): self
    {
        $this->initialized['quotes'] = true;
        $this->quotes = $quotes;
        return $this;
    }
}