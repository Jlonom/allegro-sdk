<?php

namespace Jlonom\AllegroSDK\Model;

class Payment extends \ArrayObject
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
     * Available forms of payment: CASH - cash, CARD - card.
     *
     * @var string
     */
    protected $method;
    /**
     * Available forms of payment: CASH - cash, CARD - card.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }
    /**
     * Available forms of payment: CASH - cash, CARD - card.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->initialized['method'] = true;
        $this->method = $method;
        return $this;
    }
}