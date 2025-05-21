<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibilityListSupportedCategoriesDtoSupportedCategoriesItem extends \ArrayObject
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
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     *
     * @var string
     */
    protected $categoryId;
    /**
     * Name of supported category.
     *
     * @var string
     */
    protected $name;
    /**
     * Type of the compatible item.
     *
     * @var string
     */
    protected $itemsType;
    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul> 
     *
     * @var string
     */
    protected $inputType;
    /**
     * Additional information about constraints assigned to the category.
     *
     * @var CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules
     */
    protected $validationRules;
    /**
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     *
     * @return string
     */
    public function getCategoryId(): string
    {
        return $this->categoryId;
    }
    /**
     * Identifier of the category, where you can use the compatibility list in an offer listed in the category or in all subcategories, which belongs to returned category.
     *
     * @param string $categoryId
     *
     * @return self
     */
    public function setCategoryId(string $categoryId): self
    {
        $this->initialized['categoryId'] = true;
        $this->categoryId = $categoryId;
        return $this;
    }
    /**
     * Name of supported category.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of supported category.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Type of the compatible item.
     *
     * @return string
     */
    public function getItemsType(): string
    {
        return $this->itemsType;
    }
    /**
     * Type of the compatible item.
     *
     * @param string $itemsType
     *
     * @return self
     */
    public function setItemsType(string $itemsType): self
    {
        $this->initialized['itemsType'] = true;
        $this->itemsType = $itemsType;
        return $this;
    }
    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul> 
     *
     * @return string
     */
    public function getInputType(): string
    {
        return $this->inputType;
    }
    /**
     * Type of the representation of compatible item. <ul> <li>`TEXT` - item on compatibility list has to be provided as plain text.</li> <li>`ID` - item on compatibility list has to be provided as identifier of compatible product. To obtain it please use <a href="/documentation/#tag/Compatibility-List/paths/~1sale~1compatible-products/get">compatible-products</a> resource together with `itemsType` supported in particular category. </li> </ul> 
     *
     * @param string $inputType
     *
     * @return self
     */
    public function setInputType(string $inputType): self
    {
        $this->initialized['inputType'] = true;
        $this->inputType = $inputType;
        return $this;
    }
    /**
     * Additional information about constraints assigned to the category.
     *
     * @return CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules
     */
    public function getValidationRules(): CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules
    {
        return $this->validationRules;
    }
    /**
     * Additional information about constraints assigned to the category.
     *
     * @param CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules $validationRules
     *
     * @return self
     */
    public function setValidationRules(CompatibilityListSupportedCategoriesDtoSupportedCategoriesItemValidationRules $validationRules): self
    {
        $this->initialized['validationRules'] = true;
        $this->validationRules = $validationRules;
        return $this;
    }
}