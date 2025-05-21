<?php

namespace Jlonom\AllegroSDK\Model;

class TagIdsRequest extends \ArrayObject
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
     * @var list<TagId>
     */
    protected $tags;
    /**
     * 
     *
     * @return list<TagId>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<TagId> $tags
     *
     * @return self
     */
    public function setTags(array $tags): self
    {
        $this->initialized['tags'] = true;
        $this->tags = $tags;
        return $this;
    }
}