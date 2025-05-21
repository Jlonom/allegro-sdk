<?php

namespace Jlonom\AllegroSDK\Model;

class SaleDeliveryMethodsGetResponse200DeliveryMethodsItemShippingRatesConstraintsShippingTimeDefault extends \ArrayObject
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
     * ISO 8601 duration format.
     *
     * @var string
     */
    protected $from;
    /**
     * ISO 8601 duration format.
     *
     * @var string
     */
    protected $to;
    /**
     * ISO 8601 duration format.
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }
    /**
     * ISO 8601 duration format.
     *
     * @param string $from
     *
     * @return self
     */
    public function setFrom(string $from): self
    {
        $this->initialized['from'] = true;
        $this->from = $from;
        return $this;
    }
    /**
     * ISO 8601 duration format.
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }
    /**
     * ISO 8601 duration format.
     *
     * @param string $to
     *
     * @return self
     */
    public function setTo(string $to): self
    {
        $this->initialized['to'] = true;
        $this->to = $to;
        return $this;
    }
}