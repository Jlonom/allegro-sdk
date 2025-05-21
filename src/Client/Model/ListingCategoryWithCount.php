<?php

namespace Jlonom\AllegroSDK\Model;

class ListingCategoryWithCount extends \ArrayObject
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
     * The category ID.
     *
     * @var string
     */
    protected $id;
    /**
     * The category name.
     *
     * @var string
     */
    protected $name;
    /**
     * Results count in this category.
     *
     * @var int
     */
    protected $count;
    /**
     * The category ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The category ID.
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
     * The category name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The category name.
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
     * Results count in this category.
     *
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * Results count in this category.
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
}