<?php

namespace Jlonom\AllegroSDK\Model;

class CategorySuggestionResponse extends \ArrayObject
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
     * List of categories matching with given phrase.
     *
     * @var list<CategorySuggestionCategoryNode>
     */
    protected $matchingCategories;
    /**
     * List of categories matching with given phrase.
     *
     * @return list<CategorySuggestionCategoryNode>
     */
    public function getMatchingCategories(): array
    {
        return $this->matchingCategories;
    }
    /**
     * List of categories matching with given phrase.
     *
     * @param list<CategorySuggestionCategoryNode> $matchingCategories
     *
     * @return self
     */
    public function setMatchingCategories(array $matchingCategories): self
    {
        $this->initialized['matchingCategories'] = true;
        $this->matchingCategories = $matchingCategories;
        return $this;
    }
}