<?php

namespace Jlonom\AllegroSDK\Model;

class PayoutOperation extends BaseOperation
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
     * Payout.
     *
     * @var Payout
     */
    protected $payout;
    /**
     * Payout.
     *
     * @return Payout
     */
    public function getPayout(): Payout
    {
        return $this->payout;
    }
    /**
     * Payout.
     *
     * @param Payout $payout
     *
     * @return self
     */
    public function setPayout(Payout $payout): self
    {
        $this->initialized['payout'] = true;
        $this->payout = $payout;
        return $this;
    }
}