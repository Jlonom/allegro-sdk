<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibleProductDto extends \ArrayObject
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
     * Identifier of the compatible product.
     *
     * @var string
     */
    protected $id;
    /**
     * Textual representation of the compatible product.
     *
     * @var string
     */
    protected $text;
    /**
     * Group to which compatible product is assigned to.
     *
     * @var CompatibleProductDtoGroup
     */
    protected $group;
    /**
     * List of compatible products attributes.
     *
     * @var list<CompatibleProductDtoAttributesItem>
     */
    protected $attributes;
    /**
     * Identifier of the compatible product.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the compatible product.
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
     * Textual representation of the compatible product.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Textual representation of the compatible product.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->initialized['text'] = true;
        $this->text = $text;
        return $this;
    }
    /**
     * Group to which compatible product is assigned to.
     *
     * @return CompatibleProductDtoGroup
     */
    public function getGroup(): CompatibleProductDtoGroup
    {
        return $this->group;
    }
    /**
     * Group to which compatible product is assigned to.
     *
     * @param CompatibleProductDtoGroup $group
     *
     * @return self
     */
    public function setGroup(CompatibleProductDtoGroup $group): self
    {
        $this->initialized['group'] = true;
        $this->group = $group;
        return $this;
    }
    /**
     * List of compatible products attributes.
     *
     * @return list<CompatibleProductDtoAttributesItem>
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }
    /**
     * List of compatible products attributes.
     *
     * @param list<CompatibleProductDtoAttributesItem> $attributes
     *
     * @return self
     */
    public function setAttributes(array $attributes): self
    {
        $this->initialized['attributes'] = true;
        $this->attributes = $attributes;
        return $this;
    }
}