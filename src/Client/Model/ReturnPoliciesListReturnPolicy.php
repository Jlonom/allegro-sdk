<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPoliciesListReturnPolicy extends \ArrayObject
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
     * 
     *
     * @var list<ReturnPolicyResponse>
     */
    protected $returnPolicies;
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
     * 
     *
     * @return list<ReturnPolicyResponse>
     */
    public function getReturnPolicies(): array
    {
        return $this->returnPolicies;
    }
    /**
     * 
     *
     * @param list<ReturnPolicyResponse> $returnPolicies
     *
     * @return self
     */
    public function setReturnPolicies(array $returnPolicies): self
    {
        $this->initialized['returnPolicies'] = true;
        $this->returnPolicies = $returnPolicies;
        return $this;
    }
}