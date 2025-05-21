<?php

namespace Jlonom\AllegroSDK\Model;

class DictionaryCategoryProductParameterdictionaryItem extends \ArrayObject
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
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     *
     * @var string
     */
    protected $id;
    /**
     * The label of the dictionary value in Polish.
     *
     * @var string
     */
    protected $value;
    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The ID of the dictionary value. Use it to set the value in an offer or in a product.
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
     * The label of the dictionary value in Polish.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * The label of the dictionary value in Polish.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
}