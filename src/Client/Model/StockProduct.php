<?php

namespace Jlonom\AllegroSDK\Model;

class StockProduct extends \ArrayObject
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
     * The product identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The product name.
     *
     * @var string
     */
    protected $name;
    /**
     * List of product's GTIN numbers.
     *
     * @var list<string>
     */
    protected $gtins;
    /**
     * The product image.
     *
     * @var string
     */
    protected $image;
    /**
     * The product identifier.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The product identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The product name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The product name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * List of product's GTIN numbers.
     *
     * @return list<string>
     */
    public function getGtins(): array
    {
        return $this->gtins;
    }
    /**
     * List of product's GTIN numbers.
     *
     * @param list<string> $gtins
     *
     * @return self
     */
    public function setGtins(array $gtins): self
    {
        $this->initialized['gtins'] = true;
        $this->gtins = $gtins;
        return $this;
    }
    /**
     * The product image.
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * The product image.
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
}