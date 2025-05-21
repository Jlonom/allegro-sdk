<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryParameterList extends \ArrayObject
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
     * The list of parameters supported by the category.
     *
     * @var list<CategoryParameter>
     */
    protected $parameters;
    /**
     * The list of parameters supported by the category.
     *
     * @return list<CategoryParameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * The list of parameters supported by the category.
     *
     * @param list<CategoryParameter> $parameters
     *
     * @return self
     */
    public function setParameters(array $parameters): self
    {
        $this->initialized['parameters'] = true;
        $this->parameters = $parameters;
        return $this;
    }
}