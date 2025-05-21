<?php

namespace Jlonom\AllegroSDK\Model;

class FeePreviewResponse extends \ArrayObject
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
     * An array of commissions.
     *
     * @var list<CommissionResponse>
     */
    protected $commissions;
    /**
     * An array of quotes.
     *
     * @var list<QuoteResponse>
     */
    protected $quotes;
    /**
     * An array of commissions.
     *
     * @return list<CommissionResponse>
     */
    public function getCommissions(): array
    {
        return $this->commissions;
    }
    /**
     * An array of commissions.
     *
     * @param list<CommissionResponse> $commissions
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
     * An array of quotes.
     *
     * @return list<QuoteResponse>
     */
    public function getQuotes(): array
    {
        return $this->quotes;
    }
    /**
     * An array of quotes.
     *
     * @param list<QuoteResponse> $quotes
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