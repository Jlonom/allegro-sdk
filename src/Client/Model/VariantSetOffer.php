<?php

namespace Jlonom\AllegroSDK\Model;

class VariantSetOffer extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     *
     * @var string
     */
    protected $colorPattern;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     *
     * @return string
     */
    public function getColorPattern(): string
    {
        return $this->colorPattern;
    }
    /**
     * Label that allows to group variants via image. All variants having the same image should have identical identifier in this field.
     *
     * @param string $colorPattern
     *
     * @return self
     */
    public function setColorPattern(string $colorPattern): self
    {
        $this->initialized['colorPattern'] = true;
        $this->colorPattern = $colorPattern;
        return $this;
    }
}