<?php

namespace Jlonom\AllegroSDK\Model;

class BillingEntries extends \ArrayObject
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
     * List of billing types.
     *
     * @var list<BillingEntry>
     */
    protected $billingEntries;
    /**
     * List of billing types.
     *
     * @return list<BillingEntry>
     */
    public function getBillingEntries(): array
    {
        return $this->billingEntries;
    }
    /**
     * List of billing types.
     *
     * @param list<BillingEntry> $billingEntries
     *
     * @return self
     */
    public function setBillingEntries(array $billingEntries): self
    {
        $this->initialized['billingEntries'] = true;
        $this->billingEntries = $billingEntries;
        return $this;
    }
}