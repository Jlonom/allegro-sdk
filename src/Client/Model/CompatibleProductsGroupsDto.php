<?php

namespace Jlonom\AllegroSDK\Model;

class CompatibleProductsGroupsDto extends \ArrayObject
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
     * List of groups for given type of compatible products.
     *
     * @var list<CompatibleProductsGroupsDtoGroupsItem>
     */
    protected $groups;
    /**
     * Number of returned elements.
     *
     * @var int
     */
    protected $count;
    /**
     * Total number of available elements.
     *
     * @var int
     */
    protected $totalCount;
    /**
     * List of groups for given type of compatible products.
     *
     * @return list<CompatibleProductsGroupsDtoGroupsItem>
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
    /**
     * List of groups for given type of compatible products.
     *
     * @param list<CompatibleProductsGroupsDtoGroupsItem> $groups
     *
     * @return self
     */
    public function setGroups(array $groups): self
    {
        $this->initialized['groups'] = true;
        $this->groups = $groups;
        return $this;
    }
    /**
     * Number of returned elements.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Number of returned elements.
     *
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * Total number of available elements.
     *
     * @return int
     */
    public function getTotalCount(): int
    {
        return $this->totalCount;
    }
    /**
     * Total number of available elements.
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
}