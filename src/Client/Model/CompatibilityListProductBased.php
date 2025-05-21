<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListProductBased extends CompatibilityList
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
     * Text representation of the compatibility list items. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
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
     * Text representation of the compatibility list items. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
     *
     * @return list<CompatibilityListItemProductBased>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * Text representation of the compatibility list items. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
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