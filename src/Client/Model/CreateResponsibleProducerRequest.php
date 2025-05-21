<?php

namespace Jlonom\AllegroSDK\Model;

class CreateResponsibleProducerRequest extends \ArrayObject
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
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @var string
     */
    protected $name;
    /**
     * Responsible producer data.
     *
     * @var CreateResponsibleProducerRequestProducerData
     */
    protected $producerData;
    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Internal name of responsible producer in dictionary (visible only to you). Can't start or end with whitespace. Can't contain whitespaces other than space. Can't contain multiple spaces in a row.
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
     * @return CreateResponsibleProducerRequestProducerData
     */
    public function getProducerData(): CreateResponsibleProducerRequestProducerData
    {
        return $this->producerData;
    }
    /**
     * Responsible producer data.
     *
     * @param CreateResponsibleProducerRequestProducerData $producerData
     *
     * @return self
     */
    public function setProducerData(CreateResponsibleProducerRequestProducerData $producerData): self
    {
        $this->initialized['producerData'] = true;
        $this->producerData = $producerData;
        return $this;
    }
}