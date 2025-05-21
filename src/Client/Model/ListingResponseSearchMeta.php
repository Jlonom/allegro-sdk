<?php

namespace Jlonom\AllegroSDK\Model;

class ListingResponseSearchMeta extends \ArrayObject
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
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     *
     * @var int
     */
    protected $availableCount;
    /**
     * The total number of search results with given parameters.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     *
     * @var bool
     */
    protected $fallback;
    /**
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     *
     * @return int
     */
    public function getAvailableCount(): int
    {
        return $this->availableCount;
    }
    /**
     * The number of results available for navigation. If this number is less than total count, the search criteria (categories, filters, etc.) should be narrowed down to make all results available.
     *
     * @param int $availableCount
     *
     * @return self
     */
    public function setAvailableCount(int $availableCount): self
    {
        $this->initialized['availableCount'] = true;
        $this->availableCount = $availableCount;
        return $this;
    }
    /**
     * The total number of search results with given parameters.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * The total number of search results with given parameters.
     *
     * @param int $totalCount
     *
     * @return self
     */
    public function setTotalCount(int $totalCount): self
    {
        $this->initialized['totalCount'] = true;
        $this->totalCount = $totalCount;
        return $this;
    }
    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     *
     * @return bool
     */
    public function getFallback(): bool
    {
        return $this->fallback;
    }
    /**
     * Indicates whether the search fallback was used. If true, no items matching exact given phrase were found and related items are presented.
     *
     * @param bool $fallback
     *
     * @return self
     */
    public function setFallback(bool $fallback): self
    {
        $this->initialized['fallback'] = true;
        $this->fallback = $fallback;
        return $this;
    }
}