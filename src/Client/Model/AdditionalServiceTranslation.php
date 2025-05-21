<?php

namespace Jlonom\AllegroSDK\Model;

class AdditionalServiceTranslation extends \ArrayObject
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
     * Description of an additional service - provided by merchants and visible by customers.
     *
     * @var string
     */
    protected $description;
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
     * Description of an additional service - provided by merchants and visible by customers.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * Description of an additional service - provided by merchants and visible by customers.
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