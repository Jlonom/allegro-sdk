<?php

namespace Jlonom\AllegroSDK\Model;

class AutomaticPricingRulePutRequest extends \ArrayObject
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
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var array<string, mixed>|null
     */
    protected $configuration;
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The rule name. Default rule names are automatically translated based on the value provided in the the "Accept-Language" header.
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
     * @return array<string, mixed>|null
     */
    public function getConfiguration(): ?iterable
    {
        return $this->configuration;
    }
    /**
     * 
     *
     * @param array<string, mixed>|null $configuration
     *
     * @return self
     */
    public function setConfiguration(?iterable $configuration): self
    {
        $this->initialized['configuration'] = true;
        $this->configuration = $configuration;
        return $this;
    }
}