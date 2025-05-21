<?php

namespace Jlonom\AllegroSDK\Model;

class ModificationResponsibleProducer extends \ArrayObject
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
    * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
    
    _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
    
    *
    * @var string
    */
    protected $id;
    /**
    * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
    
    _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
    
    *
    * @return string
    */
    public function getId(): string
    {
        return $this->id;
    }
    /**
    * The ID of a responsible producer configured using the <a href="#tag/Responsible-producers">Responsible Producers API</a>.
    
    _Note: if the offer contains multiple products, the responsible producer will only be changed for the first product._
    
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