<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryResponse extends \ArrayObject
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
     * Name of the additional services category.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<CategoryDefinitionResponse>
     */
    protected $definitions;
    /**
     * Name of the additional services category.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of the additional services category.
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
     * 
     *
     * @return list<CategoryDefinitionResponse>
     */
    public function getDefinitions(): array
    {
        return $this->definitions;
    }
    /**
     * 
     *
     * @param list<CategoryDefinitionResponse> $definitions
     *
     * @return self
     */
    public function setDefinitions(array $definitions): self
    {
        $this->initialized['definitions'] = true;
        $this->definitions = $definitions;
        return $this;
    }
}