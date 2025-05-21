<?php

namespace Jlonom\AllegroSDK\Model;

class Coordinates extends \ArrayObject
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
     * @var float
     */
    protected $lat;
    /**
     * 
     *
     * @var float
     */
    protected $lon;
    /**
     * 
     *
     * @return float
     */
    public function getLat(): float
    {
        return $this->lat;
    }
    /**
     * 
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat(float $lat): self
    {
        $this->initialized['lat'] = true;
        $this->lat = $lat;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getLon(): float
    {
        return $this->lon;
    }
    /**
     * 
     *
     * @param float $lon
     *
     * @return self
     */
    public function setLon(float $lon): self
    {
        $this->initialized['lon'] = true;
        $this->lon = $lon;
        return $this;
    }
}