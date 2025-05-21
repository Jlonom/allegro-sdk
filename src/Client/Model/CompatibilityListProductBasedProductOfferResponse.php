<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListProductBasedProductOfferResponse extends CompatibilityListProductOfferResponse
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
     * Text representation of the compatibility list items. Provided for informational purposes only - ignored when creating (Post) or updating (Put) compatibility list in the offer.
     *
     * @var list<CompatibilityListItemProductBased>
     */
    protected $items;
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