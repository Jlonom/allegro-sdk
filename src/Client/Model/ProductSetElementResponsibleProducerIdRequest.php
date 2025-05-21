<?php

namespace Jlonom\AllegroSDK\Model;

class ProductSetElementResponsibleProducerIdRequest extends ProductSetElementResponsibleProducerRequest
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
     * ID of responsible producer
     *
     * @var string
     */
    protected $id;
    /**
     * ID of responsible producer
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of responsible producer
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
}