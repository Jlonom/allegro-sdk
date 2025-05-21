<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceRequest extends \ArrayObject
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
     * @var AdditionalServiceDefinitionRequest
     */
    protected $definition;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var list<Configuration>
     */
    protected $configurations;
    /**
     * 
     *
     * @return AdditionalServiceDefinitionRequest
     */
    public function getDefinition(): AdditionalServiceDefinitionRequest
    {
        return $this->definition;
    }
    /**
     * 
     *
     * @param AdditionalServiceDefinitionRequest $definition
     *
     * @return self
     */
    public function setDefinition(AdditionalServiceDefinitionRequest $definition): self
    {
        $this->initialized['definition'] = true;
        $this->definition = $definition;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
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
}