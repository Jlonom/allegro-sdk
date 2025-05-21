<?php

namespace Jlonom\AllegroSDK\Model;

class OfferRequirements extends \ArrayObject
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
     * The id of the offer that can be associated with this product.
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var list<ProductParameterDto>
     */
    protected $parameters;
    /**
     * The id of the offer that can be associated with this product.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The id of the offer that can be associated with this product.
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
     * 
     *
     * @return list<ProductParameterDto>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<ProductParameterDto> $parameters
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