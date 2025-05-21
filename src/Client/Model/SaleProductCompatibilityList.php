<?php

namespace Jlonom\AllegroSDK\Model;

class SaleProductCompatibilityList extends \ArrayObject
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
     * Id of product-based compatibility list.
     *
     * @var string
     */
    protected $id;
    /**
     * Type of compatibility list.
     *
     * @var string
     */
    protected $type = 'PRODUCT_BASED';
    /**
     * List of the compatible items.
     *
     * @var list<CompatibilityListItemProductBased>
     */
    protected $items;
    /**
     * Id of product-based compatibility list.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Id of product-based compatibility list.
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
     * Type of compatibility list.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of compatibility list.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * List of the compatible items.
     *
     * @return list<CompatibilityListItemProductBased>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of the compatible items.
     *
     * @param list<CompatibilityListItemProductBased> $items
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