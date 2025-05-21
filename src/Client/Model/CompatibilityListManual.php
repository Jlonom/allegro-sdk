<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListManual extends CompatibilityListProductOfferResponse
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
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @var list<CompatibilityListItem>
     */
    protected $items;
    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @return list<CompatibilityListItem>
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     * List of the compatible items. Maximum number of elements on the list depends on type of included compatible items. Configuration and details concerning the compatible items in selected category are provided in the response for GET <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatibility-list~1supported-categories/get"> supported-categories</a> resource in `validationRules` object.
     *
     * @param list<CompatibilityListItem> $items
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