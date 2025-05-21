<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponse extends \ArrayObject
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
     * The lists of search results.
     *
     * @var ListingResponseOffers
     */
    protected $items;
    /**
     * Information about categories.
     *
     * @var ListingResponseCategories
     */
    protected $categories;
    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @var list<ListingResponseFilters>
     */
    protected $filters;
    /**
     * Search metadata.
     *
     * @var ListingResponseSearchMeta
     */
    protected $searchMeta;
    /**
     * Available sorting options.
     *
     * @var list<ListingResponseSort>
     */
    protected $sort;
    /**
     * The lists of search results.
     *
     * @return ListingResponseOffers
     */
    public function getItems(): ListingResponseOffers
    {
        return $this->items;
    }
    /**
     * The lists of search results.
     *
     * @param ListingResponseOffers $items
     *
     * @return self
     */
    public function setItems(ListingResponseOffers $items): self
    {
        $this->initialized['items'] = true;
        $this->items = $items;
        return $this;
    }
    /**
     * Information about categories.
     *
     * @return ListingResponseCategories
     */
    public function getCategories(): ListingResponseCategories
    {
        return $this->categories;
    }
    /**
     * Information about categories.
     *
     * @param ListingResponseCategories $categories
     *
     * @return self
     */
    public function setCategories(ListingResponseCategories $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @return list<ListingResponseFilters>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * An array of filters with counters available for given search. This can be used to refine the search results.
     *
     * @param list<ListingResponseFilters> $filters
     *
     * @return self
     */
    public function setFilters(array $filters): self
    {
        $this->initialized['filters'] = true;
        $this->filters = $filters;
        return $this;
    }
    /**
     * Search metadata.
     *
     * @return ListingResponseSearchMeta
     */
    public function getSearchMeta(): ListingResponseSearchMeta
    {
        return $this->searchMeta;
    }
    /**
     * Search metadata.
     *
     * @param ListingResponseSearchMeta $searchMeta
     *
     * @return self
     */
    public function setSearchMeta(ListingResponseSearchMeta $searchMeta): self
    {
        $this->initialized['searchMeta'] = true;
        $this->searchMeta = $searchMeta;
        return $this;
    }
    /**
     * Available sorting options.
     *
     * @return list<ListingResponseSort>
     */
    public function getSort(): array
    {
        return $this->sort;
    }
    /**
     * Available sorting options.
     *
     * @param list<ListingResponseSort> $sort
     *
     * @return self
     */
    public function setSort(array $sort): self
    {
        $this->initialized['sort'] = true;
        $this->sort = $sort;
        return $this;
    }
}