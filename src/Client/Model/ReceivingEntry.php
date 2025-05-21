<?php

namespace Jlonom\AllegroSDK\Model;

class ReceivingEntry extends \ArrayObject
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
     * Expected product quantity.
     *
     * @var int
     */
    protected $expected;
    /**
     * The product data.
     *
     * @var Product
     */
    protected $product;
    /**
     * 
     *
     * @var list<ReceivingStatus>
     */
    protected $received;
    /**
     * Expected product quantity.
     *
     * @return int
     */
    public function getExpected(): int
    {
        return $this->expected;
    }
    /**
     * Expected product quantity.
     *
     * @param int $expected
     *
     * @return self
     */
    public function setExpected(int $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;
        return $this;
    }
    /**
     * The product data.
     *
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }
    /**
     * The product data.
     *
     * @param Product $product
     *
     * @return self
     */
    public function setProduct(Product $product): self
    {
        $this->initialized['product'] = true;
        $this->product = $product;
        return $this;
    }
    /**
     * 
     *
     * @return list<ReceivingStatus>
     */
    public function getReceived(): array
    {
        return $this->received;
    }
    /**
     * 
     *
     * @param list<ReceivingStatus> $received
     *
     * @return self
     */
    public function setReceived(array $received): self
    {
        $this->initialized['received'] = true;
        $this->received = $received;
        return $this;
    }
}