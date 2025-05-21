<?php

namespace Jlonom\AllegroSDK\Model;

class ResponsibleProducerResponse extends \ArrayObject
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
     * Responsible producer ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Internal name of responsible producer in dictionary.
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible producer data.
     *
     * @var ResponsibleProducerResponseProducerData
     */
    protected $producerData;
    /**
     * Responsible producer ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Responsible producer ID.
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
     * Internal name of responsible producer in dictionary.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Internal name of responsible producer in dictionary.
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
     * Responsible producer data.
     *
     * @return ResponsibleProducerResponseProducerData
     */
    public function getProducerData(): ResponsibleProducerResponseProducerData
    {
        return $this->producerData;
    }
    /**
     * Responsible producer data.
     *
     * @param ResponsibleProducerResponseProducerData $producerData
     *
     * @return self
     */
    public function setProducerData(ResponsibleProducerResponseProducerData $producerData): self
    {
        $this->initialized['producerData'] = true;
        $this->producerData = $producerData;
        return $this;
    }
}