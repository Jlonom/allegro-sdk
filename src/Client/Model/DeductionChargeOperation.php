<?php

namespace Jlonom\AllegroSDK\Model;

class DeductionChargeOperation extends BaseOperation
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
     * Deduction.
     *
     * @var Deduction
     */
    protected $deduction;
    /**
     * Deduction.
     *
     * @return Deduction
     */
    public function getDeduction(): Deduction
    {
        return $this->deduction;
    }
    /**
     * Deduction.
     *
     * @param Deduction $deduction
     *
     * @return self
     */
    public function setDeduction(Deduction $deduction): self
    {
        $this->initialized['deduction'] = true;
        $this->deduction = $deduction;
        return $this;
    }
}