<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementResponsibleProducerNameRequest extends ProductSetElementResponsibleProducerRequest
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
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @var string
     */
    protected $name;
    /**
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of responsible producer. **Note:** This refers to the <code>name</code> property and not the <code>producerData.tradeName</code> property of responsible producer defined using <a href="https://developer.allegro.pl/documentation#tag/Responsible-producers">Responsible Producers API</a>.
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
}