<?php

namespace Jlonom\AllegroSDK\Model;

class OfferQuotesDto extends \ArrayObject
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
     * @var list<OfferQuoteDto>
     */
    protected $quotes;
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
     * @return list<OfferQuoteDto>
     */
    public function getQuotes(): array
    {
        return $this->quotes;
    }
    /**
     * 
     *
     * @param list<OfferQuoteDto> $quotes
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