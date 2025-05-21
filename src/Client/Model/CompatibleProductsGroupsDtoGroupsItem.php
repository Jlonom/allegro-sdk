<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibleProductsGroupsDtoGroupsItem extends \ArrayObject
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
     * Identifier of the group.
     *
     * @var string
     */
    protected $id;
    /**
     * Name of the group.
     *
     * @var string
     */
    protected $text;
    /**
     * Identifier of the group.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Identifier of the group.
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
     * Name of the group.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }
    /**
     * Name of the group.
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
}