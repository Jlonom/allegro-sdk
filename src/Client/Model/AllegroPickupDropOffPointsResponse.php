<?php

namespace Jlonom\AllegroSDK\Model;

class AllegroPickupDropOffPointsResponse extends \ArrayObject
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
     * List of Allegro pickup drop off points.
     *
     * @var list<AllegroPickupDropOffPoint>
     */
    protected $points;
    /**
     * List of Allegro pickup drop off points.
     *
     * @return list<AllegroPickupDropOffPoint>
     */
    public function getPoints(): array
    {
        return $this->points;
    }
    /**
     * List of Allegro pickup drop off points.
     *
     * @param list<AllegroPickupDropOffPoint> $points
     *
     * @return self
     */
    public function setPoints(array $points): self
    {
        $this->initialized['points'] = true;
        $this->points = $points;
        return $this;
    }
}