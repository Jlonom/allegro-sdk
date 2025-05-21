<?php

namespace Jlonom\AllegroSDK\Model;

class AiCoCreatedContent extends \ArrayObject
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
     * @var list<string>
     */
    protected $paths;
    /**
     * 
     *
     * @return list<string>
     */
    public function getPaths(): array
    {
        return $this->paths;
    }
    /**
     * 
     *
     * @param list<string> $paths
     *
     * @return self
     */
    public function setPaths(array $paths): self
    {
        $this->initialized['paths'] = true;
        $this->paths = $paths;
        return $this;
    }
}