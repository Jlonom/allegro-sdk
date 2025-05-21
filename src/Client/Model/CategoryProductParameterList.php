<?php

namespace Jlonom\AllegroSDK\Model;

class CategoryProductParameterList extends \ArrayObject
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
     * The list of product parameters supported by the category.
     *
     * @var list<CategoryProductParameter>
     */
    protected $parameters;
    /**
     * The list of product parameters supported by the category.
     *
     * @return list<CategoryProductParameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * The list of product parameters supported by the category.
     *
     * @param list<CategoryProductParameter> $parameters
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