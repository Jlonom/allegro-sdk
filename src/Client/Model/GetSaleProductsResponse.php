<?php

namespace Jlonom\AllegroSDK\Model;

class GetSaleProductsResponse extends \ArrayObject
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
     * @var list<BaseSaleProductResponseDto>
     */
    protected $products;
    /**
     * 
     *
     * @var SaleProductResponseCategoriesDto
     */
    protected $categories;
    /**
     * 
     *
     * @var list<ListingResponseFilters>
     */
    protected $filters;
    /**
     * 
     *
     * @var GetSaleProductsResponseNextPage
     */
    protected $nextPage;
    /**
     * 
     *
     * @return list<BaseSaleProductResponseDto>
     */
    public function getProducts(): array
    {
        return $this->products;
    }
    /**
     * 
     *
     * @param list<BaseSaleProductResponseDto> $products
     *
     * @return self
     */
    public function setProducts(array $products): self
    {
        $this->initialized['products'] = true;
        $this->products = $products;
        return $this;
    }
    /**
     * 
     *
     * @return SaleProductResponseCategoriesDto
     */
    public function getCategories(): SaleProductResponseCategoriesDto
    {
        return $this->categories;
    }
    /**
     * 
     *
     * @param SaleProductResponseCategoriesDto $categories
     *
     * @return self
     */
    public function setCategories(SaleProductResponseCategoriesDto $categories): self
    {
        $this->initialized['categories'] = true;
        $this->categories = $categories;
        return $this;
    }
    /**
     * 
     *
     * @return list<ListingResponseFilters>
     */
    public function getFilters(): array
    {
        return $this->filters;
    }
    /**
     * 
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
     * 
     *
     * @return GetSaleProductsResponseNextPage
     */
    public function getNextPage(): GetSaleProductsResponseNextPage
    {
        return $this->nextPage;
    }
    /**
     * 
     *
     * @param GetSaleProductsResponseNextPage $nextPage
     *
     * @return self
     */
    public function setNextPage(GetSaleProductsResponseNextPage $nextPage): self
    {
        $this->initialized['nextPage'] = true;
        $this->nextPage = $nextPage;
        return $this;
    }
}