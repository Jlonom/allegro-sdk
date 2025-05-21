<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceResponse extends \ArrayObject
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
     * @var list<Configuration>
     */
    protected $configurations;
    /**
     * 
     *
     * @var BasicDefinitionResponse
     */
    protected $definition;
    /**
     * This is a description provided by merchant while configuring additional service group.
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @return list<Configuration>
     */
    public function getConfigurations(): array
    {
        return $this->configurations;
    }
    /**
     * 
     *
     * @param list<Configuration> $configurations
     *
     * @return self
     */
    public function setConfigurations(array $configurations): self
    {
        $this->initialized['configurations'] = true;
        $this->configurations = $configurations;
        return $this;
    }
    /**
     * 
     *
     * @return BasicDefinitionResponse
     */
    public function getDefinition(): BasicDefinitionResponse
    {
        return $this->definition;
    }
    /**
     * 
     *
     * @param BasicDefinitionResponse $definition
     *
     * @return self
     */
    public function setDefinition(BasicDefinitionResponse $definition): self
    {
        $this->initialized['definition'] = true;
        $this->definition = $definition;
        return $this;
    }
    /**
     * This is a description provided by merchant while configuring additional service group.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * This is a description provided by merchant while configuring additional service group.
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
}