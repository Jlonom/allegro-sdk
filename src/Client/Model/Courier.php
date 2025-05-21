<?php

namespace Jlonom\AllegroSDK\Model;

class Courier extends \ArrayObject
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
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
     *
     * @var string
     */
    protected $id;
    /**
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
     *
     * @var string
     */
    protected $name;
    /**
     * List of tracking numbers.
     *
     * @var list<string>
     */
    protected $trackingNumbers;
    /**
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Supported courier ids are ALLEGRO, DB_SCHENKER, DHL, DPD, DPD_SK, INPOST, ORLEN, POCZTA_POLSKA, SUUS, UPS. If requested courier is not supported then use OTHER value and provide courier name in name field.
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
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * Courier name to be provided only if id is OTHER, otherwise it's ignored.
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
     * List of tracking numbers.
     *
     * @return list<string>
     */
    public function getTrackingNumbers(): array
    {
        return $this->trackingNumbers;
    }
    /**
     * List of tracking numbers.
     *
     * @param list<string> $trackingNumbers
     *
     * @return self
     */
    public function setTrackingNumbers(array $trackingNumbers): self
    {
        $this->initialized['trackingNumbers'] = true;
        $this->trackingNumbers = $trackingNumbers;
        return $this;
    }
}