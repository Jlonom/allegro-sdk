<?php

namespace Jlonom\AllegroSDK\Model;

class ReturnPolicyReturnCost extends \ArrayObject
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
     * Indicates who covers the return delivery costs.
     *
     * @var string
     */
    protected $coveredBy;
    /**
     * Indicates who covers the return delivery costs.
     *
     * @return string
     */
    public function getCoveredBy(): string
    {
        return $this->coveredBy;
    }
    /**
     * Indicates who covers the return delivery costs.
     *
     * @param string $coveredBy
     *
     * @return self
     */
    public function setCoveredBy(string $coveredBy): self
    {
        $this->initialized['coveredBy'] = true;
        $this->coveredBy = $coveredBy;
        return $this;
    }
}