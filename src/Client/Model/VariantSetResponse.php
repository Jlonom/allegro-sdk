<?php

namespace Jlonom\AllegroSDK\Model;

class VariantSetResponse extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var list<VariantSetOffer>
     */
    protected $offers;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var list<VariantSetParameter>
     */
    protected $parameters;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * @return list<VariantSetOffer>
     */
    public function getOffers(): array
    {
        return $this->offers;
    }
    /**
     * 
     *
     * @param list<VariantSetOffer> $offers
     *
     * @return self
     */
    public function setOffers(array $offers): self
    {
        $this->initialized['offers'] = true;
        $this->offers = $offers;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * @return list<VariantSetParameter>
     */
    public function getParameters(): array
    {
        return $this->parameters;
    }
    /**
     * 
     *
     * @param list<VariantSetParameter> $parameters
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