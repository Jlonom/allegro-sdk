<?php

namespace Jlonom\AllegroSDK\Model;

class OrdersShippingCarrier extends \ArrayObject
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
    * Identifier of a carrier - unique to every carrier.
    
    It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
    *
    * @var string
    */
    protected $id;
    /**
     * Name of a carrier.
     *
     * @var string
     */
    protected $name;
    /**
    * Identifier of a carrier - unique to every carrier.
    
    It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
    *
    * @return string
    */
    public function getId(): string
    {
        return $this->id;
    }
    /**
    * Identifier of a carrier - unique to every carrier.
    
    It’s highly recommended to use an identifier different from `OTHER`, because its parcel status may be updated automatically. Carrier identifier `OTHER` is reserved for cases when seller uses a custom carrier or not yet integrated with Allegro.
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
     * Name of a carrier.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Name of a carrier.
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