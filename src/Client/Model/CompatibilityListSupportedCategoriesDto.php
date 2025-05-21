<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListSupportedCategoriesDto extends \ArrayObject
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
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @var list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem>
     */
    protected $supportedCategories;
    /**
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @return list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem>
     */
    public function getSupportedCategories(): array
    {
        return $this->supportedCategories;
    }
    /**
     * List with information about categories where compatibility list is supported. <a href=" https://developer.allegro.pl/compatibility_list/" target="_blank">Read more</a>.
     *
     * @param list<CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem> $supportedCategories
     *
     * @return self
     */
    public function setSupportedCategories(array $supportedCategories): self
    {
        $this->initialized['supportedCategories'] = true;
        $this->supportedCategories = $supportedCategories;
        return $this;
    }
}