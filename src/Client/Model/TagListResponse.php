<?php

namespace Jlonom\AllegroSDK\Model;

class TagListResponse extends \ArrayObject
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
     * @var list<TagResponse>
     */
    protected $tags;
    /**
     * 
     *
     * @return list<TagResponse>
     */
    public function getTags(): array
    {
        return $this->tags;
    }
    /**
     * 
     *
     * @param list<TagResponse> $tags
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