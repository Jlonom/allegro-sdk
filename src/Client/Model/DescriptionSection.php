<?php

namespace Jlonom\AllegroSDK\Model;

class DescriptionSection extends \ArrayObject
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
     * @var list<DescriptionSectionItem>
     */
    protected $items;
    /**
     * 
     *
     * @return list<DescriptionSectionItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * 
     *
     * @param list<DescriptionSectionItem> $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
}