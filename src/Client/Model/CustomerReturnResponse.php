<?php

namespace Jlonom\AllegroSDK\Model;

class CustomerReturnResponse extends \ArrayObject
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
     * @var int
     */
    protected $count;
    /**
     * List of matching customer returns.
     *
     * @var list<CustomerReturn>
     */
    protected $customerReturns;
    /**
     * 
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * 
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * List of matching customer returns.
     *
     * @return list<CustomerReturn>
     */
    public function getCustomerReturns(): array
    {
        return $this->customerReturns;
    }
    /**
     * List of matching customer returns.
     *
     * @param list<CustomerReturn> $customerReturns
     *
     * @return self
     */
    public function setCustomerReturns(array $customerReturns): self
    {
        $this->initialized['customerReturns'] = true;
        $this->customerReturns = $customerReturns;
        return $this;
    }
}